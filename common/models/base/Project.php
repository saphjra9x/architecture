<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property int $user_id
 * @property int $serial
 * @property string $avatar
 * @property string $describe
 * @property string $content
 * @property double $design_area
 * @property double $area_of_land
 * @property int $type_of_construction_id
 * @property string $year_of_design
 * @property string $year_completed
 * @property int $style_id
 * @property int $floor
 * @property string $address
 * @property string $investor
 * @property int $display_homepage
 * @property int $status
 * @property int $featured
 * @property int $seo_tool_id
 * @property string $slug
 * @property string $created_at
 * @property int $views
 * @property string $images
 * @property string $code
 * @property int $province_id
 * @property int $district_id
 * @property int $commune_id
 * @property int $category_project_id
 * @property double $price
 * @property int $unit_id
 * @property int $position_id
 *
 * @property Classified[] $classifieds
 * @property Image[] $images0
 * @property CategoryProject $categoryProject
 * @property Commune $commune
 * @property District $district
 * @property Position $position
 * @property Province $province
 * @property Style $style
 * @property TypeOfConstruction $typeOfConstruction
 * @property Unit $unit
 * @property User $user
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'user_id'], 'required'],
            [['category_id', 'user_id', 'serial', 'type_of_construction_id', 'style_id', 'floor', 'display_homepage', 'status', 'featured', 'seo_tool_id', 'views', 'province_id', 'district_id', 'commune_id', 'category_project_id', 'unit_id', 'position_id'], 'integer'],
            [['describe', 'content', 'images', 'code'], 'string'],
            [['design_area', 'area_of_land', 'price'], 'number'],
            [['created_at'], 'safe'],
            [['title', 'avatar', 'year_of_design', 'year_completed', 'address', 'investor', 'slug'], 'string', 'max' => 255],
            [['category_project_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryProject::className(), 'targetAttribute' => ['category_project_id' => 'id']],
            [['commune_id'], 'exist', 'skipOnError' => true, 'targetClass' => Commune::className(), 'targetAttribute' => ['commune_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
            [['style_id'], 'exist', 'skipOnError' => true, 'targetClass' => Style::className(), 'targetAttribute' => ['style_id' => 'id']],
            [['type_of_construction_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeOfConstruction::className(), 'targetAttribute' => ['type_of_construction_id' => 'id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'serial' => 'Serial',
            'avatar' => 'Avatar',
            'describe' => 'Describe',
            'content' => 'Content',
            'design_area' => 'Design Area',
            'area_of_land' => 'Area Of Land',
            'type_of_construction_id' => 'Type Of Construction ID',
            'year_of_design' => 'Year Of Design',
            'year_completed' => 'Year Completed',
            'style_id' => 'Style ID',
            'floor' => 'Floor',
            'address' => 'Address',
            'investor' => 'Investor',
            'display_homepage' => 'Display Homepage',
            'status' => 'Status',
            'featured' => 'Featured',
            'seo_tool_id' => 'Seo Tool ID',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'views' => 'Views',
            'images' => 'Images',
            'code' => 'Code',
            'province_id' => 'Province ID',
            'district_id' => 'District ID',
            'commune_id' => 'Commune ID',
            'category_project_id' => 'Category Project ID',
            'price' => 'Price',
            'unit_id' => 'Unit ID',
            'position_id' => 'Position ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassifieds()
    {
        return $this->hasMany(Classified::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages0()
    {
        return $this->hasMany(Image::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryProject()
    {
        return $this->hasOne(CategoryProject::className(), ['id' => 'category_project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommune()
    {
        return $this->hasOne(Commune::className(), ['id' => 'commune_id']);
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
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
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
    public function getStyle()
    {
        return $this->hasOne(Style::className(), ['id' => 'style_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeOfConstruction()
    {
        return $this->hasOne(TypeOfConstruction::className(), ['id' => 'type_of_construction_id']);
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
