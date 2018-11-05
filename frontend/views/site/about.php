<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>

<head>
    <style type="text/css">.gm-ui-hover-effect {
            opacity: .7
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>
    <style type="text/css">.gm-style .gm-style-iw {
            font-weight: 300;
            font-size: 13px;
            overflow: hidden
        }

        .gm-style .gm-iw {
            color: #2c2c2c
        }

        .gm-style .gm-iw b {
            font-weight: 400
        }

        .gm-style .gm-iw a:link, .gm-style .gm-iw a:visited {
            color: #4272db;
            text-decoration: none
        }

        .gm-style .gm-iw a:hover {
            color: #4272db;
            text-decoration: underline
        }

        .gm-style .gm-iw .gm-title {
            font-weight: 400;
            margin-bottom: 1px
        }

        .gm-style .gm-iw .gm-basicinfo {
            line-height: 18px;
            padding-bottom: 12px
        }

        .gm-style .gm-iw .gm-website {
            padding-top: 6px
        }

        .gm-style .gm-iw .gm-photos {
            padding-bottom: 8px;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none
        }

        .gm-style .gm-iw .gm-sv, .gm-style .gm-iw .gm-ph {
            cursor: pointer;
            height: 50px;
            width: 100px;
            position: relative;
            overflow: hidden
        }

        .gm-style .gm-iw .gm-sv {
            padding-right: 4px
        }

        .gm-style .gm-iw .gm-wsv {
            cursor: pointer;
            position: relative;
            overflow: hidden
        }

        .gm-style .gm-iw .gm-sv-label, .gm-style .gm-iw .gm-ph-label {
            cursor: pointer;
            position: absolute;
            bottom: 6px;
            color: #fff;
            font-weight: 400;
            text-shadow: rgba(0, 0, 0, 0.7) 0 1px 4px;
            font-size: 12px
        }

        .gm-style .gm-iw .gm-stars-b, .gm-style .gm-iw .gm-stars-f {
            height: 13px;
            font-size: 0
        }

        .gm-style .gm-iw .gm-stars-b {
            position: relative;
            background-position: 0 0;
            width: 65px;
            top: 3px;
            margin: 0 5px
        }

        .gm-style .gm-iw .gm-rev {
            line-height: 20px;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none
        }

        .gm-style.gm-china .gm-iw .gm-rev {
            display: none
        }

        .gm-style .gm-iw .gm-numeric-rev {
            font-size: 16px;
            color: #dd4b39;
            font-weight: 400
        }

        .gm-style .gm-iw.gm-transit {
            margin-left: 15px
        }

        .gm-style .gm-iw.gm-transit td {
            vertical-align: top
        }

        .gm-style .gm-iw.gm-transit .gm-time {
            white-space: nowrap;
            color: #676767;
            font-weight: bold
        }

        .gm-style .gm-iw.gm-transit img {
            width: 15px;
            height: 15px;
            margin: 1px 5px 0 -20px;
            float: left
        }

        .gm-iw {
            text-align: left;
        }

        .gm-iw .gm-numeric-rev {
            float: left;
        }

        .gm-iw .gm-photos, .gm-iw .gm-rev {
            direction: ltr;
        }

        .gm-iw .gm-stars-f, .gm-iw .gm-stars-b {
            background: url("https://maps.gstatic.com/mapfiles/api-3/images/review_stars.png") no-repeat;
            background-size: 65px 26px;
            float: left;
        }

        .gm-iw .gm-stars-f {
            background-position: left -13px;
        }

        .gm-iw .gm-sv-label, .gm-iw .gm-ph-label {
            left: 4px;
        }</style>
    <link type="text/css" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans">
    <style type="text/css">.gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/">
    <title>KIENTRUC.com | Step 01</title>
    <meta name="robots" content="index, follow, all">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token"
          content="3zwpirhVj2kGTEkLyZGdxcLH-_tYC1jry_Iz4E1BM-mWb0jO2i__M0QqGEP6-f6yjaWdwzdACp6ntlSwenBs2Q==">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Muli:400,700|Roboto:300,400,500,700|Archivo+Black&amp;subset=latin-ext,vietnamese"
          rel="stylesheet">
    <meta name="description"
          content="Trang thương mại KIENTRUC.com là nơi giới thiệu kết nối thương mại hữu ích giữa khách hàng và nhà thiết kế, kiến trúc sư, nhà thầu xây dựng. Nơi chọn lựa cho khách hàng những nội thất, vật liệu uy tín">
    <meta name="keywords" content="kiến trúc, nhà đẹp, biệt thự, nội thất, sân vườn">
    <meta name="DC.title" content="KIENTRUC.com | Step 01">
    <meta name="geo.region" content="VN-SG">
    <meta name="geo.placename" content="HoChiMinh City">
    <meta name="geo.position" content="10.768536,106.660271">
    <meta name="fb:app_id" content="685480354937581" property="fb:app_id">
    <meta name="article:publisher" content="https://www.facebook.com/kientruccom/" property="article:publisher">
    <meta name="fb:pages" content="848546668563574" property="fb:pages">
    <meta name="twitter:widgets:csp" content="on">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@kientruccom">
    <meta name="twitter:creator" content="@kientruccom">
    <meta name="twitter:title" content="KIENTRUC.com | Step 01">
    <meta name="twitter:description"
          content="Trang thương mại KIENTRUC.com là nơi giới thiệu kết nối thương mại hữu ích giữa khách hàng và nhà thiết kế, kiến trúc sư, nhà thầu xây dựng. Nơi chọn lựa cho khách hàng những nội thất, vật liệu uy tín">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="KienTruc.com">
    <meta property="og:title" content="KIENTRUC.com | Step 01">
    <meta property="og:description"
          content="Trang thương mại KIENTRUC.com là nơi giới thiệu kết nối thương mại hữu ích giữa khách hàng và nhà thiết kế, kiến trúc sư, nhà thầu xây dựng. Nơi chọn lựa cho khách hàng những nội thất, vật liệu uy tín">
    <meta property="og:url" content="http://www.kientruc.com/uplevelkts/index">
    <meta content="http://www.kientruc.com/image/kien-truc-su_200x200.jpg" property="og:image">
    <meta name="article:section" content="" property="article:section">
    <link type="images/png" href="uploads/setup/1492048590_fava.ico" rel="icon">
    <link href="/assets/df57fb5c/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/eab6b631/css/select2.min.css" rel="stylesheet">
    <link href="/assets/eab6b631/css/select2-addl.min.css" rel="stylesheet">
    <link href="/assets/eab6b631/css/select2-krajee.min.css" rel="stylesheet">
    <link href="/assets/c4fe7e2a/css/kv-widgets.min.css" rel="stylesheet">
    <link href="/assets/4986ff48/css/dependent-dropdown.min.css" rel="stylesheet">
    <link href="/assets/ce00a013/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
    <link href="/library/jquery-loading-master/dist/jquery.loading.min.css" rel="stylesheet">
    <link href="/css/uplevelkts.css" rel="stylesheet">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script>var s2options_d6851687 = {
            "themeCss": ".select2-container--krajee",
            "sizeCss": "",
            "doReset": true,
            "doToggle": false,
            "doOrder": false
        };
        window.select2_13e3f95f = {
            "allowClear": true,
            "theme": "krajee",
            "width": "100%",
            "placeholder": "Select Type Category",
            "language": "vi-VN"
        };

        window.depdrop_39620606 = {
            "depends": ["cat1-id"],
            "url": "\/uplevelkts\/subcat1",
            "params": ["input-type-1", "input-type-2"]
        };

        window.select2_b268a3e9 = {
            "allowClear": true,
            "theme": "krajee",
            "width": "100%",
            "placeholder": "Select ...",
            "language": "vi-VN"
        };

        window.depdrop_eda03ae1 = {
            "depends": ["subcat1-id"],
            "url": "\/uplevelkts\/subcat2",
            "params": ["input-type-1", "input-type-2"]
        };
    </script>
    <script type="text/javascript">var domain = '/';</script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/common.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/util.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/map.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/marker.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/geometry.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/poly.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/infowindow.js"></script>
    <style type="text/css">.gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }

        .gm-style img {
            max-width: none;
        }</style>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/onion.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/34/16/stats.js"></script>
</head>


<body>

<div class="wrap">


    <header>
        <div class="head">
            <div class="h-part-1">
                <div class="container">

                    <div class="pull-left top-logo">
                        <button type="button" class="but-menu-top collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="fa fa-navicon"></span>
                        </button>
                        <a href="/" title="KIENTRUC.com" class="a-white">
                            <img alt="KIENTRUC.com" title="KIENTRUC.com" src="image/logo icon.jpg"
                                 class="img-responsive img-logo">
                            <span class="span-name-website">KIENTRUC.com</span>
                        </a>

                        <a href="1000100100113402/album" title="Cá nhân" class="a-menu-top a-white dropdown-toggle"
                           data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-avatar"
                               style="background-image: url(https://www.kientruc.com/uploads/200x200no-image.png)"></i>
                        </a>
                        <!-- dùng cho menu ca nhan mobile -->
                        <ul class="dropdown-menu" style="right: 0;text-align: right;">
                            <li><a href="ask/personal" title="Câu hỏi của bạn">Câu hỏi của bạn</a></li>
                            <li>
                                <a href="1000100100113402/album" title="Trang cá nhân">
                                    Trang
                                    cá nhân</a>
                            </li>
                            <li>
                                <a href="profile/info" title="Thông tin tài khoản">Thông tin tài khoản</a>
                            </li>
                            <li><a href="profile/password" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                            <li><a href="profile/noting" title="Chỉnh thông báo">Chỉnh thông báo</a></li>
                            <li class="line"></li>
                            <li><a href="tro-thanh-kien-truc-su" title="Trở thành kiến trúc sư">Trở
                                    thành kiến trúc sư</a></li>
                            <li><a href="https://shop.kientruc.com/profile/upgrade" title="Trở thành nhà cung cấp">Hoặc
                                    Trở
                                    thành seller</a></li>
                            <li class="line"></li>
                            <li style="padding: 0 20px;">
                                <form action="/login/logout" method="post">
                                    <input type="hidden" name="_csrf-frontend"
                                           value="3zwpirhVj2kGTEkLyZGdxcLH-_tYC1jry_Iz4E1BM-mWb0jO2i__M0QqGEP6-f6yjaWdwzdACp6ntlSwenBs2Q==">
                                    <button type="submit" class="btn btn-link logout">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                        <!-- dùng cho menu ca nhan mobile -->

                        <!--<a href="javascript:;" title="Thông báo" class="a-menu-top a-white">
                            <i class="fa fa-bell-o"></i>
                        </a>-->

                    </div>

                    <div class="pull-right div-menu-top a-menu-top-2">
                        <div class="navbar-collapse" id="bs-example-navbar-collapse-0">
                            <ul class="nav navbar-right">
                                <!-- gio hang -->
                                <!--<li class="dropdown">
                                    <a href="/shopping/view-cart" title="Đăng kí" class="a-white link-gio-hang">
                                        <i class="fa fa-shopping-cart"></i> <span class="shop-quantity"></span>
                                    </a>
                                </li>-->
                                <!-- gio hang -->

                                <!--<li class="dropdown">
        <a href="javascript:;" title="Thông báo"
           class="dropdown-toggle a-white" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false" style="padding: 15px 5px;">
            <i class="fa fa-bell-o" style="font-size: 18px"></i>
        </a>
        <div class="dropdown-menu min-wd-350">
            <div class="header-note">Đánh dấu đã đọc</div>
            <ul class="list-unstyled li-menu-croll">
                <li class="note-li">
                    <div class="note-li-avatar"
                         style="background-image: url('image/avatar.png')"></div>
                    <div class="note-li-info">
                        <a href="javascript:" title="">
                            Vừa mới tạo dự án 'abc con ga co'
                        </a>
                        <span><i class="fa fa-clock-o"></i> 7 giờ trước</span>
                    </div>
                </li>
                <li class="note-li">
                    <div class="note-li-avatar"
                         style="background-image: url('image/avatar.png')"></div>
                    <div class="note-li-info">
                        <a href="javascript:" title="">
                            Vừa mới tạo dự án 'abc con ga co'
                        </a>
                        <span><i class="fa fa-clock-o"></i> 7 giờ trước</span>
                    </div>
                </li>
                <li class="note-li">
                    <div class="note-li-avatar"
                         style="background-image: url('image/avatar.png')"></div>
                    <div class="note-li-info">
                        <a href="javascript:" title="">
                            Vừa mới tạo dự án 'abc con ga co'
                        </a>
                        <span><i class="fa fa-clock-o"></i> 7 giờ trước</span>
                    </div>
                </li>
                <li class="note-li">
                    <div class="note-li-avatar"
                         style="background-image: url('image/avatar.png')"></div>
                    <div class="note-li-info">
                        <a href="javascript:" title="">
                            Vừa mới tạo dự án 'abc con ga co'
                        </a>
                        <span><i class="fa fa-clock-o"></i> 7 giờ trước</span>
                    </div>
                </li>
            </ul>
            <div class="footer-note">
                <a href="javascript:;" title="Xem tất cả">
                    Xem tất cả
                </a>
            </div>
        </div>
    </li>-->
                                <li class="dropdown">
                                    <a href="#" title="Cá nhân" class="dropdown-toggle a-white" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="span-avatar-icon" style="background-image: url(https://www.kientruc.com/uploads/200x200no-image.png);
                                              "></span>
                                        <b class="b-avatar-icon">thuccao</b>
                                        <i class="i-avatar-icon">
                                            Người dùng </i>
                                    </a>
                                    <ul class="dropdown-menu customer-menu-header">
                                        <li><a href="ask/personal" title="Câu hỏi của bạn">Câu hỏi của bạn</a></li>
                                        <li>
                                            <a href="1000100100113402/album" title="Trang cá nhân">
                                                Trang
                                                cá nhân</a></li>
                                        <li><a href="profile/info" title="Thông tin tài khoản">Thông tin tài khoản</a>
                                        </li>
                                        <li><a href="profile/password" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                                        <li><a href="profile/noting" title="Chỉnh thông báo">Chỉnh thông báo</a></li>

                                        <li class="line"></li>
                                        <li><a href="tro-thanh-kien-truc-su" title="Trở thành kiến trúc sư">Trở
                                                thành kiến trúc sư</a></li>
                                        <li><a href="https://shop.kientruc.com/profile/upgrade"
                                               title="Trở thành nhà cung cấp">Hoặc Trở
                                                thành seller</a></li>
                                        <li class="line"></li>
                                        <li>
                                            <form action="/login/logout" method="post">
                                                <input type="hidden" name="_csrf-frontend"
                                                       value="3zwpirhVj2kGTEkLyZGdxcLH-_tYC1jry_Iz4E1BM-mWb0jO2i__M0QqGEP6-f6yjaWdwzdACp6ntlSwenBs2Q==">
                                                <button type="submit" class="btn btn-link logout">Đăng xuất</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>

                </div>
                <!--
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 mobile-position-relative">
                            <div class="search-code-product">
                                <form class="form-horizontal" method="post" id="from-search-kt-submit1">
                                    <div class="suggest-search-p-kt" style="">
                                        <div class="info-suggest">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-comments-o"></i>
                                                        <a onmouseover="chang_key_hidden_search(this)" data-url="Hỏi Chuyên Gia"
                                                        data-link="/search/cau-hoi?q=hoi+chuyen+gia&key_search="
                                                            href="/search/cau-hoi?q=hoi+chuyen+gia&key_search=">
                                                            <span class="key_search_suggest"></span>
                                                            Tìm trong
                                                            <span class="color-kt">Hỏi Chuyên Gia</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-user-o"></i>
                                                        <a onmouseover="chang_key_hidden_search(this)" data-link="/tim-kien-truc-su?q=thiet+ke&sort=1&full_name="
                                                           data-url="Kiến Trúc Sư"
                                                            href="/tim-kien-truc-su?q=thiet+ke&sort=1&full_name=">
                                                            <span class="key_search_suggest"></span>
                                                            Tìm trong
                                                            <span class="color-kt">Kiến Trúc Sư</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-home"></i>
                                                        <a onmouseover="chang_key_hidden_search(this)" data-link="/search/du-an?q=du+an&key_search="
                                                           data-url="Dự Án Mới"
                                                           href="/search/du-an?q=du+an&key_search=">
                                                            <span class="key_search_suggest"></span>
                                                            Tìm trong
                                                            <span class="color-kt">Dự Án Mới</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-newspaper-o"></i>
                                                        <a onmouseover="chang_key_hidden_search(this)" data-link="/search/tap-chi?q=du+an&key_search="
                                                           data-url="Tạp Chí"
                                                           href="/search/tap-chi?q=du+an&key_search=">
                                                            <span class="key_search_suggest"></span>
                                                            Tìm trong
                                                            <span class="color-kt">Tạp Chí</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-diamond"></i>
                                                        <a onmouseout="chang_key_hidden_search2(this)" onmouseover="chang_key_hidden_search(this)"
                                                           data-link="/search/showroom?q=du+an&key_search="
                                                           data-url="Showroom"
                                                           href="/search/showroom?q=du+an&key_search=">
                                                            <span class="key_search_suggest"></span>
                                                            Tìm trong
                                                            <span class="color-kt">Showroom</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="input-group" style="background-color: white;border-radius: 3px;">
                                        <input type="hidden" name="search_param_kt_p" value="showroom" id="search_param_kt_p">
                                        <input value="" type="text" class="navbar-search-box search-hint" id="hidden-search-p-kt" spellcheck="false" readonly=""
                                               autocomplete="off"
                                               tabindex="-1" style="background-color: white!important;border-color: transparent;position: absolute;left: 0px;top: 0px;color: rgb(139, 139, 139);z-index: -1;">
                                        <input type="text" onfocusout="suggestSearchHidden()" onfocus="suggestSearch(this)" onkeyup="suggestSearch(this)"
                                               class="form-control navbar-search-box"
                                               name="key_search_kt_p" id="key_search_kt_p"
                                               placeholder="Tìm kiếm"
                                               autocomplete="off">

                                        <span class="input-group-btn">
                                            <span class="unit">Tìm trong Showroom</span>
                                            <button style="height: 37px;" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
            <div class="h-part-2">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid row">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="licss3 parent-menu-hover">
                                        <a href="hoi-dap" title="Hỏi chuyên gia">
                                            <i class="fa fa-comments-o"></i>
                                            Hỏi chuyên gia
                                        </a>
                                        <!--<div class="hover-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </div>-->
                                    </li>
                                    <li class="licss3 parent-menu-hover">
                                        <a href="tim-kien-truc-su" title="tim-kien-truc-su">
                                            <i class="fa fa-search"></i>
                                            Tìm kiến trúc sư
                                        </a>
                                        <div class="hover-menu hover-menu-tim-kien-truc-su">
                                            <ul class="list-unstyled">
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+ho+chi+minh&amp;sort=1&amp;id_province=79"
                                                            title="Tìm Kiến Trúc Sư tại Hồ Chí Minh">Tìm Kiến Trúc Sư
                                                        tại Hồ Chí Minh</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+ha+noi&amp;sort=1&amp;id_province=01"
                                                            title="Tìm Kiến Trúc Sư tại Hà Nội">Tìm Kiến Trúc Sư tại Hà
                                                        Nội</a></li>
                                                <li class="duong-ke-ngan-cach"><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+da+nang&amp;sort=1&amp;id_province=48"
                                                            title="Tìm Kiến Trúc Sư tại Đà Nẵng">Tìm Kiến Trúc Sư tại Đà
                                                        Nẵng</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+noi+that&amp;sort=1&amp;hang_muc=7"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Nội Thất">Tìm Kiến
                                                        Trúc Sư chuyên thiết kế Nội Thất</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+ngoai+that&amp;sort=1&amp;hang_muc=4"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Ngoại Thất">Tìm Kiến
                                                        Trúc Sư chuyên thiết kế Ngoại Thất</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+chung+cu+chung+cu&amp;sort=1&amp;loai_cong_trinh=2"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Chung Cư">Tìm Kiến
                                                        Trúc Sư chuyên thiết kế Chung Cư</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+nha+mat+pho+nha+mat+pho&amp;sort=1&amp;loai_cong_trinh=3"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Nhà Phố">Tìm Kiến
                                                        Trúc Sư chuyên thiết kế Nhà Phố</a></li>
                                                <li class="duong-ke-ngan-cach"><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+biet+thu+biet+thu&amp;sort=1&amp;loai_cong_trinh=51"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Biệt Thự">Tìm Kiến
                                                        Trúc Sư chuyên thiết kế Biệt Thự</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+cafe+cafe&amp;sort=1&amp;loai_cong_trinh=62"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Cafe">Tìm Kiến Trúc
                                                        Sư chuyên thiết kế Cafe</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+van+phong+van+phong&amp;sort=1&amp;loai_cong_trinh=61"
                                                            title="	Tìm Kiến Trúc Sư chuyên thiết kế  Văn Phòng"> Tìm
                                                        Kiến Trúc Sư chuyên thiết kế Văn Phòng</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+shop+shop&amp;sort=1&amp;loai_cong_trinh=63"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Shop">Tìm Kiến Trúc
                                                        Sư chuyên thiết kế Shop</a></li>
                                                <li class=""><a
                                                            href="https://www.kientruc.com/tim-kien-truc-su?q=thiet+ke+nha+hang+nha+hang&amp;sort=1&amp;loai_cong_trinh=64"
                                                            title="Tìm Kiến Trúc Sư chuyên thiết kế Nhà Hàng">Tìm Kiến
                                                        Trúc Sư chuyên thiết kế Nhà Hàng</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="licss3 parent-menu-hover">
                                        <a href="du-an-moi" title="Dự án mới">
                                            <i class="fa fa-home"></i>
                                            Dự án mới
                                        </a>
                                        <!--<div class="hover-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </div>-->
                                    </li>
                                    <li class="licss3 parent-menu-hover-bai-viet">
                                        <a href="tap-chi" title="Tạp chí">
                                            <i class="fa fa-newspaper-o"></i>
                                            Tạp chí
                                        </a>
                                        <div class="hover-menu-bai-viet">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="phong-thuy-C8" title="PHONG THỦY">
                                                        <span>phong thủy</span>
                                                    </a>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="phong-thuy/phong-thuy-nha-C9"
                                                               title="PHONG THỦY NHÀ ">
                                                                phong thủy nhà </a>
                                                        </li>
                                                        <li>
                                                            <a href="phong-thuy/xem-huong-nha-C10"
                                                               title="XEM HƯỚNG NHÀ">
                                                                xem hướng nhà </a>
                                                        </li>
                                                        <li>
                                                            <a href="phong-thuy/mau-sac-phong-thuy-C11"
                                                               title="MÀU SẮC PHONG THỦY">
                                                                màu sắc phong thủy </a>
                                                        </li>
                                                        <li>
                                                            <a href="phong-thuy/xem-tuoi-lam-nha-C15"
                                                               title="XEM TUỔI LÀM NHÀ">
                                                                xem tuổi làm nhà </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="noi-that-C12" title="NỘI THẤT">
                                                        <span>nội thất</span>
                                                    </a>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="noi-that/do-noi-that-C13" title="ĐỒ NỘI THẤT">
                                                                đồ nội thất </a>
                                                        </li>
                                                        <li>
                                                            <a href="noi-that/trang-tri-phong-khach-C14"
                                                               title="TRANG TRÍ  PHÒNG KHÁCH">
                                                                trang trí phòng khách </a>
                                                        </li>
                                                        <li>
                                                            <a href="noi-that/trang-tri-phong-bep-C37"
                                                               title="TRANG TRÍ  PHÒNG BẾP">
                                                                trang trí phòng bếp </a>
                                                        </li>
                                                        <li>
                                                            <a href="noi-that/trang-tri-phong-ngu-C38"
                                                               title="TRANG TRÍ  PHÒNG NGỦ">
                                                                trang trí phòng ngủ </a>
                                                        </li>
                                                        <li>
                                                            <a href="noi-that/trang-tri-phong-an-C39"
                                                               title="TRANG TRÍ  PHÒNG ĂN">
                                                                trang trí phòng ăn </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="mau-nha-dep-C16" title="MẪU NHÀ ĐẸP">
                                                        <span>mẫu nhà đẹp</span>
                                                    </a>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="mau-nha-dep/nha-ong-C17" title="NHÀ ỐNG">
                                                                nhà ống </a>
                                                        </li>
                                                        <li>
                                                            <a href="mau-nha-dep/nha-pho-C18" title="NHÀ PHỐ">
                                                                nhà phố </a>
                                                        </li>
                                                        <li>
                                                            <a href="mau-nha-dep/biet-thu-C19" title="BIỆT THỰ">
                                                                biệt thự </a>
                                                        </li>
                                                        <li>
                                                            <a href="mau-nha-dep/nha-cap-4-C20" title="NHÀ CẤP 4">
                                                                nhà cấp 4 </a>
                                                        </li>
                                                        <li>
                                                            <a href="mau-nha-dep/chung-cu-C36" title="CHUNG CƯ">
                                                                chung cư </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="cong-trinh-cong-cong-C21" title="CÔNG TRÌNH CÔNG CỘNG">
                                                        <span>công trình công cộng</span>
                                                    </a>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="cong-trinh-cong-cong/cafe-C22" title="CAFE">
                                                                cafe </a>
                                                        </li>
                                                        <li>
                                                            <a href="cong-trinh-cong-cong/shop-C23" title="SHOP">
                                                                shop </a>
                                                        </li>
                                                        <li>
                                                            <a href="cong-trinh-cong-cong/van-phong-C24"
                                                               title="VĂN PHÒNG">
                                                                văn phòng </a>
                                                        </li>
                                                        <li>
                                                            <a href="cong-trinh-cong-cong/nha-hang-C25"
                                                               title="NHÀ HÀNG">
                                                                nhà hàng </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="goc-kien-truc-su-C44" title="GÓC KIẾN TRÚC SƯ">
                                                        <span>góc kiến trúc sư</span>
                                                    </a>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="goc-kien-truc-su/huong-dan-kientruccom-C45"
                                                               title="Hướng dẫn KIENTRUC.com">
                                                                hướng dẫn kientruc.com </a>
                                                        </li>
                                                        <li>
                                                            <a href="goc-kien-truc-su/kien-truc-the-gioi-C46"
                                                               title="Kiến Trúc Thế Giới">
                                                                kiến trúc thế giới </a>
                                                        </li>
                                                        <li>
                                                            <a href="goc-kien-truc-su/chia-se-file-C47"
                                                               title="Chia Sẻ File">
                                                                chia sẻ file </a>
                                                        </li>
                                                        <li>
                                                            <a href="goc-kien-truc-su/kinh-nghiem-nghe-C48"
                                                               title="Kinh nghiệm nghề">
                                                                kinh nghiệm nghề </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--
                                    <li class="licss3 parent-menu-hover">
                                        <a href="showroom" title="Showroom">
                                            <i class="fa fa-diamond"></i>
                                            Showroom
                                        </a>
                                                                                <div class="hover-menu">
                                                <ul class="list-unstyled">
                                                                                                        <li><a href="shop-noi-that-C2.html"
                                                               title="SHOP NỘI THẤT">
                                                                Shop Nội Thất                                                        </a>
                                                        </li>
                                                                                                            <li><a href="shop-vat-lieu-C4.html"
                                                               title="VẬT LIỆU THIẾT BỊ">
                                                                Vật Liệu Thiết Bị                                                        </a>
                                                        </li>
                                                                                                    </ul>
                                            </div>
                                                                            </li>
                                    -->
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <style type="text/css">
        .location-province-kt {
            display: inline-block;
            position: absolute;
            top: 10px;
            right: 5px;
            min-width: 200px;
        }

        .search-kt-p {
            border-right: 0;
        }

        .search-kt-p > button {
            background: #f3f3f3;
        }

        .btn .caret {
            margin-left: 7px;
        }

        li.nomal-p-con {
            padding-left: 25px;
        }

        .dropdown-menu > li:hover > a, .dropdown-menu > li:hover {
            color: #262626;
            text-decoration: none;
            background-color: #a29d9d;
        }

        div.mobile-position-relative {
            position: relative;
        }

        div.search-code-product {
            position: absolute;
            bottom: 9px;
        }

        @media (max-width: 768px) {
            div.mobile-position-relative {
                position: relative;
            }

            div.search-code-product {
                position: inherit;
                margin-top: 10px;
            }

            .location-province-kt {
                display: block !important;
                position: inherit !important;
                top: inherit !important;
                right: inherit !important;
                min-width: 200px;
                margin: 3px 0px !important;
            }
        }

        /*phan search*/

        .input-group > #key_search_kt_p {
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
        }

        .input-group > #key_search_kt_p:focus {
            border-color: #ddd;
        }

        input.navbar-search-box {
            padding: 8px;
            height: 100%;
            width: 100%;
            background: transparent;
            outline: none;
            margin: 0;
            font-size: inherit;
            color: #333;
            border: 1px solid #ddd;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            line-height: 2em;
        }

        #hidden-search-p-kt {

        }

        /*phan search*/

        /*
        phan suggest css
        */
        div.suggest-search-p-kt {
            position: relative;
            min-height: 12px;
            display: none;
        }

        div.suggest-search-p-kt:hover {
            display: block !important;
        }

        div.suggest-search-p-kt > div.info-suggest {
            top: 49px;
            position: absolute;
            left: 0;
            background: white;
            z-index: 99;
            display: block;
            width: 100%;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            border: 1px solid #ccc;
            border-top: 0;
        }

        div.suggest-search-p-kt > div.info-suggest .key_search_suggest {
            font-size: 16px;
            font-weight: bold;
        }

        div.suggest-search-p-kt > div.info-suggest > .col-md-12 {
            padding-left: 10px;
            padding-right: 10px;
        }

        div.info-suggest ul {
            list-style-type: none;
            padding-left: 0;
            padding-right: 0;
            margin: 5px 0;
        }

        div.info-suggest ul > li:hover {
            background: #e9edf0;
        }

        div.info-suggest ul > li {
            padding: 6px 0px;
        }

        div.info-suggest ul > li > a {
            color: black;
            font-size: 15px;
            width: 100%
        }

        div.info-suggest ul > li > i {
            color: #248445;
            width: 20px;
        }

        div.info-suggest ul > li > a > .color-kt {
            color: #248445;
        }

        /*
        phan suggest css
        */
    </style>
    <script language="JavaScript">
        function suggestSearchHidden(even) {
            $(".suggest-search-p-kt").css('display', 'none');
            $("#hidden-search-p-kt").css('z-index', '-1');
        }

        function suggestSearch(even) {
            $value = $(even).val();
            $value = $value.trim();
            if ($value) {
                $(".key_search_suggest").each(function () {
                    $(this).html($value);
                    $parent = $(this).parent();
                    $parent.attr('href', $parent.attr('data-link') + $value);
                });
                $("#hidden-search-p-kt").val($value + " Tìm trong showroom");
                $(".suggest-search-p-kt").css('display', 'block');
                $("#hidden-search-p-kt").css('z-index', 'inherit');

            } else {
                $(".key_search_suggest").each(function () {
                    $(this).html($value);
                });
                $(".suggest-search-p-kt").css('display', 'none');
                $("#hidden-search-p-kt").css('z-index', '-1');
            }
        }

        function chang_key_hidden_search(even) {
            $data = $(even).attr('data-url');
            $("#hidden-search-p-kt").val($value + " Tìm trong " + $data);
        }

        function chang_key_hidden_search2(even) {
            $data = $(even).attr('data-url');
            $("#hidden-search-p-kt").val($value + " Tìm trong showroom");
        }
    </script>

    <section>
        <div class="part-01-banner-top">
            <div class="container">
                <div class="pull-right col-md-4">
                    <div class="bg-black">
                        <h1 class="text-center">30 GIÂY ĐỂ TRỞ THÀNH <br> KIẾN TRÚC SƯ THÔNG QUA<br>3 BƯỚC ĐƠN GIẢN</h1>
                        <div class="div-step">
                            <div class="div-step-00"><b>1</b>
                                <span class="fa fa-circle"></span>
                                <i>Điền thông tin của bạn</i></div>
                            <div class="div-step-00"><b>2</b>
                                <span class="fa fa-circle"></span>
                                <i>Up 1 dự án của chính bạn thiết
                                    kế</i></div>
                            <div class="div-step-00"><b>3</b>
                                <span class="fa fa-circle"></span>
                                <i>Xác nhận</i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="frm-step">


                <div class="col-md-12">
                    <div class="menu-step">
                        <div class="col-xs-4 menu-step-00 active">
                            <a href="javascript:">
                                1. ĐĂNG KÝ THÔNG TIN CÁ NHÂN
                                <span></span>
                            </a>
                        </div>
                        <div class="col-xs-4 menu-step-00">
                            <a href="javascript:">
                                2. UPLOAD 1 DỰ ÁN MÀ BẠN THIẾT KẾ
                                <span></span>
                            </a>
                        </div>
                        <div class="col-xs-4 menu-step-00">
                            <a href="javascript:">
                                3. XÁC NHẬN ĐIỀU KHOẢN
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 col-md-offset-3">
                    <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                        <form id="thong-tin-tai-khoan-form" class="form-horizontal" action="/uplevelkts/index"
                              method="post" data-pjax="1">
                            <input type="hidden" name="_csrf-frontend"
                                   value="3zwpirhVj2kGTEkLyZGdxcLH-_tYC1jry_Iz4E1BM-mWb0jO2i__M0QqGEP6-f6yjaWdwzdACp6ntlSwenBs2Q==">
                            <div class="form-group field-dangkiktsstep01-nick_name required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="dangkiktsstep01-nick_name">Tên
                                    hiển thị</label>
                                <div class="col-sm-6">
                                    <input type="text" id="dangkiktsstep01-nick_name" class="form-control"
                                           name="DangKiKtsStep01[nick_name]" value="thuccao" placeholder="...."
                                           aria-required="true">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-dangkiktsstep01-first_name required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                       for="dangkiktsstep01-first_name">Họ tên đệm</label>
                                <div class="col-sm-6">
                                    <input type="text" id="dangkiktsstep01-first_name" class="form-control"
                                           name="DangKiKtsStep01[first_name]" placeholder="...." aria-required="true">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-dangkiktsstep01-last_name required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="dangkiktsstep01-last_name">Tên
                                    thật</label>
                                <div class="col-sm-6">
                                    <input type="text" id="dangkiktsstep01-last_name" class="form-control"
                                           name="DangKiKtsStep01[last_name]" placeholder="...." aria-required="true">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-dangkiktsstep01-sex">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4">Giới tính</label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="DangKiKtsStep01[sex]" value="">
                                    <div id="dangkiktsstep01-sex"><label class="radio-inline"><input type="radio"
                                                                                                     name="DangKiKtsStep01[sex]"
                                                                                                     value="1">
                                            Nam</label>
                                        <label class="radio-inline"><input type="radio" name="DangKiKtsStep01[sex]"
                                                                           value="0" checked=""> Nữ</label></div>
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-dangkiktsstep01-phone required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="dangkiktsstep01-phone">Điện
                                    thoại</label>
                                <div class="col-sm-6">
                                    <input type="text" id="dangkiktsstep01-phone" class="form-control"
                                           name="DangKiKtsStep01[phone]" placeholder="...." aria-required="true">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-cat1-id required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="cat1-id">Chọn tỉnh/Thành
                                    phố</label>
                                <div class="col-sm-6">
                                    <select id="cat1-id" class="form-control select2-hidden-accessible"
                                            name="DangKiKtsStep01[idprovince]" onchange="js:getThongTinMaps(1)"
                                            aria-required="true" data-s2-options="s2options_d6851687"
                                            data-krajee-select2="select2_13e3f95f" style="display:none" tabindex="-1"
                                            aria-hidden="true">
                                        <option value="">Select Type Category</option>
                                        <option value="01">Hà Nội</option>
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
                                        <option value="79" selected="">Hồ Chí Minh</option>
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
                                    </select><span
                                            class="select2 select2-container select2-container--krajee select2-container--above"
                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-cat1-id-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-cat1-id-container" title="Hồ Chí Minh"><span
                                                            class="select2-selection__clear">×</span>Hồ Chí Minh</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <input type="hidden" id="input-type-1" name="input-type-1"><input type="hidden"
                                                                                              id="input-type-2"
                                                                                              name="input-type-2"
                                                                                              value="Additional value 2"><input
                                    type="hidden" id="input-type-lat" name="input-type-lat"
                                    value="10.770365031466714"><input type="hidden" id="input-type-lng"
                                                                      name="input-type-lng" value="106.69586668524175">
                            <div class="form-group field-subcat1-id required">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="subcat1-id">Chọn
                                    quận/huyện</label>
                                <div class="col-sm-6">
                                    <select id="subcat1-id" class="form-control select2-hidden-accessible"
                                            name="DangKiKtsStep01[iddistrict]" onchange="js:getThongTinMaps(2)"
                                            aria-required="true" data-krajee-depdrop="depdrop_39620606"
                                            data-s2-options="s2options_d6851687" data-krajee-select2="select2_b268a3e9"
                                            style="display:none" tabindex="-1" aria-hidden="true">
                                        <option value="">Select ...</option>
                                        <option value="760">1</option>
                                        <option value="761">12</option>
                                        <option value="762">Thủ Đức</option>
                                        <option value="763">9</option>
                                        <option value="764">Gò Vấp</option>
                                        <option value="765">Bình Thạnh</option>
                                        <option value="766">Tân Bình</option>
                                        <option value="767">Tân Phú</option>
                                        <option value="768">Phú Nhuận</option>
                                        <option value="769">2</option>
                                        <option value="770">3</option>
                                        <option value="771">10</option>
                                        <option value="772">11</option>
                                        <option value="773">4</option>
                                        <option value="774">5</option>
                                        <option value="775">6</option>
                                        <option value="776">8</option>
                                        <option value="777">Bình Tân</option>
                                        <option value="778">7</option>
                                        <option value="783">Củ Chi</option>
                                        <option value="784">Hóc Môn</option>
                                        <option value="785">Bình Chánh</option>
                                        <option value="786">Nhà Bè</option>
                                        <option value="787">Cần Giờ</option>
                                    </select><span class="select2 select2-container select2-container--krajee" dir="ltr"
                                                   style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-subcat1-id-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-subcat1-id-container"><span
                                                            class="select2-selection__placeholder">Select ...</span></span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-subcat2-id">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4"
                                       for="subcat2-id">Phường/xã</label>
                                <div class="col-sm-6">
                                    <select id="subcat2-id" class="form-control select2-hidden-accessible"
                                            name="DangKiKtsStep01[idward]" onchange="js:getThongTinMaps(3)"
                                            data-krajee-depdrop="depdrop_eda03ae1" data-s2-options="s2options_d6851687"
                                            data-krajee-select2="select2_b268a3e9" style="display:none" disabled=""
                                            tabindex="-1" aria-hidden="true">
                                        <option value="">Select ...</option>
                                    </select><span
                                            class="select2 select2-container select2-container--krajee select2-container--disabled"
                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                                    aria-labelledby="select2-subcat2-id-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-subcat2-id-container"><span
                                                            class="select2-selection__placeholder">Select ...</span></span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="form-group field-subcat3-id">
                                <label class="control-label col-sm-4 col-md-4 col-lg-4" for="subcat3-id">Địa chỉ</label>
                                <div class="col-sm-6">
                                    <input type="text" id="subcat3-id" class="form-control"
                                           name="DangKiKtsStep01[address]" onchange="js:getThongTinMaps(3)">
                                    <p class="help-block help-block-error "></p>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div id="mapinfo_kts_p"
                                 style="min-height: 300px; margin-bottom: 20px; position: relative; overflow: hidden;">
                                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                    <div style="overflow: hidden;"></div>
                                    <div class="gm-style"
                                         style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                        <div tabindex="0"
                                             style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                            <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
                                                        <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -129, -239);">
                                                            <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 256px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                        <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -129, -239);">
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: 74px; top: -47px; z-index: -4;">
                                                        <img alt=""
                                                             src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                             draggable="false"
                                                             style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -129, -239);"></div>
                                                </div>
                                            </div>
                                            <div class="gm-style-pbc"
                                                 style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;">
                                                <p class="gm-style-pbt">Use ctrl + scroll to zoom the map</p></div>
                                            <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                        <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: 74px; top: -47px; z-index: -4;">
                                                            <img alt=""
                                                                 src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                                 draggable="false" usemap="#gmimap1"
                                                                 style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            <map name="gmimap1" id="gmimap1">
                                                                <area log="miw"
                                                                      coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                                      shape="poly" title=""
                                                                      style="cursor: pointer; touch-action: none;">
                                                            </map>
                                                        </div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                        <div style="z-index: -202; cursor: pointer; display: none; touch-action: none;">
                                                            <div style="width: 30px; height: 27px; overflow: hidden; position: absolute;">
                                                                <img alt=""
                                                                     src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                                     draggable="false"
                                                                     style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <iframe aria-hidden="true" frameborder="0"
                                                style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"
                                                src="about:blank"></iframe>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">

                                var uluru = {lat: 10.8230989, lng: 106.6296638};
                                var zoom = 6;
                                var map;
                                var marker;
                                var info = 'Hồ Chí Minh, Việt Nam';

                                var markers = [];//chứa tất cả marker trong map

                                //infomation to set color
                                var $styles = [
                                    {
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#f5f5f5"
                                            }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.icon",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#616161"
                                            }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.text.stroke",
                                        "stylers": [
                                            {
                                                "color": "#f5f5f5"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative.land_parcel",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#bdbdbd"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#eeeeee"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#757575"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi.park",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#e5e5e5"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi.park",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#9e9e9e"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#ffffff"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road",
                                        "elementType": "labels.icon",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.arterial",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#757575"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#dadada"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#616161"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.local",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#9e9e9e"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "transit",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "transit.line",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#e5e5e5"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "transit.station",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#eeeeee"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#aadaff"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "water",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "color": "#aadaff"
                                            }
                                        ]
                                    }
                                ];

                                function getThongTinMapsInit(id) {//ham nay khoi tao dia diem luc ban dau ma nguoi dung da nhap
                                    var str = '';
                                    if ($('#subcat1-id').length > 0 && $('#cat1-id').length > 0) {
                                        var quan = $('#subcat1-id option:selected').text() + ',';
                                        var thanhpho = $('#cat1-id option:selected').text() + ',';
                                        var phuong = $('#subcat2-id option:selected').text() + ',';
                                        var diachi = ($('#subcat3-id').val()) ? ($('#subcat3-id').val()) + ',' : ',';
                                        str = diachi + phuong + quan + thanhpho + 'Việt Nam';
                                    } else {
                                        str = info;
                                    }
                                    //https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=YOUR_API_KEY
                                    //$.get("https://maps.googleapis.com/maps/api/geocode/json?address=" + str + "&sensor=false", function (data) {
                                    $.get("https://maps.googleapis.com/maps/api/geocode/json?address=" + str + "&key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8", function (data) {
                                        uluru = data.results[0].geometry.location;

                                        console.log(uluru);
                                        zoom = 14;
                                        info = str;
                                        initMap();
                                        var latMark = data.results[0].geometry.location.lat;
                                        var lngMark = data.results[0].geometry.location.lng;
                                        changeLatlag(latMark, lngMark);//change address lat and lag in google map this function have exits in file content
                                    });
                                }

                                function getThongTinMaps(id) {//ham nay khoi tao dia diem ajax luc thay doi du lieu cho input form
                                    var str = '';
                                    if ($('#subcat1-id').length > 0 && $('#cat1-id').length > 0) {
                                        var quan = $('#subcat1-id option:selected').text() + ',';
                                        var thanhpho = $('#cat1-id option:selected').text() + ',';
                                        var phuong = ($('#subcat2-id option:selected').text()) ? $('#subcat2-id option:selected').text() + ',' : '';
                                        var diachi = ($('#subcat3-id').val()) ? ($('#subcat3-id').val()) + ',' : '';

                                        if (id == 1) {
                                            quan = '';
                                            phuong = '';
                                        }
                                        if (id == 2) {
                                            phuong = '';
                                        }
                                        str = diachi + phuong + quan + thanhpho + 'Việt Nam';
                                    } else {
                                        str = info;
                                    }
                                    $.get("https://maps.googleapis.com/maps/api/geocode/json?address=" + str + "&key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8", function (data) {
                                        if ((typeof data.results[0] != "undefined")) {
                                            uluru = data.results[0].geometry.location;
                                            zoom = 10;
                                            info = str;
                                            initMap();
                                            var latMark = data.results[0].geometry.location.lat;
                                            var lngMark = data.results[0].geometry.location.lng;
                                            changeLatlag(latMark, lngMark);//change address lat and lag in google map this function have exits in file content
                                        }
                                        //else{
                                        //    getThongTinMaps(id);
                                        //}

                                    });
                                }

                                function toggleBounce() {
                                    if (marker.getAnimation() !== null) {
                                        marker.setAnimation(null);
                                    } else {
                                        marker.setAnimation(google.maps.Animation.BOUNCE);
                                    }
                                }

                                // Adds a marker to the map and push to the array.
                                function addMarker(location) {
                                    clearMarkers();
                                    var marker = new google.maps.Marker({
                                        position: location,
                                        map: map
                                    });
                                    markers.push(marker);
                                }

                                // Removes the markers from the map, but keeps them in the array.
                                function clearMarkers() {
                                    setMapOnAll(null);
                                    markers = [];
                                }

                                // Sets the map on all markers in the array.
                                function setMapOnAll(map) {
                                    for (var i = 0; i < markers.length; i++) {
                                        markers[i].setMap(map);
                                    }
                                }

                                function initMap() {
                                    map = new google.maps.Map(document.getElementById('mapinfo_kts_p'), {
                                        zoom: zoom,
                                        center: uluru,
                                        styles: $styles
                                    });

                                    marker = new google.maps.Marker({
                                        position: uluru,
                                        map: map
                                    });

                                    marker.addListener('click', toggleBounce);

                                    markers.push(marker);

                                    var rectangle = new google.maps.Rectangle({
                                        strokeColor: '#FF0000',
                                        strokeOpacity: 0.8,
                                        strokeWeight: 2,
                                        fillColor: '#FF0000',
                                        fillOpacity: 0.35,
                                        map: map,
                                        bounds: {
                                            north: 33.685,
                                            south: 33.671,
                                            east: -116.234,
                                            west: -116.251
                                        }
                                    });

                                    // Create info window content.
                                    var content = document.createElement('div');
                                    content.textContent = info;

                                    // Create open an info window attached to the marker.
                                    infoWindow = new google.maps.InfoWindow({content: content});
                                    infoWindow.open(map, marker);

                                    // This event listener will call addMarker() when the map is clicked.
                                    map.addListener('click', function (event) {
                                        var clickLat = event.latLng.lat();
                                        var clickLng = event.latLng.lng();
                                        addMarker(event.latLng);
                                        changeLatlag(clickLat, clickLng);//change address lat and lag in google map this function have exits in file content
                                    });

                                }

                            </script>
                            <button type="button" class="btn btn-default" onclick="js:getThongTinMaps()">Đến vị trí theo
                                địa chỉ nhập
                            </button>


                            <div class="form-group">
                                <div class="text-right col-md-12">
                                    <button type="submit" class="btn btn-success" name="login-button">Lưu thông tin
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <script language="javascript">
        function changeLatlag(lat, lag) {
            $('#input-type-lat').val(lat);
            $('#input-type-lng').val(lag);
            console.log($('#input-type-lat').val());
            console.log($('#input-type-lng').val());
        }
    </script>


    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <div class="logo-bottom">
                        <img src="image/kientruc.com.jpg" alt="KIENTRUC.com" title="KIENTRUC.com"
                             class="img-responsive">
                    </div>
                    <div class="info-bottom">
                        <ul class="list-unstyled">
                            <li>KIENTRUC.com</li>
                            <li><p style="font-size: 12px;">© 2015-2018 KIENTRUC.com jsc</p></li>
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
                        <li><a href="/" title="Trang chủ">Trang chủ</a></li>
                        <li><a href="hoi-dap" title="Hỏi chuyên gia">Hỏi chuyên gia</a></li>
                        <li><a href="tim-kien-truc-su" title="Tìm kiến trúc sư">Tìm kiến trúc sư</a></li>
                        <li><a href="du-an-moi" title="Dự án mới">Dự án mới</a></li>
                        <li><a href="tap-chi" title="Tạp chí">Tạp chí</a></li>
                        <li><a href="showroom" title="Showroom">Showroom</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="foot-h4-title">PHONG THỦY</div>
                    <ul class="list-unstyled foot-ul">
                        <li><a target="_blank" href="https://kientruc.com/phong-thuy/phong-thuy-nha-C9"
                               title="Phong Thủy Nhà">Phong Thủy Nhà</a></li>
                        <li><a target="_blank" href="https://www.kientruc.com/phong-thuy/xem-huong-nha-C10"
                               title="Xem hướng Nhà">Xem hướng Nhà</a></li>
                        <li><a target="_blank" href="https://www.kientruc.com/phong-thuy/mau-sac-phong-thuy-C11"
                               title="Màu sắc Phong Thủy">Màu sắc Phong Thủy</a></li>
                        <li><a target="_blank" href="https://www.kientruc.com/phong-thuy/xem-tuoi-lam-nha-C15"
                               title="Xem tuổi làm nhà">Xem tuổi làm nhà</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="foot-h4-title">MẪU NHÀ ĐẸP</div>
                    <ul class="list-unstyled foot-ul">
                        <li><a target="_blank"
                               href="https://www.kientruc.com/du-an-moi?lct=2&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                               title="Chung cư">Chung cư</a></li>
                        <li><a target="_blank"
                               href="https://www.kientruc.com/du-an-moi?lct=51&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                               title="Biệt thự">Biệt thự</a></li>
                        <li><a target="_blank"
                               href="https://www.kientruc.com/du-an-moi?lct=3&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                               title="Nhà mặt phố">Nhà mặt phố</a></li>
                        <li><a target="_blank"
                               href="https://www.kientruc.com/du-an-moi?lct=62&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                               title="Cafe">Cafe</a></li>
                        <li><a target="_blank"
                               href="https://www.kientruc.com/du-an-moi?lct=61&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
                               title="Văn phòng">Văn phòng</a></li>
                        <li><a target="_blank"
                               href="https://www.kientruc.com/du-an-moi?lct=63&amp;hm=&amp;pc=&amp;tt=&amp;sort=0"
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
                    <link itemscope="url" href="http://www.kientruc.com">
                    <ul class="list-unstyled foot-ul foot-ul-px" itemscope="" itemtype="http://schema.org/Organization">
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


    <div id="modal-ReportThank" class="fade modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    <div class="text-center">
                        Cảm ơn bạn đã cung cấp thông tin cho chúng tôi.
                        Chúng tôi sẽ kiểm tra lại và xử lý vấn đề này nhanh nhất có thể.
                    </div>
                    <div class="clearfix"></div>
                    <div class="line"></div>
                    <div class="text-center">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">
                            Ok
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div id="modal-ReportImportant" class="fade modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <label>Gửi thông tin yêu cầu xử lý</label>
                </div>
                <div class="modal-body">
                    <form id="form-report-info" action="/report/report-info" method="post">
                        <input type="hidden" name="_csrf-frontend"
                               value="3zwpirhVj2kGTEkLyZGdxcLH-_tYC1jry_Iz4E1BM-mWb0jO2i__M0QqGEP6-f6yjaWdwzdACp6ntlSwenBs2Q==">
                        <div class="text-right">
                            <button type="button" class="btn btn-link" onclick="javascript:getMyInformation()">Của tôi
                            </button>
                            |
                            <button type="button" class="btn btn-link" onclick="javascript:editMyInformation()">Sửa
                            </button>
                        </div>
                        <div>

                            <div class="form-group field-report-id-name required">
                                <div class="col-sm-3"><label class="control-label" for="report-id-name">Họ tên :</label>
                                </div>
                                <div class="col-sm-9"><input type="text" id="report-id-name" class="form-control"
                                                             name="ReportForm[name]" readonly="" aria-required="true">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group field-report-id-email required">
                                <div class="col-sm-3"><label class="control-label" for="report-id-email">Email :</label>
                                </div>
                                <div class="col-sm-9"><input type="text" id="report-id-email" class="form-control"
                                                             name="ReportForm[email]" readonly="" aria-required="true">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group field-report-id-phone required">
                                <div class="col-sm-3"><label class="control-label" for="report-id-phone">Điện thoại
                                        :</label></div>
                                <div class="col-sm-9"><input type="text" id="report-id-phone" class="form-control"
                                                             name="ReportForm[phone]" readonly="" aria-required="true">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group field-reportform-link">
                                <div class="col-sm-3"><label class="control-label" for="reportform-link">Link (nếu có)
                                        :</label></div>
                                <div class="col-sm-9"><input type="text" id="reportform-link" class="form-control"
                                                             name="ReportForm[link]">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group field-reportform-info">
                                <div class="col-sm-3"><label class="control-label" for="reportform-info">Mô tả yêu cầu
                                        :</label></div>
                                <div class="col-sm-9"><textarea id="reportform-info" class="form-control"
                                                                name="ReportForm[info]"></textarea>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="line"></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-sm">Gửi yêu cầu</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        function getMyInformation() {
            $.ajax({
                url: '/report/ajax-get-info-customer',
                type: 'post',
                //data: ,
                //processData: false,
                //contentType: false,
                success: function (data) {
                    if (data === '-1') {
                        alert('Bạn chưa đăng nhập. Xin hãy đăng nhập!');
                    } else {
                        const json = JSON.parse(data);
                        $('body').find('#report-id-phone').val(json.phone).prop('readonly', true);
                        $('body').find('#report-id-email').val(json.email).prop('readonly', true);
                        $('body').find('#report-id-name').val(json.full_name).prop('readonly', true);
                    }
                }
            });
        }

        function editMyInformation() {
            $('body').find('#report-id-phone').prop('readonly', false);
            $('body').find('#report-id-email').prop('readonly', false);
            $('body').find('#report-id-name').prop('readonly', false);
        }
    </script>


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


</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-124644846-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-124644846-1');
</script>

<script src="/assets/20c8f6c6/jquery.js"></script>
<script src="/assets/6b5faf4f/yii.js"></script>
<script src="/assets/6b5faf4f/yii.validation.js"></script>
<script src="/assets/eab6b631/js/select2.full.min.js"></script>
<script src="/assets/eab6b631/js/select2-krajee.min.js"></script>
<script src="/assets/eab6b631/js/i18n/vi.js"></script>
<script src="/assets/c4fe7e2a/js/kv-widgets.min.js"></script>
<script src="/assets/4986ff48/js/dependent-dropdown.min.js"></script>
<script src="/assets/aeb159b/js/depdrop.min.js"></script>
<script src="/assets/df57fb5c/js/bootstrap.js"></script>
<script src="/assets/464aa278/jquery.slimscroll.min.js"></script>
<script src="/library/jquery.easeScroll.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;callback=getThongTinMapsInit"></script>
<script src="/assets/6b5faf4f/yii.activeForm.js"></script>
<script src="/assets/9f7e0571/jquery.pjax.js"></script>
<script src="/library/jquery-loading-master/dist/jquery.loading.min.js"></script>
<script src="/js/javaChung.js"></script>
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

        if (jQuery('#cat1-id').data('select2')) {
            jQuery('#cat1-id').select2('destroy');
        }
        jQuery.when(jQuery('#cat1-id').select2(select2_13e3f95f)).done(initS2Loading('cat1-id', 's2options_d6851687'));

        if (jQuery('#subcat1-id').data('depdrop')) {
            jQuery('#subcat1-id').depdrop('destroy');
        }
        jQuery('#subcat1-id').depdrop(depdrop_39620606);

        if (jQuery('#subcat1-id').data('select2')) {
            jQuery('#subcat1-id').select2('destroy');
        }
        jQuery.when(jQuery('#subcat1-id').select2(select2_b268a3e9)).done(initS2Loading('subcat1-id', 's2options_d6851687'));

        initDepdropS2('subcat1-id', 'Loading ...');
        if (jQuery('#subcat2-id').data('depdrop')) {
            jQuery('#subcat2-id').depdrop('destroy');
        }
        jQuery('#subcat2-id').depdrop(depdrop_eda03ae1);

        if (jQuery('#subcat2-id').data('select2')) {
            jQuery('#subcat2-id').select2('destroy');
        }
        jQuery.when(jQuery('#subcat2-id').select2(select2_b268a3e9)).done(initS2Loading('subcat2-id', 's2options_d6851687'));

        initDepdropS2('subcat2-id', 'Loading ...');
        jQuery('#thong-tin-tai-khoan-form').yiiActiveForm([{
            "id": "dangkiktsstep01-nick_name",
            "name": "nick_name",
            "container": ".field-dangkiktsstep01-nick_name",
            "input": "#dangkiktsstep01-nick_name",
            "error": ".help-block.help-block-error",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "Nick Name không được để trống."});
                yii.validation.string(value, messages, {
                    "message": "Nick Name phải là chuỗi.",
                    "max": 20,
                    "tooLong": "Nick Name phải chứa nhiều nhất 20 ký tự.",
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "dangkiktsstep01-first_name",
            "name": "first_name",
            "container": ".field-dangkiktsstep01-first_name",
            "input": "#dangkiktsstep01-first_name",
            "error": ".help-block.help-block-error",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "First Name không được để trống."});
                yii.validation.string(value, messages, {
                    "message": "First Name phải là chuỗi.",
                    "max": 20,
                    "tooLong": "First Name phải chứa nhiều nhất 20 ký tự.",
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "dangkiktsstep01-last_name",
            "name": "last_name",
            "container": ".field-dangkiktsstep01-last_name",
            "input": "#dangkiktsstep01-last_name",
            "error": ".help-block.help-block-error",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "Last Name không được để trống."});
                yii.validation.string(value, messages, {
                    "message": "Last Name phải là chuỗi.",
                    "max": 20,
                    "tooLong": "Last Name phải chứa nhiều nhất 20 ký tự.",
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "dangkiktsstep01-sex",
            "name": "sex",
            "container": ".field-dangkiktsstep01-sex",
            "input": "#dangkiktsstep01-sex",
            "error": ".help-block.help-block-error",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.number(value, messages, {
                    "pattern": /^\s*[+-]?\d+\s*$/,
                    "message": "Sex phải là số nguyên.",
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "dangkiktsstep01-phone",
            "name": "phone",
            "container": ".field-dangkiktsstep01-phone",
            "input": "#dangkiktsstep01-phone",
            "error": ".help-block.help-block-error",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "Phone không được để trống."});
                yii.validation.regularExpression(value, messages, {
                    "pattern": /^[0-9]+$/,
                    "not": false,
                    "message": "Chỉ được nhập số",
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "dangkiktsstep01-idprovince",
            "name": "idprovince",
            "container": ".field-cat1-id",
            "input": "#cat1-id",
            "error": ".help-block.help-block-error",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "idprovince không được để trống."});
                yii.validation.string(value, messages, {
                    "message": "idprovince phải là chuỗi.",
                    "max": 15,
                    "tooLong": "idprovince phải chứa nhiều nhất 15 ký tự.",
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "dangkiktsstep01-iddistrict",
            "name": "iddistrict",
            "container": ".field-subcat1-id",
            "input": "#subcat1-id",
            "error": ".help-block.help-block-error",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "iddistrict không được để trống."});
                yii.validation.string(value, messages, {
                    "message": "iddistrict phải là chuỗi.",
                    "max": 15,
                    "tooLong": "iddistrict phải chứa nhiều nhất 15 ký tự.",
                    "skipOnEmpty": 1
                });
            }
        }], []);
        jQuery(document).pjax("#p0 a", {
            "push": true,
            "replace": false,
            "timeout": 1000,
            "scrollTo": false,
            "container": "#p0"
        });
        jQuery(document).on("submit", "#p0 form[data-pjax]", function (event) {
            jQuery.pjax.submit(event, {
                "push": true,
                "replace": false,
                "timeout": 1000,
                "scrollTo": false,
                "container": "#p0"
            });
        });
        jQuery('#modal-ReportThank').modal({"show": false, "backdrop": "static", "keyboard": false});
        jQuery('#form-report-info').yiiActiveForm([{
            "id": "reportform-name",
            "name": "name",
            "container": ".field-report-id-name",
            "input": "#report-id-name",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "Name không được để trống."});
                yii.validation.string(value, messages, {
                    "message": "Name phải là chuỗi.",
                    "max": 30,
                    "tooLong": "Name phải chứa nhiều nhất 30 ký tự.",
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "reportform-email",
            "name": "email",
            "container": ".field-report-id-email",
            "input": "#report-id-email",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "Email không được để trống."});
                yii.validation.email(value, messages, {
                    "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,
                    "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,
                    "allowName": false,
                    "message": "Email không phải là địa chỉ email hợp lệ.",
                    "enableIDN": false,
                    "skipOnEmpty": 1
                });
            }
        }, {
            "id": "reportform-phone",
            "name": "phone",
            "container": ".field-report-id-phone",
            "input": "#report-id-phone",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.required(value, messages, {"message": "Phone không được để trống."});
            }
        }, {
            "id": "reportform-info",
            "name": "info",
            "container": ".field-reportform-info",
            "input": "#reportform-info",
            "validate": function (attribute, value, messages, deferred, $form) {
                yii.validation.string(value, messages, {
                    "message": "Info phải là chuỗi.",
                    "max": 255,
                    "tooLong": "Info phải chứa nhiều nhất 255 ký tự.",
                    "skipOnEmpty": 1
                });
            }
        }], []);
        jQuery('#modal-ReportImportant').modal({"show": false, "backdrop": "static", "keyboard": false});

        $('body').on('beforeSubmit', '#form-report-info', function (event, jqXHR, settings) {
            const form = $(this);
            if (form.find('.has-error').length) {
                return false;
            }
            $('#modal06').loading();

            //tien hanh chuyen info di
            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: form.serialize(),
                //processData: false,
                //contentType: false,
                success: function (data) {
                    if (data === '0') {
                        alert('Lỗi: Tạo báo cáo bị lỗi');
                    } else if (data === '-1') {
                        alert('Lỗi: Chưa đăng nhập');
                    } else {
                        $('#modal-ReportImportant').modal('hide');
                        $('#modal-ReportThank').modal({
                            show: true,
                            backdrop: 'static'
                        });
                    }
                }
            });

            return false;
        })

    });</script>

</body>