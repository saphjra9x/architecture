<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\base\TypeUser */

$this->title = 'Create Type User';
$this->params['breadcrumbs'][] = ['label' => 'Type Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
