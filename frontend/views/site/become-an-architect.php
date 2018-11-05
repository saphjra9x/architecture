<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use common\helpers\FunctionHelper;
use yii\helpers\Url;

/** @var $category \common\models\Category */

$this->title = $category['title'];

$this->registerMetaTag([
    'name' => 'description',
    'content' => $category['seoTool']['meta_description']
]);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['site/view', 'category_slug' => $category['slug']], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'category'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $category['seoTool']['seo_title']
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $category['seoTool']['meta_description']
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to([$category['avatar']], true)
]);
?>

<?php foreach (FunctionHelper::get_tab_by_category_id($category['id']) as $key_tab => $value_tab): ?>
    <?php if ($key_tab == 0): ?>
        <section>
            <div class="part-01-banner-top" style="background: #f1f1f1 url('<?= $value_tab['avatar'] ?>') no-repeat;
                    background-position: center;
                    background-size: 100% auto;">
                <div class="container">
                    <div class="col-md-6">
                        <h1><?= $value_tab['title'] ?></h1>
                        <p><?= $value_tab['describe'] ?></p>
                        <p class="text-center"><?= $value_tab['content'] ?></p>
                        <p class="text-center">
                            <a href="#">
                                <button class="btn but-go-search-2">ĐĂNG KÍ NGAY</button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;
endforeach; ?>

<section>
    <div class="part-02-content">
        <div class="container">
            <?php foreach (FunctionHelper::get_tab_by_category_id($category['id']) as $key_tab => $value_tab): ?>
                <?php if ($key_tab == 1): ?>
                    <h2 class="text-center">
                        <?= $value_tab['title']; ?>
                    </h2>
                    <div class="clearfix"></div>
                    <?php foreach ($value_tab['images0'] as $key_img => $value_img): ?>
                        <div class="col-md-4 md-4">
                            <div class="img-tron">
                                <img src="<?= $value_img['avatar'] ?>" alt="no-image" class="img-responsive">
                            </div>
                            <h3><?= $value_img['title'] ?></h3>
                        </div>
                    <?php endforeach; ?>
                <?php endif;
            endforeach; ?>
            <div class="clearfix"></div>
            <h2 class="text-center">3 bước để trở thành kiến trúc sư của hệ thống</h2>
            <div class="clearfix"></div>

            <div class="col-md-4 md-4">
                <div class="img-tron">
                    <b class="fa fa-user-circle-o fa-4"></b>
                    <span class="step-01">1</span>
                </div>
                <h3>Trở thành user của hệ thống KIENTRUC.com</h3>
            </div>
            <div class="col-md-4 md-4">
                <div class="img-tron">
                    <b class="fa fa-file-text-o fa-4" style="margin-left: 51px"></b>
                    <span class="step-01">2</span>
                </div>
                <h3>Đăng ký đầy đủ thông tin bản thân mình</h3>
            </div>
            <div class="col-md-4 md-4">
                <div class="img-tron">
                    <b class="fa fa-cloud-upload fa-4"></b>
                    <span class="step-01">3</span>
                </div>
                <h3>Upload ít nhất 1 dự án của cá nhân</h3>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="part-03-banner-footer">
        <div class="container">
            <div class="kts-hot" style="border-bottom: 0">
                <div class="col-md-6 kts-hot-left">

                    <div class="container-slide-kts">
                        <div class="container-slide-item-kts" data-info="3" data-target="1">
                            <div class="container-slide-item-img-kts">
                                <img src="image/y-kien/KTS QuanTrongHung.jpg" alt="no-image" class="img-responsive">
                            </div>
                        </div>
                        <div class="container-slide-item-kts" data-info="4" data-target="2">
                            <div class="container-slide-item-img-kts">
                                <img src="image/y-kien/KTS Le Trung Kien.jpg" alt="no-image" class="img-responsive">
                            </div>
                        </div>
                        <div class="container-slide-item-kts" data-info="4" data-target="3">
                            <div class="container-slide-item-img-kts">
                                <img src="image/y-kien/KTS Duong Tien Huy.jpg" alt="no-image" class="img-responsive">
                            </div>
                        </div>
                        <div class="container-slide-item-kts active" data-info="1" data-target="4">
                            <div class="container-slide-item-img-kts">
                                <img src="image/y-kien/KTS Tran Qui Dat.jpg" alt="no-image" class="img-responsive">
                            </div>
                        </div>
                        <div class="container-slide-item-kts" data-info="2" data-target="5">
                            <div class="container-slide-item-img-kts">
                                <img src="image/y-kien/KTS Nguyễn Hữu Tiến.jpg" alt="no-image" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="posotion-re">
                        <button type="button" class="btn btn-link"
                                onclick="javascript:return prevSlide01('.container-slide-item-kts');"><i
                                    class="fa fa-angle-left"></i></button>
                        <button type="button" class="btn btn-link"
                                onclick="javascript:return nextSlide01('.container-slide-item-kts');"><i
                                    class="fa fa-angle-right"></i></button>
                    </div>

                </div>
                <div class="col-md-6 kts-hot-right">

                    <div class="slide-kts-content bang-02">
                        <div class="slide-text-content target-1" style="display: none;">
                            <b>Kiến trúc sư Quản Trọng Hùng</b>
                            <p>" Từ ngày biết đến kientruc.com, tôi có nhiều cơ hội gặp các khách hàng có nhu cầu thiết
                                kế văn phòng hơn, cả Hà Nội lẫn Sài Gòn. Công việc tìm nguồn doanh thu mới cho công ty
                                cũng trở lên dễ thở hơn ..."</p>
                            <p class="text-right">Giám đốc công ty kientrucvang.vn</p>
                        </div>
                        <div class="slide-text-content target-2" style="display: none;">
                            <b>Kiến trúc sư Lê Trung Kiên</b>
                            <p>" kientruc.com cho tôi cơ hội kiếm thêm thu nhập và nuôi dưỡng ước mơ thiết kế những công
                                trình chất-độc-lạ. Đây là 1 trang web rất hay cho những kiến trúc sư thích làm freelance
                                như tôi... "</p>
                            <p class="text-right">Kiến trúc sư tại New Space</p>
                        </div>
                        <div class="slide-text-content target-3" style="display: none;">
                            <b>Kiến trúc sư Dương Tiến Huy</b>
                            <p>" Từ ngày biết đến trang kientruc.com, tôi có cơ hội gặp nhiều khách hàng và tư vấn khách
                                hàng nhanh chóng và dễ dàng nhất. Cũng chính vì sự nhiệt tình đó, khách hàng chủ động
                                hẹn gặp và kí hợp đồng thiết kế một cách tự nhiên ..."</p>
                            <p class="text-right"> Kiến trúc sư Freelance</p>
                        </div>
                        <div class="slide-text-content target-4" style="">
                            <b>Kiến trúc sư Trần Quý Đạt</b>
                            <p>" Dự án này mở ra cho tôi 1 cách cực kì dễ dàng và tiện lợi để tìm những khách hàng có
                                nhu cầu xây sửa nhà cửa. Tôi cực kỳ thích vì nó khá tiện lợi, có thể sử dụng điện thoại
                                để tư vấn trực tiếp khách hàng của mình... "</p>
                            <p class="text-right">Kiến trúc sư tại MIK</p>
                        </div>
                        <div class="slide-text-content target-5" style="display: none;">
                            <b>Kiến Trúc Sư Nguyễn Hữu Tiến</b>
                            <p>" Trước giờ mình chỉ nghĩ FB và GG là 2 kênh hiệu quả để kiếm khách hàng thiết kế. Nhưng
                                với các bạn kiến trúc sư thích làm freelance và studio mới thành lập thì kientruc.com là
                                1 kênh cực kỳ độc đáo và dành riêng cho những người yêu nghề như mình "</p>
                            <p class="text-right">Giám đốc A4 Architect</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<div class="container">
    <div class="col-md-12 text-center" style="margin-bottom: 20px">
        <a href="uplevelkts/index">
            <button class="btn but-go-search-2">ĐĂNG KÍ NGAY</button>
        </a>
    </div>
</div>

