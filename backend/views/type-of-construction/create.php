<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\base\TypeOfConstruction */

$this->title = 'Create Type Of Construction';
$this->params['breadcrumbs'][] = ['label' => 'Type Of Constructions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-of-construction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
