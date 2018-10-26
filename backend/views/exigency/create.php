<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\base\exigency */

$this->title = 'Create Exigency';
$this->params['breadcrumbs'][] = ['label' => 'Exigencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content " style="min-height: 602px;">
    <section class="content" style="margin: 0!important">
        <div class="row">
            <div class="col-md-12">
                <?= $this->render('_form', [
                    'model' => $model
                ]) ?>
            </div>
        </div>
    </section>
</div>
