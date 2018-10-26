<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryClassified */

$this->title = 'Update Category Classified: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Category Classifieds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-content " style="min-height: 602px;">
    <div class="category-classified-update">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
