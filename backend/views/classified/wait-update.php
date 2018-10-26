<?php

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $seo \common\models\SeoTool */
/* @var $images \common\models\Image */

$this->title = Yii::t('backend', 'Classifieds');
?>
<div class="page-content " style="min-height: 602px;">
    <section class="content-header">
    </section>
    <section class="content" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?= $this->render('_form', [
                    'model' => $model,
                    'images' => $images
                ]) ?>
            </div>
        </div>
    </section>
</div>