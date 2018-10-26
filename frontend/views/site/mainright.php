<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */
use common\helpers\FunctionHelper;
$video = FunctionHelper::get_setting_by_key('ch1');
?>

<div id="MainRight" class="col_right">
    <div class="adPosition" positioncode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style="margin-bottom: 10px;">
        <div class="adshared">
            <?= htmlspecialchars_decode($video['content']) ?>
        </div>
        <?php foreach (FunctionHelper::get_images_by_photo_location_key('main-right', 0) as $key => $value): ?>
            <div class="adshared">
                <div class="adshareditem aditem" time="15" style="display: block;">
                    <img src="<?= $value['avatar'] ?>" style="max-width: 100%; height:300px;">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <style type="text/css">
        .fone {
            color: #e70404;
            line-height: 20px;
        }

        .rc12 {
            overflow: hidden;
        }

        .rc12 .vip-row { /*height: 117px;*/
            width: 98%;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            var divs = $("#dntb > div");
            for (var i = 0; i < divs.length; i += 6) {
                divs.slice(i, i + 6).wrapAll("<li></li>");
            }
            $("#dntb > li").wrapAll("<ul></ul>");
        });
        $(document).ready(function () {
            if ($("#dntb > ul > li").length > 1) {
                $("#dntb").jCarouselLite({
                    scroll: -1,
                    visibile: 1,
                    auto: 5000,
                    speed: 1500,
                    hoverPause: false,
                    vertical: false
                });
            }
        });
    </script>
</div>