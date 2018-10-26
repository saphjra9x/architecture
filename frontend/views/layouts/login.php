<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use yii\widgets\ActiveForm;

$favicon = FunctionHelper::get_general_information()['favicon'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn" dir="ltr">
<head id="Head1">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0"/>
    <link rel="icon" href="<?= $favicon ?>" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css"
          href="/filemain/login.css" media="all">
</head>
<body class="bg-site">
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->beginBody() ?>
</body>
</html>
<?php $this->endPage() ?>

