<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/18/2018
 * Time: 6:26 PM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

/** @var $category \common\models\Category */
/** @var $post \common\models\Classified */

$this->title = $classified['title'];

$this->registerMetaTag([
    'name' => 'description',
    'content' => $classified['seoTool']['meta_description']
]);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to([
        'site/view',
        'category_slug' => $category['slug'],
        'content_slug' => $classified['slug']
    ], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'category'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $classified['seoTool']['seo_title']
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $classified['seoTool']['meta_description']
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to([$classified['avatar']], true)
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
                        <?= $classified['title'] ?>
                    </h1>
                    <?= $classified['content'] ?>
                </div>
                <div class="clear" style="margin-bottom: 10px;">
                </div>
            </div>
        </div>
        <div class="othernews">
            <h2 class="normalblue" style="white-space: nowrap;">Tin nhiều người đọc</h2>
            <div class="otherline" style="width:80%;">
                &nbsp;
            </div>
            <?php foreach (FunctionHelper::get_classifieds_by_views(5) as $key => $value): ?>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist"
                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                       title="Quảng Ngãi: Nở rộ dự án bất động sản nhưng sức mua hạn chế">
                        <?= $value['title'] ?> (<?= $value['views'] ?>)
                    </a>
                </h3>
            <?php endforeach; ?>
            <div class="clear"></div>
            <h2 class="normalblue" style="white-space: nowrap;">Tin cũ hơn</h2>
            <div class="otherline">
                &nbsp;
            </div>
            <?php foreach (FunctionHelper::get_classifieds_by_id_desc(5) as $key => $value): ?>
                <h3 class="normal">
                    <a class="font-link-box-item iconlist"
                       href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value['slug']]) ?>"
                       title="<?= $value['title'] ?>">
                        <?= $value['title'] ?>
                    </a>
                </h3>
            <?php endforeach; ?>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>
<?= $this->render('mainright') ?>
<script src="/theme/js/jquery-3.3.1.min.js"></script>
<script>
    let base = "<?= Yii::$app->getHomeUrl() ?>";
    console.log(base);
</script>
<script>
    $(document).ready(function () {
        let view = <?= $classified['views'] + 1 ?>;
        $.ajax({
            url: base + 'admin/ajax/count-view?id='+ <?= $classified['id']?>+'&view='+ view,
            type: 'post',
            data: {},
            success: function (response) {
                console.log(response);
            }
        });
    });

</script>
<div id="category" style="display: none"><?= $category['slug'] ?></div>
<div id="content-slug" style="display: none"><?= $classified['slug'] ?></div>
<script>
    window.onload = function () {
        let category = $('#category').text();
        let content_slug = $('#content-slug').text();
        let screen_width = screen.width;
        if (screen_width <= 768) {
            window.location = '/mobile-site/view?category_slug=' + category + '&content_slug=' + content_slug;
        }
    };

</script>