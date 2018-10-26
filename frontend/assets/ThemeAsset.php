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
        'filemain/banner-preview.css',
        'filemain/style.css',
        'filemain/ie.css',
        'filemain/jquery.mCustomScrollbar.css',
        'filemain/print.css',
        'theme/css/main.css',
        'filemain/font-awesome.min.css',
        'filemain/jquery.fancybox.css',
        'filemain/jquery.fancybox-buttons.css',
        'filemain/jquery-ui.css',
        'filemain/usercomment1.css',
        'filemain/chat-style.css',
        'filemain/emoticon.css',
        'filemain/login.css',
        'css/login-ie-gte9.css?v=20180912',
        'css/login-ie.css?v=20180912'

    ];
    public $js = [
        'filemain/fbevents.js',
        'filemain/atrk.js',
        'filemain/plusone.js',
        'filemain/sdk.js',
        'filemain/analytics.js',
        'filemain/jquery-1.7.2.min.js',
        'filemain/jquery.cookie.js',
        'filemain/jquery.AdvanceHiddenDropbox.js',
        'filemain/lang.js',
        'filemain/setting.js',
        'filemain/banner.js',
        'filemain/jquery.bt.min.js',
        'filemain/common.js',
        'filemain/common.validator.js',
        'filemain/jcarousellite.js',
        'filemain/fengshui_divinations.js',
        'filemain/jquery-ui-1.8.11.min.js',
        'filemain/jquery.mousewheel.min.js',
        'filemain/jquery.fancybox.js',
        'filemain/jquery.fancybox-buttons.js',
        'filemain/jquery.mCustomScrollbar.min.js',
        'filemain/usercomment.js',
        'filemain/counter.js',
        'filemain/jquery.signalR-2.1.2.min.js',
        'filemain/hubs.js',
        'filemain/jquery.tmpl.min.js',
        'filemain/jquery.emoticon.js',
        'filemain/ChatUserTemplates.js',
        'filemain/BDSChat.js',
        'filemain/chatPopup.js',
        'filemain/jquery.cookie.js(1)',
        'filemain/chatCommon.js',
        'filemain/DVLoggerClient.js',
        'filemain/ed.js'
    ];
    public $depends = [

    ];
}
