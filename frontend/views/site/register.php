<?php

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
                <form id="form-signup" method="post">
                    <div class="form-group field-exampleInputEmail1 required has-success">
                        <label class="control-label" for="exampleInputEmail1">
                            Tên đăng nhập hoặc email(*)
                        </label>
                        <input type="text" id="exampleInputEmail1" class="form-control" name="SignupForm[username]"
                               autofocus="" aria-required="true" aria-invalid="false">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-exampleInputPassword1 required has-success">
                        <label class="control-label" for="exampleInputPassword1">
                            Mật khẩu it nhất 6 kí tự (*)
                        </label>
                        <input type="password" id="exampleInputPassword1" class="form-control"
                               name="SignupForm[password]" aria-required="true" aria-invalid="false">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-exampleInputPassword1 required has-success">
                        <label class="control-label" for="exampleInputPassword1">
                            Họ và tên (*)
                        </label>
                        <input type="text" id="exampleInputPassword1" class="form-control" name="SignupForm[fullname]"
                               placeholder="Họ tên đầy đủ" aria-required="true">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group">
                        <label>
                            Bạn muốn:
                        </label>
                        <div class="row">
                            <div class="col-md-6">
                                <input name="select" type="radio" value="#" id="choice_2_9_0">
                                <label for="choice_2_9_0" id="label_2_9_0">
                                    Trở thành kiến trúc sư
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input name="select" type="radio" value="#" id="choice_2_9_1">
                                <label for="choice_2_9_1" id="label_2_9_1">
                                    Trở thành người dùng
                                </label>
                            </div>
                        </div>
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
                </form>
                <p title="Quên mật khẩu">
                    <a class="kt-click-a" href="/request-password-reset">
                        <i class="fa fa-arrow-circle-right"></i>
                        Quên mật khẩu ?
                    </a>
                </p>
                <div class="form-group">
                    Khi <a class="kt-click-a" href="/login" title="Đăng kí">đăng
                        nhập</a> hoặc đăng kí, tôi thừa nhận và đồng ý với điều
                    khoản sử dụng và
                    chính sách bảo mật của kientruc.com.
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
    </div><!-- part-6 -->
</div>
