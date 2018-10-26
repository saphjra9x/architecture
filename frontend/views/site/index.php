<?php

use yii\helpers\Url;
use common\helpers\FunctionHelper;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$general = FunctionHelper::get_general_information();

$this->title = $general['site_name'];

$this->registerMetaTag([
    'name' => 'description',
    'content' => $general['home_page_description']
]);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['site/index'], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'homepage'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $general['site_name']
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $general['home_page_description']
]);


$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to([$general['logo']], true)
]);
$slider = FunctionHelper::get_images_by_photo_location_key('homepage-slider', 0);
$video = FunctionHelper::get_setting_by_key('ch1');
$icon2 = FunctionHelper::get_setting_by_key('ch2');
$icon3 = FunctionHelper::get_setting_by_key('ch3');
$ohana = FunctionHelper::get_setting_by_key('ch4');
$ohana1 = FunctionHelper::get_setting_by_key('ch5');
$lisa = FunctionHelper::get_setting_by_key('ch6');
$tong_quan = FunctionHelper::get_setting_by_key('ch7');
$comment = FunctionHelper::get_setting_by_key('ch8');
?>
