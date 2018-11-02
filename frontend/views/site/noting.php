<?php
/**
 * Created by PhpStorm.
 * User: thuc
 * Date: 10/31/2018
 * Time: 3:51 PM
 */
?>


<section>
    <div class="container">
        <div class="white">
            <div class="customer-maps view-maps-image">
                <img src="/img/banner-chu-nha-04.jpg" alt="" class="img-responsive">
            </div>
            <div class="customer-profile">
                <div class="col-md-12">
                    <div class="customer-profile-avatar">
                        <div class="img-avatar">
                            <img src="/img/200x200no-image.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="customer-profile-info">
                        <ul class="list-unstyled">
                            <li><h2>Nguyễn Hùng</h2></li>
                            <li>Người dùng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="white">

            <div class="clearfix"></div>

            <div class="white-overfllow">

                <div class="col-md-2 customer-left">
                    <div style="min-height: 70px"></div>
                    <div class="menu-of-customer">
                        <ul class="list-unstyled">
                            <li class="bd-01">Quản lý tài khoản</li>
                            <li><a href="profile/info" title="Thông tin tài khoản">Thông tin tài khoản</a></li>
                            <li><a href="profile/password" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                            <li class="bd-02"><a href="profile/noting" title="Chỉnh thông báo">Chỉnh thông báo</a></li>
                            <li><a href="page/kts" title="Trở thành kiến trúc sư">Trở thành kiến trúc sư</a></li>
                            <li><a href="https://shop.kientruc.com/profile/upgrade" title="Trở thành kiến trúc sư">Hoặc Trở thành seller</a></li>
                            <li class="bd-02"><form action="/login/logout" method="post">
                                    <input type="hidden" name="_csrf-frontend" value="L9IzldmipF3uFWOuV_nRvzLTXvdzZ51FUNQD3uG00qJhkWPC7cb3boMmE-xmtebtU7JuwAkh0gNnplaxsPaz2A=="><button type="submit" class="btn btn-link logout">Đăng xuất</button></form></li>
                        </ul>
                    </div>                </div>
                <div class="col-md-7 customer-main">
                    <div class="h4">
                        <i class="fa fa-user"></i> Tùy chỉnh thông báo
                    </div>
                    <div class="line"></div>
                    <p style="color: #a09e9e;">Kientruc.com cam kết đảm bảo an toàn tuyệt đối cho các thông tin cá nhân của bạn</p>

                    <div class="notice_intruction_group">

                        <form id="tuy-chinh-thong-bao-form" class="form-horizontal" action="/profile/noting" method="post">
                            <input type="hidden" name="_csrf-frontend" value="L9IzldmipF3uFWOuV_nRvzLTXvdzZ51FUNQD3uG00qJhkWPC7cb3boMmE-xmtebtU7JuwAkh0gNnplaxsPaz2A==">
                            <!--in ra thong bao normal-->
                            <div class="notice"><span class="label_notice">Thông báo bình thường</span>                                    <div class="checkbox_kt_p">
                                    <div class="cbx-container"><div class="cbx cbx-md cbx-active" tabindex="1000"><span class="cbx-icon"> </span></div><input type="text" id="s1" class="" name="s1" value="0" onchange="changeValue(this)" data-value="1" data-krajee-checkboxx="checkboxX_18e15574" style="display: none;"></div>                                        <label class="cbx-label" for="s1">Khi ai đó bình luận bài viết cảu bạn</label>
                                    <input class="txt_note" type="hidden" value="" name="NotingForm[id_note][]">
                                </div>
                                <div class="checkbox_kt_p">
                                    <div class="cbx-container"><div class="cbx cbx-md cbx-active" tabindex="1000"><span class="cbx-icon"> </span></div><input type="text" id="s2" class="" name="s2" value="0" onchange="changeValue(this)" data-value="2" data-krajee-checkboxx="checkboxX_18e15574" style="display: none;"></div>                                        <label class="cbx-label" for="s2">Khi ai đó trả lời bình luận của bạn</label>
                                    <input class="txt_note" type="hidden" value="" name="NotingForm[id_note][]">
                                </div>
                                <div class="checkbox_kt_p">
                                    <div class="cbx-container"><div class="cbx cbx-md cbx-active" tabindex="1000"><span class="cbx-icon"> </span></div><input type="text" id="s3" class="" name="s3" value="0" onchange="changeValue(this)" data-value="3" data-krajee-checkboxx="checkboxX_18e15574" style="display: none;"></div>                                        <label class="cbx-label" for="s3">Khi kiến trúc sư bạn yêu thích cập nhật công trình</label>
                                    <input class="txt_note" type="hidden" value="" name="NotingForm[id_note][]">
                                </div>
                                <div class="checkbox_kt_p">
                                    <div class="cbx-container"><div class="cbx cbx-md cbx-active" tabindex="1000"><span class="cbx-icon"> </span></div><input type="text" id="s6" class="" name="s6" value="0" onchange="changeValue(this)" data-value="6" data-krajee-checkboxx="checkboxX_18e15574" style="display: none;"></div>                                        <label class="cbx-label" for="s6">Khi chủ nhà yêu thích dự án cùa bạn</label>
                                    <input class="txt_note" type="hidden" value="" name="NotingForm[id_note][]">
                                </div>
                            </div>                        <!--in ra thong bao normal-->

                            <!--in ra thong bao kts-->
                            <!--in ra thong bao kts-->

                            <div class="form-group">
                                <div class="text-right col-md-12">
                                    <button type="submit" class="btn btn-success" name="login-button">Lưu thông tin</button>                            </div>
                            </div>
                            <div class="clearfix"></div>

                        </form>
                    </div>

                </div>
                <div class="col-md-3 customer-right">
                    <div class="h4" style="color: #248445;">
                        TOP CÂU HỎI MỚI(trong tuần)
                    </div>
                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/xin-y-kien-cho-viec-thay-doi-noi-that-phong-khach-7155.html" title="Xin ý kiến cho việc thay đổi nội thất phòng khách">Xin ý kiến cho việc thay đổi nội thất phòng khách</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Ho Chu</b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">31-10-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Các bác cho em xin vài mẫu phòng khách phù hợp với không gian nhà em đi ạ, em chưa biết đi theo hướng nào cả?                </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 2                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 7                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/doi-chiec-tham-khac-cho-khu-vuc-dan-piano-7154.html" title="Đổi chiếc thảm khác cho khu vực đàn Piano!">Đổi chiếc thảm khác cho khu vực đàn Piano!</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Phan Minh Hải</b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">31-10-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Chiếc thảm nào sẽ hợp đây ạ!                 </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 2                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 6                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/phong-tam-nen-trang-tri-nhu-the-nao-la-dep-vay-moi-nguoi-7152.html" title="Phòng tắm nên trang trí như thế nào là đẹp vậy mọi người?">Phòng tắm nên trang trí như thế nào là đẹp vậy mọi người?</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Mai Lan</b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">31-10-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Mọi người cho em xin ý kiến nhé, em chưa biết phải trang trí ra sao ạ.                </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 2                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 6                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/ban-ngay-phong-bep-minh-chon-mau-den-nay-duoc-khong-moi-nguoi-7151.html" title="Bàn ngay phòng bếp mình chọn mẫu đèn này được không mọi người?">Bàn ngay phòng bếp mình chọn mẫu đèn này được không mọi người?</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Doan van trung</b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">31-10-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Mình sợ nó không sáng, có tối màu quá không ạ?                </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 3                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 4                    </button>
                            </div>
                        </div>
                    </div>

                    <div class="h4" style="color: #248445;">
                        TOP SÔI NỔI NHẤT(trong tuần)
                    </div>

                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/trang-tri-phong-ngu-don-gian-mot-ti-nen-dung-noi-that-gi-a-7164.html" title="Trang trí phòng ngủ đơn giản một tí, nên dùng nội thất gì ạ?">Trang trí phòng ngủ đơn giản một tí, nên dùng nội thất gì ạ?</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Lương Vũ Anh Duy</b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">22-08-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Phòng ngủ mình hơi nhỏ, nên không muốn trang trí quá cầu kỳ ạ.                </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 4                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 21                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/tim-thiet-bi-cho-phong-ve-sinh-196.html" title="Tìm thiết bị cho phòng vệ sinh">Tìm thiết bị cho phòng vệ sinh</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Minh Quân</b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">18-06-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Ở nhóm mình có bác nào cung cấp phụ kiện thoát sàn kiểu ngang như hình hoặc tương tự có bẫy ngăn mùi ( chống trào ngược thì càng tốt) thì ới em phát ạ                 </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 3                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 12                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/phong-khach-canh-cua-so-7693.html" title="Phòng khách cạnh cửa sổ!!!!!">Phòng khách cạnh cửa sổ!!!!!</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Nguyen Tuan</b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">20-09-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Mọi người nghĩ nên thiết kế một phòng khách như thế nào ngay đây ạ? Em chưa biết thiết kế sao cho đẹp hết.                </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 4                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 11                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="right-topic">
                        <h2><a href="hoi-dap/em-dang-muon-nang-cap-cho-phong-tam-cua-minh-7249.html" title="Em đang muốn nâng cấp cho phòng tắm của mình">Em đang muốn nâng cấp cho phòng tắm của mình</a></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Nguyễn Phi Hòa </b>
                                <i class="fa fa-circle" style="font-size: 5px;color: #a6a6a6;"></i> <i class="date-ask">27-08-2018</i>
                            </div>
                            <div class="col-md-12 ask-info">
                                Mọi người cho tôi một vìa ý kiến để thay đổi đi ạ                </div>
                        </div>

                        <div class="text-right">
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-user-circle-o"></i> 5                    </button>
                            </div>
                            <div class="customer-button no-border">
                                <button class="customer-button-icon color-text-xam no-line-before">
                                    <i class="fa fa-comment"></i> 11                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>








    <style type="text/css">
        #form-report-info label {
            font-weight: 500;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            footer {
                display: none;
            }
        }
    </style>


    <style type="text/css">
        div.checkbox_kt_p {
            margin-bottom: 10px;
        }

        div.notice {
            margin-bottom: 40px;
        }

        div.notice > span.label_notice {
            color: green;
            margin-bottom: 10px;
            display: block;
        }
    </style>

    <script type="text/javascript">
        function changeValue(event) {
            var $val = $(event).val();
            var $id_val = $(event).attr('data-value');
            if ($val == 1) {
                $(event).parent().parent().find('.txt_note').val($id_val);
                //console.log('check');
            } else {
                $(event).parent().parent().find('.txt_note').val('');
                //console.log('not check');
            }
        }
    </script>

<script>jQuery(function ($) {

        $(function ($) {
            'use strict';
            $('body').on('submit', '#from-search-kt-submit1', function (event, jqXHR, settings) {
                var link=$('.input-group #search_param_kt_p').val();
                var key = $('.input-group #key_search_kt_p').val();
                console.log(link);
                //window.location.href="https://www."+window.location.hostname+"/"+link;
                window.location.href="http://"+window.location.hostname+"/"+link+'?q='+key;
                return false;
            })
        });
        $(document).ready(function(e){
            $('.search-panel .dropdown-menu').find('a').click(function(e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#","");
                var concept = $(this).text();
                $('.search-panel span#search_concept').text(concept);
                $('.input-group #search_param_kt_p').val(param);
                console.log(param);
            });
        });

        if (jQuery('#s1').data('checkboxX')) { jQuery('#s1').checkboxX('destroy'); }
        jQuery('#s1').checkboxX(checkboxX_18e15574);

        if (jQuery('#s2').data('checkboxX')) { jQuery('#s2').checkboxX('destroy'); }
        jQuery('#s2').checkboxX(checkboxX_18e15574);

        if (jQuery('#s3').data('checkboxX')) { jQuery('#s3').checkboxX('destroy'); }
        jQuery('#s3').checkboxX(checkboxX_18e15574);

        if (jQuery('#s6').data('checkboxX')) { jQuery('#s6').checkboxX('destroy'); }
        jQuery('#s6').checkboxX(checkboxX_18e15574);

        jQuery('#tuy-chinh-thong-bao-form').yiiActiveForm([], []);
        jQuery('#modal-ReportThank').modal({"show":false,"backdrop":"static","keyboard":false});
        jQuery('#form-report-info').yiiActiveForm([{"id":"reportform-name","name":"name","container":".field-report-id-name","input":"#report-id-name","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Name không được để trống."});yii.validation.string(value, messages, {"message":"Name phải là chuỗi.","max":30,"tooLong":"Name phải chứa nhiều nhất 30 ký tự.","skipOnEmpty":1});}},{"id":"reportform-email","name":"email","container":".field-report-id-email","input":"#report-id-email","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Email không được để trống."});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email không phải là địa chỉ email hợp lệ.","enableIDN":false,"skipOnEmpty":1});}},{"id":"reportform-phone","name":"phone","container":".field-report-id-phone","input":"#report-id-phone","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Phone không được để trống."});}},{"id":"reportform-info","name":"info","container":".field-reportform-info","input":"#reportform-info","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Info phải là chuỗi.","max":255,"tooLong":"Info phải chứa nhiều nhất 255 ký tự.","skipOnEmpty":1});}}], []);
        jQuery('#modal-ReportImportant').modal({"show":false,"backdrop":"static","keyboard":false});

        $('body').on('beforeSubmit', '#form-report-info', function (event, jqXHR, settings) {
            const form = $(this);
            if (form.find('.has-error').length) {
                return false;
            }
            $('#modal06').loading();

            //tien hanh chuyen info di
            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: form.serialize(),
                //processData: false,
                //contentType: false,
                success: function (data) {
                    if (data === '0') {
                        alert('Lỗi: Tạo báo cáo bị lỗi');
                    } else if (data === '-1') {
                        alert('Lỗi: Chưa đăng nhập');
                    } else {
                        $('#modal-ReportImportant').modal('hide');
                        $('#modal-ReportThank').modal({
                            show: true,
                            backdrop: 'static'
                        });
                    }
                }
            });

            return false;
        })


    });</script>