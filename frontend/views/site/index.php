<?php

use yii\helpers\Url;
use common\helpers\FunctionHelper;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$general = FunctionHelper::get_general_information();

$this->title = $general['site_name'];

$this->registerMetaTag([
    'name' => 'description',
    'content' => $general['home_page_description']
]);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['site/index'], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'homepage'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $general['site_name']
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $general['home_page_description']
]);


$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to([$general['logo']], true)
]);
$set_banner = FunctionHelper::get_setting_by_key('banner');
$set_community = FunctionHelper::get_setting_by_key('community');
?>
<section>
    <div class="search"
         style="background-image: url('<?= $set_banner['avatar']?>');">
        <div class="container">
            <div class="detai-search">
                <div class="h3 text-center">
                    <?= $set_banner['title']?>
                </div>
                <div class="min-heigh-30px" style="clear: both;min-height: 10px;"></div>

                <div class="wd-30 text-right" style="padding-right: 30px;">Tôi cần tìm Kiến Trúc Sư tại ...</div>
                <div class="wd-30 text-right" style="padding-right: 30px;">Tôi muốn thiết kế ...</div>
                <div class="wd-30 text-right" style="padding-right: 30px;">Loại công trình ...</div>
                <div class="clearfix"></div>

                <form class="form-inline" method="get" action="http://www.kientruc.com/tim-kien-truc-su">
                    <div class="select-search text-right">
                        <div class="wd-30 form-group">
                            <label class="text-right">Tôi cần tìm KTS tại ...</label>
                            <select class="form-control" name="id_province">
                                <option value="01">Hà Nội</option>
                                <option value="79" selected>Hồ Chí Minh</option>
                                <option value="48">Đà Nẵng</option>
                                <option value="89">An Giang</option>
                                <option value="77">Bà Rịa - Vũng Tàu</option>
                                <option value="24">Bắc Giang</option>
                                <option value="06">Bắc Kạn</option>
                                <option value="95">Bạc Liêu</option>
                                <option value="27">Bắc Ninh</option>
                                <option value="83">Bến Tre</option>
                                <option value="74">Bình Dương</option>
                                <option value="70">Bình Phước</option>
                                <option value="60">Bình Thuận</option>
                                <option value="52">Bình Định</option>
                                <option value="96">Cà Mau</option>
                                <option value="92">Cần Thơ</option>
                                <option value="04">Cao Bằng</option>
                                <option value="64">Gia Lai</option>
                                <option value="02">Hà Giang</option>
                                <option value="35">Hà Nam</option>
                                <option value="42">Hà Tĩnh</option>
                                <option value="30">Hải Dương</option>
                                <option value="31">Hải Phòng</option>
                                <option value="93">Hậu Giang</option>
                                <option value="17">Hòa Bình</option>
                                <option value="33">Hưng Yên</option>
                                <option value="56">Khánh Hòa</option>
                                <option value="91">Kiên Giang</option>
                                <option value="62">Kon Tum</option>
                                <option value="12">Lai Châu</option>
                                <option value="68">Lâm Đồng</option>
                                <option value="20">Lạng Sơn</option>
                                <option value="10">Lào Cai</option>
                                <option value="80">Long An</option>
                                <option value="36">Nam Định</option>
                                <option value="40">Nghệ An</option>
                                <option value="37">Ninh Bình</option>
                                <option value="58">Ninh Thuận</option>
                                <option value="25">Phú Thọ</option>
                                <option value="54">Phú Yên</option>
                                <option value="44">Quảng Bình</option>
                                <option value="49">Quảng Nam</option>
                                <option value="51">Quảng Ngãi</option>
                                <option value="22">Quảng Ninh</option>
                                <option value="45">Quảng Trị</option>
                                <option value="94">Sóc Trăng</option>
                                <option value="14">Sơn La</option>
                                <option value="72">Tây Ninh</option>
                                <option value="34">Thái Bình</option>
                                <option value="19">Thái Nguyên</option>
                                <option value="38">Thanh Hóa</option>
                                <option value="46">Thừa Thiên Huế</option>
                                <option value="82">Tiền Giang</option>
                                <option value="84">Trà Vinh</option>
                                <option value="08">Tuyên Quang</option>
                                <option value="86">Vĩnh Long</option>
                                <option value="26">Vĩnh Phúc</option>
                                <option value="15">Yên Bái</option>
                                <option value="66">Đắk Lắk</option>
                                <option value="67">Đắk Nông</option>
                                <option value="11">Điện Biên</option>
                                <option value="75">Đồng Nai</option>
                                <option value="87">Đồng Tháp</option>
                            </select>
                        </div>
                        <div class="wd-30 form-group">
                            <label class="text-right">Tôi muốn thiết kế ...</label>
                            <select class="form-control" name="hang_muc">
                                <option value="7">Nội thất</option>
                                <option value="4">Ngoại Thất</option>
                                <option value="70">Sân Vườn</option>
                                <option value="71">Quy Hoạch</option>
                            </select>
                        </div>
                        <div class="wd-30 form-group">
                            <label class="text-right">Loại công trình ...</label>
                            <select class="form-control" name="loai_cong_trinh">
                                <option value="2">Chung Cư</option>
                                <option value="1">Nhà</option>
                                <option value="3">Nhà Mặt Phố</option>
                                <option value="51">Biệt Thự</option>
                                <option value="78">Resort</option>
                                <option value="62">Cafe</option>
                                <option value="61">Văn Phòng</option>
                                <option value="87">Showroom</option>
                                <option value="63">Shop</option>
                                <option value="64">Nhà Hàng</option>
                                <option value="85">Khách Sạn</option>
                                <option value="86">Spa</option>
                                <option value="65">Công Trình Công Cộng</option>
                                <option value="66">Đồ Án Kiến Trúc</option>
                            </select>
                        </div>
                        <button type="submit" class="btn but-go-search"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn but-go-search-2">TÌM KIẾM</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="h3 text-center">
            <h1>
                KIENTRUC.com có <B>264 KIẾN TRÚC SƯ</B> với
                <B>1,006 DỰ ÁN</B> trên hệ thống.....
            </h1>
        </div>
        <div class="h3 text-center">
            Bạn là Kiến Trúc Sư ? <a
                    href="huong-dan-kientruccom/tro-thanh-kien-truc-su-%2651.html" title=""><span
                        class="tim-hieu-them">Tìm hiểu thêm</span></a>
        </div>
    </div>
</section>

<section>
    <div class="banner-register">
        <div class="container">
            <div class="form-register">
                <div class="h3 text-center">CỘNG ĐỒNG HỎI ĐÁP VỀ NHÀ Ở LỚN NHẤT VIỆT NAM</div>
                <div class="text-justify wd-70">
                    Chỉ mất 10s đăng ký để có thể đặt câu hỏi
                    và nhận câu trả lời từ các kiến trúc sư và nhà thiết kế hàng đầu Việt Nam
                </div>
                <p class="text-center">
                    <a href="/signup" title="Đăng ký đặt câu hỏi">
                        <button type="button" class="btn but-go-search-2">ĐĂNG KÝ NGAY</button>
                    </a>
                </p>
                <p class="text-center">
                    Hoàn toàn MIỄN PHÍ
                </p>
            </div>
            <div class="form-image">
                <video width="90%" height="auto" autoplay="" loop="" muted="" controls="" controlslist="nodownload">
                    <source src="image/Video.mp4" type="video/mp4">
                </video>
                <img src="image/iphonex.png" alt="no-image" class="img-responsive">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="h4 text-center">
            Đặt câu hỏi DỄ DÀNG - TIỆN LỢI trên thiết bị di động
        </div>
    </div>
</section>

<section>
    <div class="container">


        <div class="kts-hot">
            <div class="col-md-6 kts-hot-left">
                <div class="h3 text-center">TOP 10 KIẾN TRÚC SƯ TIÊU BIỂU TRONG TUẦN</div>
                <div class="container-slide">
                    <div class="container-slide-item active" data-info="1"
                         data-target="888">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/damVu.html"
                               title="Đàm Vũ">
                                <img src="uploads/images/dam-vu-888/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Đàm Vũ" title="Đàm Vũ"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/damVu.html"
                               title="Đàm Vũ">
                                <span class="ten-kts">Đàm Vũ</span>
                            </a>
                            <span class="luot-thank">7 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="2"
                         data-target="1308">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/ktstrananhdung.html"
                               title="Trần Anh Dũng">
                                <img src="uploads/images/tran-dung-1308/images_rz/200x200-1538363443-kien-truc-su.jpg"
                                     alt="Trần Anh Dũng" title="Trần Anh Dũng"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/ktstrananhdung.html"
                               title="Trần Anh Dũng">
                                <span class="ten-kts">Trần Anh Dũng</span>
                            </a>
                            <span class="luot-thank">6 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="3"
                         data-target="892">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/100010010011892.html"
                               title="Lê Kiên">
                                <img src="uploads/images/le-trung-kien-892/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Lê Kiên" title="Lê Kiên"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/100010010011892.html"
                               title="Lê Kiên">
                                <span class="ten-kts">Lê Kiên</span>
                            </a>
                            <span class="luot-thank">6 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="4"
                         data-target="1349">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/TuDoan.html"
                               title="Đoàn Tú">
                                <img src="uploads/images/tu-doan-1349/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Đoàn Tú" title="Đoàn Tú"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/TuDoan.html"
                               title="Đoàn Tú">
                                <span class="ten-kts">Đoàn Tú</span>
                            </a>
                            <span class="luot-thank">5 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="5"
                         data-target="1244">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/daoquocviet.html"
                               title="Đào Quốc Việt">
                                <img src="uploads/images/dao-quoc-viet-1244/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Đào Quốc Việt" title="Đào Quốc Việt"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/daoquocviet.html"
                               title="Đào Quốc Việt">
                                <span class="ten-kts">Đào Quốc Việt</span>
                            </a>
                            <span class="luot-thank">3 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="6"
                         data-target="914">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/anhle.html"
                               title="Anh Lê">
                                <img src="uploads/images/anh-le-914/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Anh Lê" title="Anh Lê"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/anhle.html"
                               title="Anh Lê">
                                <span class="ten-kts">Anh Lê</span>
                            </a>
                            <span class="luot-thank">3 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="7"
                         data-target="842">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/MaiVanDung.html"
                               title="Mai Văn Dũng">
                                <img src="uploads/images/mai-van-dung-842/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Mai Văn Dũng" title="Mai Văn Dũng"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/MaiVanDung.html"
                               title="Mai Văn Dũng">
                                <span class="ten-kts">Mai Văn Dũng</span>
                            </a>
                            <span class="luot-thank">3 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="8"
                         data-target="1252">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/NguyenVietHung.html"
                               title="Nguyễn Việt Hùng">
                                <img src="uploads/images/nguyen-viet-hung-1252/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Nguyễn Việt Hùng" title="Nguyễn Việt Hùng"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/NguyenVietHung.html"
                               title="Nguyễn Việt Hùng">
                                <span class="ten-kts">Nguyễn Việt Hùng</span>
                            </a>
                            <span class="luot-thank">3 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="9"
                         data-target="836">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/HaiDoan.html"
                               title="Đoàn Phú Hải">
                                <img src="uploads/images/doan-phu-hai-836/images_rz/200x200avatar-kien-truc-su.jpg"
                                     alt="Đoàn Phú Hải" title="Đoàn Phú Hải"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/HaiDoan.html"
                               title="Đoàn Phú Hải">
                                <span class="ten-kts">Đoàn Phú Hải</span>
                            </a>
                            <span class="luot-thank">2 lượt cảm ơn</span>
                        </div>
                    </div>
                    <div class="container-slide-item " data-info="10"
                         data-target="3277">
                        <div class="container-slide-item-img">
                            <a href="kien-truc-su/thanhvietcorp.html"
                               title="Nguyễn Văn Thắng">
                                <img src="uploads/images/nguyen-van-thang-3277/images_rz/200x200-1538554589-kien-truc-su.jpg"
                                     alt="Nguyễn Văn Thắng" title="Nguyễn Văn Thắng"
                                     class="img-responsive">
                            </a>
                        </div>
                        <div class="container-slide-item-info">
                                    <span class="thu-hang">#
                                        KTS</span>
                            <a href="kien-truc-su/thanhvietcorp.html"
                               title="Nguyễn Văn Thắng">
                                <span class="ten-kts">Nguyễn Văn Thắng</span>
                            </a>
                            <span class="luot-thank">2 lượt cảm ơn</span>
                        </div>
                    </div>
                </div>
                <div class="posotion-re">
                    <button type="button" class="btn btn-link" onclick="javascript:return prevSlide02();">
                        <i class="fa fa-angle-left"></i>
                    </button>
                    <button type="button" class="btn btn-link" onclick="javascript:return nextSlide02();">
                        <i class="fa fa-angle-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-6 kts-hot-right">
                <div class="bang-02">
                    <div class="slide-right-box target-888" style="display:block"><p>Danh sách công trình của KTS
                            Đàm Vũ</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-nha-hang-soho-iii-6376.html"
                                   title="SOHO III">
                                    <img src="uploads/images/dam-vu-888/images_rz/430x280thiet-ke-nha-hang-soho-iii1533267955138.jpg"
                                         alt="thiết kế Nhà Hàng SOHO III131" title="thiết kế Nhà Hàng SOHO III131"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-nha-hang-soho-iii-6376.html"
                                   title="SOHO III">
                                    <b>SOHO III</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 27/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-hang-soho-ii-6375.html"
                                           title="SOHO II">
                                            <h3><b>Soho Ii</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 27/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-cafe-the-sonate-6374.html"
                                           title="THE SONATE">
                                            <h3><b>The Sonate</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 27/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-cafe-soho-1-6373.html"
                                           title="SOHO 1">
                                            <h3><b>Soho 1</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 27/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-hang-quan-sach-6372.html"
                                           title="Quán Sạch">
                                            <h3><b>Quán Sạch</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/damVu.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-1308" style="display:none"><p>Danh sách công trình của KTS
                            Trần Anh Dũng</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-nha-mat-pho-nha-o-lo-pho-thi-tran-soc-son-7817.html"
                                   title="Nhà ở lô phố- thị trấn Sóc Sơn">
                                    <img src="uploads/images/tran-dung-1308/images_rz/430x280thiet-ke-nha-mat-pho-5-tang-tai-ha-noi-01537724634.jpg"
                                         alt="thiết kế Nhà Mặt Phố 5 tầng tại Hà Nội Nhà ở lô phố- thị trấn Sóc Sơn 0 1537724636"
                                         title="thiết kế Nhà Mặt Phố 5 tầng tại Hà Nội Nhà ở lô phố- thị trấn Sóc Sơn 0 1537724636"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-nha-mat-pho-nha-o-lo-pho-thi-tran-soc-son-7817.html"
                                   title="Nhà ở lô phố- thị trấn Sóc Sơn">
                                    <b>Nhà ở lô phố- thị trấn Sóc Sơn</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 23/09/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-can-ho-nho-nguyen-hang-7816.html"
                                           title="Căn hộ nhỏ - Nguyễn Hằng">
                                            <h3><b>Căn Hộ Nhỏ - Nguyễn Hằng</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 23/09/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-mat-pho-nha-o-vp-cho-thue-ngo-tram-7806.html"
                                           title="Nhà ở - vp cho thuê Ngõ Trạm">
                                            <h3><b>Nhà Ở - Vp Cho Thuê Ngõ Trạm</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        1 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 23/09/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-nha-mat-pho-noi-that-nha-o-nha-mat-pho-soc-son-7805.html"
                                           title="Nội thất nhà ở- nhà mặt phố Sóc Sơn">
                                            <h3><b>Nội Thất Nhà Ở- Nhà Mặt Phố Sóc Sơn</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 23/09/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-mat-pho-nha-o-kd-nha-nghi-mini-7797.html"
                                           title="Nhà ở-kd Nhà nghỉ mini">
                                            <h3><b>Nhà Ở-kd Nhà Nghỉ Mini</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/ktstrananhdung.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-892" style="display:none"><p>Danh sách công trình của KTS Lê
                            Kiên</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-can-ho-seson-mo-lao-6663.html"
                                   title="Căn Hộ Seson Mộ Lao">
                                    <img src="uploads/images/le-trung-kien-892/images_rz/430x280thiet-ke-noi-that-chung-cu-tai-ha-noi-61533635002.jpg"
                                         alt="thiết kế nội thất chung cư tại Hà Nội Căn Hộ Seson Mộ Lao 6 1533635003"
                                         title="thiết kế nội thất chung cư tại Hà Nội Căn Hộ Seson Mộ Lao 6 1533635003"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-can-ho-seson-mo-lao-6663.html"
                                   title="Căn Hộ Seson Mộ Lao">
                                    <b>Căn Hộ Seson Mộ Lao</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 07/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-can-ho-2-sao-6660.html"
                                           title="Căn Hộ 2 Sao">
                                            <h3><b>Căn Hộ 2 Sao</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 07/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-cai-tao-noi-that-can-ho-vincom-ba-trieu-6659.html"
                                           title="Cải tạo nội thất căn hộ Vincom Bà Triệu">
                                            <h3><b>Cải Tạo Nội Thất Căn Hộ Vincom Bà Triệu</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 29/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-nho-nha-pho-346-6387.html"
                                           title="Nhà phố 346">
                                            <h3><b>Nhà Phố 346</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 29/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-mat-pho-nha-pho-cai-tao-6386.html"
                                           title="Nhà phố cải tạo">
                                            <h3><b>Nhà Phố Cải Tạo</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/100010010011892.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-1349" style="display:none"><p>Danh sách công trình của KTS
                            Đoàn Tú</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-van-phong-tecotec-canteen-interior-7315.html"
                                   title="Tecotec Canteen Interior">
                                    <img src="uploads/images/tu-doan-1349/images_rz/430x280thiet-ke-noi-that-van-phong-tai-ho-chi-minh-01535514983.jpg"
                                         alt="thiết kế nội thất Văn Phòng tại Hồ Chí Minh Tecotec Canteen Interior 0 1535514983"
                                         title="thiết kế nội thất Văn Phòng tại Hồ Chí Minh Tecotec Canteen Interior 0 1535514983"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-van-phong-tecotec-canteen-interior-7315.html"
                                   title="Tecotec Canteen Interior">
                                    <b>Tecotec Canteen Interior</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 29/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-modern-oriental-7314.html"
                                           title="Modern oriental">
                                            <h3><b>Modern Oriental</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 29/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-modern-interior-7312.html"
                                           title="Modern interior">
                                            <h3><b>Modern Interior</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 29/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-grandma-room-7311.html"
                                           title="Grandma room">
                                            <h3><b>Grandma Room</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 29/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-small-minimalist-7310.html"
                                           title="Small Minimalist">
                                            <h3><b>Small Minimalist</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/TuDoan.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-1244" style="display:none"><p>Danh sách công trình của KTS
                            Đào Quốc Việt</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-nha-nha-chung-6875.html"
                                   title="Nhà Chung">
                                    <img src="uploads/images/dao-quoc-viet-1244/images_rz/430x280thiet-ke-nha-tai-ho-chi-minh-01534229632.jpg"
                                         alt="thiết kế Nhà tại Hồ Chí Minh Nhà Chung 0 1534229633"
                                         title="thiết kế Nhà tại Hồ Chí Minh Nhà Chung 0 1534229633"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-nha-nha-chung-6875.html"
                                   title="Nhà Chung">
                                    <b>Nhà Chung</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 14/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-ngoi-nha-yen-binh-6873.html"
                                           title="Ngôi Nhà Yên Bình">
                                            <h3><b>Ngôi Nhà Yên Bình</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 14/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-biet-thu-eden-villa-6871.html"
                                           title="Eden Villa">
                                            <h3><b>Eden Villa</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/daoquocviet.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-914" style="display:none"><p>Danh sách công trình của KTS Anh
                            Lê</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-orchard-garden-6523.html"
                                   title="ORCHARD GARDEN">
                                    <img src="uploads/images/anh-le-914/images_rz/430x280thiet-ke-noi-that-chung-cu-tai-ho-chi-minh-01533194486.jpg"
                                         alt="thiết kế nội thất chung cư tại Hồ Chí Minh ORCHARD GARDEN 0 1533194487"
                                         title="thiết kế nội thất chung cư tại Hồ Chí Minh ORCHARD GARDEN 0 1533194487"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-orchard-garden-6523.html"
                                   title="ORCHARD GARDEN">
                                    <b>ORCHARD GARDEN</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 02/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-kingston-residence-6522.html"
                                           title="Kingston Residence">
                                            <h3><b>Kingston Residence</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 02/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-the-goldview-6521.html"
                                           title="The GoldView">
                                            <h3><b>The Goldview</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 02/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-can-ho-oriental-plaza-6520.html"
                                           title="Căn Hộ Oriental Plaza">
                                            <h3><b>Căn Hộ Oriental Plaza</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 02/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-du-an-madison-6519.html"
                                           title="Dự Án Madison">
                                            <h3><b>Dự Án Madison</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/anhle.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-842" style="display:none"><p>Danh sách công trình của KTS Mai
                            Văn Dũng</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-thiet-ke-noi-that-can-ho-duplex-du-an-my-dinh-pearl-7935.html"
                                   title="Thiết kế nội thất căn hộ Duplex dự án Mỹ Đình Pearl">
                                    <img src="uploads/images/mai-van-dung-842/images_rz/430x280thiet-ke-noi-that-chung-cu-tai-ha-noi-01538726993.jpg"
                                         alt="thiết kế nội thất chung cư tại Hà Nội Thiết kế nội thất căn hộ Duplex dự án Mỹ Đình Pearl 0 1538726995"
                                         title="thiết kế nội thất chung cư tại Hà Nội Thiết kế nội thất căn hộ Duplex dự án Mỹ Đình Pearl 0 1538726995"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-thiet-ke-noi-that-can-ho-duplex-du-an-my-dinh-pearl-7935.html"
                                   title="Thiết kế nội thất căn hộ Duplex dự án Mỹ Đình Pearl">
                                    <b>Thiết kế nội thất căn hộ Duplex dự án Mỹ Đình Pearl</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 28/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-vinhomes-gardenia-hn-7296.html"
                                           title="VINHOMES GARDENIA - HN">
                                            <h3><b>Vinhomes Gardenia - Hn</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        1 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 28/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-biet-thu-villa-quang-ninh-7292.html"
                                           title="Villa Quang Ninh">
                                            <h3><b>Villa Quang Ninh</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 28/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-apartments-centerfield-ha-noi-7289.html"
                                           title="Apartments - CenterField, Ha Noi">
                                            <h3><b>Apartments - Centerfield, Ha Noi</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 09/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-cai-tao-chung-cu-hien-dai-me-tri-6153.html"
                                           title="Cải tạo chung cư hiện đại - Mễ Trì">
                                            <h3><b>Cải Tạo Chung Cư Hiện Đại - Mễ Trì</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/MaiVanDung.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-1252" style="display:none"><p>Danh sách công trình của KTS
                            Nguyễn Việt Hùng</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-chung-cu-cao-cap-golden-palace-6923.html"
                                   title="Chung cư cao cấp Golden Palace">
                                    <img src="uploads/images/nguyen-viet-hung-1252/images_rz/430x280thiet-ke-noi-that-chung-cu-tai-ha-noi-31534315162.jpg"
                                         alt="thiết kế nội thất chung cư tại Hà Nội Chung cư cao cấp Golden Palace 3 1534315162"
                                         title="thiết kế nội thất chung cư tại Hà Nội Chung cư cao cấp Golden Palace 3 1534315162"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-chung-cu-cao-cap-golden-palace-6923.html"
                                   title="Chung cư cao cấp Golden Palace">
                                    <b>Chung cư cao cấp Golden Palace</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 15/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-nha-hang-tirant-restaurant-6922.html"
                                           title="Tirant Restaurant">
                                            <h3><b>Tirant Restaurant</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 15/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-nha-chi-linh-royal-city-6921.html"
                                           title="Nhà chị Linh Royal City">
                                            <h3><b>Nhà Chị Linh Royal City</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 15/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-chung-cu-cao-cap-eurowindow-6920.html"
                                           title="Chung cư cao cấp EuroWindow">
                                            <h3><b>Chung Cư Cao Cấp Eurowindow</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 15/08/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-chung-cu-cao-cap-royal-city-6919.html"
                                           title="Chung cư cao cấp Royal City">
                                            <h3><b>Chung Cư Cao Cấp Royal City</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/NguyenVietHung.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-836" style="display:none"><p>Danh sách công trình của KTS
                            Đoàn Phú Hải</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-biet-thu-orchird-villa-vinhomes-riverside-long-bien-6128.html"
                                   title="Orchird Villa - Vinhomes Riverside Long Biên">
                                    <img src="uploads/images/doan-phu-hai-836/images_rz/430x280kien-truc-su-thiet-ke-noi-that-biet-thu-3-tang-ha-noi-orchird-villa-vinhomes-riverside-long-bien-61530862447.jpg"
                                         alt="thiết kế Nội thất Biệt Thự 3 tầng Hà Nội Orchird Villa - Vinhomes Riverside Long Biên 6 1530862449"
                                         title="thiết kế Nội thất Biệt Thự 3 tầng Hà Nội Orchird Villa - Vinhomes Riverside Long Biên 6 1530862449"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-biet-thu-orchird-villa-vinhomes-riverside-long-bien-6128.html"
                                   title="Orchird Villa - Vinhomes Riverside Long Biên">
                                    <b>Orchird Villa - Vinhomes Riverside Long Biên</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>4.5/5
                                    (2)</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 06/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-vinhomes-gardenia-6127.html"
                                           title="Vinhomes Gardenia">
                                            <h3><b>Vinhomes Gardenia</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 06/07/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-nha-nho-penthouse-ta-6126.html"
                                           title="Penthouse TA">
                                            <h3><b>Penthouse Ta</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/HaiDoan.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                    <div class="slide-right-box target-3277" style="display:none"><p>Danh sách công trình của KTS
                            Nguyễn Văn Thắng</p>
                        <div class="slide-line"></div>
                        <p>Công trình được đánh giá cao nhất</p>
                        <div class="row project-hot">
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-chung-cu-imperia-garden-7962.html"
                                   title="Chung cư Imperia Garden">
                                    <img src="uploads/images/nguyen-van-thang-3277/images_rz/430x280thiet-ke-noi-that-chung-cu-tai-ha-noi-01539155236.jpg"
                                         alt="thiết kế nội thất chung cư tại Hà Nội Chung cư Imperia Garden 0 1539155238"
                                         title="thiết kế nội thất chung cư tại Hà Nội Chung cư Imperia Garden 0 1539155238"
                                         class="img-responsive"
                                         style="margin-bottom: 5px;margin-top: 5px;"/>
                                </a>
                            </div>
                            <div class="col-md-6 md-6">
                                <a href="thiet-ke-noi-that-chung-cu-chung-cu-imperia-garden-7962.html"
                                   title="Chung cư Imperia Garden">
                                    <b>Chung cư Imperia Garden</b>
                                </a>
                                <p>Đánh giá khách hàng</p>
                                <b>5/5
                                    ()</b>
                                <p>Đánh giá chuyên gia</p>
                                <b>5/5
                                    ()</b>
                            </div>
                        </div>
                        <p>Công trình mới cập nhật</p>
                        <div class="slide-line"></div>
                        <ul class="list-unstyled" style="margin-bottom: 0">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 09/10/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-a-chien-phuc-tho-7953.html"
                                           title="A Chiến Phúc Thọ">
                                            <h3><b>A Chiến Phúc Thọ</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 08/10/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-van-phong-van-phong-licogi-10-7946.html"
                                           title="Văn phòng Licogi 10">
                                            <h3><b>Văn Phòng Licogi 10</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 06/10/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-du-an-219-truong-dinh-7941.html"
                                           title="Dự án 219 Trương Định">
                                            <h3><b>Dự Án 219 Trương Định</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        0 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <p>
                                            <i class="fa fa-clock-o"></i> 04/10/2018 </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xl-6">
                                        <a href="thiet-ke-noi-that-chung-cu-no3-t3b-kdt-ngoai-giao-doan-7924.html"
                                           title="NO3-T3B KĐT Ngoại Giao Đoàn">
                                            <h3><b>No3-t3b Kđt Ngoại Giao Đoàn</b></h3>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        1 <i class="fa fa-heart" style="color: red"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a href="kien-truc-su/thanhvietcorp.html" class="a-green"
                                                       title="Xem trang cá nhân">Xem trang cá nhân</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="du-an-index">
    <div class="container">
        <div class="h3 text-center">
            <b>CÁC DỰ ÁN MỚI NHẤT CỦA KIẾN TRÚC SƯ VIỆT NAM</b>
        </div>
        <div class="row">
            <div class="col-md-4 md-4">

                <div class="index-project">
                    <div class="index-project-img">

                        <!--<div>
                            <button type="button" onclick="javascript:likedProject(this,7746)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->

                        <div class="overlay">
                            <div class="bg-project-img background-size-0"
                                 style="background-image: url(uploads/images/nguyen-phi-quyet-3174/images/thiet-ke-noi-that-nha-tai-ha-tinh-21537511381.jpg)">
                                <a href="thiet-ke-noi-that-nha-noi-that-nha-anh-anh-7746.html"
                                   title="Nội thất nhà anh Anh">
                                    <img src="uploads/images/nguyen-phi-quyet-3174/images_rz/430x280thiet-ke-noi-that-nha-tai-ha-tinh-21537511381.jpg"
                                         alt="thiết kế nội thất Nhà tại Hà Tĩnh Nội thất nhà anh Anh 2 1537511381"
                                         title="thiết kế nội thất Nhà tại Hà Tĩnh Nội thất nhà anh Anh 2 1537511381"
                                         class="img-responsive"/>
                                </a>
                            </div>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="thiet-ke-noi-that-nha-noi-that-nha-anh-anh-7746.html"
                                       title="Nội thất nhà anh Anh">Xem
                                        thêm</a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-project-info">
                        <a href="kien-truc-su/1000100100113174.html" title="Nguyễn Phi Quyết">
                            <div class="project-avatar"
                                 style="background-image: url('uploads/images/nguyen-phi-quyet-3174/images_rz/200x200628avatar%20-1540536221-kien-truc-su.jpeg')"></div>
                        </a>
                        <div class="project-avatar-name">
                            <a href="kien-truc-su/1000100100113174.html" title="Nguyễn Phi Quyết">
                                Nguyễn Phi Quyết </a>
                        </div>
                        <div class="project-name">
                            <h2>
                                <a href="thiet-ke-noi-that-nha-noi-that-nha-anh-anh-7746.html"
                                   title="Nội thất nhà anh Anh">
                                    <b>Nội Thất Nhà Anh Anh</b>
                                </a>
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="project-line case-share-mobile"></div>
                        <div class="project-like case-share-mobile KTtooltip">
                            <span class="KTtooltiptext">Lưu lại vào mục <b>Yêu Thích</b></span>
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7746)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 2
                            </button>
                        </div>
                        <div class="project-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('thiet-ke-noi-that-nha-noi-that-nha-anh-anh-7746.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('thiet-ke-noi-that-nha-noi-that-nha-anh-anh-7746.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('thiet-ke-noi-that-nha-noi-that-nha-anh-anh-7746.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-project">
                    <div class="index-project-img">

                        <!--<div>
                            <button type="button" onclick="javascript:likedProject(this,7742)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->

                        <div class="overlay">
                            <div class="bg-project-img background-size-1"
                                 style="background-image: url(uploads/images/bui-ngoc-tuan-3150/images/thiet-ke-noi-that-showroom-tai-son-la-21537509672.jpg)">
                                <a href="thiet-ke-noi-that-showroom-salon-toc-thanh-lee-7742.html"
                                   title="Salon tóc Thanh lee">
                                    <img src="uploads/images/bui-ngoc-tuan-3150/images_rz/430x280thiet-ke-noi-that-showroom-tai-son-la-21537509672.jpg"
                                         alt="thiết kế nội thất Showroom tại Sơn La Salon tóc Thanh lee 2 1537509672"
                                         title="thiết kế nội thất Showroom tại Sơn La Salon tóc Thanh lee 2 1537509672"
                                         class="img-responsive"/>
                                </a>
                            </div>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="thiet-ke-noi-that-showroom-salon-toc-thanh-lee-7742.html"
                                       title="Salon tóc Thanh lee">Xem
                                        thêm</a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-project-info">
                        <a href="kien-truc-su/ngoctuan.html" title="Bùi Ngọc Tuấn">
                            <div class="project-avatar"
                                 style="background-image: url('uploads/images/bui-ngoc-tuan-3150/images_rz/200x200177avatar%20-1540536318-kien-truc-su.jpg')"></div>
                        </a>
                        <div class="project-avatar-name">
                            <a href="kien-truc-su/ngoctuan.html" title="Bùi Ngọc Tuấn">
                                Bùi Ngọc Tuấn </a>
                        </div>
                        <div class="project-name">
                            <h2>
                                <a href="thiet-ke-noi-that-showroom-salon-toc-thanh-lee-7742.html"
                                   title="Salon tóc Thanh lee">
                                    <b>Salon Tóc Thanh Lee</b>
                                </a>
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="project-line case-share-mobile"></div>
                        <div class="project-like case-share-mobile KTtooltip">
                            <span class="KTtooltiptext">Lưu lại vào mục <b>Yêu Thích</b></span>
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7742)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="project-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('thiet-ke-noi-that-showroom-salon-toc-thanh-lee-7742.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('thiet-ke-noi-that-showroom-salon-toc-thanh-lee-7742.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('thiet-ke-noi-that-showroom-salon-toc-thanh-lee-7742.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-project">
                    <div class="index-project-img">

                        <!--<div>
                            <button type="button" onclick="javascript:likedProject(this,7741)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->

                        <div class="overlay">
                            <div class="bg-project-img background-size-1"
                                 style="background-image: url(uploads/images/bui-ngoc-tuan-3150/images/thiet-ke-noi-that-shop-tai-son-la-61537509273.jpg)">
                                <a href="thiet-ke-noi-that-shop-shop-thoi-trang-chi-van-7741.html"
                                   title="Shop thời trang chị Vân">
                                    <img src="uploads/images/bui-ngoc-tuan-3150/images_rz/430x280thiet-ke-noi-that-shop-tai-son-la-61537509273.jpg"
                                         alt="thiết kế nội thất Shop tại Sơn La Shop thời trang chị Vân 6 1537509273"
                                         title="thiết kế nội thất Shop tại Sơn La Shop thời trang chị Vân 6 1537509273"
                                         class="img-responsive"/>
                                </a>
                            </div>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="thiet-ke-noi-that-shop-shop-thoi-trang-chi-van-7741.html"
                                       title="Shop thời trang chị Vân">Xem
                                        thêm</a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-project-info">
                        <a href="kien-truc-su/ngoctuan.html" title="Bùi Ngọc Tuấn">
                            <div class="project-avatar"
                                 style="background-image: url('uploads/images/bui-ngoc-tuan-3150/images_rz/200x200177avatar%20-1540536318-kien-truc-su.jpg')"></div>
                        </a>
                        <div class="project-avatar-name">
                            <a href="kien-truc-su/ngoctuan.html" title="Bùi Ngọc Tuấn">
                                Bùi Ngọc Tuấn </a>
                        </div>
                        <div class="project-name">
                            <h2>
                                <a href="thiet-ke-noi-that-shop-shop-thoi-trang-chi-van-7741.html"
                                   title="Shop thời trang chị Vân">
                                    <b>Shop Thời Trang Chị Vân</b>
                                </a>
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="project-line case-share-mobile"></div>
                        <div class="project-like case-share-mobile KTtooltip">
                            <span class="KTtooltiptext">Lưu lại vào mục <b>Yêu Thích</b></span>
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7741)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="project-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('thiet-ke-noi-that-shop-shop-thoi-trang-chi-van-7741.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('thiet-ke-noi-that-shop-shop-thoi-trang-chi-van-7741.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('thiet-ke-noi-that-shop-shop-thoi-trang-chi-van-7741.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-project">
                    <div class="index-project-img">

                        <!--<div>
                            <button type="button" onclick="javascript:likedProject(this,7740)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->

                        <div class="overlay">
                            <div class="bg-project-img background-size-1"
                                 style="background-image: url(uploads/images/bui-ngoc-tuan-3150/images/thiet-ke-noi-that-shop-tai-son-la-71537509002.jpg)">
                                <a href="thiet-ke-noi-that-shop-shop-thoi-trang-tre-em-7740.html"
                                   title="Shop thời trang trẻ em">
                                    <img src="uploads/images/bui-ngoc-tuan-3150/images_rz/430x280thiet-ke-noi-that-shop-tai-son-la-71537509002.jpg"
                                         alt="thiết kế nội thất Shop tại Sơn La Shop thời trang trẻ em 7 1537509003"
                                         title="thiết kế nội thất Shop tại Sơn La Shop thời trang trẻ em 7 1537509003"
                                         class="img-responsive"/>
                                </a>
                            </div>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="thiet-ke-noi-that-shop-shop-thoi-trang-tre-em-7740.html"
                                       title="Shop thời trang trẻ em">Xem
                                        thêm</a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-project-info">
                        <a href="kien-truc-su/ngoctuan.html" title="Bùi Ngọc Tuấn">
                            <div class="project-avatar"
                                 style="background-image: url('uploads/images/bui-ngoc-tuan-3150/images_rz/200x200177avatar%20-1540536318-kien-truc-su.jpg')"></div>
                        </a>
                        <div class="project-avatar-name">
                            <a href="kien-truc-su/ngoctuan.html" title="Bùi Ngọc Tuấn">
                                Bùi Ngọc Tuấn </a>
                        </div>
                        <div class="project-name">
                            <h2>
                                <a href="thiet-ke-noi-that-shop-shop-thoi-trang-tre-em-7740.html"
                                   title="Shop thời trang trẻ em">
                                    <b>Shop Thời Trang Trẻ Em</b>
                                </a>
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="project-line case-share-mobile"></div>
                        <div class="project-like case-share-mobile KTtooltip">
                            <span class="KTtooltiptext">Lưu lại vào mục <b>Yêu Thích</b></span>
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7740)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="project-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('thiet-ke-noi-that-shop-shop-thoi-trang-tre-em-7740.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('thiet-ke-noi-that-shop-shop-thoi-trang-tre-em-7740.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('thiet-ke-noi-that-shop-shop-thoi-trang-tre-em-7740.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-project">
                    <div class="index-project-img">

                        <!--<div>
                            <button type="button" onclick="javascript:likedProject(this,7496)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->

                        <div class="overlay">
                            <div class="bg-project-img background-size-1"
                                 style="background-image: url(uploads/images/hai-an-1383/images/thiet-ke-noi-that-nha-mat-pho-tai-ha-noi-01536304938.jpg)">
                                <a href="thiet-ke-noi-that-nha-mat-pho-gumuda-yen-so-7496.html"
                                   title="Gumuda Yên Sở">
                                    <img src="uploads/images/hai-an-1383/images_rz/430x280thiet-ke-noi-that-nha-mat-pho-tai-ha-noi-01536304938.jpg"
                                         alt="thiết kế nội thất Nhà Mặt Phố tại Hà Nội Gumuda Yên Sở 0 1536304939"
                                         title="thiết kế nội thất Nhà Mặt Phố tại Hà Nội Gumuda Yên Sở 0 1536304939"
                                         class="img-responsive"/>
                                </a>
                            </div>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="thiet-ke-noi-that-nha-mat-pho-gumuda-yen-so-7496.html"
                                       title="Gumuda Yên Sở">Xem
                                        thêm</a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-project-info">
                        <a href="kien-truc-su/HaiAn.html" title="Hai An">
                            <div class="project-avatar"
                                 style="background-image: url('uploads/images/hai-an-1383/images_rz/200x200avatar-1536303867-kien-truc-su.jpg')"></div>
                        </a>
                        <div class="project-avatar-name">
                            <a href="kien-truc-su/HaiAn.html" title="Hai An">
                                Hai An </a>
                        </div>
                        <div class="project-name">
                            <h2>
                                <a href="thiet-ke-noi-that-nha-mat-pho-gumuda-yen-so-7496.html"
                                   title="Gumuda Yên Sở">
                                    <b>Gumuda Yên Sở</b>
                                </a>
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="project-line case-share-mobile"></div>
                        <div class="project-like case-share-mobile KTtooltip">
                            <span class="KTtooltiptext">Lưu lại vào mục <b>Yêu Thích</b></span>
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7496)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="project-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('thiet-ke-noi-that-nha-mat-pho-gumuda-yen-so-7496.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('thiet-ke-noi-that-nha-mat-pho-gumuda-yen-so-7496.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('thiet-ke-noi-that-nha-mat-pho-gumuda-yen-so-7496.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-project">
                    <div class="index-project-img">

                        <!--<div>
                            <button type="button" onclick="javascript:likedProject(this,7502)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->

                        <div class="overlay">
                            <div class="bg-project-img background-size-1"
                                 style="background-image: url(uploads/images/phan-thieu-1365/images/thiet-ke-noi-that-biet-thu-tai-da-nang-41536308767.jpg)">
                                <a href="thiet-ke-noi-that-biet-thu-th-villa-hien-dai-7502.html"
                                   title="TH_VILLA HIỆN ĐẠI">
                                    <img src="uploads/images/phan-thieu-1365/images_rz/430x280thiet-ke-noi-that-biet-thu-tai-da-nang-41536308767.jpg"
                                         alt="thiết kế nội thất Biệt Thự tại Đà Nẵng TH_VILLA HIỆN ĐẠI 4 1536308769"
                                         title="thiết kế nội thất Biệt Thự tại Đà Nẵng TH_VILLA HIỆN ĐẠI 4 1536308769"
                                         class="img-responsive"/>
                                </a>
                            </div>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="thiet-ke-noi-that-biet-thu-th-villa-hien-dai-7502.html"
                                       title="TH_VILLA HIỆN ĐẠI">Xem
                                        thêm</a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-project-info">
                        <a href="kien-truc-su/1000100100111365.html" title="Phan Hoàng Đăng Thiều">
                            <div class="project-avatar"
                                 style="background-image: url('uploads/images/phan-thieu-1365/images_rz/200x200avatar-kien-truc-su.jpg')"></div>
                        </a>
                        <div class="project-avatar-name">
                            <a href="kien-truc-su/1000100100111365.html" title="Phan Hoàng Đăng Thiều">
                                Phan Hoàng Đăng Thiều </a>
                        </div>
                        <div class="project-name">
                            <h2>
                                <a href="thiet-ke-noi-that-biet-thu-th-villa-hien-dai-7502.html"
                                   title="TH_VILLA HIỆN ĐẠI">
                                    <b>Th_villa Hiện Đại</b>
                                </a>
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="project-line case-share-mobile"></div>
                        <div class="project-like case-share-mobile KTtooltip">
                            <span class="KTtooltiptext">Lưu lại vào mục <b>Yêu Thích</b></span>
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7502)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 1
                            </button>
                        </div>
                        <div class="project-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('thiet-ke-noi-that-biet-thu-th-villa-hien-dai-7502.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('thiet-ke-noi-that-biet-thu-th-villa-hien-dai-7502.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('thiet-ke-noi-that-biet-thu-th-villa-hien-dai-7502.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center">
            <!--<p>&nbsp;</p>
            <div class="h4">Làm thế nào dự án của tôi được đăng trên đây?
                <a href="" title=""><span class="tim-hieu-them">Tìm hiểu thêm</span></a>
            </div>-->
            <a href="du-an-moi.html" title="Dự án mới">
                <button type="button" class="btn but-go-search-2">KHÁM PHÁ</button>
            </a>
        </div>
    </div>
</section>

<section class="bai-viet-index">
    <div class="container">

        <div class="h3 text-center">
            <b>CHIA SẺ BÍ QUYẾT TRANG TRÍ NHÀ BẠN</b>
        </div>

        <div class="row">

            <div class="col-md-4 md-4">

                <div class="index-news">
                    <div class="index-news-img">
                        <!--<div>
                            <button type="button"
                                    onclick="javascript:likedProject(this,8028)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->
                        <div class="overlay">
                            <a href="do-noi-that/9-y-tuong-thiet-ke-do-noi-that-gia-dinh-thong-minh-se-khien-cuoc-song-cua-ban-de-dang-hon-%26214.html"
                               title="9 Ý tưởng thiết kế đồ nội thất gia đình thông minh sẽ khiến cuộc sống của bạn dễ dàng hơn">
                                <img src="uploads/article/430x2809-y-tuong-thiet-ke-do-noi-that-gia-dinh-thong-minh-se-khien-cuoc-song-cua-ban-de-dang-hon15402631481.jpg"
                                     alt="no-image"
                                     class="img-responsive"/>
                            </a>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="do-noi-that/9-y-tuong-thiet-ke-do-noi-that-gia-dinh-thong-minh-se-khien-cuoc-song-cua-ban-de-dang-hon-&214.html"
                                       title="9 Ý tưởng thiết kế đồ nội thất gia đình thông minh sẽ khiến cuộc sống của bạn dễ dàng hơn">
                                        Xem thêm
                                    </a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-news-info">
                        <!--<div class="news-avatar">
                            <i class="fa fa-newspaper-o"></i>
                        </div>-->
                        <div class="news-name">
                            <a href="do-noi-that/9-y-tuong-thiet-ke-do-noi-that-gia-dinh-thong-minh-se-khien-cuoc-song-cua-ban-de-dang-hon-%26214.html"
                               title="9 Ý tưởng thiết kế đồ nội thất gia đình thông minh sẽ khiến cuộc sống của bạn dễ dàng hơn">
                                <h3><b>9 Ý tưởng thiết kế đồ nội thất gia đình thông minh sẽ khiến cuộc sống của bạn
                                        dễ dàng hơn</b></h3>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="news-line case-share-mobile"></div>
                        <div class="news-like case-share-mobile">
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,8028)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="news-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('do-noi-that/9-y-tuong-thiet-ke-do-noi-that-gia-dinh-thong-minh-se-khien-cuoc-song-cua-ban-de-dang-hon-%26214.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('do-noi-that/9-y-tuong-thiet-ke-do-noi-that-gia-dinh-thong-minh-se-khien-cuoc-song-cua-ban-de-dang-hon-%26214.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('do-noi-that/9-y-tuong-thiet-ke-do-noi-that-gia-dinh-thong-minh-se-khien-cuoc-song-cua-ban-de-dang-hon-%26214.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-news">
                    <div class="index-news-img">
                        <!--<div>
                            <button type="button"
                                    onclick="javascript:likedProject(this,7976)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->
                        <div class="overlay">
                            <a href="trang-tri-phong-bep/tao-an-tuong-voi-y-tuong-trang-tri-phong-bep-nho-ma-tien-nghi-%26170.html"
                               title="Tạo ấn tượng với ý tưởng trang trí phòng bếp nhỏ mà tiện nghi">
                                <img src="uploads/article/430x280tao-an-tuong-voi-y-tuong-trang-tri-phong-bep-nho-ma-tien-nghi15397611983.jpg"
                                     alt="no-image"
                                     class="img-responsive"/>
                            </a>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="trang-tri-phong-bep/tao-an-tuong-voi-y-tuong-trang-tri-phong-bep-nho-ma-tien-nghi-&170.html"
                                       title="Tạo ấn tượng với ý tưởng trang trí phòng bếp nhỏ mà tiện nghi">
                                        Xem thêm
                                    </a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-news-info">
                        <!--<div class="news-avatar">
                            <i class="fa fa-newspaper-o"></i>
                        </div>-->
                        <div class="news-name">
                            <a href="trang-tri-phong-bep/tao-an-tuong-voi-y-tuong-trang-tri-phong-bep-nho-ma-tien-nghi-%26170.html"
                               title="Tạo ấn tượng với ý tưởng trang trí phòng bếp nhỏ mà tiện nghi">
                                <h3><b>Tạo ấn tượng với ý tưởng trang trí phòng bếp nhỏ mà tiện nghi</b></h3>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="news-line case-share-mobile"></div>
                        <div class="news-like case-share-mobile">
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7976)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="news-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('trang-tri-phong-bep/tao-an-tuong-voi-y-tuong-trang-tri-phong-bep-nho-ma-tien-nghi-%26170.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('trang-tri-phong-bep/tao-an-tuong-voi-y-tuong-trang-tri-phong-bep-nho-ma-tien-nghi-%26170.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('trang-tri-phong-bep/tao-an-tuong-voi-y-tuong-trang-tri-phong-bep-nho-ma-tien-nghi-%26170.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-news">
                    <div class="index-news-img">
                        <!--<div>
                            <button type="button"
                                    onclick="javascript:likedProject(this,7948)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->
                        <div class="overlay">
                            <a href="nha-cap-4/mau-nha-cap-4-dep-va-gia-re-o-nong-thon-%26154.html"
                               title="Mẫu nhà cấp 4 đẹp và giá rẻ ở nông thôn">
                                <img src="uploads/article/430x280mau-nha-cap-4-dep-va-gia-re-o-nong-thon15389809080.jpg"
                                     alt="no-image"
                                     class="img-responsive"/>
                            </a>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="nha-cap-4/mau-nha-cap-4-dep-va-gia-re-o-nong-thon-&154.html"
                                       title="Mẫu nhà cấp 4 đẹp và giá rẻ ở nông thôn">
                                        Xem thêm
                                    </a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-news-info">
                        <!--<div class="news-avatar">
                            <i class="fa fa-newspaper-o"></i>
                        </div>-->
                        <div class="news-name">
                            <a href="nha-cap-4/mau-nha-cap-4-dep-va-gia-re-o-nong-thon-%26154.html"
                               title="Mẫu nhà cấp 4 đẹp và giá rẻ ở nông thôn">
                                <h3><b>Mẫu nhà cấp 4 đẹp và giá rẻ ở nông thôn</b></h3>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="news-line case-share-mobile"></div>
                        <div class="news-like case-share-mobile">
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7948)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="news-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('nha-cap-4/mau-nha-cap-4-dep-va-gia-re-o-nong-thon-%26154.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('nha-cap-4/mau-nha-cap-4-dep-va-gia-re-o-nong-thon-%26154.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('nha-cap-4/mau-nha-cap-4-dep-va-gia-re-o-nong-thon-%26154.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-news">
                    <div class="index-news-img">
                        <!--<div>
                            <button type="button"
                                    onclick="javascript:likedProject(this,7928)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->
                        <div class="overlay">
                            <a href="trang-tri-phong-ngu/ngat-lim-voi-cac-mau-thiet-ke-trang-tri-phong-ngu-don-gian-ma-dep-den-kho-quen-%26153.html"
                               title="Ngất lịm với các mẫu thiết kế trang trí phòng ngủ đơn giản mà đẹp đến khó quên">
                                <img src="uploads/article/430x280ngat-lim-voi-cac-mau-thiet-ke-trang-tri-phong-ngu-don-gian-ma-dep-den-kho-quen15386396660.jpg"
                                     alt="no-image"
                                     class="img-responsive"/>
                            </a>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="trang-tri-phong-ngu/ngat-lim-voi-cac-mau-thiet-ke-trang-tri-phong-ngu-don-gian-ma-dep-den-kho-quen-&153.html"
                                       title="Ngất lịm với các mẫu thiết kế trang trí phòng ngủ đơn giản mà đẹp đến khó quên">
                                        Xem thêm
                                    </a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-news-info">
                        <!--<div class="news-avatar">
                            <i class="fa fa-newspaper-o"></i>
                        </div>-->
                        <div class="news-name">
                            <a href="trang-tri-phong-ngu/ngat-lim-voi-cac-mau-thiet-ke-trang-tri-phong-ngu-don-gian-ma-dep-den-kho-quen-%26153.html"
                               title="Ngất lịm với các mẫu thiết kế trang trí phòng ngủ đơn giản mà đẹp đến khó quên">
                                <h3><b>Ngất lịm với các mẫu thiết kế trang trí phòng ngủ đơn giản mà đẹp đến khó
                                        quên</b></h3>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="news-line case-share-mobile"></div>
                        <div class="news-like case-share-mobile">
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7928)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="news-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('trang-tri-phong-ngu/ngat-lim-voi-cac-mau-thiet-ke-trang-tri-phong-ngu-don-gian-ma-dep-den-kho-quen-%26153.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('trang-tri-phong-ngu/ngat-lim-voi-cac-mau-thiet-ke-trang-tri-phong-ngu-don-gian-ma-dep-den-kho-quen-%26153.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('trang-tri-phong-ngu/ngat-lim-voi-cac-mau-thiet-ke-trang-tri-phong-ngu-don-gian-ma-dep-den-kho-quen-%26153.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-news">
                    <div class="index-news-img">
                        <!--<div>
                            <button type="button"
                                    onclick="javascript:likedProject(this,7927)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->
                        <div class="overlay">
                            <a href="trang-tri-phong-ngu/khoi-goi-cam-hung-ngay-voi-nhung-y-tuong-trang-tri-phong-ngu-de-thuong-%26152.html"
                               title="Khơi gợi cảm hứng ngay với những ý tưởng trang trí phòng ngủ dễ thương">
                                <img src="uploads/article/430x280khoi-goi-cam-hung-ngay-voi-nhung-y-tuong-trang-tri-phong-ngu-de-thuong15386350380.jpg"
                                     alt="no-image"
                                     class="img-responsive"/>
                            </a>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="trang-tri-phong-ngu/khoi-goi-cam-hung-ngay-voi-nhung-y-tuong-trang-tri-phong-ngu-de-thuong-&152.html"
                                       title="Khơi gợi cảm hứng ngay với những ý tưởng trang trí phòng ngủ dễ thương">
                                        Xem thêm
                                    </a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-news-info">
                        <!--<div class="news-avatar">
                            <i class="fa fa-newspaper-o"></i>
                        </div>-->
                        <div class="news-name">
                            <a href="trang-tri-phong-ngu/khoi-goi-cam-hung-ngay-voi-nhung-y-tuong-trang-tri-phong-ngu-de-thuong-%26152.html"
                               title="Khơi gợi cảm hứng ngay với những ý tưởng trang trí phòng ngủ dễ thương">
                                <h3><b>Khơi gợi cảm hứng ngay với những ý tưởng trang trí phòng ngủ dễ thương</b>
                                </h3>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="news-line case-share-mobile"></div>
                        <div class="news-like case-share-mobile">
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7927)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="news-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('trang-tri-phong-ngu/khoi-goi-cam-hung-ngay-voi-nhung-y-tuong-trang-tri-phong-ngu-de-thuong-%26152.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('trang-tri-phong-ngu/khoi-goi-cam-hung-ngay-voi-nhung-y-tuong-trang-tri-phong-ngu-de-thuong-%26152.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('trang-tri-phong-ngu/khoi-goi-cam-hung-ngay-voi-nhung-y-tuong-trang-tri-phong-ngu-de-thuong-%26152.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 md-4">

                <div class="index-news">
                    <div class="index-news-img">
                        <!--<div>
                            <button type="button"
                                    onclick="javascript:likedProject(this,7926)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>-->
                        <div class="overlay">
                            <a href="do-noi-that/phong-khach-nen-trung-do-gi-%26151.html"
                               title="Phòng khách nên trưng đồ gì?">
                                <img src="uploads/article/430x280phong-khach-nen-trung-do-gi15386215025.jpg"
                                     alt="no-image"
                                     class="img-responsive"/>
                            </a>
                            <!--<div class="overlay-bg transition"></div>
                            <div class="overlay-text transition">
                                <label>
                                    <a href="do-noi-that/phong-khach-nen-trung-do-gi-&151.html"
                                       title="Phòng khách nên trưng đồ gì?">
                                        Xem thêm
                                    </a>
                                </label>
                            </div>-->
                        </div>
                    </div>
                    <div class="index-news-info">
                        <!--<div class="news-avatar">
                            <i class="fa fa-newspaper-o"></i>
                        </div>-->
                        <div class="news-name">
                            <a href="do-noi-that/phong-khach-nen-trung-do-gi-%26151.html"
                               title="Phòng khách nên trưng đồ gì?">
                                <h3><b>Phòng khách nên trưng đồ gì?</b></h3>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="news-line case-share-mobile"></div>
                        <div class="news-like case-share-mobile">
                            <button class="btn btn-link no-underline" onclick="javascript:likedProject(this,7926)"
                                    style="padding-left: 0">
                                <i class="fa fa-heart-o"></i> 0
                            </button>
                        </div>
                        <div class="news-share case-share-mobile">
                            <div class="hover-social" style="float: right">
                                <button class="btn btn-link">
                                    <i class="fa fa-share"></i>
                                </button>
                                <div class="hover-social-icon right no-border padding-1-0">
                                    <button type="button" class=""
                                            onclick="javascript:callShareFb('do-noi-that/phong-khach-nen-trung-do-gi-%26151.html');"
                                            title="facebook">
                                        <i class="fa fa-facebook"></i>acebook
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callShareGl('do-noi-that/phong-khach-nen-trung-do-gi-%26151.html');"
                                            title="google">
                                        <i class="fa fa-google"></i>oogle
                                    </button>
                                    <button type="button" class=""
                                            onclick="javascript:callSharePt('do-noi-that/phong-khach-nen-trung-do-gi-%26151.html');"
                                            title="pinterest">
                                        <i class="fa fa-pinterest-p"></i>interest
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>

        </div>

        <div class="text-center">
            <a href="tap-chi.html" title="Bài viết">
                <button type="button" class="btn but-go-search-2">KHÁM PHÁ</button>
            </a>
        </div>
        <p>&nbsp;</p>
    </div>
</section>

<section>
    <div class="banner-get-info">
        <div class="container">
            <div class="pull-right col-md-4 text-center">
                <div class="h3 bor-text">
                    HƯỚNG DẪN TRỞ THÀNH KIẾN TRÚC SƯ TRÊN HỆ THỐNG
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ tên">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Địa chỉ">
                    </div>
                    <button type="submit" class="btn but-go-search-2">ĐĂNG KÝ NGAY</button>
                </form>
            </div>
        </div>
    </div>
</section>