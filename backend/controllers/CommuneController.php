<?php

namespace backend\controllers;

class CommuneController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
