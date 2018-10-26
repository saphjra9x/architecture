<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\base\exigency */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="category-classified-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="page-heading page-heading-md">
        <div class="header-right">
            <div class="form-group">
                <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()',]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Nội dung nhu cầu</h4>
            <p class="text-muted">Nhập tiêu đề và các mô tả cho nhu cầu</p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('app', 'Basic information') ?>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group" style="margin-right: 10px;">
        <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
