<?php
/**
 * Created by PhpStorm.
 * User: thuc
 * Date: 11/1/2018
 * Time: 1:51 PM
 */
?>

    <section>
        <div class="container">
            <div class="white">
                <div class="customer-maps view-maps-image">
                    <img src="/img/banner-chu-nha-04.jpg" alt="" class="img-responsive">
                </div>
                <div class="customer-profile">
                    <div class="col-md-12">
                        <div class="customer-profile-avatar">
                            <div class="img-avatar">
                                <img src="/img/200x200no-image.png" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="customer-profile-info">
                            <ul class="list-unstyled">
                                <li><h2>Nguyễn Hùng</h2></li>
                                <li>Người dùng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="white">

                <div class="clearfix"></div>

                <div class="white-overfllow">
                    <div class="col-md-2 customer-left">
                        <div style="min-height: 70px"></div>
                        <div class="menu-of-customer">
                            <ul class="list-unstyled">
                                <li class="bd-01">Quản lý tài khoản</li>
                                <li><a href="profile/info" title="Thông tin tài khoản">Thông tin tài khoản</a></li>
                                <li><a href="profile/password" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                                <li class="bd-02"><a href="profile/noting" title="Chỉnh thông báo">Chỉnh thông báo</a>
                                </li>
                                <li><a href="page/kts" title="Trở thành kiến trúc sư">Trở thành kiến trúc sư</a></li>
                                <li><a href="https://shop.kientruc.com/profile/upgrade" title="Trở thành kiến trúc sư">Hoặc
                                        Trở thành seller</a></li>
                                <li class="bd-02">
                                    <form action="/login/logout" method="post">
                                        <input type="hidden" name="_csrf-frontend"
                                               value="mQsqaNNe6ibjWXYjX1iXguZkhzmaFmf6SplL99H78Eb6RBgAnijdEpQPHkI9bPHRsgK0d_1MFrccrTrEqa6Acg==">
                                        <button type="submit" class="btn btn-link logout">Đăng xuất</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 customer-main">
                        <div class="h4">
                            <i class="fa fa-user"></i> Đổi mật khẩu
                        </div>
                        <div class="line"></div>
                        <p>Kientruc.com cam kết đảm bảo an toàn tuyệt đối cho các thông tin cá nhân của bạn</p>
                        <form id="doi-mat-khau-form" class="form-horizontal" action="/profile/password" method="post">
                            <input type="hidden" name="_csrf-frontend"
                                   value="mQsqaNNe6ibjWXYjX1iXguZkhzmaFmf6SplL99H78Eb6RBgAnijdEpQPHkI9bPHRsgK0d_1MFrccrTrEqa6Acg==">
                            <div class="form-group field-doimatkhauform-pass_old required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="doimatkhauform-pass_old">Mật
                                    khẩu cũ</label>
                                <div class="col-sm-6">
                                    <input type="password" id="doimatkhauform-pass_old" class="form-control"
                                           name="DoiMatKhauForm[pass_old]" placeholder="...." aria-required="true">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-doimatkhauform-pass_new required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="doimatkhauform-pass_new">Mật
                                    khẩu mới</label>
                                <div class="col-sm-6">
                                    <input type="password" id="doimatkhauform-pass_new" class="form-control"
                                           name="DoiMatKhauForm[pass_new]" placeholder="...." aria-required="true">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-doimatkhauform-pass_new_again required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                       for="doimatkhauform-pass_new_again">Nhập lại mật khẩu mới</label>
                                <div class="col-sm-6">
                                    <input type="password" id="doimatkhauform-pass_new_again" class="form-control"
                                           name="DoiMatKhauForm[pass_new_again]" placeholder="...."
                                           aria-required="true">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="text-right col-md-12">
                                    <button type="submit" class="btn btn-success" name="login-button">Đổi mật khẩu
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-3 customer-right">
                        <div class="h4" style="color: #248445;">
                            TOP CÂU HỎI MỚI(trong tuần)
                        </div>
                        <div class="line"></div>
                        <div class="right-topic">
                            <h2><a href="hoi-dap/xin-y-kien-cho-viec-thay-doi-noi-that-phong-khach-7155.html"
                                   title="Xin ý kiến cho việc thay đổi nội thất phòng khách">Xin ý kiến cho việc thay
                                    đổi nội thất phòng khách</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Ho Chu</b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">31-10-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Các bác cho em xin vài mẫu phòng khách phù hợp với không gian nhà em đi ạ, em chưa
                                    biết đi theo hướng nào cả?
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 2
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 7
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="right-topic">
                            <h2><a href="hoi-dap/doi-chiec-tham-khac-cho-khu-vuc-dan-piano-7154.html"
                                   title="Đổi chiếc thảm khác cho khu vực đàn Piano!">Đổi chiếc thảm khác cho khu vực
                                    đàn Piano!</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Phan Minh Hải</b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">31-10-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Chiếc thảm nào sẽ hợp đây ạ!
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 2
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 6
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="right-topic">
                            <h2><a href="hoi-dap/phong-tam-nen-trang-tri-nhu-the-nao-la-dep-vay-moi-nguoi-7152.html"
                                   title="Phòng tắm nên trang trí như thế nào là đẹp vậy mọi người?">Phòng tắm nên trang
                                    trí như thế nào là đẹp vậy mọi người?</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Mai Lan</b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">31-10-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Mọi người cho em xin ý kiến nhé, em chưa biết phải trang trí ra sao ạ.
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 2
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 6
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="right-topic">
                            <h2>
                                <a href="hoi-dap/ban-ngay-phong-bep-minh-chon-mau-den-nay-duoc-khong-moi-nguoi-7151.html"
                                   title="Bàn ngay phòng bếp mình chọn mẫu đèn này được không mọi người?">Bàn ngay phòng
                                    bếp mình chọn mẫu đèn này được không mọi người?</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Doan van trung</b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">31-10-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Mình sợ nó không sáng, có tối màu quá không ạ?
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 3
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 4
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="h4" style="color: #248445;">
                            TOP SÔI NỔI NHẤT(trong tuần)
                        </div>

                        <div class="line"></div>
                        <div class="right-topic">
                            <h2><a href="hoi-dap/trang-tri-phong-ngu-don-gian-mot-ti-nen-dung-noi-that-gi-a-7164.html"
                                   title="Trang trí phòng ngủ đơn giản một tí, nên dùng nội thất gì ạ?">Trang trí phòng
                                    ngủ đơn giản một tí, nên dùng nội thất gì ạ?</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Lương Vũ Anh Duy</b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">22-08-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Phòng ngủ mình hơi nhỏ, nên không muốn trang trí quá cầu kỳ ạ.
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 4
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 21
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="right-topic">
                            <h2><a href="hoi-dap/tim-thiet-bi-cho-phong-ve-sinh-196.html"
                                   title="Tìm thiết bị cho phòng vệ sinh">Tìm thiết bị cho phòng vệ sinh</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Minh Quân</b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">18-06-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Ở nhóm mình có bác nào cung cấp phụ kiện thoát sàn kiểu ngang như hình hoặc tương tự
                                    có bẫy ngăn mùi ( chống trào ngược thì càng tốt) thì ới em phát ạ
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 3
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 12
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="right-topic">
                            <h2><a href="hoi-dap/phong-khach-canh-cua-so-7693.html"
                                   title="Phòng khách cạnh cửa sổ!!!!!">Phòng khách cạnh cửa sổ!!!!!</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Nguyen Tuan</b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">20-09-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Mọi người nghĩ nên thiết kế một phòng khách như thế nào ngay đây ạ? Em chưa biết
                                    thiết kế sao cho đẹp hết.
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 4
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 11
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="right-topic">
                            <h2><a href="hoi-dap/em-dang-muon-nang-cap-cho-phong-tam-cua-minh-7249.html"
                                   title="Em đang muốn nâng cấp cho phòng tắm của mình">Em đang muốn nâng cấp cho phòng
                                    tắm của mình</a></h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Nguyễn Phi Hòa </b>
                                    <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i
                                            class="date-ask">27-08-2018</i>
                                </div>
                                <div class="col-md-12 ask-info">
                                    Mọi người cho tôi một vìa ý kiến để thay đổi đi ạ
                                </div>
                            </div>

                            <div class="text-right">
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-user-circle-o"></i> 5
                                    </button>
                                </div>
                                <div class="customer-button no-border">
                                    <button class="customer-button-icon color-text-xam no-line-before">
                                        <i class="fa fa-comment"></i> 11
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


