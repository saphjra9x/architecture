<?php

namespace common\models;

use common\models\base;

class User extends base\User
{
    const ROLE_SENIOR = 1;

    const ROLE_ADMIN = 2;
    const ROLE_GUEST = 5;
    const ROLE_ARCHITECT = 6;

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu đề',
            '' => 'Trạng thái',

        ];
    }
}
