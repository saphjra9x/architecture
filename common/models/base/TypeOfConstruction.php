<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "type_of_construction".
 *
 * @property int $id
 * @property string $title
 * @property int $status
 *
 * @property Project[] $projects
 */
class TypeOfConstruction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_of_construction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['type_of_construction_id' => 'id']);
    }
}
