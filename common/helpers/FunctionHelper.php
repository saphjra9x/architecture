<?php

namespace common\helpers;


use common\models\base\Exigency;
use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\Tab;
use common\models\Post;
use common\models\Page;
use common\models\Image;
use common\models\Product;
use common\models\Setting;
use common\models\CategoryClassified;
use common\models\Unit;
use common\models\User;
use common\models\base\Project;
use common\models\District;
use common\models\Province;
use common\models\Category;
use common\models\Supporter;
use common\models\Utilities;
use common\models\Classified;
use common\models\PhotoLocation;
use fproject\components\DbHelper;
use yii\web\BadRequestHttpException;
use common\models\GeneralInformation;
use PhpOffice\PhpSpreadsheet\IOFactory;
use yii\data\Pagination;
use common\models\base\TypeOfConstruction;
use common\models\base\Position;
use common\models\base\Style;
use common\models\base\CategoryProject;

class FunctionHelper
{

    /**
     * @param $str
     *
     * @return mixed|string
     */
    public static function slug($str)
    {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);

        return $str;
    }

    /**
     * @param $file
     */
    public static function download($file)
    {
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }

    /**
     * @param int $display_homepage
     * @param int $featured
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_categories($display_homepage = 0, $featured = 0)
    {
        $query = Category::find()
            ->joinWith('page')
            ->joinWith('seoTool')
            ->joinWith('posts')
            ->joinWith('products')
            ->joinWith('albums')
            ->where([' = ', 'category.status', 1]);

        $query->andWhere(['=', 'category.display_homepage', $display_homepage]);
        $query->andWhere(['=', 'category.featured', $featured]);

        return $query->all();
    }

    public $categories_id = [];

    /**
     * @param $categories
     * @param $category_id
     *
     * @return array
     */
    public function get_all_categories_id_children($categories, $category_id)
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $category_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }

        if ($cate_child) {
            foreach ($cate_child as $key => $item) {
                $this->categories_id[] = $item['id'];
                FunctionHelper::get_all_categories_id_children($categories, $item['id']);
            }
        }

        return $this->categories_id;
    }

    public static function import_data_excel($table, $attributes, $file, $start, $end)
    {
        ini_set('memory_limit', '-1');
        set_time_limit(1200);
        $inputFileName = $file;

        if (!file_exists($inputFileName)) {
            throw new BadRequestHttpException('File doesn\'t exists.');
        }

        $inputFileName = $file;

        $spreadsheet = IOFactory::load($inputFileName);

        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        $data = [];
        foreach ($sheetData as $key => $value) {
            if ($key >= $start && $key <= $end) {
                $row = [];
                foreach ($attributes as $key_att => $value_att) {
                    $row[$value_att] = $value[$key_att];
                }
                $data[] = $row;
            }
        }

        DbHelper::insertMultiple($table, $data);

    }

    /**
     * @param $slug
     * @param int $display_homepage
     * @param int $featured
     *
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_category($slug, $display_homepage = 0, $featured = 0)
    {
        $query = Category::find()
            ->joinWith('page')
            ->joinWith('seoTool')
            ->joinWith('posts')
            ->joinWith('products')
            ->joinWith('albums')
            ->where(['=', 'category.status', 1])
            ->andWhere(['=', 'category.slug', $slug]);

        $query->andWhere(['=', 'display_homepage', $display_homepage]);
        $query->andWhere(['=', 'featured', $featured]);

        return $query->one();
    }

    /**
     * @param null $parent_id
     * @param null $limit
     * @param int $display_homepage
     * @param int $featured
     *
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_categories_by_parent_id($parent_id = null, $limit = null, $display_homepage = 0, $featured = 0)
    {
        $query = Category::find()
            ->joinWith('page')
            ->joinWith('seoTool')
            ->joinWith('posts')
            ->joinWith('products')
            ->joinWith('albums')
            ->where(['=', 'category.status', 1]);

        if ($parent_id) {
            $query->andWhere(['=', 'category.parent_id', $parent_id]);
        } else {
            $query->andWhere(['is', 'category.parent_id', null]);
        }

        $query->andWhere(['=', 'category.display_homepage', $display_homepage]);
        $query->andWhere(['=', 'category.featured', $featured]);

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->orderBy('serial ASC')->all();
    }

    /**
     * @param null $parent_id
     * @param null $limit
     * @param int $display_homepage
     * @param int $featured
     * @return array
     */
    public static function get_categories_by_parent_id_and_paging($parent_id = null, $limit = null, $display_homepage = 0, $featured = 0)
    {
        $query = Category::find()
            ->joinWith('page')
            ->joinWith('seoTool')
            ->joinWith('posts')
            ->joinWith('products')
            ->joinWith('albums')
            ->where(['=', 'category.status', 1]);

        if ($parent_id) {
            $query->andWhere(['=', 'category.parent_id', $parent_id]);
        } else {
            $query->andWhere(['is', 'category.parent_id', null]);
        }

        $query->andWhere(['=', 'category.display_homepage', $display_homepage]);
        $query->andWhere(['=', 'category.featured', $featured]);

        if ($limit) {
            $query->limit($limit);
        }
        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);

        $result = $query->offset($pagination->offset)->limit($pagination->limit)
            ->orderBy('serial DESC')
            ->asArray()->all();

        return [
            'result' => $result,
            'pages' => $pagination,
        ];
    }

    /**
     * @param $page_key
     * @param null $limit
     * @param null $display_homepage
     * @param null $featured
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_categories_by_page_key($page_key, $limit = null, $display_homepage = null, $featured = null)
    {
        $page = Page::find()->where(['=', 'key', $page_key])->one();

        $query = Category::find()
            ->joinWith('page')
            ->joinWith('seoTool')
            ->joinWith('posts')
            ->joinWith('products')
            ->joinWith('albums')
            ->where(['=', 'category.status', '1'])
            ->andWhere(['=', 'category.page_id', $page['id']]);

        if ($display_homepage) {
            $query->andWhere(['=', 'category.display_homepage', $display_homepage]);
        }

        if ($featured) {
            $query->andWhere(['=', 'category.featured', $featured]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }


    /**
     * @param $slug
     *
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_category_by_slug($slug)
    {
        $query = Category::find()
            ->joinWith('page')
            ->joinWith('seoTool')
            ->joinWith('posts')
            ->joinWith('products')
            ->joinWith('albums')
            ->where(['=', 'category.slug', $slug]);

        return $query->one();
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_provinces()
    {
        $provinces = Province::find()->all();

        return $provinces;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_districts()
    {
        $districts = District::find()->all();

        return $districts;
    }

    /**
     * @param $province_id
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_districts_by_province_id($province_id)
    {
        $districts = District::find()->where(['province_id' => $province_id])->all();

        return $districts;
    }

    /**
     * @param $categories
     * @param int $parent_id
     */
    public static function show_categories_nestable($categories, $parent_id = 0)
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {
            echo '<ol class="dd-list">';
            foreach ($cate_child as $key => $item) {
                echo '<li class="dd-item" data-id="' . $item['id'] . '"><div class="dd-handle">' . $item['title'] . '</div > ';
                FunctionHelper::show_categories_nestable($categories, $item['id']);
                echo '</li>';
            }
            echo '</ol>';
        }
    }

    /**
     * @param $utilities
     * @param int $parent_id
     */
    public static function show_utilities_nestable($utilities, $parent_id = 0)
    {
        $cate_child = array();
        foreach ($utilities as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($utilities[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {
            echo '<ol class="dd-list">';
            foreach ($cate_child as $key => $item) {
                echo '<li class="dd-item" data-id="' . $item['id'] . '"><div class="dd-handle">' . $item['title'] . '</div > ';
                FunctionHelper::show_utilities_nestable($utilities, $item['id']);
                echo '</li>';
            }
            echo '</ol>';
        }
    }

    /**
     * @param $categories
     * @param $selected
     * @param int $parent_id
     * @param string $serial
     */
    public static function show_categories_select($categories, $selected = null, $parent_id = 0, $serial = '')
    {

        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {

            foreach ($cate_child as $key => $item) {
                echo '<option ' . ($selected == $item['id'] ? 'selected="selected"' : '') . ' value="' . $item['id'] . '">';
                echo $serial . $item['serial'] . ' ' . $item['title'];
                echo '</option>';
                FunctionHelper::show_categories_select($categories, $selected, $item['id'], $item['serial'] . $serial . '.');
            }
        }
    }

    /**
     * @param $categories
     * @param int $parent_id
     * @param string $serial
     */
    public static function show_categories_table($categories, $parent_id = 0, $serial = '')
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {
            foreach ($cate_child as $key => $item) {
                $dot = $serial == '' ? $item['serial'] : $serial . '.' . $item['serial'];
                echo '<tr>';
                echo '<td>';
                echo '<input title="" data-id="' . $item['id'] . '" type="checkbox" class="minimal">';
                echo '</td>';
                echo '<td>' . $dot . '</td>';
                echo '<td><a href="' . Url::to(['tab', 'id' => $item['id']]) . '" class="editable" data-name="category#title" data-type="text"
                                               data-pk="' . $item['id'] . '" data-title="Nhập tiêu đề" data-url="' . Url::to(['ajax/edit-column']) . '">' . $item['title'] . '</a></td>';
                echo '<td>' . $item['page']['title'] . '</td>';
                echo '<td>';
                echo '<div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-mini" style="border:none">';
                echo '<input data-id="' . $item['id'] . '" data-api="ajax/enable-column" data-column="status" data-table="category" type="checkbox" ' . ($item['status'] ? 'checked="checked"' : '') . ' title="" name="switch-checkbox">';
                echo '</div></td>';
                echo '<td class="text-center"><div class="table-actions"><a class="btn btn-icon btn-sm btn-primary tip" href="' . Url::to([
                        'category/update',
                        'id' => $item['id']
                    ]) . '"><i class="fa fa-edit"></i></a>' .
                    Html::a(Yii::t('backend', '<i class="fa fa-trash-o"></i>'), ['delete', 'id' => $item->id], [
                        'class' => 'btn btn-icon btn-sm btn-danger tip',
                        'data' => [
                            'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                        ],
                    ]) . '</div></td>';
                echo '</tr> ';
                FunctionHelper::show_categories_table($categories, $item['id'], $dot);
            }
        }
    }

    /**
     * @param $utilities
     * @param int $parent_id
     * @param string $serial
     */
    public static function show_utilities_table($utilities, $parent_id = 0, $serial = '')
    {
        $cate_child = array();
        foreach ($utilities as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($utilities[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {
            foreach ($cate_child as $key => $item) {
                $dot = $serial == '' ? $item['serial'] : $serial . '.' . $item['serial'];
                echo '<tr>';
                echo '<td>';
                echo '<input title="" data-id="' . $item['id'] . '" type="checkbox" class="minimal">';
                echo '</td>';
                echo '<td>' . $dot . '</td>';
                echo '<td>' . $item['icon'] . '</td>';
                echo '<td><a href="#" class="editable" data-name="utilities#title" data-type="text"
                                               data-pk="' . $item['id'] . '" data-title="Nhập tiêu đề" data-url="' . Url::to(['ajax/edit-column']) . '">' . $item['title'] . '</a></td>';
                echo '<td>' . ($item['permission'] == User::ROLE_SENIOR ? 'Cao cấp' : 'Mọi người') . '</td>';
                echo '<td>';
                echo '<div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-mini" style="border:none">';
                echo '<input data-id="' . $item['id'] . '" data-api="ajax/enable-column" data-column="status" data-table="category" type="checkbox" ' . ($item['status'] ? 'checked="checked"' : '') . ' title="" name="switch-checkbox">';
                echo '</div></td>';
                echo '<td class="text-center"><div class="table-actions"><a class="btn btn-icon btn-sm btn-primary tip" href="' . Url::to([
                        'category/update',
                        'id' => $item['id']
                    ]) . '"><i class="fa fa-edit"></i></a>' .
                    Html::a(Yii::t('backend', '<i class="fa fa-trash-o"></i>'), ['delete', 'id' => $item->id], [
                        'class' => 'btn btn-icon btn-sm btn-danger tip',
                        'data' => [
                            'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                        ],
                    ]) . '</div></td>';
                echo '</tr> ';
                FunctionHelper::show_utilities_table($utilities, $item['id'], $dot);
            }
        }
    }

    /**
     * @param $utilities
     */
    public static function show_utilities_menu($utilities)
    {

        usort($utilities, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        foreach ($utilities as $key => $item) {

            $util_child = FunctionHelper::get_utilities_by_parent_id(null, $item['id']);

            usort($util_child, function ($a, $b) {
                return $a['serial'] > $b['serial'];
            });

            if ($util_child) {
                echo '<li class="nav-item has-ul">';
                echo '<a href="" class="nav-link nav-toggle">';
                echo '<i class="' . $item['icon'] . '"></i >';
                echo '<span class="title" >' . $item['title'] . '</span>';
                echo '<span class="arrow"></span>';
                echo '</a>';
                echo '<ul class="sub-menu hidden-ul">';
                foreach ($util_child as $key_child => $item_child) {
                    echo '<li class="nav-item">';
                    echo '<a href="' . Url::to([$item_child['path']]) . '" class="nav-link">';
                    echo '<i class="' . $item_child['icon'] . '"></i >';
                    echo '<span class="title"> ' . $item_child['title'] . '</span>';
                    echo '</a>';
                    echo ' </li>';
                }
                echo '</ul>';
                echo '</li>';
            } else {
                echo '<li class="nav-item">';
                echo '<a href="' . Url::to([$item['path']]) . '" class="nav-link nav-toggle">';
                echo '<i class="' . $item['icon'] . '"></i >';
                echo '<span class="title">' . $item['title'] . '</span>';
                echo '</a>';
                echo ' </li>';
            }
        }
    }

    /**
     * @param null $parent_id
     * @param null $permission
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_utilities_by_parent_id($permission = null, $parent_id = null)
    {
        $query = Utilities::find();

        if ($parent_id) {
            $query->where(['parent_id' => $parent_id]);
        } else {
            $query->where(['is', 'parent_id', null]);
        }

        if ($permission) {
            $query->andWhere(['=', 'permission', $permission]);
        }

        $utilities = $query->all();

        return $utilities;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_category_of_project()
    {
        $query = CategoryProject::find()->where(['status' => 1])->asArray()->all();
        return $query;
    }

    public static function get_type_of_construction()
    {
        $query = TypeOfConstruction::find()->where(['status' => 1])->asArray()->all();
        return $query;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_style()
    {
        $query = Style::find()->where(['status' => 1])->asArray()->all();
        return $query;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_units()
    {
        $query = Unit::find()->asArray()->all();
        return $query;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_category_classifieds()
    {
        $query = CategoryClassified::find()->asArray()->all();
        return $query;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_projects_of_user()
    {
        $query = Project::find()->asArray()->all();
        return $query;
    }

    /**
     * @param $unit_id
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_unit_by_id($unit_id)
    {
        $query = Unit::find()->where(['id' => $unit_id])->one();
        return $query;
    }

    /**
     * @param $categories
     * @param int $parent_id
     * @param string $serial
     */
    public static function show_categories_of_post_table($categories, $parent_id = 0, $serial = '')
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {
            foreach ($cate_child as $key => $item) {
                echo '<tr>';
                echo '<td>' . ($serial == '' ? $serial : $serial . '.') . $item['serial'] . '</td>';
                echo '<td><a href="' . Url::to([
                        'post/post-of-category',
                        'category_slug' => $item['slug']
                    ]) . '">' . $item['title'] . '</a></td>';
                echo '<td>' . $item['code'] . '</td>';
                echo '</tr> ';
                FunctionHelper::show_categories_of_post_table($categories, $item['id'], ($serial == '' ? $serial : $serial . '.') . $item['serial']);
            }
        }

    }

    /**
     * @param null $limit
     * @param null $display_homepage
     * @param null $featured
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_posts($limit = null, $display_homepage = null, $featured = null)
    {
        $query = Post::find()
            ->joinWith('category')
            ->joinWith('seoTool')
            ->joinWith('images0')
            ->joinWith('albums')
            ->where([' = ', 'post.status', 1]);

        if ($display_homepage) {
            $query->andWhere([' = ', 'post.display_homepage', $display_homepage]);
        }

        if ($featured) {
            $query->andWhere([' = ', 'post.featured', $featured]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param $slug
     *
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_post_by_slug($slug)
    {
        $query = Post::find()
            ->joinWith('category')
            ->joinWith('seoTool')
            ->joinWith('images0')
            ->joinWith('albums')
            ->where(['=', 'post.status', 1])
            ->andWhere(['=', 'post.slug', $slug]);

        return $query->one();
    }

    /**
     * @param $category_slug
     * @param null $limit
     * @param null $display_homepage
     * @param null $featured
     *
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_post_by_category_slug($category_slug, $limit = null, $display_homepage = null, $featured = null)
    {
        $category = Category::find()->where(['slug' => $category_slug])->one();

        $query = Post::find()
            ->joinWith('category')
            ->joinWith('seoTool')
            ->joinWith('images0')
            ->joinWith('albums')
            ->where(['post.status' => 1])
            ->andWhere(['post.category_id' => $category['id']]);

        if ($display_homepage) {
            $query->andWhere(['post.display_homepage' => $display_homepage]);
        }

        if ($featured) {
            $query->andWhere(['post.featured' => $featured]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->orderBy('id DESC')->all();
    }

    /**
     * @param null $limit
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_post_by_views($limit = null)
    {
        $query = Post::find()
            ->joinWith('category')
            ->where(['post.status' => 1]);
        if ($limit) {
            $query->limit($limit);
        }
        return $limit == 1 ? $query->one() : $query->orderBy('views DESC')->all();
    }

    /**
     * @param null $limit
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_posts_by_id_desc($limit = null)
    {
        $query = Post::find()
            ->joinWith('category')
            ->where(['post.status' => 1]);
        if ($limit) {
            $query->limit($limit);
        }
        return $limit == 1 ? $query->one() : $query->orderBy('id DESC')->all();
    }

    /**
     * @param null $display_homepage
     * @param null $featured
     */
    public static function get_classifieds($display_homepage = null, $featured = null)
    {

    }

    /**
     * @param null $limit
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */

    public static function get_classifieds_by_views($limit = null)
    {
        $query = Classified::find()
            ->joinWith('category')
            ->where(['classified.status' => 1]);
        if ($limit) {
            $query->limit($limit);
        }
        return $limit == 1 ? $query->one() : $query->orderBy('views DESC')->all();
    }

    /**
     * @param null $limit
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_classifieds_by_id_desc($limit = null)
    {
        $query = Classified::find()
            ->joinWith('category')
            ->where(['classified.status' => 1]);
        if ($limit) {
            $query->limit($limit);
        }
        return $limit == 1 ? $query->one() : $query->orderBy('id DESC')->all();
    }

    /**
     * @param $slug
     *
     * @return \yii\db\ActiveQuery
     */
    public static function get_classified_by_slug($slug)
    {
        $classified = Classified::find()
            ->joinWith('category')
            ->where(['classified.status' => 1])
            ->andWhere(['classified.slug' => $slug]);

        return $classified->one();
    }

    /**
     * @param $category_slug
     * @param null $limit
     * @param null $display_homepage
     * @param null $featured
     *
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_classifieds_by_category_slug($category_slug, $limit = null, $display_homepage = null, $featured = null)
    {
        $category = Category::find()->where(['slug' => $category_slug])->one();

        $query = Classified::find()
            ->joinWith('unit')
            ->where(['classified.status' => 1])
            ->andWhere(['classified.category_id' => $category['id']]);

        if ($display_homepage) {
            $query->andWhere(['classified.display_homepage' => $display_homepage]);
        }

        if ($featured) {
            $query->andWhere(['classified.featured' => $featured]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param int $limit
     * @param int $display_homepage
     * @param int $featured
     *
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_products($limit = null, $display_homepage = 0, $featured = 0)
    {
        $query = Product::find()
            ->joinWith('category')
            ->joinWith('seoTool')
            ->joinWith('albums')
            ->joinWith('orderDetails')
            ->joinWith('images0')
            ->joinWith('user')
            ->where(['=', 'product.status', 1]);

        if ($display_homepage) {
            $query->andWhere(['=', 'product.display_homepage', $display_homepage]);
        }

        if ($featured) {
            $query->andWhere(['=', 'product.featured', $featured]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param $slug
     *
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_product($slug)
    {
        return Product::find()->joinWith('category')
            ->joinWith('seoTool')
            ->joinWith('albums')
            ->joinWith('orderDetails')
            ->joinWith('images0')
            ->joinWith('user')
            ->where(['product.slug' => $slug])->one();
    }

    /**
     * @param $category_slug
     * @param null $limit
     * @param null $display_homepage
     * @param null $featured
     *
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_products_by_category_slug($category_slug, $limit = null, $display_homepage = null, $featured = null)
    {
        $category = Category::find()->where(['slug' => $category_slug])->one();

        $query = Product::find()
            ->joinWith('category')
            ->joinWith('seoTool')
            ->joinWith('albums')
            ->joinWith('orderDetails')
            ->joinWith('images0')
            ->joinWith('user')
            ->where(['product.status' => 1])
            ->andWhere(['product.category_id' => $category['id']]);

        if ($display_homepage) {
            $query->andWhere(['display_homepage' => $display_homepage]);
        }

        if ($display_homepage) {
            $query->andWhere(['featured' => $featured]);
        }

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param $photo_location_key
     * @param null $limit
     *
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */
    public static function get_images_by_photo_location_key($photo_location_key, $limit = null)
    {
        $photo_location = PhotoLocation::find()->where(['=', 'key', $photo_location_key])->one();

        $query = Image::find()
            ->where(['=', 'image.status', 1])
            ->andWhere(['=', 'image.photo_location_id', $photo_location['id']]);

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param $key
     *
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_setting_by_key($key)
    {
        $query = Setting::find()
            ->where(['=', 'setting.status', 1])
            ->andWhere(['=', 'setting.key', $key]);

        return $query->one();
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function get_supporter()
    {
        return Supporter::find()->where(['status' => 1])->all();
    }

    /**
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_general_information()
    {
        return GeneralInformation::find()->one();
    }

    /**
     * @param $setting_id
     * @param null $limit
     *
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_tab_by_setting_id($setting_id, $limit = null)
    {
        $query = Tab::find()
            ->where(['=', 'tab.status', 1])
            ->andWhere(['=', 'tab.setting_id', $setting_id]);

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    public static function get_tab_by_category_id($category_id, $limit = null)
    {
        $query = Tab::find()
            ->joinWith('images0')
            ->where(['=', 'tab.status', 1])
            ->andWhere(['=', 'tab.category_id', $category_id]);

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param $id
     * @param null $limit
     * @param $post_id
     * @return array|null|\yii\db\ActiveRecord|\yii\db\ActiveRecord[]
     */

    public static function get_tab_by_post_id($post_id, $limit = null)
    {
        $query = Tab::find()
            ->where(['=', 'tab.status', 0])
            ->andWhere(['=', 'tab.post_id', $post_id]);

        if ($limit) {
            $query->limit($limit);
        }

        return $limit == 1 ? $query->one() : $query->all();
    }

    /**
     * @param $serial
     *
     * @return array|null|\yii\db\ActiveRecord
     */
    public static function get_category_by_serial($serial)
    {
        return Category::find()->where(['serial' => $serial])->one();
    }

    /**
     * @param $link
     * @param null $width
     * @param null $height
     * @param string $unit
     *
     * @return string
     */
    public static function get_frame_youtube_form_link($link, $width = null, $height = null, $unit = 'px')
    {

        $width = !$width ? '500px' : $width . $unit;
        $height = !$height ? '315px' : $height . 'px';

        $v = explode('?v=', $link);

        $frame = '<iframe width="' . $width . '" height="' . $height . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen src="https://www.youtube.com/embed/' . $v[1] . '"';

        $frame .= '></iframe>';

        return $frame;
    }

    /**
     * @param $fan_page
     *
     * @return string
     */
    public static function get_frame_facebook_form_link($fan_page)
    {

        $frame = '<div class="fb-page" data-href="' . $fan_page . '" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">';

        $frame .= '</div>';

        return $frame;
    }

}