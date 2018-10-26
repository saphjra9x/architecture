<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 * @var $model common\models\Classified
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;
use yii\widgets\ActiveForm;
use common\models\CategoryClassified;
use yii\helpers\ArrayHelper;
use common\models\Category;
use common\models\base\Exigency;
use common\models\Unit;

$this->title = 'Trang Đăng Tin';
$video = FunctionHelper::get_setting_by_key('ch1');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/customer.css">
<div id="MainContent"></div>
<div class="body-left">
    <div id="Breadcrumb" style="width: 100%;"></div>
    <div id="TopContent" style="margin: 0"></div>
    <div>
        <div id="TopContentLeft" class="SubTopContent"></div>
        <div id="TopContentRight" class="SubTopContent"></div>
    </div>
    <div style="clear: both;">
    </div>
    <div id="LeftMainContent">
        <div class="container-default">
            <div id="ctl30_BodyContainer">
                <link rel="stylesheet" type="text/css"
                      href="/filemain/userpage2016.css" media="all">

                <?php $form = ActiveForm::begin() ?>
                <div id="pnlEdit" class="post-product">

                    <link rel="stylesheet" type="text/css"
                          href="/filemain/jquery-ui.css" media="all">
                    <div class="post-bg-Title">
                        <h1 class="bluecolor">Đăng tin rao bán, cho thuê nhà đất</h1>
                        <div class="graycolor">
                            (Quý vị nhập thông tin nhà đất cần bán hoặc cho thuê vào các mục dưới đây)
                        </div>
                    </div>
                    <div id="divPostNews">
                        <div class="rowHeader">
                            <h2 style="margin-top: 0">Thông tin cơ bản</h2>
                        </div>
                        <div class="rowContent">
                            <div class="rowContentLeft">
                                <div class="rowPost">
                                    <div style="color: #f00; text-align: center;">
                                        <span id="ctl30_ctl00_lblServerErrorMsg"></span>
                                    </div>
                                    <div class="leftArea leftPostArea">
                                        <div id="labeltitle">
                                            <label>
                                                Tiêu đề(<span class="redfont">*</span>):</label>
                                        </div>
                                        <div class="input">
                                            <?= $form->field($model, 'title')->textInput(
                                                [
                                                    'class' => 'text-field has-help required countTypeLength'
                                                ]
                                            )->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </div>
                                <style>
                                    .help-block {
                                        float: left;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for="">
                                                Nhu Cầu(<span class="redfont">*</span>)
                                            </label>
                                            <?= $form->field($model, 'exigency_id')->dropDownList(
                                                ArrayHelper::map(Exigency::find()->all(), 'id', 'title'), ['class' => 'add-input'],
                                                [
                                                    'prompt' => '-- ' . Yii::t('backend', 'Chọn nhu cầu') . ' --',
                                                ]
                                            )->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for=""> Loại(<span
                                                        class="redfont">*</span>)</label>
                                            <?= $form->field($model, 'category_classified_id')->dropDownList(
                                                ArrayHelper::map(CategoryClassified::find()->asArray()->all(), 'id', 'title'), ['class' => 'add-input']
                                            )->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for="">Địa chỉ:</label>
                                            <?= $form->field($model, 'address')->textInput(['class' => 'add-input'])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for="">Diện Tích:</label>
                                            <?= $form->field($model, 'acreage')->textInput(['class' => 'add-input'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for="">Hướng:</label>
                                            <?= $form->field($model, 'direction')->textInput(['class' => 'add-input'])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for="">Số Phòng Ngủ:</label>
                                            <?= $form->field($model, 'room_number')->textInput(['class' => 'add-input'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for="">Giá:</label>
                                            <?= $form->field($model, 'price')->textInput(['class' => 'add-input'])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <label class="add-label" for="">
                                                Đơn vị
                                            </label>
                                            <?= $form->field($model, 'unit_id')->dropDownList(
                                                ArrayHelper::map(Unit::find()->asArray()->all(), 'id', 'title'), ['class' => 'add-input']
                                            )->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                        <div class="rowHeader">
                            <h2 style="margin-top: 0">Thông tin mô tả</h2>
                        </div>
                        <div class="rowContent">
                            <div class="postrow product-description" style="width: 100%">
                                <p>
                                    (<span class="redfont">*</span>)<span class="grayfont"> Tối đa chỉ 3000 ký tự</span>
                                </p>
                                <?= $form->field($model, 'content')->textarea(['rows' => '5', 'cols' => '70', 'class' => 'content-textarea text-field countTypeLength required mt10'])->label(false) ?>
                                <style>
                                    .content-textarea {
                                        height: 170px;
                                        width: 435px;
                                        max-width: 435px;
                                        float: left
                                    }
                                </style>
                                <div rel="txtDescription"
                                     style="float: left; margin-top: 5px; padding-left: 5px; text-align: justify; width: 270px;">
                                    <div class="text">
                                        <img src="/filemain/arrow.png"
                                             alt="">
                                        Giới thiệu chung về bất động sản của bạn. Ví dụ: Khu nhà có vị trí thuận
                                        lợi: Gần
                                        công viên, gần trường học ... Tổng diện tích 52m2, đường đi ô tô vào tận
                                        cửa.<br>
                                        <span style="color: #f00;">Lưu ý: tin rao chỉ để mệnh giá tiền Việt Nam Đồng.</span>
                                    </div>
                                </div>
                                <span class="errorMessage" style="display: none;"></span>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                        <div class="rowHeader">
                            <h2 style="margin-top: 0">Hình ảnh và Video</h2>
                        </div>
                        <div class="rowContent">

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
                                                <button type="button" <?= $model->isNewRecord ? '' : 'data-auto="1"' ?>
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
                                                    <button type="button" <?= $model->isNewRecord ? '' : 'data-auto="1" data-id="' . $value['id'] . '"' ?>
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
                                <?php if ($model->isNewRecord): ?>
                                    <input class="kv-file-drop-zone" multiple="multiple"
                                           type="file" name="file">
                                <?php endif; ?>
                                <?php if (!$model->isNewRecord): ?>
                                    <input data-auto="1" data-id="<?= $model['id'] ?>"
                                           data-column-parent-id="classified_id"
                                           class="kv-file-drop-zone" multiple="multiple"
                                           type="file" name="file">
                                <?php endif; ?>
                            </div>
                            <div class="droptext">
                                Đăng ảnh thật nhanh bằng cách kéo và thả ảnh vào khung.
                            </div>
                        </div>
                        <div class="rowHeader">
                            <h2 style="margin-top: 0">Liên hệ</h2>
                        </div>
                        <div class="rowContent">
                            <div class="rowContentLeft">
                                <div class="postrow">
                                    <div class="base1">
                                        Tên liên hệ:
                                    </div>
                                    <div class="base5">
                                        <?= $form->field($model, 'contact_name')->textInput()->label(false) ?>
                                    </div>
                                </div>
                                <div class="postrow">
                                    <div class="base1">
                                        Điện thoại:
                                    </div>
                                    <div class="base5">
                                        <?= $form->field($model, 'phone')->textInput()->label(false) ?>
                                        <span class="errorMessage" style="display: none;"></span>
                                    </div>
                                </div>
                                <div class="postrow">
                                    <div class="base1">
                                        Email:
                                    </div>
                                    <div class="base5">
                                        <?= $form->field($model, 'email')->textInput()->label(false) ?>
                                        <span class="errorMessage" style="display: none;"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="rowContentRight" id="helpMessageContactName" style="display: none;">
                                <div class="image">
                                    <img src="/filemain/arrow.png"
                                         alt="">
                                </div>
                                <div class="text">
                                    Vui lòng nhập tên để người đọc tin có thể liên lạc với bạn.
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                        <div id="ctl30_ctl00_divButton" class="rowPost">
                            <table style="border-collapse: collapse; width: 150px; margin: 0px auto;" border="0">
                                <tbody>
                                <tr>
                                    <td>
                                        <?= $form->field($model, 'images')->hiddenInput(['id' => 'images'])->label(false) ?>
                                        <input onclick="getImages()" style="background-color: #004da3;" type="submit"
                                               name="ctl00$ctl30$ctl00$btnSave"
                                               value="Đăng tin"
                                               id="btnSave" class="bluebotton">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clear"></div>
                        <div style="margin-top: 10px;">
                            <div>
                                <strong>Lưu ý:</strong>
                            </div>
                            Quý khách đang sử dụng tính năng đăng tin nhanh của Batdongsan.com.vn. Tính năng
                            này giúp Quý khách có thể đăng tin ngay mà không cần phải đăng ký hay đăng nhập
                            như tại nhiều website khác. Tuy nhiên, để có thể quản lý được tin đăng của mình
                            thuận lợi hơn thì Quý khách nên đăng ký và đăng nhập. Việc này cũng giúp Quý khách
                            có thể đăng được nhiều tin hơn so với <strong>giới hạn tối đa 3</strong> tin
                            <strong>
                                <i>rao vặt nhà đất</i></strong> khi Quý khách không đăng nhập.
                        </div>
                        <div style="margin-top: 10px; clear: both; float: left;">
                            Nếu gặp bất kỳ khó khăn gì trong việc đăng ký, đăng nhập, đăng tin hay trong việc
                            sử dụng website nói chung, Quý vị hãy liên hệ ngay với tổng đài CSKH của chúng tôi:
                            <strong><?= FunctionHelper::get_general_information()['phone'] ?></strong> hoặc email:
                            <a href="<?= FunctionHelper::get_general_information()['email_notify'] ?>">
                                <strong>
                                    <?= FunctionHelper::get_general_information()['email_notify'] ?>
                                </strong>
                            </a>
                            để được trợ giúp
                        </div>
                    </div>
                    <input type="hidden" name="ctl00$ctl30$ctl00$hddLatitude" id="hddLatitude"
                           value="21.02894860978742">
                    <input type="hidden" name="ctl00$ctl30$ctl00$hddLongtitude" id="hddLongtitude"
                           value="105.85244722590335">
                    <input type="hidden" name="ctl00$ctl30$ctl00$hddSessionId" id="hddSessionId">
                    <input type="hidden" name="ctl00$ctl30$ctl00$hddIsMarkerDrag" id="hddIsMarkerDrag">
                </div>
                <?php $form = ActiveForm::end() ?>
            </div>

        </div>
    </div>
</div>
<div id="RightMainContent" class="body-right">
    <div style="width:240px;">
        <div class="container-commom flatbox">
            <div class="adshared">
                <?= htmlspecialchars_decode($video['content']) ?>
            </div>
            <div class="box-header">
                <h3>
                    Hướng dẫn đăng tin
                </h3>
            </div>
            <div class="bor_box" style="border: 1px solid #ccc;">
                <div class="boxtext">
                    <ul>
                        <li>
                            <div>
                                Thông tin có dấu (<span style="color: #f00;">*</span>) là bắt buộc.
                            </div>
                        </li>
                        <li>
                            <div>
                                Không gộp nhiều bất động sản trong một tin rao.
                            </div>
                        </li>
                        <li>
                            <div>
                                Không đăng lại tin đã đăng trên <?= $_SERVER['SERVER_NAME'] ?>.
                            </div>
                        </li>
                    </ul>
                    <div class="line-hr">
                        &nbsp;
                    </div>
                    <ul>
                        <li>
                            <div>
                                Nên sử dụng trình duyệt <span class="bluecolor">FireFox 3.0, IE7</span> trở lên
                                hoặc <span class="bluecolor">Google Chrome</span> để việc đăng tin và truy cập
                                website được thuận lợi.
                            </div>
                        </li>
                        <li>
                            <div>
                                Để quá trình đăng tin và duyệt nhanh hơn, xin lưu ý: <span class="bluecolor">gõ tiếng việt có dấu và không viết tắt</span>...
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="clear: both; margin-bottom: 10px;">
        </div>
        <div class="container-blank">
            <div style="padding: 0 5px;">
                <div class="html-content">
                    <h3 style="color: #319C00; line-height: 18px; font-size: 14px; margin-bottom: 10px;">Bạn có
                        biết nơi rao vặt nhà đất hiệu quả nhất? </h3>
                    <div style="text-align: justify; color: #666;">
                        Với hơn <span style="color: Red; font-size: 14px;">100 000</span> lượt truy cập mỗi
                        ngày, <?= $_SERVER['SERVER_NAME'] ?> đã đạt mức tăng trưởng 300% chỉ trong 9 tháng đầu năm 2011
                        và
                        tiếp tục khẳng định vị thế là nơi rao vặt nhà đất, quảng cáo nhà đất hiệu quả nhất hiện
                        nay. Rao vặt nhà đất trên <?= $_SERVER['SERVER_NAME'] ?> là phương án tối ưu nhất cho nhu cầu
                        bán,
                        cho thuê nhà đất của Quý vị.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
<div class="clear">
</div>
<div id="BreakcrumdBottom">
</div>
<div class="banner-bottom">
    <div id="SubBottomLeftMainContent" style="float: left; width: 560px"></div>
    <div id="SubBottomRightMainContent" style="float: left; width: 430px;
margin-left: 5px"></div>
</div>
<script type="text/javascript">
    if ($("#boxLinkFooter_boxLink").height() >= 240) {
        $("#boxLinkFooter_boxLink").css("height", "240px");
        $("#boxLinkFooter_boxLink").css("overflow", "hidden")
    }
</script>


<style type="text/css">
    .footer-bottom-top-1 a {
        white-space: nowrap;
    }

    .col-sm-6 {
        padding: 0 10px 10px 30px !important;
    }

    .row {
        margin: 10px 0 !important;
    }

    .add-input {
        margin-left: 15px;
        width: 175px;
        height: 30px;
    }

    .add-label {
        width: 100px;
    }

    .adshared iframe {
        height: 200px !important;
        width: 100% !important;
    }
</style>
<script>

    $('.kv-file-drop-zone').change(function () {


        let fd = new FormData();

        let auto = $(this).data('auto');

        let id = $(this).data('id');

        let column_parent_id = $(this).data('column-parent-id');

        let files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            fd.append('files[]', files[i]);
        }

        if (files) {
            $.ajax({
                url: '/uploads/cms/upload.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.length !== 0) {
                        if (auto === 1) {
                            $.ajax({
                                url: base + 'ajax/upload-image',
                                type: 'post',
                                data: {
                                    images: JSON.stringify(response),
                                    id: id,
                                    column_parent_id: column_parent_id
                                },
                                success: function () {
                                }
                            });
                        }

                        for (i = 0; i < response.length; i++) {
                            let children = $('#list-img-temp');

                            children.children().children().find('img').attr('src', '/uploads/advertises/' + response[i]);
                            children.find('.caption').html(response[i]);
                            $('#list-img').append(children.html());
                        }
                    }

                }
            });
        }

        loading.css('display', 'none');

    });

    let deleteFile = function (event) {


        let auto = 0;
        let id = 0;

        if ($(event.target).is('i')) {
            auto = $(event.target).parent().data('auto');
            id = $(event.target).parent().data('id');
        }
        else {
            auto = $(event.target).data('auto');
            id = $(event.target).data('id');
        }

        let url = $(event.target).closest(".file-preview-frame").find('img').attr('src');

        let r = confirm('Bạn có chắc chắn muốn xóa ' + url);

        if (r === true) {
            $.ajax({
                url: '/uploads/cms/delete.php',
                type: 'post',
                data: {path: url},
                success: function () {
                    $(event.target).closest(".file-preview-frame").remove();

                    if (auto) {
                        $.ajax({
                            url: '/uploads/cms/delete.php',
                            type: 'post',
                            data: {id: id},
                            success: function () {
                                $(event.target).closest(".file-preview-frame").remove();

                                if (auto) {
                                    $.ajax({
                                        url: base + 'ajax/delete-image',
                                        type: 'post',
                                        data: {id: id},
                                        success: function () {

                                        }
                                    });

                                }
                            }
                        });
                    }

                }
            });
        }
        else {
        }
    };

    let getImages = function () {
        let images = [];

        $('#list-img').find('.kv-file-content img').each(function () {

            let url = $(this).attr('src');

            images.push(url);

        });

        $('#images').val(JSON.stringify(images));

    };
    let load_content_image = function (id) {
        $('#id-image').val(id);


        $.ajax({
            url: base + 'ajax/get-content-image',
            type: 'post',
            data: {
                id: id
            },
            success: function (response) {

                console.log(response);
                CKEDITOR.instances['content-image'].setData(response['content']);

            }
        });
    };
    let manage_sidebar = function () {
        let e = $("body"), t = $(".navigation"), a = $(".sidebar-content");
        t.find("li.active").parents("li").addClass("active");
        t.find("li").has("ul").children("a").parent("li").addClass("has-ul");
        $(document).on("click", ".sidebar-toggle.hidden-xs", function (o) {
            o.preventDefault();
            e.toggleClass("sidebar-narrow");
            e.toggleClass("page-sidebar-closed");

            if (e.hasClass("sidebar-narrow")) {
                t.children("li").children("ul").css("display", "");
                a.hide().delay().queue(function () {
                    $(this).show().addClass("animated fadeIn").clearQueue();
                });
            }
            else {
                t.children("li").children("ul").css("display", "none");
                t.children("li.active").children("ul").css("display", "block");
                a.hide().delay().queue(function () {
                    $(this).show().addClass("animated fadeIn").clearQueue();
                });
            }
        })
    };

    manage_sidebar();

    $(".page-sidebar-menu").on("click", "li > a.nav-toggle, li > a > span.nav-toggle", function (a) {
        let o = $(this).closest(".nav-item").children(".nav-link");
        let i = o.next().hasClass("sub-menu");

        if (i) {
            let n = o.parent().parent(), s = o, r = $(".page-sidebar-menu"), l = o.next(),
                d = r.data("auto-scroll"), c = parseInt(r.data("slide-speed"));
            r.data("keep-expanded") || (n.children("li.open").children("a").children(".arrow").removeClass("open"), n.children("li.open").children(".sub-menu:not(.always-open)").slideUp(c), n.children("li.open").removeClass("open"));
            l.is(":visible") ? ($(".arrow", s).removeClass("open"), s.parent().removeClass("open"), l.slideUp(c, function () {
            })) : i && ($(".arrow", s).addClass("open"), s.parent().addClass("open"), l.slideDown(c, function () {
            }));

            a.preventDefault();
        }
    });

    $('.form-group').each(function () {
        if ($(this).hasClass('required')) {
            $(this).find('.control-label').append('<b style="color: red;" > *</b>');
        }
    });

    $('.counter').keyup(function () {

        let content = $(this).val();

        let counter = $(this).attr('data-counter');

        console.log(counter);

        $(this).closest('.parent').find('small').text('(' + (parseInt(counter) - content.length) + ' kí tự còn lại)');

    });
    let save_content_image = function () {
        console.log(1);
        let id = $('#id-image').val();
        let content = CKEDITOR.instances['content-image'].getData();

        let loader = $('#loader');
        loader.css('display', 'block');

        $.ajax({
            url: base + 'ajax/edit-content-image',
            type: 'post',
            data: {
                id: id,
                content: content
            },
            success: function (response) {
                loader.css('display', 'none');
            }
        });

    };
</script>
<script>
    window.onload = function () {
        let screen_width = screen.width;
        if (screen_width <= 768) {
            window.location = '/mobile-site/post-news';
        }
    };
</script>