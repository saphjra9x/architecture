<?php

/* @var $this yii\web\View */
/* @var $model common\models\Supporter */

$this->title = Yii::t('backend', 'Create supporter');
?>
<div class="page-content">
    <section class="content" style="margin: 20px 0">
        <div class="row">
            <div class="col-md-12">
                <?= $this->render('_form', [
                    'model' => $model
                ]) ?>
            </div>
        </div>
    </section>
</div>