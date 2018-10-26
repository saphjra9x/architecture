<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CmsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'cms/components/font-awesome/css/font-awesome.min.css',
        'cms/components/bootstrap-switch/css/bootstrap-switch.min.css',
        'cms/components/messenger/css/messenger.css',
        'cms/components/messenger/css/messenger-theme-future.css',
        'cms/components/messenger/css/messenger-theme-flat.css',
        'cms/css/core.css',
        'cms/css/language.css',
        'customer/css/customer.css',
        'customer/css/sample.css'
    ];
    public $js = [
        'cms/components/bootstrap/js/bootstrap.min.js',
        'cms/components/bootstrap-switch/js/bootstrap-switch.min.js',
        'cms/components/messenger/js/messenger.min.js',
        'cms/components/messenger/js/messenger-theme-future.js',
        'cms/components/messenger/js/messenger-theme-flat.js',
        'customer/js/messenger.js',
        'customer/js/setting.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
