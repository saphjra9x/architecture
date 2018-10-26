<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $settings array common\models\Setting */
/* @var $user common\models\User */

$this->title = Yii::t( 'backend', 'Settings' );

?>

<div class="page-content " style="min-height: 602px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= Url::to( [ 'site/index' ] ) ?>">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active">Cấu hình</li>
    </ol>
    <div class="clearfix"></div>

    <div class="table-wrapper">
        <div class="portlet light bordered portlet-no-padding">
            <div class="portlet-title">
                <div class="caption">
                    <div class="wrapper-action"></div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <div id="table-menus_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="dt-buttons btn-group">
                            <a class="btn btn-default action-item" href="<?= Url::to( [ 'create' ] ) ?>">
                                <span>
                                    <span>
                                        <i class="fa fa-plus"></i> Tạo mới
                                    </span>
                                </span>
                            </a>
                            <a class="btn btn-default buttons-collection" tabindex="0" aria-controls="table-menus"
                               href="#">
                                <span>
                                    <img src="https://cms.botble.com/vendor/core/images/flags/vn.png"
                                         title="Tiếng Việt" alt="Tiếng Việt">
                                    <span>
                                        Ngôn ngữ
                                        <span class="caret"></span>
                                    </span>
                                </span>
                            </a>
                            <a class="btn btn-default buttons-reload" href="<?= Url::to( [ 'index' ] ) ?>">
                                <span><i class="fa fa-refresh"></i>
                                    Tải lại
                                </span>
                            </a>
                        </div>
                        <table class="table table-striped table-hover vertical-middle dataTable no-footer">
                            <thead>
                            <tr role="row">
                                <th class="text-left no-sort sorting_asc"
                                    style="width: 10px;text-align: center;">
                                    <input style="margin-right: 10px;" title="" type="checkbox" class="minimal">
                                </th>
                                <th width="20px" class="column-key-id sorting" tabindex="0"
                                    aria-controls="table-menus"
                                    rowspan="1" colspan="1" style="width: 20px;" aria-label="IDorderby asc">ID
                                </th>
                                <th class="text-left column-key-name sorting" tabindex="0"
                                    aria-controls="table-menus"
                                    rowspan="1" colspan="1" style="width: 232px;" aria-label="Tênorderby asc">Tiêu đề
                                </th>
                                <th width="100px" class="column-key-status sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1"
                                    style="width: 100px;text-align: left;"
                                    aria-label="Trạng tháiorderby asc">Khóa
                                </th>
                                <th width="100px" class="column-key-status sorting" tabindex="0"
                                    aria-controls="table-menus" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Trạng tháiorderby asc">Trạng thái
                                </th>
                                <th width="134px" class="text-center sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 158px;" aria-label="Tác vụ">Tác vụ
                                </th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach ( $settings as $key => $value ): ?>
                                <tr role="row" class="odd">
                                    <td style="text-align: center;" class="text-left no-sort sorting_1">
                                        <input title="" type="checkbox" class="minimal">
                                    </td>
                                    <td class="column-key-id"><?= $key + 1 ?></td>
                                    <td class="text-left column-key-name">
                                        <a href="<?= Url::to( [ 'tab', 'id' => $value['id'] ] ) ?>">
											<?= $value['title'] ?>
                                        </a>
                                    </td>
                                    <td class="text-left column-key-name">
										<?= $value['key'] ?>
                                    </td>
                                    <td class="column-key-status">
                                        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-mini"
                                             style="border:none">
                                            <input data-id="<?= $value['id'] ?>" data-api="ajax/enable-column"
                                                   data-table="setting" data-column="status"
                                                   type="checkbox" <?= $value['status'] ? 'checked="checked"' : '' ?>
                                                   title="" name="switch-checkbox">
                                        </div>
                                    </td>
                                    <td class=" text-center">
                                        <div class="table-actions">
                                            <a href="<?= Url::to( [ 'update', 'id' => $value['id'] ] ) ?>"
                                               class="btn btn-icon btn-sm btn-primary tip"
                                               data-original-title="Sửa">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
							<?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="datatables__info_wrap">
                            <div class="dataTables_paginate paging_simple_numbers">
                            </div>
                            <div class="dataTables_info" id="table-posts_info" role="status" aria-live="polite">
                                <span class="dt-length-records">
                                    <i class="fa fa-globe"></i>
                                    <span class="hidden-xs">Hiển thị từ</span>
                                    1 đến <?= count( $settings ) ?> trong
                                    <span class="badge bold badge-dt"><?= count( $settings ) ?></span>
                                    <span class="hidden-xs">bản ghi</span>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>