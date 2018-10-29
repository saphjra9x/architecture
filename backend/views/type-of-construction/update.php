<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\base\TypeOfConstruction */

$this->title = 'Update Type Of Construction: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Type Of Constructions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-of-construction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
