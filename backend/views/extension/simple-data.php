<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 5/31/2018
 * Time: 3:42 PM
 */

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = Yii::t( 'backend', 'Simple data' );

?>

<div class="page-content " style="min-height: 602px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= Url::to( [ 'site/index' ] ) ?>">Bảng điều khiển</a></li>

        <li class="breadcrumb-item active">Tiện tích mở rộng</li>

        <li class="breadcrumb-item active">Nén dữ liệu</li>
    </ol>
    <div class="clearfix"></div>

    <div class="row">
        <div id="list_widgets">
            <div class="col-md-12 col-sm-12 col-xs-12 widget_item">
                <div class="portlet light bordered portlet-no-padding">
                    <div class="portlet-title" style="margin-bottom: 15px;">
                        <div class="caption">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark">Dữ liệu mẫu được thêm</span>
                        </div>
                    </div>
                    <div class="portlet-body widget-content" style="min-height: auto;">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-yellow-casablanca font-white">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="info-box-content">
                                    <a href="<?= Url::to( [ 'category/index' ] ) ?>">
                                        <span class="info-box-text">Danh mục</span>
                                    </a>
                                    <span class="info-box-number">773</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-blue">
                                    <i class="fa fa-edit"></i>
                                </div>
                                <div class="info-box-content">
                                    <a href="<?= Url::to( [ 'post/index' ] ) ?>">
                                        <span class="info-box-text">Bài viết</span>
                                    </a>
                                    <span class="info-box-number">618</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box border-green-haze">
                                <div class="info-box-icon bg-green-haze font-white">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="info-box-content">
                                    <a href="<?= Url::to( [ 'classified/index' ] ) ?>">
                                        <span class="info-box-text">Tin rao</span>
                                    </a>
                                    <span class="info-box-number">2001</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-yellow">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="info-box-content">
                                    <a href="<?= Url::to( [ 'classified/index' ] ) ?>">
                                        <span class="info-box-text">Sản phẩn</span>
                                    </a>
                                    <span class="info-box-number">56.92%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-purple">
                                    <i class="fa fa-pie-chart"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">Percent new session</span>
                                    <span class="info-box-number">51.49%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-yellow-crusta font-white">
                                    <i class="fa fa-folder"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">Pages/Session</span>
                                    <span class="info-box-number">2.59</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-red">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">Avg. Duration</span>
                                    <span class="info-box-number">00:02:51</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-yellow-casablanca">
                                    <i class="fa fa-user-plus"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">New visitors</span>
                                    <span class="info-box-number">398</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>