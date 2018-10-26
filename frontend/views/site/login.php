<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin() ?>
    <div class="register-container">
        <div class="registerAccount">
            <h1>Đăng Nhập</h1>
            <i class="fa fa-close"></i>
            <div class="loginerror" style="display:none;"></div>
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
                <?= $form->field($model, 'password')->passwordInput(
                    [
                        'placeholder' => 'Mật khẩu',
                        'id' => 'password',
                        'class' => 'field-content',
                        'style' => 'padding-left:10px'
                    ]
                )->label(false) ?>
                <div id="validateFortxtPassword" class="error-message"></div>
                <div id="validateFortxtConfirmPassword" class="error-message"></div>
            </div>
            <button id="btnRegister" class="button-register"><i class="fa fa-spinner fa-spin"></i>Đăng nhập</button>
            <div class="reg-login">
                Bạn chưa có tài khoản?
                <a href="<?= Url::to(['site/register']) ?>" onclick="">
                    Đăng ký
                </a>

                <span><a href="<?= Url::to(['site/index']) ?>"> - Trang chủ</a></span>
            </div>
        </div>
    </div>
<?php ActiveForm::end() ?>
<style>
    a{
        text-decoration: none!important;
    }
</style>
<script>
    window.onload = function () {
        let screen_width = screen.width;
        if (screen_width <= 768) {
            window.location = '/mobile-site/login';
        }
    };
</script>
