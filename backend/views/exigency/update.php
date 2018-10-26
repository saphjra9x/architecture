<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\base\exigency */

$this->title = 'Update Exigency: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Exigencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-content " style="min-height: 602px;">
    <div class="exigency-update">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
