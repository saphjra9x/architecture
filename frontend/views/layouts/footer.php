<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use yii\helpers\Url;

$ft_left = FunctionHelper::get_setting_by_key('ch3');
$ft_center = FunctionHelper::get_setting_by_key('ch4');
$fb = FunctionHelper::get_general_information()['page_facebook'];
?>

<div id="BottomMainContent"></div>
<div class="footer-banner">
    <div id="SubBottomLeftMainContent" style="float: left; width: 495px">
        <div class="adPosition" positioncode="BANNER_POSITION_BOTTOM1" style="" hasshare="True"
             hasnotshare="True"></div>
        <div style="clear:both;"></div>
    </div>
    <div id="SubBottomRightMainContent" style="float: left; width: 495px; margin-left: 5px">
        <div class="adPosition" positioncode="BANNER_POSITION_BOTTOM2" style="" hasshare="True"
             hasnotshare="True"></div>
        <div style="clear:both;"></div>
    </div>
</div>
<style type="text/css">
    .footer-bottom-top-1 a {
        white-space: nowrap;
    }
</style>
<div class="footer">
    <div class="footer-bottom">
        <div class="footer-bottom-end">
            <img src="/filemain/line-footer.png" alt=""
                 noloaderror="true">
        </div>
        <div class="clear10"></div>
        <div class="footer-bottom-end-row1" style="padding: 30px 0">
            <div class="row add-row">
                <div class="col-sm-3 col3" style="text-align: center">
                    <div>
                        <?= $ft_left['content'] ?>
                    </div>
                </div>
                <div class="col-sm-6 col6" style="text-align: center">
                    <?= $ft_center['content'] ?>
                </div>
                <div class="col-sm-3 col3">
                    <strong style="font-size: 14px">
                        Thông Tin Liên Hệ
                    </strong>
                    <div style="margin-top: 15px">
                        <div class="form-group">
                            <input id="fullname1" type="text" placeholder=" Họ Tên">
                        </div>
                        <div class="form-group">
                            <input id="phone1" type="text" placeholder=" Số Điện Thoại">
                        </div>
                        <div class="form-group">
                            <input id="email1" type="text" placeholder=" Email">
                        </div>
                        <div class="form-group">
                            <select name="" id="exigency1" style="width: 143px;height: 27px">
                                <option value="Nhà đất bán">Nhà đất bán</option>
                                <option value="Nhà đất cho thuê">Nhà đất cho thuê</option>
                            </select>
                        </div>
                        <input onclick="register(1)" type="button" value="Gửi" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    @media (min-width: 768px) {
        .col3 {
            width: 22%;
            text-align: center;
        }

        .col6 {
            width: 50%;
            float: left;
        }

    }

    @media (min-width: 768px) {
        .col3, .col6 {
            float: left;
        }
    }

    .col3, .col6 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col6 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        box-sizing: border-box;
    }

    .add-row {
        margin-right: -15px;
        margin-left: -15px;
        display: table;
        content: " ";
        clear: both;
    }

    .form-group {
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    button, input, select, textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        font: inherit;
        color: inherit;
    }

</style>
<script type="text/javascript">
    function isValidEmail(emailText) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailText);
    };

    function register(form_number) {

        if ($('#fullname' + form_number).val() == "") {
            alert("Vui lòng nhập Họ tên!");
        }

        else if ($('#phone' + form_number).val().length < 8 || isNaN($('#phone' + form_number).val())) {

            alert("Số điện thoại bạn điền không hợp lệ !");
            return false;
        }
        else if ($('#email' + form_number).val() == "" || !isValidEmail($('#email' + form_number).val())) {
            alert("Email phải hợp lệ !");
            return false;
        }

        else {

            var phone = $('#phone' + form_number).val();
            var fullname = $('#fullname' + form_number).val();
            var email = $('#email' + form_number).val();
            var exigency = $('#exigency' + form_number).val();
            var content =
                `<table>
                <tr>
                    <th style="padding: 15px;border: 1px solid black;">Họ và Tên</th>
                    <th style="padding: 15px;border: 1px solid black;">Số dt</th>
                    <th style="padding: 15px;border: 1px solid black;">Email</th>
                    <th style="padding: 15px;border: 1px solid black;">Nhu Cầu</th>

                </tr>
                <tr>
                    <td style="padding: 15px;border: 1px solid black;">${fullname}</td>
                    <td style="padding: 15px;border: 1px solid black;">${phone}</td>
                    <td style="padding: 15px;border: 1px solid black;">${email}</td>
                    <td style="padding: 15px;border: 1px solid black;">${exigency}</td>

                </tr>
            </table>`;

            var form = new FormData();
            form.append("title", "ĐĂNG KÍ NHẬN THÔNG TIN DỰ ÁN");
            form.append("email_root", "<?= FunctionHelper::get_general_information()['email_notify']?>");
            form.append("name_root", "Mr.customer");
            form.append("email_guest", email);
            form.append("name_guest", fullname);
            form.append("content", content);
            var settings = {
                "url": "admin/ajax/send-mail",
                "method": "POST",
                "headers": {
                    "cache-control": "no-cache",
                    "postman-token": "be3c982f-e715-6816-b350-f47f8bb109d8"
                },
                "processData": false,
                "contentType": false,
                "data": form,
                "mimeType": "multipart/form-data"
            };

            $.ajax(settings).done(function (data) {
                console.log(data);
                alert("Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên lạc lại trong thời gian sớm nhất!");
                window.reload();
            });
        }
    }
</script>