<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>
<link href="/themelogin/css/login.css" rel="stylesheet">
<link href="/themelogin/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="wrap container">
    <div class="part-6">
        <section>
            <div class="col-md-12 kt-col-md-12 login-them">
                <div class="h2" style="font-weight: bold;text-align: center">
                    Đăng nhập
                </div>
                <?php $form = ActiveForm::begin() ?>
                <form id="login-form">
                    <div class="form-group field-loginform-username required">
                        <label class="control-label" for="loginform-username">
                            Tên đăng nhập
                        </label>
                        <?= $form->field($model, 'username')->textInput(
                            [
                                'placeholder' => 'Tên đăng nhập',
                                'class' => 'form-control',
                            ]
                        )->label(false) ?>
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-loginform-password required">
                        <label class="control-label" for="loginform-password">
                            Mật khẩu
                        </label>
                        <?= $form->field($model, 'password')->passwordInput(
                            [
                                'placeholder' => 'Mật khẩu',
                                'id' => 'password',
                                'class' => 'form-control',
                            ]
                        )->label(false) ?>
                        <p class="help-block help-block-error"></p>
                    </div>
                    <!--                    <div class="form-group field-loginform-rememberme">-->
                    <!--                        <div class="checkbox">-->
                    <!--                            <label for="loginform-rememberme">-->
                    <!--                                <input type="hidden" name="LoginForm[rememberMe]" value="0">-->
                    <!--                                <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1"-->
                    <!--                                       checked="">-->
                    <!--                                Giữ đăng nhập của tôi-->
                    <!--                            </label>-->
                    <!--                            <p class="help-block help-block-error"></p>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="form-group">
                        <button type="submit" class="btn btn-success col-md-12-login" name="login-button">
                            Login
                        </button>
                    </div>
                </form>
                <?php $form = ActiveForm::end() ?>
                <div class="form-group" style="text-align: center">
                    Hoặc:
                </div>
                <div class="form-group auth-icon facebook">
                    <a href="">
                        <button type="button" style="width:100%;" class="btn btn-primary">
                            Facebook
                        </button>
                    </a>
                </div>
                <p title="Quên mật khẩu">
                    <a class="kt-click-a" href="">
                        <i class="fa fa-arrow-circle-right"></i>
                        Quên mật khẩu ?
                    </a>
                </p>
                <div class="form-group">
                    Bạn chưa có tài khoản ?
                    <a class="kt-click-a" href="<?= Url::to(['site/register']) ?>" title="Đăng kí">
                        Đăng ký ngay
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a class="kt-click-a" href="<?= Url::to(['site/index']) ?>" title="Đăng kí">
                       Về trang chủ?
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
    </div>
</div>
<style>
    a:hover{
        text-decoration: none;
    }
</style>
