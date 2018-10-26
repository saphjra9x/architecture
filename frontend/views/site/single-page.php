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
    <div id="Breadcrumb"></div>
    <div id="TopContent"></div>
    <div>
        <div id="TopContentLeft" class="SubTopContent"></div>
        <div id="TopContentRight" class="SubTopContent"></div>
    </div>
    <div style="clear: both;">
    </div>
    <div id="LeftMainContent">
        <div class="container-default">
            <div id="ctl23_BodyContainer">
                <link rel="stylesheet" type="text/css"
                      href="/filemain/twentytwenty.css" media="all">
                <div id="ctl23_ctl00_panelNewsDetails" class="contentDetail">
                    <h1 id="ctl23_ctl00_divArticleTitle" class="detailsView-title-style">
                        <?= $category['title'] ?>
                    </h1>
                    <?= $category['content'] ?>
                </div>
                <div class="clear" style="margin-bottom: 10px;">
                </div>
            </div>
        </div>
        <div class="othernews">
            <h2 class="normalblue" style="white-space: nowrap;">Tin liên quan</h2>
            <div class="otherline" style="width:80%;">
                &nbsp;
            </div>
            <?php foreach (FunctionHelper::get_categories_by_page_key($category['page']['key'], 0) as $key => $value): ?>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist"
                       href="<?= Url::to(['site/view', 'category_slug' => $value['slug']]) ?>"
                       title="Quảng Ngãi: Nở rộ dự án bất động sản nhưng sức mua hạn chế">
                        <?= $value['title'] ?>
                    </a>
                </h3>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>
<?= $this->render('mainright') ?>
<style>
    .home-top-search-keyword input[type=text] {
        padding: 3px 5px;
    }
</style>
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
