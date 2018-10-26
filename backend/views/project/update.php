<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\base\Project */

$this->title = 'Update Project: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-content " style="min-height: 602px;">
    <div class="project-update">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
