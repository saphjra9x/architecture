<?php
/**
 * Created by PhpStorm.
 * User: thuc
 * Date: 10/31/2018
 * Time: 11:30 AM
 */


?>

<section>
    <div class="part-01-banner-top">
        <div class="container">
            <div class="pull-right col-md-4">
                <div class="bg-black">
                    <h1 class="text-center">30 GIÂY ĐỂ TRỞ THÀNH <br> KIẾN TRÚC SƯ THÔNG QUA<br>3 BƯỚC ĐƠN GIẢN</h1>
                    <div class="div-step">
                        <div class="div-step-00"><b>1</b>
                            <span class="fa fa-circle"></span>
                            <i>
                                Điền thông tin của bạn
                            </i>
                        </div>
                        <div class="div-step-00">
                            <b>
                                2
                            </b>
                            <span class="fa fa-circle"></span>
                            <i>
                                Up 1 dự án của chính bạn thiết kế
                            </i>
                        </div>
                        <div class="div-step-00">
                            <b>
                                3
                            </b>
                            <span class="fa fa-circle"></span>
                            <i>
                                Xác nhận
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="frm-step">
            <div class="col-md-12">
                <div class="menu-step">
                    <div class="col-xs-4 menu-step-00">
                        <a href="javascript:">
                            1. ĐĂNG KÝ THÔNG TIN CÁ NHÂN
                            <span></span>
                        </a>
                    </div>
                    <div class="col-xs-4 menu-step-00">
                        <a href="javascript:">
                            2. UPLOAD 1 DỰ ÁN MÀ BẠN THIẾT KẾ
                            <span></span>
                        </a>
                    </div>
                    <div class="col-xs-4 menu-step-00 active">
                        <a href="javascript:">
                            3. XÁC NHẬN ĐIỀU KHOẢN
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-8 col-md-offset-2">

                <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                    <form id="thong-tin-kts-form" class="form-horizontal" action="/uplevelkts/finish" method="post" data-pjax="1">
                        <input type="hidden" name="_csrf-frontend" value="8XJxMh7cKHSSWgntfDQ-1n7mDH44wttALQdqxD4XYAWnFBhIc5BBIsUxQbtKB3GEKdBdR2mphDlVSQ--DVYnTg==">
                        <div class="read-text">
                            <p><strong>Yêu cầu trở thành KIẾN TRÚC SƯ trên hệ thống&nbsp;<a href="http://kientruc.com/" target="_blank" rel="nofollow noopener noreferrer">KIENTRUC.com</a>:</strong><br>1.&nbsp;Dự án bạn up lên phải là dự án liên quan đến KIẾN TRÚC và NỘI THẤT do bạn thiết kế hoặc bạn ở trong team thiết kế đó.<br>2. &nbsp;Dự án bạn up lên phải là các ảnh về 1 dự án đó , nếu là 1 album tập hợp của nhiều dự án khác nhau thì dự án đó sẽ bị BLOCK . Khi đó chúng tôi sẽ chuyển tài khoản của bạn trở lạii thành tài khoản của Chủ Nhà<br>3. Nếu dự án bạn up lên là dự án của người khác sau khi bị admin phát hiện ra hoặc bị người khác báo cáo thì chúng tôi sẽ BLOCK dự án đó của bạn.</p>
                            <p><strong>Các tip cần thiết cho Kiến Trúc Sư trên KIENTRUC.com</strong><br>- Làm thế nào để Báo Cáo dự án của người khác lấy cắp Bản Quyền Thiết Kế dự án của tôi ?&nbsp;&nbsp;<span style="color: #ff0000;">Click here&nbsp;</span><br>- Làm thế nào để Xem Xét lại các dự án của tôi khi đã bị Admin BLOCK ?&nbsp; <span style="color: #ff0000;">Click here&nbsp;</span><br>- Lợi ích của việc Trở Thành Kiến Trúc Sư trên hệ thống KIENTRUC.com ?&nbsp; <span style="color: #ff0000;">Click here&nbsp;</span></p>                </div>
                        <p></p>

                        <div class="form-group field-dangkiktsstep03-read required">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="checkbox">
                                    <label for="dangkiktsstep03-read">
                                        <input type="hidden" name="DangKiKtsStep03[read]" value="0"><input type="checkbox" id="dangkiktsstep03-read" name="DangKiKtsStep03[read]" value="1">
                                        Tôi đã đọc và đồng ý với các điều khoản
                                    </label>
                                </div>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="text-right col-md-12">
                                <button type="submit" class="btn btn-success" name="login-button">Xác nhận</button>                    </div>
                        </div>

                    </form>
                </div>            </div>
        </div>
    </div>
</section>

