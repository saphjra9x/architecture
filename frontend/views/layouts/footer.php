<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use yii\helpers\Url;

$ft_left = FunctionHelper::get_setting_by_key('ch3');
$ft_center = FunctionHelper::get_setting_by_key('ch4');
$fb = FunctionHelper::get_general_information()['page_facebook'];
?>
<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="logo-bottom">
                    <img src="image/kientruc.com.jpg" alt="KIENTRUC.com" title="KIENTRUC.com"
                         class="img-responsive"/>
                </div>
                <div class="info-bottom">
                    <ul class="list-unstyled">
                        <li>KIENTRUC.com</li>
                        <li><p style="font-size: 12px;">&copy; 2015-2018 KIENTRUC.com jsc</p></li>
                        <!--<li>284/57 Lý Thường Kiệt, P.14. Q10. HCM</li>
                        <li>Email: cskh@kientruc.com</li>
                        <li>Hotline: 0937 66 99 66</li>
                        <li>Giấy phép số: 0314145398</li>-->
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="foot-h4-title">Khám phá</div>
                <ul class="list-unstyled foot-ul">
                    <li><a href="index.html" title="Trang chủ">Trang chủ</a></li>
                    <li><a href="hoi-dap.html" title="Hỏi chuyên gia">Hỏi chuyên gia</a></li>
                    <li><a href="tim-kien-truc-su.html" title="Tìm kiến trúc sư">Tìm kiến trúc sư</a></li>
                    <li><a href="du-an-moi.html" title="Dự án mới">Dự án mới</a></li>
                    <li><a href="tap-chi.html" title="Tạp chí">Tạp chí</a></li>
                    <li><a href="showroom.html" title="Showroom">Showroom</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="foot-h4-title">PHONG THỦY</div>
                <ul class="list-unstyled foot-ul">
                    <li><a target="_blank" href="phong-thuy/phong-thuy-nha-C9.html"
                           title="Phong Thủy Nhà">Phong Thủy Nhà</a></li>
                    <li><a target="_blank" href="phong-thuy/xem-huong-nha-C10.html"
                           title="Xem hướng Nhà">Xem hướng Nhà</a></li>
                    <li><a target="_blank" href="phong-thuy/mau-sac-phong-thuy-C11.html"
                           title="Màu sắc Phong Thủy">Màu sắc Phong Thủy</a></li>
                    <li><a target="_blank" href="phong-thuy/xem-tuoi-lam-nha-C15.html"
                           title="Xem tuổi làm nhà">Xem tuổi làm nhà</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="foot-h4-title">MẪU NHÀ ĐẸP</div>
                <ul class="list-unstyled foot-ul">
                    <li><a target="_blank" href="du-an-moia825.html?lct=2&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                           title="Chung cư">Chung cư</a></li>
                    <li><a target="_blank" href="du-an-moi50da.html?lct=51&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                           title="Biệt thự">Biệt thự</a></li>
                    <li><a target="_blank" href="du-an-moi05b0.html?lct=3&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                           title="Nhà mặt phố">Nhà mặt phố</a></li>
                    <li><a target="_blank" href="du-an-moi6f2a.html?lct=62&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                           title="Cafe">Cafe</a></li>
                    <li><a target="_blank" href="du-an-moid6c5.html?lct=61&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                           title="Văn phòng">Văn phòng</a></li>
                    <li><a target="_blank" href="du-an-moi310b.html?lct=63&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                           title="Shop">Shop</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="foot-h4-title">Shop</div>
                <ul class="list-unstyled foot-ul">
                    <li><a target="_blank" href="http://shop.kientruc.com/shop-noi-that-C2.html"
                           title="Shop nội thất">Shop nội thất</a></li>
                    <li><a target="_blank" href="http://shop.kientruc.com/shop-vat-lieu-C4.html"
                           title="Shop vật liệu">Shop vật liệu</a></li>
                    <li><a target="_blank" href="http://shop.kientruc.com/nha-cung-cap-C422.html"
                           title="Nhà cung cấp">Nhà cung cấp</a></li>
                    <li><a target="_blank" href="http://shop.kientruc.com/dich-vu-chuyen-nghiep-C3.html"
                           title="Dịch vụ">Dịch vụ</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="foot-h4-title">Kết nối KIENTRUC.com</div>
                <link itemscope="url"
                      href="index.html">
                <ul class="list-unstyled foot-ul foot-ul-px" itemscope itemtype="http://schema.org/Organization">
                    <li>
                        <a itemprop="sameAs" href="https://www.facebook.com/kientruccom/" title="Facebook"
                           target="_blank">
                            <i class="fa fa-facebook"></i> <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a itemprop="sameAs" href="https://twitter.com/KIENTRUCcom" title="Twitter" target="_blank">
                            <i class="fa fa-twitter"></i> <span>Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a itemprop="sameAs" href="https://plus.google.com/u/0/101720896954211861687" title="Google"
                           target="_blank">
                            <i class="fa fa-google"></i> <span>Google</span>
                        </a>
                    </li>
                    <li>
                        <a itemprop="sameAs" href="https://www.youtube.com/channel/UCDqI3vvzJ8vQJDqPvKW5nFA"
                           title="Youtube" target="_blank">
                            <i class="fa fa-youtube"></i> <span>Youtube</span>
                        </a>
                    </li>
                    <li>
                        <a itemprop="sameAs" href="https://www.instagram.com/kientruc.com_official/"
                           title="Instagram" target="_blank">
                            <i class="fa fa-instagram"></i> <span>Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a itemprop="sameAs" href="https://www.pinterest.com/KienTruc_Com/" title="Pinterest"
                           target="_blank">
                            <i class="fa fa-pinterest-p"></i> <span>Pinterest</span>
                        </a>
                    </li>
                    <li>
                        <a itemprop="sameAs" href="https://www.linkedin.com/in/kientruc/" title="Linkedin"
                           target="_blank">
                            <i class="fa fa-linkedin"></i> <span>Linkedin</span>
                        </a>
                    </li>
                    <li>
                        <a itemprop="sameAs" href="javascript:;" title="RSS" target="_blank">
                            <i class="fa fa-rss"></i> <span>RSS</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12" style="margin-top: 60px"></div>
        </div>
    </div>

</footer>


<style type="text/css">
    #form-report-info label {
        font-weight: 500;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        footer {
            display: none;
        }
    }
</style>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124644846-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-124644846-1');
</script>

<script src="assets/20c8f6c6/jquery.js"></script>
<script src="assets/6b5faf4f/yii.js"></script>
<script src="assets/df57fb5c/js/bootstrap.js"></script>
<script src="assets/464aa278/jquery.slimscroll.min.js"></script>
<script src="library/jquery.easeScroll.js"></script>
<script src="library/jquery-loading-master/dist/jquery.loading.min.js"></script>
<script src="js/javaSlide.js"></script>
<script src="js/javaChung.js"></script>
<script>jQuery(function ($) {

        $(function ($) {
            'use strict';
            $('body').on('submit', '#from-search-kt-submit1', function (event, jqXHR, settings) {
                var link = $('.input-group #search_param_kt_p').val();
                var key = $('.input-group #key_search_kt_p').val();
                console.log(link);
                //window.location.href="https://www."+window.location.hostname+"/"+link;
                window.location.href = "http://" + window.location.hostname + "/" + link + '?q=' + key;
                return false;
            })
        });
        $(document).ready(function (e) {
            $('.search-panel .dropdown-menu').find('a').click(function (e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#", "");
                var concept = $(this).text();
                $('.search-panel span#search_concept').text(concept);
                $('.input-group #search_param_kt_p').val(param);
                console.log(param);
            });
        });

    });</script>