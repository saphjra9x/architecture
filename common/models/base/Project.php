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
 * @property int $category_project_id
 * @property int $province_id
 * @property int $district_id
 * @property int $commune_id
 *
 * @property Classified[] $classifieds
 * @property Image[] $images0
 * @property Style $style
 * @property TypeOfConstruction $typeOfConstruction
 * @property User $user
 * @property Project $categoryProject
 * @property Project[] $projects
 * @property Commune $commune
 * @property District $district
 * @property Province $province
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
            [['title', 'category_id'], 'required'],
            [['category_id', 'user_id', 'serial', 'type_of_construction_id', 'style_id', 'floor', 'display_homepage', 'status', 'featured', 'seo_tool_id', 'views', 'category_project_id', 'province_id', 'district_id', 'commune_id'], 'integer'],
            [['describe', 'content', 'images', 'code'], 'string'],
            [['design_area', 'area_of_land'], 'number'],
            [['year_of_design', 'year_completed', 'created_at'], 'safe'],
            [['title', 'avatar', 'address', 'investor', 'slug'], 'string', 'max' => 255],
            [['style_id'], 'exist', 'skipOnError' => true, 'targetClass' => Style::className(), 'targetAttribute' => ['style_id' => 'id']],
            [['type_of_construction_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeOfConstruction::className(), 'targetAttribute' => ['type_of_construction_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['category_project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['category_project_id' => 'id']],
            [['commune_id'], 'exist', 'skipOnError' => true, 'targetClass' => Commune::className(), 'targetAttribute' => ['commune_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'serial' => Yii::t('app', 'Serial'),
            'avatar' => Yii::t('app', 'Avatar'),
            'describe' => Yii::t('app', 'Describe'),
            'content' => Yii::t('app', 'Content'),
            'design_area' => Yii::t('app', 'Design Area'),
            'area_of_land' => Yii::t('app', 'Area Of Land'),
            'type_of_construction_id' => Yii::t('app', 'Type Of Construction ID'),
            'year_of_design' => Yii::t('app', 'Year Of Design'),
            'year_completed' => Yii::t('app', 'Year Completed'),
            'style_id' => Yii::t('app', 'Style ID'),
            'floor' => Yii::t('app', 'Floor'),
            'address' => Yii::t('app', 'Address'),
            'investor' => Yii::t('app', 'Investor'),
            'display_homepage' => Yii::t('app', 'Display Homepage'),
            'status' => Yii::t('app', 'Status'),
            'featured' => Yii::t('app', 'Featured'),
            'seo_tool_id' => Yii::t('app', 'Seo Tool ID'),
            'slug' => Yii::t('app', 'Slug'),
            'created_at' => Yii::t('app', 'Created At'),
            'views' => Yii::t('app', 'Views'),
            'images' => Yii::t('app', 'Images'),
            'code' => Yii::t('app', 'Code'),
            'category_project_id' => Yii::t('app', 'Category Project ID'),
            'province_id' => Yii::t('app', 'Province ID'),
            'district_id' => Yii::t('app', 'District ID'),
            'commune_id' => Yii::t('app', 'Commune ID'),
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'category_project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['category_project_id' => 'id']);
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
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }
}
