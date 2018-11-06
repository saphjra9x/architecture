<?php

namespace common\models;

use common\models\base;

class User extends base\User
{
    const ROLE_SENIOR = 1;
    const ROLE_ADMIN = 2;
    const ROLE_GUEST = 3;
    const ROLE_ARCHITECT = 4;

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu đề',
            '' => 'Trạng thái',

        ];
    }
}
