<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use yii\helpers\Url;

$logo = FunctionHelper::get_general_information()['logo'];
$banner_right = FunctionHelper::get_images_by_photo_location_key('banner-right', 0);
?>
<div id="SiteRight" class="banner-right">
    <div class="container-default">
        <div id="ctl23_BodyContainer">
            <div id="ban_right" class="ban_scroll"
                 style="display: block; top: 0px; position: fixed; right: 321.5px;">
                <div class="adPosition" style="margin-bottom: 0;">
                    <?php foreach ($banner_right as $key => $value): ?>
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