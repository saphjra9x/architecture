<?php

use yii\helpers\Url;
use common\models\Image;
use common\models\Setting;
use common\helpers\FunctionHelper;

/* @var $this yii\web\View */

$this->title = 'Bảng điều khiển';
?>

<div class="page-content " style="min-height: 602px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Bảng điều khiển</li>
    </ol>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="<?= Url::to( [ 'post/index' ] ) ?>">
                <div class="visual">
                    <i class="fa fa-newspaper-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup">
                            <?= count( FunctionHelper::get_posts() ) ?>
                        </span>
                    </div>
                    <div class="desc"> Bài viết</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="<?= Url::to( [ 'category/index' ] ) ?>">
                <div class="visual">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup">
                            <?= count( FunctionHelper::get_categories() ) ?>
                        </span>
                    </div>
                    <div class="desc">Danh mục</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue"
               href="<?= Url::to( [ 'image/index' ] ) ?>">
                <div class="visual">
                    <i class="fa fa-picture-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup">
                            <?= count( Image::find()->all() ) ?>
                        </span>
                    </div>
                    <div class="desc">Hình ảnh</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="<?= Url::to( [ 'setting/index' ] ) ?>">
                <div class="visual">
                    <i class="fa fa-file-text"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup">
                            <?= count( Setting::find()->all() ) ?>
                        </span>
                    </div>
                    <div class="desc">Cấu hình</div>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div id="list_widgets">
            <div class="col-md-12 col-sm-12 col-xs-12 widget_item">
                <div class="portlet light bordered portlet-no-padding">
                    <div class="portlet-title" style="margin-bottom: 15px;">
                        <div class="caption">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark">Thống kê trang</span>
                        </div>
                    </div>
                    <div class="portlet-body widget-content" style="min-height: auto;">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-yellow-casablanca font-white">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sessions</span>
                                    <span class="info-box-number">773</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-blue">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">Visitors</span>
                                    <span class="info-box-number">618</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box border-green-haze">
                                <div class="info-box-icon bg-green-haze font-white">
                                    <i class="fa fa-clone"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">Pageviews</span>
                                    <span class="info-box-number">2001</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="info-box">
                                <div class="info-box-icon bg-yellow">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="info-box-content">
                                    <span class="info-box-text">Bounce Rate</span>
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
    <div class="page-footer" style="position: fixed;margin-left: 250px;">
        <div class="page-footer-inner">
            <div class="row">
                <div class="col-md-6">
                    Copyright 2018 © TIGER CMS Technologies. Version:
                    <span>2.0</span>
                </div>
            </div>
        </div>
    </div>
</div>