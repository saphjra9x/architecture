<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

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
<div class="body-left">
    <div>
        <div class="SubTopContent">
        </div>
        <div class="SubTopContent">
        </div>
    </div>
    <div style="clear: both;">
    </div>
    <div class="container-default">
        <div>
            <div class="product-list product-list-page" pagekey="ti5LxTzp2/3wXYVLsYkp5A==">
                <div id="bannerQC">
                    <div class="adPosition" positioncode="BANNER_POSITION_HORIZONTAL_MAIN_CONTENT" style=""
                         hasshare="True" hasnotshare="True"></div>

                </div>

                <div class="Main">
                    <div class="Header">
                        <ul class="header-tab filter">
                            <li class="active" rel="all">
                                <span>
                                    <span style="white-space: nowrap;">
                                        <a onclick="" id="LeftMainContent__productSearchResult_blFilterAll">
                                            Tất cả tin rao
                                        </a>
                                    </span>
                                </span>
                            </li>
                        </ul>
                        <input type="hidden" name="ctl00$LeftMainContent$_productSearchResult$hddFilter"
                               id="LeftMainContent__productSearchResult_hddFilter" value="0">
                        <div class="Repeat">
                            <h2 style="font-size: 12px;">
                                <?= $category['title'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                    <?php foreach (FunctionHelper::get_classifieds_by_category_slug($category['slug'], 0) as $key => $value): ?>
                        <div class="vip0 search-productItem">
                            <div class="p-title">
                                <h3>
                                    <a href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                       title="<?= $value['title'] ?>"
                                       style="text-rendering: optimizelegibility;">
                                        <?= $value['title'] ?>
                                    </a>
                                </h3>

                            </div>
                            <div class="p-main">
                                <div class="p-main-image-crop">
                                    <a class="product-avatar"
                                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                       title="<?= $value['title'] ?>"
                                       onclick="">
                                        <img class="product-avatar-img"
                                             src="<?= $value['avatar'] ?>"
                                             alt="<?= $value['title'] ?>">

                                    </a>
                                </div>
                                <div class="p-content">
                                    <div class="p-main-text" style="text-rendering: optimizelegibility;">
                                        <?= $value['describe'] ?>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="p-bottom-crop fix-p-bottom-crop">
                                    <div class="floatleft">
                                        Giá:
                                        <span class="product-price"><?= $value['price'] ?> <?= $value['unit']['title'] ?></span>&nbsp;
                                        Diện tích:
                                        <span class="product-area"><?= $value['acreage'] ?></span>&nbsp;
                                        Quận/Huyện:
                                        <span class="product-city-dist">
                                          <?= $value['address'] ?>
                                        </span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear10"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="clear">
            </div>
            <div class="mt5">
                <div class="background-pager-right-controls">

                </div>
            </div>
            <div class="clear">
            </div>


        </div>
    </div>

</div>
<?= $this->render('mainright') ?>
<div id="category" style="display: none"><?= $category['slug'] ?></div>
<script>
    window.onload = function () {
        let category = $('#category').text();
        let screen_width = screen.width;
        if (screen_width <= 768) {
            window.location = '/mobile-site/view?category_slug=' + category;
        }
    };

</script>