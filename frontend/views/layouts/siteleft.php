<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use yii\helpers\Url;

$logo = FunctionHelper::get_general_information()['logo'];
$banner_left = FunctionHelper::get_images_by_photo_location_key('banner-left', 0);
?>
<div id="SiteLeft" class="banner-left">
    <div class="container-default">
        <div id="ctl22_BodyContainer">
            <div id="ban_left" class="ban_scroll" style="display: block; top: 0px; position: fixed; ">
                <div class="adPosition" positioncode="BANNER_POSITION_LEFT" style="margin-bottom: 0;">
                    <?php foreach ($banner_left as $key => $value): ?>
                        <div class="adshared">
                            <div class="aditem" time="15" style="display: block;">
                                <img src="<?= $value['avatar'] ?>"
                                     style="max-width: 100%; height:300px;">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
