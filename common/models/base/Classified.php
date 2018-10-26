<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "classified".
 *
 * @property int $id
 * @property string $title
 * @property string $path
 * @property string $avatar
 * @property int $seo_tool_id
 * @property int $serial
 * @property int $category_id
 * @property int $category_classified_id
 * @property string $slug
 * @property string $describe
 * @property string $content
 * @property string $acreage
 * @property int $views
 * @property double $price
 * @property int $province_id
 * @property int $district_id
 * @property string $start_date
 * @property string $expiration_date
 * @property int $status
 * @property int $ad_type_id
 * @property int $unit_id
 * @property int $project_id
 * @property int $exigency_id
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $address
 * @property string $contacts
 * @property string $contact_name
 * @property string $images
 * @property int $display_homepage
 * @property int $featured
 * @property int $room_number
 * @property string $direction
 *
 * @property AdType $adType
 * @property Category $category
 * @property CategoryClassified $categoryClassified
 * @property District $district
 * @property Exigency $exigency
 * @property Project $project
 * @property Province $province
 * @property SeoTool $seoTool
 * @property Unit $unit
 * @property Image[] $images0
 * @property Tab[] $tabs
 */
class Classified extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classified';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['seo_tool_id', 'serial', 'category_id', 'category_classified_id', 'views', 'province_id', 'district_id', 'status', 'ad_type_id', 'unit_id', 'project_id', 'exigency_id', 'display_homepage', 'featured', 'room_number'], 'integer'],
            [['describe', 'content', 'images'], 'string'],
            [['price'], 'number'],
            [['start_date', 'expiration_date'], 'safe'],
            [['title', 'path', 'avatar', 'slug', 'acreage', 'email', 'phone', 'mobile', 'address', 'contacts', 'contact_name', 'direction'], 'string', 'max' => 255],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['category_classified_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryClassified::className(), 'targetAttribute' => ['category_classified_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['exigency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exigency::className(), 'targetAttribute' => ['exigency_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
            [['seo_tool_id'], 'exist', 'skipOnError' => true, 'targetClass' => SeoTool::className(), 'targetAttribute' => ['seo_tool_id' => 'id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'path' => 'Path',
            'avatar' => 'Avatar',
            'seo_tool_id' => 'Seo Tool ID',
            'serial' => 'Serial',
            'category_id' => 'Category ID',
            'category_classified_id' => 'Category Classified ID',
            'slug' => 'Slug',
            'describe' => 'Describe',
            'content' => 'Content',
            'acreage' => 'Acreage',
            'views' => 'Views',
            'price' => 'Price',
            'province_id' => 'Province ID',
            'district_id' => 'District ID',
            'start_date' => 'Start Date',
            'expiration_date' => 'Expiration Date',
            'status' => 'Status',
            'ad_type_id' => 'Ad Type ID',
            'unit_id' => 'Unit ID',
            'project_id' => 'Project ID',
            'exigency_id' => 'Exigency ID',
            'email' => 'Email',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'contacts' => 'Contacts',
            'contact_name' => 'Contact Name',
            'images' => 'Images',
            'display_homepage' => 'Display Homepage',
            'featured' => 'Featured',
            'room_number' => 'Room Number',
            'direction' => 'Direction',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdType()
    {
        return $this->hasOne(AdType::className(), ['id' => 'ad_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryClassified()
    {
        return $this->hasOne(CategoryClassified::className(), ['id' => 'category_classified_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExigency()
    {
        return $this->hasOne(Exigency::className(), ['id' => 'exigency_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
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
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages0()
    {
        return $this->hasMany(Image::className(), ['classified_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabs()
    {
        return $this->hasMany(Tab::className(), ['classified_id' => 'id']);
    }
}
