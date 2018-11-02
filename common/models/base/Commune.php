<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "commune".
 *
 * @property int $id
 * @property string $ten
 * @property string $ten_tieng_anh
 * @property string $cap
 * @property int $district_id
 * @property double $phi_van_chuyen
 *
 * @property District $district
 * @property User[] $users
 */
class Commune extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'commune';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'district_id'], 'required'],
            [['district_id'], 'integer'],
            [['phi_van_chuyen'], 'number'],
            [['ten', 'ten_tieng_anh', 'cap'], 'string', 'max' => 255],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Ten',
            'ten_tieng_anh' => 'Ten Tieng Anh',
            'cap' => 'Cap',
            'district_id' => 'District ID',
            'phi_van_chuyen' => 'Phi Van Chuyen',
        ];
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
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['commune_id' => 'id']);
    }
}
