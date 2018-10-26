<?php

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $seo \common\models\SeoTool */

$this->title = Yii::t('backend', 'Create category classified');
?>
<div class="page-content " style="min-height: 602px;">
    <section class="content" style="margin: 0!important">
        <div class="row">
            <div class="col-md-12">
                <?= $this->render('_form', [
                    'model' => $model
                ]) ?>
            </div>
        </div>
    </section>
</div>