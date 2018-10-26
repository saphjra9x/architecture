<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use yii\helpers\Url;
use common\models\User;

$logo = FunctionHelper::get_general_information()['logo'];
$banner_top = FunctionHelper::get_images_by_photo_location_key('banner-top', 1);
$text_run = FunctionHelper::get_setting_by_key('ch2');
$user = null;

if (!Yii::$app->user->isGuest) {
    $user = findModel(Yii::$app->user->identity->getId());
}

function findModel($id)
{
    if (($model = User::findOne($id)) !== null) {
        return $model;
    } else {
        throw new NotFoundHttpException('The requested page does not exist . ');
    }
}

?>
<div class="header-top">
    <div class="header-top-left">
        <div style="padding-top: 5px;">
            <a href="<?= Url::to(['site/index']) ?>">
                <img src="<?= $logo ?>"
                     alt="Kênh thông tin mua bán, cho thuê nhà đất số 1" style="width: 100%">
            </a>

        </div>
    </div>
    <div class="header-top-right">
        <div id="TopBanner">
            <div class="container-default">
                <div id="ctl21_BodyContainer">
                    <div class="adPosition" positioncode="BANNER_POSITION_TOP" style="" hasshare="True"
                         hasnotshare="False">
                        <div class="adshared">
                            <div class="aditem" time="15" style="display: block;">
                                <a href=""
                                   target="_blank"
                                   title="" rel="nofollow">
                                    <img src="<?= $banner_top['avatar'] ?>"
                                         style="max-width: 100%; height:96px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="header-middle-right">
    <div style="float: left">
        <marquee behavior="" direction="" scrollamount="5">
            <?= $text_run['content'] ?>
        </marquee>
    </div>
    <div class="user_style" style="width: 50%">
        <div id="divUserStt" style="">
            <?php if (!$user): ?>
                <div>
                    <div class="header-middle-righ-link">
                        <a href="<?= Url::to(['site/login']) ?>" rel="nofollow">Đăng nhập</a>
                    </div>
                    <div class="header-middle-righ-icon">
                        <img src="/filemain/login.png"
                             id="ico_login">
                    </div>
                </div>
                <div>
                    <div class="header-middle-righ-link max90" id="kct_username">
                        <a id="register" href="<?= Url::to(['site/register']) ?>" title="Đăng ký" rel="nofollow">
                            Đăng ký
                        </a>
                    </div>

                    <div class="header-middle-righ-icon">
                        <img src="/filemain/register.png"
                             id="ico_register">
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($user): ?>
                <div>
                    <div class="header-middle-righ-link">
                        <a href="<?= Url::to(['site/logout']) ?>" title="Đăng xuất">
                            Đăng xuất
                        </a>
                    </div>
                    <div class="header-middle-righ-icon">
                        <img src="/filemain/login.png"
                             id="ico_login">
                    </div>
                    <div>
                        <div class="header-middle-righ-link max90" id="kct_username">
                            <b><?= $user['username'] ?></b>
                        </div>
                        <div class="header-middle-righ-icon">
                            <img src="/filemain/register.png"
                                 id="ico_register">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="header-middle-righ-link" id="chat-quick-inbox-icon"></div>
        </div>
        <div id="divCusPostProduct">
            <div id="UserControl1_divPostProduct" class="header-middle-righ-link">
                <a href="<?= Url::to(['site/post-news']) ?>"
                   id="linkPostProduct"><span>Đăng tin rao</span></a>
            </div>
            <div class="header-middle-righ-icon">
                <img src="/filemain/plus.png"
                     id="ico_product">
            </div>
        </div>
    </div>
</div>
<div class="header-menu">
    <div id="left-page-nav"></div>
    <div class="menupad"></div>
    <div id="page-navigative-menu">
        <div class="ihome">
            <a href="<?= Url::to(['site/index']) ?>">
                <img src="/filemain/homea.png">
            </a>
        </div>
        <ul class="dropdown-navigative-menu">
            <?php foreach (FunctionHelper::get_categories_by_parent_id(null, 0) as $key => $value): ?>
                <?php $childent = FunctionHelper::get_categories_by_parent_id($value['id'], 0) ?>
                <?php if (!$childent): ?>
                    <?php if ($key == 0) { ?>
                        <li class="lv0">
                            <a href="<?= Url::to(['site/index']) ?>" class="haslink ">
                                <?= $value['title'] ?>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li class="lv0">
                            <a href="<?= Url::to(['site/view', 'category_slug' => $value['slug']]) ?>" class="haslink ">
                                <?= $value['title'] ?>
                            </a>
                        </li>
                    <?php }endif; ?>
                <?php if ($childent): ?>
                    <li class="lv0">
                        <a href="<?= Url::to(['site/view', 'category_slug' => $value['slug']]) ?>" class="haslink ">
                            <?= $value['title'] ?>
                        </a>

                        <ul>
                            <?php foreach ($childent as $key_chi => $value_chil): ?>
                                <?php $childent1 = FunctionHelper::get_categories_by_parent_id($value_chil['id']) ?>
                                <?php if (!$childent1) { ?>
                                    <li class="lv1">
                                        <a href="<?= Url::to(['site/view', 'category_slug' => $value_chil['slug']]) ?>"
                                           class="haslink ">
                                            <?= $value_chil['title'] ?>
                                        </a>
                                    </li>
                                <?php } else { ?>

                                    <li class="lv1">
                                        <a href="<?= Url::to(['site/view', 'category_slug' => $value_chil['slug']]) ?>"
                                           class="haslink indent">
                                            <?= $value_chil['title'] ?>
                                        </a>
                                        <ul>
                                            <?php foreach ($childent1 as $key_chil1 => $value_chil1): ?>
                                                <li class="lv2">
                                                    <a href="<?= Url::to(['site/view', 'category_slug' => $value_chil1['slug']]) ?>"
                                                       class="haslink ">
                                                        <?= $value_chil1['title'] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php }endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="menupad"></div>
    <div id="right-page-nav"></div>
</div>
<div id="MiddleSubMenu">
    <link rel="stylesheet" type="text/css" href="/filemain/broker.css?v=20180912"
          media="all">
    <script src="/filemain/TopSearch.ascx.js"
            type="text/javascript">
    </script>
    <div class="broker-top-search">
        <div class="col1">
            <div class="label_search">Tìm kiếm tin rao</div>
        </div>
        <div class="col2">
            <div style="position: relative;">
                <input name="ctl00$MiddleSubMenu$_topSearch$txtKeyword" type="text" id="key_word" class="suggest"
                       placeholder="Nhập từ khóa tìm kiếm" maxlength="100">
            </div>
        </div>
        <div class="clear"></div>
        <div id="searchcontrol">
            <div class="col1">
                <div id="divBrCategory" class="comboboxs advance-select-box mr10">
                    <select class="advance-options select-text1" name="" id="exigency">
                        <option class="advance-options" value="0">Theo nhu cầu</option>
                        <?php foreach (FunctionHelper::get_exigency_of_classified() as $key => $value): ?>
                            <option class="advance-options" value="<?= $value['id'] ?>">
                                <?= $value['title'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col2">
                <div id="divSubCategory" class="comboboxs advance-select-box mr10">
                    <select class="advance-options select-text1" name="" id="kind">
                        <option class="advance-options" value="0">Theo loại bất động sản</option>
                        <?php foreach (FunctionHelper::get_category_classifieds() as $key => $value): ?>
                            <option class="advance-options" value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="divBrProject" class="comboboxs advance-select-box mr10">
                    <select class="advance-options select-text1" name="" id="project">
                        <option class="advance-options" value="0">Theo dự án</option>
                        <?php foreach (FunctionHelper::get_projects_of_classified() as $key => $value): ?>
                            <option class="advance-options" value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div id="divBrCity" class="comboboxs advance-select-box mr10" style="margin-right: 6px!important;">
                    <select class="advance-options select-text1" name="" id="price">
                        <option class="advance-options" value="">Theo giá</option>
                        <option class="advance-options" value="0-1-ti">Dưới 1 tỉ</option>
                        <option class="advance-options" value="1-2-ti">1->2 tỉ</option>
                        <option class="advance-options" value="3-4-ti">2->3 tỉ</option>
                        <option class="advance-options" value="3-4-ti">3->4 tỉ</option>
                        <option class="advance-options" value="4-5-ti">4->5 tỉ</option>
                        <option class="advance-options" value="5-10-ti">5->10 tỉ</option>
                        <option class="advance-options" value="10-1000-ti">trên 10 tỉ</option>
                    </select>
                </div>
                <div class="col3">
                    <a id="btnSearch" href="">
                        <input onclick="search()" type="button" name="ctl00$MiddleSubMenu$_topSearch$btnSearch"
                               value="Tìm kiếm" id="search-id" class="search">
                    </a>
                </div>
            </div>
        </div>

        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="MainContent"></div>
<style>
    .select-text1 {
        width: 150px;
        height: 25px;
        border-radius: 5px;
    }
</style>
<script>
    function search() {
        let key_word = $('#key_word').val();
        let exigency = $('#exigency').val();
        let kind = $('#kind').val();
        let project = $('#project').val();
        let price = $('#price').val();
        console.log(key_word);
        console.log(exigency);
        console.log(kind);
        console.log(project);
        console.log(price);

        let base = '/' + 'site/my-search?key_word=' + key_word + '&exigency=' + exigency + '&kind=' + kind + '&project=' + project + '&price=' + price;
        $("#btnSearch").attr('href', base);
    };
</script>
<!--<script type="text/javascript" src="/theme/js/search.js"></script>-->
