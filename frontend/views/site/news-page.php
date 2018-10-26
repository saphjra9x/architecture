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
<div class="div_2col1">
    <div class="clear">
    </div>
    <div id="LeftMainContent" class="t_left1">
        <div>
            <div id="ctl24_HeaderContainer" class="box-header">
                <div class="name_tit" align="left" style="padding-left:10px;">
                    <h1 style="color:White;">Tin tức bất động sản - Tin nổi bật:</h1>
                </div>
            </div>
            <div id="ctl24_BodyContainer" class="tc-tin-3cot-tit1">
                <div class="parent-cate-news">
                    <?php foreach (FunctionHelper::get_post_by_category_slug($category['slug'], 8, 0, 1) as $key => $value): ?>
                        <?php if ($key == 0): ?>
                            <div class="tc-tin-3cot-tit1-left">
                                <a title="Mở rộng sân bay Tân Sơn Nhất sẽ cần 25.000 tỷ đồng"
                                   href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>">
                                    <img class="bor_img"
                                         src="<?= $value['avatar'] ?>">
                                </a>
                                <h3>
                                    <a class="font-link-box-item"
                                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                       title="<?= $value['title'] ?>">
                                        <?= $value['title'] ?>
                                    </a>
                                </h3>
                                <?= $value['describe'] ?>
                            </div>
                        <?php endif;
                        if ($key >= 1 && $key <= 3):?>
                            <div class="tc-tin-3cot-tit1-right">
                                <img class="bor_img"
                                     src="<?= $value['avatar'] ?>"
                                     alt="">
                                <h3 class="normal">
                                    <a class="tc-tin-3cot-tit1-right-link font-link-box-item"
                                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                       title="<?= $value['title'] ?>">
                                        <?= $value['title'] ?>
                                    </a>
                                </h3>
                                <div class="clear">
                                </div>
                            </div>
                        <?php endif;
                        if ($key > 3): ?>
                            <div class="tc-tin-3cot-tit1-right-link2">
                                <ul>
                                    <li>
                                        <h3 class="normal">
                                            <a href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                               title="<?= $value['title'] ?>">
                                                <?= $value['title'] ?>
                                            </a>
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        <?php endif;endforeach; ?>
                </div>
                <div class="clear">
                </div>
                <div class="lblnewscateby">
                    <strong>Tin tức bất động sản</strong>&nbsp;theo chuyên mục:
                </div>
            </div>
        </div>
        <div style="clear:both;margin-bottom:5px;"></div>
        <div class="container-default">
            <div id="ctl25_BodyContainer">
                <?php foreach (FunctionHelper::get_categories_by_parent_id($category['id'], 0) as $key_ca => $value_ca): ?>
                    <div class="tc-duan-tin parent-cate-news">
                        <h2 class="tit_l borderbold">
                            <a class="news-category-root-box-title-link" href="/tin-thi-truong"
                               title="<?= $value_ca['title'] ?>">
                                <span style="white-space:nowrap;">
                                  <?= $value_ca['title'] ?>
                                </span>
                            </a>
                        </h2>
                        <?php foreach (FunctionHelper::get_post_by_category_slug($value_ca['slug'], 8) as $key => $value): ?>
                            <?php if ($key == 0): ?>
                                <div class="tintuc-row1 tc-tit">
                                    <a class="avatar" title="Nhiều sàn bất động sản rầm rộ tuyển quân"
                                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>">
                                        <img src="<?= $value['avatar'] ?>"
                                             alt="<?= $value['title'] ?>">
                                    </a>
                                    <h3>
                                        <a class="font-link-news-parent"
                                           href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                           title="<?= $value['title'] ?>">
                                           <span style="font-weight: bold; color: #055699">
                                               <?= $value['title'] ?>
                                           </span>
                                        </a>
                                    </h3>
                                    <br>
                                    <?= $value['describe'] ?>
                                </div>
                            <?php endif; ?>
                            <div class="tc-duan-tin-thumnai">
                                <?php if ($key >= 1 && $key <= 3): ?>
                                    <div class="tc-duan-tin-thumnai-row1">
                                        <a class="tc-duan-tin-thumnai-img"
                                           title="<?= $value['title'] ?>"
                                           href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>">
                                            <img alt="<?= $value['title'] ?>"
                                                 src="<?= $value['avatar'] ?>">
                                        </a>
                                        <h3>
                                            <a class="tc-duan-tin-thumnai-link"
                                               href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                               title="<?= $value['title'] ?>">
                                                <?= $value['title'] ?>
                                            </a>
                                        </h3>
                                    </div>
                                <?php endif;
                                if ($key > 3): ?>
                                    <div class="tc-tin-3cot-tit1-right-link2">
                                        <ul>
                                            <li>
                                                <h3 class="normal">
                                                    <a class="font-link-box-item"
                                                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                                       title=" <?= $value['title'] ?>">
                                                        <?= $value['title'] ?>
                                                    </a>
                                                </h3>
                                                <a class="font-link-box-item"
                                                   href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                                                   title="<?= $value['title'] ?>">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                        <div class="clear">
                        </div>
                    </div>
                <?php endforeach; ?>
                <div style="clear: both">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>

    <div id="MiddleMainContent" class="t_right">
        <div class="container-commom">
            <div id="ctl26_HeaderContainer" class="box-header">
                <div class="name_tit" align="center">
                    <h2 style="color: White;">
                        Tin nhiều người đọc
                    </h2>
                </div>
            </div>
            <div id="ctl26_BodyContainer" class="bor_box">
                <?php foreach (FunctionHelper::get_post_by_views(6) as $key => $value): ?>
                    <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                        <div class="many-readers-title-icon">
                            <a title="<?= $value['title'] ?>"
                               href="<?= Url::to(['site/view', 'category_slug' => $value['category']['slug'], 'content_slug' => $value['slug']]) ?>">
                                <img style="width: 60px; height: 60px;"
                                     src="<?= $value['avatar'] ?>">
                            </a>
                        </div>
                    </div>
                    <div class="data-default-CSSClass">
                        <p style="padding: 0; margin: 5px 5px 0 0;">
                            <a class="controls-view-date-contents-link"
                               href="<?= Url::to(['site/view', 'category_slug' => $value['category']['slug'], 'content_slug' => $value['slug']]) ?>"
                               title="<?= $value['title'] ?>">
                                <?= $value['title'] ?>
                            </a>
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                <?php endforeach; ?>
            </div>
            <div id="ctl26_FooterContainer">
            </div>
        </div>
        <div style="clear: both; margin-bottom: 10px;">
        </div>
        <div class="container-commom">
            <div id="ctl27_HeaderContainer" class="box-header">
                <div class="name_tit" align="center">
                    <h2 style="color: White;">
                        Tin rao được xem nhiều
                    </h2>
                </div>
            </div>
            <div id="ctl27_BodyContainer" class="bor_box">
                <div class="list">
                    <ul>
                        <?php foreach (FunctionHelper::get_classifieds_by_views(8) as $key => $value): ?>
                            <li>
                                <h3 class="normal">
                                    <a href="<?= Url::to(['site/view', 'category_slug' => $value['category']['slug'], 'content_slug' => $value['slug']]) ?>"
                                       title="<?= $value['title'] ?>">
                                        <?= $value['title'] ?>
                                    </a>
                                </h3>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div id="ctl27_FooterContainer">
            </div>
        </div>
        <div style="clear: both; margin-bottom: 10px;">
        </div>
        <div style="clear:both;"></div>
        <div class="clear10"></div>
        <div style="clear:both;"></div>
    </div>
    <div class="clear">
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