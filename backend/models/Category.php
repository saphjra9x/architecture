<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property string $avatar
 * @property string $describe
 * @property int $serial
 * @property int $parent_id
 * @property string $content
 * @property int $page_id
 * @property int $display_homepage
 * @property int $featured
 * @property int $status
 * @property int $seo_tool_id
 * @property string $slug
 * @property string $key
 * @property string $code
 * @property string $link
 * @property string $images
 * @property int $example
 * @property string $icon
 *
 * @property Album[] $albums
 * @property Page $page
 * @property Category $parent
 * @property Category[] $categories
 * @property SeoTool $seoTool
 * @property Classified[] $classifieds
 * @property Image[] $images0
 * @property Post[] $posts
 * @property Product[] $products
 * @property Tab[] $tabs
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'page_id'], 'required'],
            [['describe', 'content', 'code', 'images'], 'string'],
            [['serial', 'parent_id', 'page_id', 'display_homepage', 'featured', 'status', 'seo_tool_id', 'example'], 'integer'],
            [['title', 'avatar', 'slug', 'key', 'link', 'icon'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['seo_tool_id'], 'exist', 'skipOnError' => true, 'targetClass' => SeoTool::className(), 'targetAttribute' => ['seo_tool_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'avatar' => Yii::t('app', 'Avatar'),
            'describe' => Yii::t('app', 'Describe'),
            'serial' => Yii::t('app', 'Serial'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'content' => Yii::t('app', 'Content'),
            'page_id' => Yii::t('app', 'Page ID'),
            'display_homepage' => Yii::t('app', 'Display Homepage'),
            'featured' => Yii::t('app', 'Featured'),
            'status' => Yii::t('app', 'Status'),
            'seo_tool_id' => Yii::t('app', 'Seo Tool ID'),
            'slug' => Yii::t('app', 'Slug'),
            'key' => Yii::t('app', 'Key'),
            'code' => Yii::t('app', 'Code'),
            'link' => Yii::t('app', 'Link'),
            'images' => Yii::t('app', 'Images'),
            'example' => Yii::t('app', 'Example'),
            'icon' => Yii::t('app', 'Icon'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbums()
    {
        return $this->hasMany(Album::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeoTool()
    {
        return $this->hasOne(SeoTool::className(), ['id' => 'seo_tool_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassifieds()
    {
        return $this->hasMany(Classified::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages0()
    {
        return $this->hasMany(Image::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabs()
    {
        return $this->hasMany(Tab::className(), ['category_id' => 'id']);
    }
}