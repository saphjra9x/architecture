<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\base\TypeUser */

$this->title = 'Update Type User: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Type Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
