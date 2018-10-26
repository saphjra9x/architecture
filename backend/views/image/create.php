<?php

use yii\helpers\Url;
use backend\assets\ImageAsset;
use backend\assets\EditableAsset;

ImageAsset::register($this);
EditableAsset::register($this);

/* @var $this yii\web\View */
/* @var $location common\models\PhotoLocation */
/* @var $images common\models\Image */

$this->title = Yii::t('backend', 'Hình ảnh ' . $location['title']);

?>

<div class="page-content " style="min-height: 602px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Bảng điều khiển</a></li>

        <li class="breadcrumb-item"><a href="<?= Url::to(['image/index']) ?>">Hình ảnh</a></li>

        <li class="breadcrumb-item active"><?= $location['title'] ?></li>
    </ol>
    <div class="clearfix"></div>
    <div>

        <div class="note note-success">
            <p>
                Bạn đang chỉnh sửa phiên bản "<strong class="current_language_text">Tiếng Việt</strong>"
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="post-body-content"
                     style="position: relative;padding: 10px;background: #fff;">
                    <div>
                        <div class="inside">
                            <div id="list-img-temp" class="thumbnails ui-sortable"
                                 style="display: none">
                                <div class="file-preview-frame krajee-default  kv-preview-thumb">
                                    <div class="kv-file-content">
                                        <img src="" class="kv-preview-data file-preview-image">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption">
                                            <span class="caption"></span>
                                        </div>
                                        <div class="file-upload-indicator">
                                        </div>
                                        <div class="file-actions">
                                            <div class="file-footer-buttons">
                                                <button type="button" data-auto="1"
                                                        class="kv-file-zoom btn btn-xs btn-default"
                                                        onclick="deleteFile(event)">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="list-img" class="thumbnails ui-sortable">
                                <?php if (isset($images)): foreach ($images as $key => $value): ?>
                                    <div class="file-preview-frame krajee-default  kv-preview-thumb">
                                        <div class="kv-file-content">
                                            <img src="<?= $value['avatar'] ?>"
                                                 class="kv-preview-data file-preview-image">
                                        </div>
                                        <div class="file-thumbnail-footer">
                                            <div class="file-footer-caption" title="">
                                                <a href="#" class="editable"
                                                   data-name="image#title" data-type="text"
                                                   data-pk="<?= $value['id'] ?>"
                                                   data-title="Enter title"
                                                   data-url="<?= Url::to(['ajax/edit-column']) ?>">
                                                    <?= $value['title'] ?>
                                                </a>
                                            </div>
                                            <div class="file-upload-indicator">
                                                <button type="button"
                                                        class="btn btn-xs btn-default"
                                                        onclick="load_content_image(<?= $value['id'] ?>)"
                                                        data-toggle="modal"
                                                        data-target="#content-image">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                            <div class="file-actions">
                                                <div class="file-footer-buttons">
                                                    <button type="button" data-auto="1"
                                                            data-id="<?= $value['id'] ?>"
                                                            class="btn btn-xs btn-default"
                                                            onclick="deleteFile(event)">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; endif; ?>
                            </div>
                            <div class="spanButtonPlaceholder block-upload-item"
                                 style="position: relative; overflow: hidden;margin: 10px;">
                                <p>(Click để tải ảnh<br> hoặc kéo thả ảnh vào đây)</p>

                                <input data-auto="1" data-id="<?= $location['id'] ?>"
                                       data-column-parent-id="photo_location_id"
                                       class="kv-file-drop-zone" multiple="multiple"
                                       type="file" name="file">
                            </div>
                            <div class="droptext">
                                Đăng ảnh thật nhanh bằng cách kéo và thả ảnh vào khung.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>