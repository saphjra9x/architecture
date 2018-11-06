<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $full_name;
    public $password;
    public $email;
    public $permission;
    public $first_name;
    public $last_name;
    public $gender;
    public $phone;
    public $address;
    public $province_id;
    public $district_id;
    public $commune_id;
    public $avatar;
    public $birthday;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        $str = 'This password has already been taken';
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            [['province_id', 'district_id', 'commune_id'], 'integer'],
            ['address', 'string'],
            [['email', 'full_name'], 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['phone', 'integer'],
            ['birthday', 'safe'],
            [['gender', 'avatar'], 'string'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * @return User|null
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user['full_name'] = $this->full_name;
        $user['permission'] = 3;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}
