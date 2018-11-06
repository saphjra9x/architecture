<?php
/**
 * Created by PhpStorm.
 * Date: 10/31/2018
 * Time: 3:00 PM
 * $model common\models\User
 */

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Province;
use common\models\District;
use common\models\Commune;

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
                            <img src="<?= !$model['avatar'] ? '/img/200x200no-image.png' : $model['avatar'] ?>"
                                 alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="customer-profile-info">
                        <ul class="list-unstyled">
                            <li><h2><?= $model['full_name'] ?></h2></li>
                            <li><?= $model['permission'] == 3 ? 'Người Dùng' : 'Kiến Trúc Sư' ?></li>
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
                            <li>
                                <a href="<?= Url::to(['site/info-user']) ?>" title="Thông tin tài khoản">
                                    Thông tin tài khoản
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['site/password']) ?>" title="Đổi mật khẩu">
                                    Đổi mật khẩu
                                </a>
                            </li>
                            <li class="bd-02">
                                <a href="profile/noting" title="Chỉnh thông báo">
                                    Chỉnh thông báo
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['site/architect']) ?>" title="Trở thành kiến trúc sư">
                                    Trở thành kiến trúc sư
                                </a>
                            </li>
                            <li class="bd-02">
                                <a href="<?= Url::to(['site/logout']) ?>">
                                    <button type="submit" class="btn btn-link logout">
                                        Đăng xuất
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 customer-main">

                    <div class="h4">
                        <i class="fa fa-user"></i> Thông tin tài khoản
                    </div>
                    <div class="line"></div>
                    <p>
                        <?= $_SERVER['SERVER_NAME'] ?>
                        cam kết đảm bảo an toàn tuyệt đối cho các thông tin cá nhân của bạn
                    </p>

                    <?php $form = ActiveForm::begin() ?>
                    <form id="thong-tin-tai-khoan-form" class="form-horizontal">
                        <input type="hidden" name="_csrf-frontend"
                               value="TMWsK-DHwSv8eoPysJh1X3xLEGCQBlT_qxpLEnBVaywChvx81KOSGJFJ87CB1EINHSogV-pAG7mcaB59IRcKVg==">
                        <div class="form-group field-thongtintaikhoanform-email required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                   for="thongtintaikhoanform-email">Email</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'email')->textInput(['class' => 'form-control'])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-thongtintaikhoanform-full_name">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                   for="thongtintaikhoanform-full_name">Họ tên hiển thị</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'full_name')->textInput(['class' => 'form-control'])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>
                        </div>
                        <div class="form-group field-thongtintaikhoanform-birthday">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                   for="thongtintaikhoanform-birthday">
                                Ngày tháng năm sinh
                            </label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'birthday')->input('date', ['value' => date('Y-m-d', time() + 7 * 3600)])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-thongtintaikhoanform-sex">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4">Giới tính</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'gender')->textInput(
                                    ['class' => 'hidden', 'id' => 'gender']
                                )->label(false) ?>
                                <div id="gender-radio">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex"
                                               value="Nam">
                                        Nam
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex"
                                               value="Nữ" checked="">
                                        Nữ
                                    </label>
                                </div>
                                <p class="help-block help-block-error"></p>
                            </div>
                        </div>
                        <div class="form-group field-thongtintaikhoanform-phone">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                   for="thongtintaikhoanform-phone">SDT</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'phone')->textInput(['class' => 'form-control'])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-thongtintaikhoanform-idprovince required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                   for="thongtintaikhoanform-idprovince">Chọn tỉnh/Thành phố</label>
                            <div class="col-sm-6">
                                <select id="thongtintaikhoanform-idprovince"
                                        class="form-control select2-hidden-accessible"
                                        name="ThongTinTaiKhoanForm[idprovince]" aria-required="true"
                                        data-s2-options="s2options_d6851687" data-krajee-select2="select2_ac05a3ac"
                                        style="display:none" tabindex="-1" aria-hidden="true">
                                    <option value="">Chọn tỉnh</option>
                                    <option value="01" selected="">Hà Nội</option>
                                    <option value="02">Hà Giang</option>
                                    <option value="04">Cao Bằng</option>
                                    <option value="06">Bắc Kạn</option>
                                    <option value="08">Tuyên Quang</option>
                                    <option value="10">Lào Cai</option>
                                    <option value="11">Điện Biên</option>
                                    <option value="12">Lai Châu</option>
                                    <option value="14">Sơn La</option>
                                    <option value="15">Yên Bái</option>
                                    <option value="17">Hòa Bình</option>
                                    <option value="19">Thái Nguyên</option>
                                    <option value="20">Lạng Sơn</option>
                                    <option value="22">Quảng Ninh</option>
                                    <option value="24">Bắc Giang</option>
                                    <option value="25">Phú Thọ</option>
                                    <option value="26">Vĩnh Phúc</option>
                                    <option value="27">Bắc Ninh</option>
                                    <option value="30">Hải Dương</option>
                                    <option value="31">Hải Phòng</option>
                                    <option value="33">Hưng Yên</option>
                                    <option value="34">Thái Bình</option>
                                    <option value="35">Hà Nam</option>
                                    <option value="36">Nam Định</option>
                                    <option value="37">Ninh Bình</option>
                                    <option value="38">Thanh Hóa</option>
                                    <option value="40">Nghệ An</option>
                                    <option value="42">Hà Tĩnh</option>
                                    <option value="44">Quảng Bình</option>
                                    <option value="45">Quảng Trị</option>
                                    <option value="46">Thừa Thiên Huế</option>
                                    <option value="48">Đà Nẵng</option>
                                    <option value="49">Quảng Nam</option>
                                    <option value="51">Quảng Ngãi</option>
                                    <option value="52">Bình Định</option>
                                    <option value="54">Phú Yên</option>
                                    <option value="56">Khánh Hòa</option>
                                    <option value="58">Ninh Thuận</option>
                                    <option value="60">Bình Thuận</option>
                                    <option value="62">Kon Tum</option>
                                    <option value="64">Gia Lai</option>
                                    <option value="66">Đắk Lắk</option>
                                    <option value="67">Đắk Nông</option>
                                    <option value="68">Lâm Đồng</option>
                                    <option value="70">Bình Phước</option>
                                    <option value="72">Tây Ninh</option>
                                    <option value="74">Bình Dương</option>
                                    <option value="75">Đồng Nai</option>
                                    <option value="77">Bà Rịa - Vũng Tàu</option>
                                    <option value="79">Hồ Chí Minh</option>
                                    <option value="80">Long An</option>
                                    <option value="82">Tiền Giang</option>
                                    <option value="83">Bến Tre</option>
                                    <option value="84">Trà Vinh</option>
                                    <option value="86">Vĩnh Long</option>
                                    <option value="87">Đồng Tháp</option>
                                    <option value="89">An Giang</option>
                                    <option value="91">Kiên Giang</option>
                                    <option value="92">Cần Thơ</option>
                                    <option value="93">Hậu Giang</option>
                                    <option value="94">Sóc Trăng</option>
                                    <option value="95">Bạc Liêu</option>
                                    <option value="96">Cà Mau</option>
                                </select>
                                <?= $form->field($model, 'province_id')->dropDownList(
                                    ArrayHelper::map(Province::find()->all(), 'id', 'ten'),
                                    [
                                        'prompt' => '- ' . Yii::t('app', 'Chọn tỉnh') . ' -',
                                        'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('admin/ajax/get-district-by-province-id?province_id=') . '"+$(this).val(), function( data ) {
                                            $("select#district" ).html(data);
                                        });',
                                        'id' => 'province',
                                        'class' => 'form-control js-example-basic-single',
                                    ], [
                                        'onchange' => 'getThongTinMaps(1)',
                                    ]
                                )->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-thongtintaikhoanform-idprovince required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="subcat1-id">
                                Chọn quận/huyện
                            </label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'district_id')->dropDownList(
                                    ArrayHelper::map(District::find()->where(['=', 'province_id', $model->province_id])->all(), 'id', 'ten'),
                                    [
                                        'prompt' => Yii::t('app', '--Chọn huyện--'),
                                        'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('admin/ajax/get-commune-by-district-id?district_id=') . '"+$(this).val(), function( data ) {
                                            $("select#commune" ).html(data);
                                        });',
                                        'id' => 'district',
                                    ], ['onchange' => 'getThongTinMaps(2)',])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-thongtintaikhoanform-idprovince required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="subcat2-id">Phường/xã</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'commune_id')->dropDownList(
                                    ArrayHelper::map(Commune::find()->where(['=', 'district_id', $model->district_id])->all(), 'id', 'ten'),
                                    [
                                        'prompt' => Yii::t('app', '--Chọn xã--'),
                                        'id' => 'commune',
                                        'onchange' => 'getThongTinMaps(3)',
                                    ])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-right col-md-12">
                                <button type="submit" class="btn btn-success" name="login-button">Lưu thông tin
                                </button>
                            </div>
                        </div>

                    </form>
                    <?php $form = ActiveForm::end() ?>
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
<script src="/theme/js/jquery-3.3.1.min.js"></script>
<script>
    $('#gender-radio input').on('change', function () {
        let gender = $('input[name=sex]:checked').val();
        $('#gender').val(gender);
    });
    let gender = $('input[name=sex]:checked').val();
    $('#gender').val(gender);
</script>
