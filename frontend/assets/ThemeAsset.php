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

        'theme/css/css.css',
        'theme/css/css(1).css',
        'theme/css/bootstrap.css',
        'theme/css/select2.min.css',
        'theme/css/select2-addl.min.css',
        'theme/css/select2-krajee.min.css',
        'theme/css/kv-widgets.min.css',
        'theme/css/dependent-dropdown.min.css',
        'theme/css/font-awesome.min.css',
        'theme/css/index.css',
        'theme/css/fileinput.min.css',
        'theme/css/bootstrap-toggle.min.css',
        'theme/css/jquery.loading.min.css',
        'theme/css/uplevelkts.css',
        'theme/css/customer.css',
        'theme/css/checkbox-x.min.css',
        'theme/css/ask.css',
        'theme/css/page-kts.css',




    ];
    public $js = [
        'theme/js/jquery.js',
        'theme/js/yii.js',
        'theme/js/yii.validation.js',
        'theme/js/bootstrap-datepicker.min.js',
        'theme/js/bootstrap.js',
        'theme/js/datepicker-kv.min.js',
        'theme/js/jquery.slimscroll.min.js',
        'theme/js/kv-widgets.min.js',
        'theme/js/select2.full.min.js',
        'theme/js/select2-krajee.min.js',
        'theme/js/vi.js',
        'theme/js/yii.activeForm.js',
        'theme/js/bootstrap.js',
        'theme/js/jquery.slimscroll.min.js',
        'theme/js/jquery.easeScroll.js',
        'theme/js/jquery.loading.min.js',
        'theme/js/javaSlide.js',
        'theme/js/javaChung.js',
        'theme/js/checkbox-x.min.js',

    ];
    public $depends = [

    ];
}
