<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 6/16/2018
 * Time: 11:36 AM
 */

use yii\helpers\Url;

/* @var $finish array */

?>

<style>
    .installed {
        color: #00a65a;
        margin-top: 10px;
        margin-right: 10px;
    }

    .product-info {
        border-bottom: 1px solid #f1f1f1;
        margin-left: 10px;
    }

    .product-title {
        color: #000000;
    }

    .product-img {
        padding: 5px 0;
    }

    ol {
        padding-left: 30px;
    }
</style>

<div class="page-content " style="min-height: 602px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= Url::to( [ 'site/index' ] ) ?>">Bảng điều khiển</a></li>

        <li class="breadcrumb-item active">Tiện tích mở rộng</li>

        <li class="breadcrumb-item active">Nén dữ liệu</li>
    </ol>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách nén thành công</h3>
                </div>
                <div class="box-body">
                    <ol class="products-list product-list-in-box">
						<?php foreach ( $finish as $key => $value ): ?>
                            <li class="item" style="<?= $key % 2 == 0 ? 'background-color: #f9f9f9' : '' ?>">
                                <div class="product-info">
                                    <div class="product-img">
                                        <a target="_blank" href="<?= $value ?>" class="product-title">
											<?= $value ?>
                                        </a>
                                    </div>
                                    <span class="pull-right installed">
                                    <i class="fa fa-check"></i>
                                </span>
                                </div>
                            </li>
						<?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>