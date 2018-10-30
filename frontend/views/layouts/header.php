<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\helpers\FunctionHelper;
use common\models\User;
use yii\helpers\Url;


$info = FunctionHelper::get_general_information();
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
<header>
    <div class="head">
        <div class="h-part-1">
            <div class="container">
                <div class="pull-left top-logo">
                    <button type="button" class="but-menu-top collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="fa fa-navicon"></span>
                    </button>
                    <a href="<?= Url::to(['site/index']) ?>" class="a-white">
                        <img src="<?= $info['logo']; ?>"
                             class="img-responsive img-logo"/>
                        <span class="span-name-website"><?= $_SERVER['SERVER_NAME'] ?></span>
                    </a>

                    <a href="#" title="Đăng kí"
                       class="a-menu-top a-white hidden-width-320">
                        Đăng kí
                    </a>
                    <a href="#" title="Đăng nhập"
                       class="a-menu-top a-white">
                        Đăng nhập
                    </a>

                </div>

                <div class="pull-right div-menu-top a-menu-top-2">
                    <div class="navbar-collapse" id="bs-example-navbar-collapse-0">
                        <ul class="nav navbar-right">
                            <li>
                                <a style="padding: 15px 5px;"
                                   href="<?= Url::to(['site/register'])?>"
                                   title="Đăng kí" class="a-white hidden-width-320">
                                    Đăng kí
                                </a>
                            </li>
                            <li>
                                <a style="padding: 15px 5px;"
                                   href="https://login.kientruc.com?link=https://www.kientruc.com" title="Đăng nhập"
                                   class="a-white">
                                    Đăng nhập
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </div>
        </div>
        <div class="h-part-2">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid row">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <?php foreach (FunctionHelper::get_categories_by_parent_id(null, 0) as $key_ca => $value_ca): ?>
                                    <?php $chi = FunctionHelper::get_categories_by_parent_id($value_ca['id']); ?>
                                    <?php if (!$chi): ?>
                                        <li class="licss3 parent-menu-hover">
                                            <a href="<?= Url::to(['site/view', 'category_slug' => $value_ca['slug']]) ?>"
                                               title="<?= $value_ca['title'] ?>">
                                                <i class="fa fa-comments-o"></i>
                                                <?= $value_ca['title'] ?>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <?php if ($value_ca['id'] == 2): ?>
                                            <li class="licss3 parent-menu-hover">
                                                <a href="<?= Url::to(['site/view', 'category_slug' => $value_ca['slug']]) ?>"
                                                   title="<?= $value_ca['title'] ?>">
                                                    <i class="fa fa-search"></i>
                                                    <?= $value_ca['title'] ?>
                                                </a>
                                                <div class="hover-menu hover-menu-tim-kien-truc-su">
                                                    <ul class="list-unstyled">
                                                        <?php foreach ($chi as $key_chi => $value_chi): ?>
                                                        <?php if ($key_chi==2 || $key_chi==7):?>
                                                            <li class="duong-ke-ngan-cach">
                                                                <?php else:?>
                                                                <li class="">
                                                            <?php endif;?>
                                                                <a href="<?= Url::to(['site/view', 'category_slug' => $value_chi['slug']]) ?>"
                                                                   title="<?= $value_chi['title'] ?>">
                                                                    <?= $value_chi['title']; ?>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </li>
                                        <?php endif;
                                        if ($value_ca['id'] == 4): ?>
                                            <li class="licss3 parent-menu-hover-bai-viet">
                                                <a href="<?= Url::to(['site/view', 'category_slug' => $value_ca['slug']]) ?>"
                                                   title="<?= $value_ca['title'] ?>">
                                                    <i class="fa fa-newspaper-o"></i>
                                                    <?= $value_ca['title'] ?>
                                                </a>
                                                <div class="hover-menu-bai-viet">
                                                    <ul class="list-unstyled">
                                                        <?php foreach ($chi as $key_chi => $value_chi): ?>
                                                            <li>
                                                                <a href="<?= Url::to(['site/view', 'category_slug' => $value_chi['slug']]) ?>"
                                                                   title="<?= $value_chi['title'] ?>">
                                                                    <span><?= $value_chi['title'] ?></span>
                                                                </a>
                                                                <ul class="list-unstyled">
                                                                    <?php foreach (FunctionHelper::get_categories_by_parent_id($value_chi['id']) as $key_chau => $value_chau): ?>
                                                                        <li>
                                                                            <a href="<?= Url::to(['site/view', 'category_slug' => $value_chau['slug']]) ?>"
                                                                               title="<?= $value_chau['title'] ?>">
                                                                                <?= $value_chau['title'] ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </li>
                                        <?php endif;
                                    endif;
                                endforeach; ?>
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

<style type="text/css">
    select {
        text-align-last: right;
    }

    option {
        direction: rtl;
    }
</style>