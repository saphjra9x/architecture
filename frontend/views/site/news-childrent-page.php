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
            <div id="ctl24_BodyContainer">
                <div class="body-left">
                    <div id="ctl24_ctl00_panelCate" class="detailsView-title-style">
                        <div class="font-title-list-news">
                        </div>
                    </div>
                    <?php foreach (FunctionHelper::get_post_by_category_slug($category['slug'], 0) as $key => $value): ?>
                        <?php if ($key == 0) { ?>
                            <div class="tt-thumb-img">
                                <a href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>">
                                    <img style="width:216px;height:152px"
                                         src="<?= $value['avatar'] ?>"
                                         alt="<?= $value['title'] ?>" class="bor_img">
                                </a>
                                &nbsp;&nbsp;
                            </div>
                            <div class="tt-thumb-cnt">
                                <h2>
                                    <a class="link_blue"
                                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                       title="<?= $value['title'] ?>">
                                        <?= $value['title'] ?>
                                    </a>
                                </h2>
                                <div class="datetime">
                                    <?= date('d-m-Y', strtotime($value['created_at'])) ?>
                                </div>
                                <p style="text-rendering:geometricPrecision;">
                                    <?= $value['describe'] ?>
                                </p>
                            </div>
                            <div class="clear line"></div>
                        <?php } else { ?>
                            <div class="tintuc-row1 tintuc-list tc-tit">
                                <div class="tc-img list-news-image-title">
                                    <a href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>">
                                        <img class="bor_img" style="width: 132px; height: 100px;"
                                             alt="<?= $value['title'] ?>"
                                             src="<?= $value['avatar'] ?>">
                                    </a>
                                    &nbsp;&nbsp;
                                </div>
                                <h3>
                                    <a class="link_blue"
                                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                       title="<?= $value['title'] ?>">
                                        <?= $value['title'] ?>
                                    </a>
                                </h3>
                                <div class="datetime">
                                    <?= date('d-m-Y', strtotime($value['created_at'])) ?>
                                </div>
                                <p style="text-rendering:geometricPrecision;">
                                    <?= $value['describe'] ?>
                                </p>
                            </div>
                            <div class="clear"></div>
                        <?php }endforeach; ?>
                    <div id="ctl24_ctl00_panelPager">
                        <div class="background-pager-controls">
                            <div class="background-pager-right-controls">

                                <span id="ctl24_ctl00_ArticlesPager"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render('mainright') ?>
<style>
    .home-top-search-keyword input[type=text] {
        padding: 3px 5px;
    }
</style>