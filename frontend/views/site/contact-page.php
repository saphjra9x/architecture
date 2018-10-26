<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use yii\helpers\Url;

/** @var $category \common\models\Category */

$this->title = $category['title'];

$this->registerMetaTag( [
	'name'    => 'description',
	'content' => $category['seoTool']['meta_description']
] );

$this->registerMetaTag( [
	'property' => 'og:url',
	'content'  => Url::to( [ 'site/view', 'category_slug' => $category['slug'] ], true )
] );

$this->registerMetaTag( [
	'property' => 'og:type',
	'content'  => 'category'
] );

$this->registerMetaTag( [
	'property' => 'og:title',
	'content'  => $category['seoTool']['seo_title']
] );

$this->registerMetaTag( [
	'property' => 'og:description',
	'content'  => $category['seoTool']['meta_description']
] );

$this->registerMetaTag( [
	'property' => 'og:image',
	'content'  => Url::to( [ $category['avatar'] ], true )
] );

?>
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
