<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/css/bootstrap.css',
        'theme/css/font-awesome.min.css',
        'theme/css/index.css',
        'theme/css/jquery.loading.min.css',
        'theme/css/uplevelkts.css',




    ];
    public $js = [
        'theme/js/jquery.js',
        'theme/js/yii.js',
        'theme/js/bootstrap.js',
        'theme/js/jquery.slimscroll.min.js',
        'theme/js/jquery.easeScroll.js',
        'theme/js/jquery.loading.min.js',
        'theme/js/javaSlide.js',
        'theme/js/javaChung.js',

    ];
    public $depends = [

    ];
}
