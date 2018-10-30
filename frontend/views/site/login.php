
<link href="../themelogin/css/login.css" rel="stylesheet">
<link href="../themelogin/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="wrap container">
    <div class="part-6">
        <section>
            <div class="col-md-12 kt-col-md-12 login-them">
                <div class="h2" style="font-weight: bold;">
                    Đăng nhập
                </div>
                <form id="login-form" >
                    <input type="hidden" name="_csrf-frontend"
                           value="hq-UbCU5iylorfSX1empuZe4FtcwPMyWikBEuEuOQHjzl_IrVVLcQgn7osivq83xyNtQrXUKvqTNOD35JeFwNw==">
                    <div class="form-group field-loginform-username required has-error">
                        <label class="control-label" for="loginform-username">
                            Tên đăng nhập hoặc email
                        </label>
                        <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]"
                               autofocus="" placeholder="Email" aria-required="true" aria-invalid="true">
                        <p class="help-block help-block-error">
                            Username không được để trống.
                        </p>
                    </div>
                    <div class="form-group field-loginform-password required">
                        <label class="control-label" for="loginform-password">
                            Mật khẩu
                        </label>
                        <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]"
                               aria-required="true">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-loginform-rememberme">
                        <div class="checkbox">
                            <label for="loginform-rememberme">
                                <input type="hidden" name="LoginForm[rememberMe]" value="0">
                                <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                Giữ đăng nhập của tôi
                            </label>
                            <p class="help-block help-block-error"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success col-md-12-login" name="login-button">
                            Login
                        </button>
                    </div>
                </form>
                <div class="form-group">
                    Hoặc:
                </div>
                <div class="form-group auth-icon facebook">
                    <a href="/customerpage/auth?authclient=facebook">
                        <button type="button" style="width:100%;" class="btn btn-primary">
                            Facebook
                        </button>
                    </a>
                </div>
                <p title="Quên mật khẩu">
                    <a class="kt-click-a" href="/request-password-reset">
                        <i class="fa fa-arrow-circle-right"></i> Quên mật khẩu ?
                    </a>
                </p>
                <div class="form-group">
                    Bạn chưa có tài khoản ?
                    <br>
                    <a class="kt-click-a" href="/signup" title="Đăng kí">
                        Đăng ký ngay
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
    </div><!-- part-6 -->
</div>

