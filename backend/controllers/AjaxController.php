<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 2/2/2018
 * Time: 6:02 PM
 */

namespace backend\controllers;

use common\models\Classified;
use common\models\District;
use common\models\Utilities;
use Yii;
use yii\web\Response;
use yii\web\Controller;
use common\models\Album;
use common\models\Category;
use common\models\Image;
use common\models\Post;
use common\models\Product;
use common\models\Supporter;
use common\models\User;
use common\models\Setting;
use common\models\Page;
use common\models\SeoTool;
use common\models\PhotoLocation;
use common\helpers\FunctionHelper;
use common\models\Tab;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * AjaxController
 */
class AjaxController extends Controller
{
    /**
     * @param $action
     *
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    /**
     * @return bool
     */
    public function actionReleased()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['table']) && isset($post['api'])) {
            $model = null;

            switch ($post['table']) {
                case 'page':
                    $model = Page::findOne($post['id']);

                    break;
                case 'photo-location':
                    $model = PhotoLocation::findOne($post['id']);

                    break;
                case 'setting':
                    $model = Setting::findOne($post['id']);

                    break;
                default:
                    break;
            }

            if ($model) {
                $model->released = $model->released ? 0 : 1;

                return $model->save();
            }

        }

        return false;
    }

    /**
     * @return bool
     */
    public function actionEnableColumn()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['table']) && isset($post['api']) && isset($post['column'])) {
            $model = null;

            switch ($post['table']) {
                case 'category':
                    $model = Category::findOne($post['id']);

                    break;
                case 'classified':
                    $model = Classified::findOne($post['id']);

                    break;
                case 'user':
                    $model = User::findOne($post['id']);

                    break;
                case 'post':
                    $model = Post::findOne($post['id']);

                    break;
                case 'tab':
                    $model = Tab::findOne($post['id']);

                    break;
                case 'setting':
                    $model = Setting::findOne($post['id']);

                    break;
                case 'product':
                    $model = Product::findOne($post['id']);
                    break;
                case 'supporter':
                    $model = Supporter::findOne($post['id']);
                    break;
                default:
                    break;
            }

            if ($model) {
                $model[$post['column']] = $model[$post['column']] ? 0 : 1;

                return $model->save();
            }
        }

        return false;
    }

    /**
     * @return bool
     */
    public function actionUploadImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['images']) && isset($post['id']) && isset($post['column_parent_id'])) {
            $images = json_decode($post['images']);

            foreach ($images as $key => $value) {
                $image = new Image();

                $image->title = FunctionHelper::slug($value);
                $image->avatar = '/uploads/advertises/' .$value;
                $image->status = 1;
                $image[$post['column_parent_id']] = $post['id'];

                $image->save();
            }

            return true;

        }

        return false;

    }

    /**
     * @return bool|false|int
     * @throws \Throwable
     */
    public function actionDeleteImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id'])) {
            $image = Image::findOne($post['id']);

            return $image->delete();
        }

        return false;

    }

    /**
     * @return bool
     */
    public function actionSerial()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['serialize'])) {
            $serialize = json_decode($post['serialize']);

            foreach ($serialize as $key => $item) {
                $this->save_serial($item, $key + 1, null);
            }

            return true;
        }

        return false;
    }

    /**
     * @param $item
     * @param $serial
     * @param $parent
     */
    private function save_serial($item, $serial, $parent)
    {
        $array = get_object_vars($item);

        $category = Category::findOne($array['id']);

        $category->serial = $serial;

        $category->parent_id = $parent;

        $category->save();

        if (count($array) == 2) {
            foreach ($array['children'] as $key_c => $item_c) {
                $this->save_serial($item_c, $key_c + 1, $array['id']);
            }
        }
    }

    /**
     * @param $page_id
     */
    public function actionGetCategoriesByPageId($page_id)
    {
        $categories = Category::find()
            ->where(['page_id' => $page_id])
            ->orderBy('id DESC')
            ->all();

        echo "<option value=''>" . Yii::t('backend', '-- Select category --') . "</option>";

        if (!empty($categories)) {
            FunctionHelper::show_categories_select($categories);
        }
    }

    /**
     * @return array|bool|mixed
     */
    public function actionEditColumn()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['name']) && isset($post['pk']) && isset($post['value'])) {
            $table_column = explode('#', $post['name']);

            if (count($table_column) === 2) {
                $table = $table_column[0];
                $column = $table_column[1];

                $model = null;

                switch ($table) {
                    case 'category':
                        $model = Category::findOne($post['pk']);
                        break;
                    case 'classified':
                        $model = Classified::findOne($post['pk']);
                        break;
                    case 'post':
                        $model = Post::findOne($post['pk']);
                        break;
                    case 'setting':
                        $model = Setting::findOne($post['pk']);
                        break;
                    case 'image':
                        $model = Image::findOne($post['pk']);
                        break;
                    case 'supporter':
                        $model = Supporter::findOne($post['pk']);
                        break;
                    case 'utilities':
                        $model = Utilities::findOne($post['pk']);
                        break;
                    case 'tab':
                        $model = Tab::findOne($post['pk']);
                        break;
                    default:
                        break;
                }

                if ($model) {
                    $model[$column] = $post['value'];

                    return $model->save();
                }

            }
        }

        return $post;
    }

    /**
     * @return array|bool
     */
    public function actionGetProductById()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id'])) {
            $product = Product::find()->joinWith('images0')->where([
                '=',
                'product.id',
                $post['id']
            ])->asArray()->one();

            if ($product) {
                $albums = Album::find()->joinWith('images')->where([
                    '=',
                    'album.product_id',
                    $post['id']
                ])->asArray()->all();

                return [$product, $albums];
            }
        }

        return false;
    }

    /**
     * @return bool|null|object
     */
    public function actionGetContentImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id'])) {
            $image = Image::findOne($post['id']);

            return $image;
        }

        return false;
    }

    public function actionGetDistrictByProvince()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();
        if (isset($post['province'])) {
            if (($post['province']) != '') {
                $district = District::find()->where(['province_id' => $post['province']]);
                return $district->all();
            }
        }
        return false;

    }

    public function actionGetDistrictByProvinceId($province_id)
    {
        $districts = District::find()
            ->where(['province_id' => $province_id])
            ->orderBy('id DESC')
            ->all();
        echo "<option value=''>" . Yii::t('app', '-- Chọn Huyện --') . "</option>";
        foreach ($districts as $key => $value):
            echo "<option value=" . $value['id'] . ">" . $value['ten'] . "</option>";
        endforeach;
    }

    public function actionEditContentImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['content'])) {
            $image = Image::findOne($post['id']);

            $image->content = $post['content'];

            return $image->save();
        }

        return false;
    }

    /**
     * @return bool|string
     */
    public function actionChangePassword()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (!Yii::$app->user->isGuest) {
            if (isset($post['password_old']) && isset($post['password']) && isset($post['re_password'])) {

                $user = User::findOne(Yii::$app->user->identity->getId());

                if ($user) {
                    if (Yii::$app->security->validatePassword($post['password_old'], $user->password_hash)) {
                        if ($post['password'] == $post['re_password']) {
                            if (strlen($post['password']) >= 6) {
                                $user->setPassword($post['password']);

                                return $user->save();
                            } else {
                                return 'Mật khẩu mới nhỏ hơn 6 kí tự';
                            }
                        } else {
                            return 'Mật khẩu mới không giống nhau';
                        }
                    } else {
                        return 'Mật khẩu cũ không đúng';
                    }
                }
            }
        }

        return false;
    }

    /**
     * @return bool
     */
    public function actionUpdatePost()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['title']) && isset($post['category_id']) && isset($post['avatar']) && isset($post['featured']) && isset($post['display_homepage']) && isset($post['seo_title']) && isset($post['meta_keywords']) && isset($post['meta_description'])) {
            $post_find = Post::findOne($post['id']);

            $post_find->title = $post['title'];
            $post_find->category_id = (int)$post['category_id'];
            $post_find->avatar = $post['avatar'];
            $post_find->featured = $post['featured'];
            $post_find->display_homepage = $post['display_homepage'];

            if ($post_find->save()) {
                $seo = SeoTool::findOne($post_find->seo_tool_id);

                $seo->seo_title = $post['seo_title'];
                $seo->meta_keywords = $post['meta_keywords'];
                $seo->meta_description = $post['meta_description'];
                $seo->save();

                return true;
            }
        }

        return false;
    }

    public function actionSendMail()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['title']) && isset($post['email_root']) && isset($post['name_root']) && isset($post['email_guest']) && isset($post['name_guest']) && isset($post['content'])) {
            $mail = new PHPMailer(true);

            $mail->CharSet = 'UTF-8';

            $mail->isSMTP();

            $mail->SMTPDebug = 0;

            $mail->Host = 'smtp.gmail.com';

            $mail->Port = 587;

            $mail->SMTPSecure = 'tls';

            $mail->SMTPAuth = true;

            $mail->Username = "cskhtigerweb@gmail.com";

            $mail->Password = "270295thai";

            $mail->setFrom('cskhtigerweb@gmail.com', 'TIGERWEB.VN');

            $mail->addReplyTo($post['email_guest'], $post['name_guest']);

            $mail->addAddress($post['email_root'], $post['name_root']);

            $mail->Subject = $post['title'];

            $mail->msgHTML($post['content']);

            $mail->AltBody = 'This is a plain-text message body';

            if ($mail->send()) {
                return true;
            }
        }
        return false;
    }

    public function actionCountView($id, $view)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $new_post = Classified::findOne($id);
        $new_post->views = $view;
        return $new_post->save();
    }

    public function actionCountViewByPost($id, $view)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $new_post = Post::findOne($id);
        $new_post->views = $view;
        return $new_post->save();
    }


}