<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin() ?>
<div class="register-container">
    <div class="registerAccount">
        <h1>Đăng ký tài khoản</h1>
        <i class="fa fa-close"></i>
        <div class="loginerror" style="display:none;"></div>
        <div class="row-field">
            <?= $form->field($model, 'full_name')->textInput(
                [
                    'placeholder' => 'Họ tên',
                    'class' => 'field-content',
                    'style' => 'padding-left:10px'
                ]
            )->label(false) ?>
            <div id="validateFortxtUserName" class="error-message"></div>
        </div>
        <div class="row-field">
            <?= $form->field($model, 'phone')->textInput(
                [
                    'placeholder' => 'Số điện thoại',
                    'class' => 'field-content',
                    'style' => 'padding-left:10px'
                ]
            )->label(false) ?>
            <div id="validateFortxtUserName" class="error-message"></div>
        </div>
        <div class="row-field">
            <?= $form->field($model, 'username')->textInput(
                [
                    'placeholder' => 'Tên đăng nhập',
                    'class' => 'field-content',
                    'style' => 'padding-left:10px'
                ]
            )->label(false) ?>
            <div id="validateFortxtUserName" class="error-message"></div>
        </div>
        <div class="row-field">
            <?= $form->field($model, 'email')->textInput(
                [
                    'placeholder' => 'Email đăng ký',
                    'class' => 'field-content',
                    'style' => 'padding-left:10px'
                ]
            )->label(false) ?>
            <div id="validateFortxtPrimaryEmail" class="error-message"></div>
        </div>
        <div class="row-field">
            <div class="field-content content-half" style="margin-right: 10px;">
                <?= $form->field($model, 'password')->passwordInput(
                    [
                        'placeholder' => 'Mật khẩu',
                        'id' => 'password',
                        'style' => 'padding-left:10px'
                    ]
                )->label(false) ?>
            </div>
            <div class="field-content content-half">
                <?= $form->field($model, 're_password')->passwordInput(
                    [
                        'placeholder' => 'Nhập lại mật khẩu',
                        'id' => 'repassword',
                        'style' => 'padding-left:10px'
                    ]
                )->label(false) ?>
            </div>
        </div>
        <button id="btnRegister" class="button-register"><i class="fa fa-spinner fa-spin"></i>Đăng ký</button>
        <div class="reg-login">
            Đã là thành viên?
            <a href="<?= Url::to(['site/login']) ?>">
                Đăng nhập
            </a>
            <span><a href="<?= Url::to(['site/index']) ?>"> - Trang chủ</a></span>
        </div>
    </div>
</div>
<?php ActiveForm::end() ?>
<style>
    a {
        text-decoration: none !important;
    }
    .help-block{
        padding: 5px;
    }
</style>
<script>
    window.onload = function () {
        let screen_width = screen.width;
        if (screen_width <= 768) {
            window.location = '/mobile-site/register';
        }
    };
</script>