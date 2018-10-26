<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

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
        <div class="body-left">
            <div class="subject-title-head-list">
                <h1 class="font-title-list-news" style="font-size: 18px;padding: 15px 0 5px;">
                    Kết quả tìm kiếm
                </h1>
            </div>
            <?php if (count($search) == 0): ?>
                <div>
                    <h2>Không có kết quả phù hợp!</h2>
                </div>
            <?php endif;
            if (count($search) != 0): ?>
                <?php foreach ($search as $key => $value): ?>
                    <div class="tintuc-row1 tintuc-list tc-tit">
                        <div class="tc-img list-news-image-title">
                            <a href="<?= Url::to(['site/view', 'category_slug' => $value['category']['slug'], 'content_slug' => $value['slug']]) ?>">
                                <img class="bor_img" style="width: 132px; height: 100px;"
                                     alt="  <?= $value['title'] ?>"
                                     src="  <?= $value['avatar'] ?>">
                            </a>&nbsp;&nbsp;
                        </div>
                        <h3>
                            <a class="link_blue"
                               href="<?= Url::to(['site/view', 'category_slug' => $value['category']['slug'], 'content_slug' => $value['slug']]) ?>"
                               title="  <?= $value['title'] ?>">
                                <?= $value['title'] ?>
                            </a>
                        </h3>
                        <p>
                            <?= $value['describe'] ?>
                        </p>
                    </div>
                <?php endforeach;endif; ?>

            <div class="clear">
            </div>
            <div id="ctl19_ctl00_panelPager">
                <div class="background-pager-controls">
                    <div class="background-pager-right-controls">
                        <span id="ctl19_ctl00_ArticlesPager"></span>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>
<?= $this->render('mainright') ?>
