<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

?>
<link href="/themelogin/css/login.css" rel="stylesheet">
<link href="/themelogin/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="wrap container">
    <div class="part-6">
        <section>
            <div class="col-md-12 kt-col-md-12 login-them">
                <div class="h2" style="font-weight: bold;text-align: center">
                    Đăng kí
                </div>
                <?php $form = ActiveForm::begin() ?>
                <div class="form-group field-exampleInputPassword1 required has-success">
                    <label class="control-label" for="exampleInputPassword1">
                        Họ và tên (*)
                    </label>
                    <?= $form->field($model, 'full_name')->textInput(['class' => 'form-control'])->label(false) ?>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-exampleInputEmail1 required has-success">
                    <label class="control-label" for="exampleInputEmail1">
                        Tên đăng nhập(*)
                    </label>
                    <?= $form->field($model, 'username')->textInput(['class' => 'form-control'])->label(false) ?>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-exampleInputEmail1 required has-success">
                    <label class="control-label" for="exampleInputEmail1">
                        Email(*)
                    </label>
                    <?= $form->field($model, 'email')->textInput(['class' => 'form-control'])->label(false) ?>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-exampleInputPassword1 required has-success">
                    <label class="control-label" for="exampleInputPassword1">
                        Mật khẩu it nhất 6 kí tự (*)
                    </label>
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control'])->label(false) ?>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group">
                    <button type="reset" class="btn btn-default col-xs-6">
                        Nhập lại
                    </button>
                    <button type="submit" class="btn btn-success col-xs-6">
                        Đăng ký
                    </button>
                </div>
                <?php $form = ActiveForm::end() ?>
                <div class="form-group" style="margin-top: 10px">
                    Bạn đã có tài khoản
                    <a class="kt-click-a" href="<?= Url::to(['site/login']) ?>" title="Đăng kí">
                        Đăng nhập
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                    <a class="kt-click-a" href="<?= Url::to(['site/index']) ?>" title="Đăng kí">
                        Trang chủ
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
    </div><!-- part-6 -->
</div>
<style>
    a:hover {
        text-decoration: none;
    }
</style>