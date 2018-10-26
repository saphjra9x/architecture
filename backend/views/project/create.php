<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\base\Project */

$this->title = Yii::t('backend', 'Create project');
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
