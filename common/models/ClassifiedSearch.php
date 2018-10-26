<?php

namespace common\models;

use yii\base\Model;

class ClassifiedSearch extends Model
{
    public $text;
    public $exigency;
    public $kind;
    public $price;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exigency', 'kind','price'],'integer'],
            ['text', 'string', 'max' => 255],
        ];
    }


}
