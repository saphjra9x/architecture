<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use frontend\assets\ThemeAsset;

ThemeAsset::register($this);

$favicon = FunctionHelper::get_general_information()['favicon'];

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0"/>
        <link rel="icon" href="<?= $favicon ?>" type="image/x-icon">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode( $this->title ) ?></title>
        <?php $this->head() ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrap">
    <?= $this->render('header');?>
    <?= $content ?>
    <?= $this->render('footer');?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>