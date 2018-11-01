<?php
?>


<section>
    <div class="part-01-ask-banner-top">
        <div class="container">
            <div class="bg-black-light"></div>
            <div class="text-center" style="position: relative;">
                <h1 style="color: white">Xin chào Nguyễn Hùng !!!</h1>
                <p class="mobile-ask-hello" style="color: white;font-weight: 500;">
                    Hãy đặt câu hỏi của chị về trang trí nhà cửa một cách chi tiết và
                    rõ ràng<br>
                    để các kiến trúc sư có thể tư vấn tốt nhất
                </p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div class="icon-avatar-left">
                    <span class="icon-avatar-left-span" style="">
                        <img src="https://www.kientruc.com/uploads/200x200no-image.png" alt="" class="img-responsive">
                    </span>
                    <span id="spanCountPrev">5</span>
                </div>
                <form id="fr-ask" action="/ask/submit-step-one" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_csrf-frontend"
                           value="gZt6Fj3YEUPY-feE44skTxA9Bby2XWDRIyH8Aya-va7i1Eh-cK4md6-vn-WBv0IcRFs28tEHEZx1FY0wXuvNmg==">
                    <div class="form-group field-askaddform-name required">
                        <div class="col-md-12"><input type="text" id="askaddform-name"
                                                      class="form-control input-no-bootstrap"
                                                      name="AskAddForm[name]" placeholder="Vấn đề của tôi là..."
                                                      onkeyup="javascript:countWordChange(this)" autocomplete="off"
                                                      aria-required="true"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="show-when-full-word" style="display: block">

                        <div class="form-group field-askaddform-info required">
                            <div class="col-md-12"><textarea id="askaddform-info"
                                                             class="form-control input-no-bootstrap"
                                                             name="AskAddForm[info]" rows="4"
                                                             placeholder="Mô tả chi tiết (ít nhất 3 chữ)"
                                                             onkeyup="javascript:countWordChangeText(this)"
                                                             aria-required="true"></textarea></div>
                        </div>
                        <div class="hidden">
                            <div class="form-group field-askaddform-linkout">
                                <div><input type="hidden" id="askaddform-linkout" class="form-control"
                                            name="AskAddForm[linkout]"></div>
                            </div>
                            <div class="form-group field-askaddform-linktitle">
                                <div><input type="hidden" id="askaddform-linktitle" class="form-control"
                                            name="AskAddForm[linktitle]"></div>
                            </div>
                            <div class="form-group field-askaddform-videoout">
                                <div><input type="hidden" id="askaddform-videoout" class="form-control"
                                            name="AskAddForm[videoout]"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="system-button text-right">
                                <button type="button" class="btn btn-link mobile-ask-but-noi-quy"
                                        data-toggle="modal" data-target="#modal04" style="float: left;">
                                    Nội quy đăng bài
                                </button>

                                <button type="button" class="btn btn-link" data-toggle="modal"
                                        data-target="#modal01" title="Hình ảnh">
                                    <i class="fa fa-camera"></i>
                                </button>
                                <button type="button" class="btn btn-link" data-toggle="modal"
                                        data-target="#modal02" title="Video">
                                    <i class="fa fa-play-circle"></i>
                                </button>
                                <button type="button" class="btn btn-link" data-toggle="modal"
                                        data-target="#modal03" title="Link">
                                    <i class="fa fa-link"></i>
                                </button>
                                <button type="button" class="btn btn-link" id="idEnable"
                                        onclick="js:openAddImage(this)" title="Câu hỏi lựa chọn">
                                    <i class="fa fa-signal"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div id="modal01" class="fade modal" role="dialog" tabindex="-1">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    Tải ảnh lên
                                </div>
                                <div class="modal-body">
                                    <div class="row" style="background: white;overflow: hidden;">
                                        <div class="form-group field-input-imageFiles">
                                            <div class="col-sm-12"><input type="hidden"
                                                                          name="AskAddForm[imageFiles][]" value="">
                                                <div class="file-input file-input-ajax-new">
                                                    <div class="file-preview ">
                                                        <button type="button" class="close fileinput-remove"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <div class=" file-drop-zone">
                                                            <div class="file-drop-zone-title">Kéo thả tập tin vào
                                                                đây …
                                                            </div>
                                                            <div class="file-preview-thumbnails">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="file-preview-status text-center text-success"></div>
                                                            <div class="kv-fileinput-error file-error-message"
                                                                 style="display: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kv-upload-progress kv-hidden"
                                                         style="display: none;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                 role="progressbar" aria-valuenow="0"
                                                                 aria-valuemin="0" aria-valuemax="100"
                                                                 style="width:0%;">
                                                                0%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="input-group file-caption-main">
                                                        <div class="file-caption form-control kv-fileinput-caption"
                                                             tabindex="500">
                                                            <span class="file-caption-icon"></span>
                                                            <input class="file-caption-name"
                                                                   onkeydown="return false;" onpaste="return false;"
                                                                   placeholder="Select các tập tin...">
                                                        </div>
                                                        <div class="input-group-btn input-group-append">
                                                            <button type="button" tabindex="500"
                                                                    title="Bỏ tập tin đã chọn"
                                                                    class="btn btn-default btn-secondary fileinput-remove fileinput-remove-button">
                                                                <i class="glyphicon glyphicon-trash"></i></button>
                                                            <button type="button" tabindex="500" title="Hủy upload"
                                                                    class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button">
                                                                <i class="glyphicon glyphicon-ban-circle"></i> <span
                                                                        class="hidden-xs">Hủy</span></button>

                                                            <div tabindex="500" class="btn btn-primary btn-file"><i
                                                                        class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                                                <input type="file" id="input-imageFiles" class=""
                                                                       name="AskAddForm[imageFiles][]" multiple=""
                                                                       accept="image/*" data-id="0" data-src=""
                                                                       data-alt="" data-customer="3420"
                                                                       data-folder="nguyen-hung-3420"
                                                                       data-krajee-fileinput="fileinput_d1e19165">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--[if lt IE 10]><br>
                                                <div class="alert alert-warning"><strong>Chú thích:</strong> Trình
                                                    duyệt bạn đang sử dụng không hỗ trợ xem trước và tải lên nhiều
                                                    tệp tin. Vui lòng thử lại trên một trình duyệt khác có hỗ trợ
                                                    tính năng này.
                                                </div>
                                                <script>document.getElementById("input-imageFiles").className.replace(/\bfile-loading\b/, "");
                                                ;</script><![endif]-->

                                                <p class="help-block help-block-error"></p></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="button" class="button-add"
                                            onclick="js:$('#input-imageFiles').click();">
                                        &nbsp;
                                    </button>
                                    <div class="clearfix"></div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-default"
                                                onclick="js:$('.fileinput-remove').click();">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal"
                                                aria-hidden="true">
                                            Tải lên
                                        </button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="display: none" id="modal05">
                        <h5 style="background: #ebebeb;color: #515151;padding: 10px 20px;">Bảng lựa chọn</h5>
                        <div style="background: white;padding: 10px 20px;position: relative;">
                            <div class="text-right">
                                <button type="button" class="btn btn-link" style="color: #ccc;"
                                        onclick="js:cancellAll('#delete-input')"><i class="fa fa-window-close"></i>
                                    Hủy
                                </button>
                            </div>

                            <div id="delete-input">

                                <div class="hinh-them clearfix">
                                    <p>Lựa chọn 1</p>
                                    <button type="button" class="input-file-image" onclick="js:openInputFile(this)">
                                        <img src="" alt="" class="img-responsive">
                                    </button>
                                    <input type="file" name="AskAddForm[imageout][0]" accept="image/*"
                                           class="hidden" onchange="js:changeInputFile(this)">
                                    <textarea placeholder="Điền thông tin hoặc link hình ảnh kientruc.com"
                                              class="input-bootstrap col-xs-8"
                                              name="AskAddForm[imagetitle][0]"></textarea>
                                </div>

                                <div class="hinh-them clearfix">
                                    <p>Lựa chọn 2</p>
                                    <button type="button" class="input-file-image" accept="image/*"
                                            onclick="js:openInputFile(this)">
                                        <img src="" alt="" class="img-responsive">
                                    </button>
                                    <input type="file" name="AskAddForm[imageout][1]" class="hidden"
                                           onchange="js:changeInputFile(this)">
                                    <textarea placeholder="Điền thông tin hoặc link hình ảnh kientruc.com"
                                              class="input-bootstrap col-xs-8"
                                              name="AskAddForm[imagetitle][1]"></textarea>
                                </div>

                                <dix id="insert-input"></dix>

                            </div>

                            <div class="hinh-them clearfix">
                                <p>&nbsp;</p>
                                <button type="button" class="input-file-image"
                                        onclick="js:addInputSelected('#insert-input')">
                                    <img src="" alt="" class="img-responsive">
                                </button>
                                <span style="line-height: 54px;padding-left: 10px;cursor: pointer"
                                      onclick="js:addInputSelected('#insert-input')">Thêm</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <p></p>
                        <div class="form-group text-center">
                            <button type="submit" id="button-tiep-theo" class="btn btn-default" disabled=""
                                    onclick="javascript:return checkOutButton()">Tiếp theo
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<div id="modal02" class="fade modal" role="dialog" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                Link từ youtube
            </div>
            <div class="modal-body">
                <form id="fr-ask-video" action="/ask/personal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_csrf-frontend"
                           value="gZt6Fj3YEUPY-feE44skTxA9Bby2XWDRIyH8Aya-va7i1Eh-cK4md6-vn-WBv0IcRFs28tEHEZx1FY0wXuvNmg==">
                    <div style="background: white;overflow: hidden;">
                        <div id="preview-video"></div>
                        <div class="clearfix"></div>
                        <div class="form-group field-checkvideoform-video">
                            <label class="control-label" for="checkvideoform-video">Hãy nhập link từ youtube</label>
                            <input type="text" id="checkvideoform-video" class="form-control"
                                   name="CheckVideoForm[video]" onblur="js:return onBlurInput(this)"
                                   onfocus="javascript:onFocusInput(this)" placeholder="http://">

                            <p class="help-block help-block-error"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-default">
                            Xong
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div id="modal03" class="fade modal" role="dialog" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                Link nguồn
            </div>
            <div class="modal-body">
                <form id="fr-ask-link" action="/ask/personal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_csrf-frontend"
                           value="gZt6Fj3YEUPY-feE44skTxA9Bby2XWDRIyH8Aya-va7i1Eh-cK4md6-vn-WBv0IcRFs28tEHEZx1FY0wXuvNmg==">
                    <div style="background: white;overflow: hidden;">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu01"
                                                  onclick="js:deleteRemain('#menu02')">Link từ website</a>
                            </li>
                            <li><a data-toggle="tab" href="#menu02" onclick="js:deleteRemain('#menu01')">Link từ
                                    KIENTRUC.com</a></li>
                        </ul>
                        <div class="tab-content">
                            <p></p>
                            <div id="menu01" class="tab-pane fade in active">
                                <div class="form-group field-title001">
                                    <label class="control-label" for="title001">Hiển thị trong câu hỏi</label>
                                    <input type="text" id="title001" class="form-control"
                                           name="CheckLinkForm[title]" placeholder="hiển thị">

                                    <p class="help-block help-block-error"></p>
                                </div>
                                <div class="form-group field-link001">
                                    <label class="control-label" for="link001">Link website</label>
                                    <input type="text" id="link001" class="form-control" name="CheckLinkForm[link]"
                                           placeholder="http://">

                                    <p class="help-block help-block-error"></p>
                                </div>
                            </div>
                            <div id="menu02" class="tab-pane fade">
                                <p></p>
                                <div id="preview-link"></div>
                                <div class="form-group field-link002">
                                    <label class="control-label" for="link002">Link website</label>
                                    <input type="text" id="link002" class="form-control" name="CheckLinkForm[link2]"
                                           onblur="javascript:return onBlurInputLink(this)"
                                           onfocus="javascript:onFocusInputLink(this)">

                                    <p class="help-block help-block-error"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-default">
                            Xong
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div id="modal06" class="fade modal" role="dialog" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center">CHỌN CHỦ ĐỀ</div>
            </div>
            <div class="modal-body">
                <form id="fr-ask-tags" class="form-horizontal" action="/ask/submit-step-two" method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_csrf-frontend"
                           value="gZt6Fj3YEUPY-feE44skTxA9Bby2XWDRIyH8Aya-va7i1Eh-cK4md6-vn-WBv0IcRFs28tEHEZx1FY0wXuvNmg==">
                    <div>
                        <p class="text-center"><i style="font-size: 14px">Chọn tối đa 3 chủ
                                đề phù hợp với câu hỏi của bạn</i></p>
                        <div class="list-tag-has-selected"></div>
                        <div class="col-md-12">
                            <div class="form-group field-list-input-tags required">
                                <div class="hidden"><input type="text" id="list-input-tags" class="form-control"
                                                           name="addTagAskForm[tags]" aria-required="true"></div>
                                <p class="help-block help-block-error margin-0px"></p>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="line"></div>
                        <div class="list-tag">
                            <p class="font14ccc">Chọn ít nhất 1 chủ đề</p>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="2"
                                    onclick="js:selectItemTag(this,3)">
                                Chung Cư
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="3"
                                    onclick="js:selectItemTag(this,3)">
                                Nhà Mặt Phố
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="7"
                                    onclick="js:selectItemTag(this,3)">
                                Nội thất
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="50"
                                    onclick="js:selectItemTag(this,3)">
                                Nhà Cấp 4
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="51"
                                    onclick="js:selectItemTag(this,3)">
                                Biệt Thự
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="52"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Bếp
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="53"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Khách
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="54"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Ăn
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="55"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Ngủ
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="56"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Vệ Sinh
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="57"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Tắm
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="58"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Làm Việc
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="59"
                                    onclick="js:selectItemTag(this,3)">
                                Phòng Em Bé
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="60"
                                    onclick="js:selectItemTag(this,3)">
                                Vật Liệu Xây Dựng
                            </button>
                            <div class="clearfix"></div>
                            <div class="line"></div>
                            <p class="font14ccc">Chọn ít nhất 1 chủ đề</p>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="36"
                                    onclick="js:selectItemTag(this,3)">
                                Phong Thủy
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="37"
                                    onclick="js:selectItemTag(this,3)">
                                Mua Ở Đâu
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="38"
                                    onclick="js:selectItemTag(this,3)">
                                Phối Màu Sắc
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="39"
                                    onclick="js:selectItemTag(this,3)">
                                Thiết Kế Mặt Bằng
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="40"
                                    onclick="js:selectItemTag(this,3)">
                                Hỏi Chi Phí
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="41"
                                    onclick="js:selectItemTag(this,3)">
                                Khoe Nhà
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="42"
                                    onclick="js:selectItemTag(this,3)">
                                Giải Pháp Thi Công
                            </button>
                            <button type="button" class="btn item-tag btn-default btn-xs" data-id="43"
                                    onclick="js:selectItemTag(this,3)">
                                Diện Tích Nhỏ
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="line"></div>

                        <div class="">
                            <div class="hidden">
                                <div class="form-group field-check123">
                                    <label class="control-label col-sm-3" for="check123">check</label>
                                    <div class="col-sm-6">
                                        <input type="hidden" id="check123" class="form-control"
                                               name="addTagAskForm[check]" value="2">
                                        <p class="help-block help-block-error "></p>
                                    </div>

                                </div>
                            </div>
                            <label class="radio-inline">
                                <input type="radio" name="optradio" value="1" onchange="js:changeValue(this)">
                                Ẩn danh
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio" value="2" onchange="js:changeValue(this)"
                                       checked="">
                                Đăng bằng tài khoản chính
                            </label>
                        </div>

                        <div class="clearfix"></div>
                        <div class="line"></div>
                        <div style="display: none" id="showandanh" class="row">
                            <div class="col-md-6">
                                <p>Thông tin hiển thị</p>
                                <div class="form-group field-addtagaskform-full_name">
                                    <label class="control-label col-sm-6 col-md-6 col-lg-6"
                                           for="addtagaskform-full_name">Tên: </label>
                                    <div class="col-sm-6">
                                        <input type="text" id="addtagaskform-full_name" class="form-control"
                                               name="addTagAskForm[full_name]">
                                        <p class="help-block help-block-error hidden"></p>
                                    </div>

                                </div>
                                <div class="form-group field-addtagaskform-sex">
                                    <label class="control-label col-sm-6 col-md-6 col-lg-6">Giới tính</label>
                                    <div class="col-sm-6">
                                        <input type="hidden" name="addTagAskForm[sex]" value="">
                                        <div id="addtagaskform-sex"><label class="radio-inline"><input type="radio"
                                                                                                       name="addTagAskForm[sex]"
                                                                                                       value="1"
                                                                                                       checked="">
                                                Nam</label>
                                            <label class="radio-inline"><input type="radio"
                                                                               name="addTagAskForm[sex]" value="0">
                                                Nữ</label></div>
                                        <p class="help-block help-block-error hidden"></p>
                                    </div>

                                </div>
                                <div class="form-group field-addtagaskform-birthday">
                                    <label class="control-label col-sm-6 col-md-6 col-lg-6"
                                           for="addtagaskform-birthday">Năm sinh: </label>
                                    <div class="col-sm-6">
                                        <select id="addtagaskform-birthday"
                                                class="form-control select2-hidden-accessible"
                                                name="addTagAskForm[birthday]" data-s2-options="s2options_d6851687"
                                                data-krajee-select2="select2_f9dc49cd" style="display:none"
                                                tabindex="-1" aria-hidden="true">
                                            <option value="">Năm</option>
                                            <option value="1975">1975</option>
                                            <option value="1976">1976</option>
                                            <option value="1977">1977</option>
                                            <option value="1978">1978</option>
                                            <option value="1979">1979</option>
                                            <option value="1980" selected="">1980</option>
                                            <option value="1981">1981</option>
                                            <option value="1982">1982</option>
                                            <option value="1983">1983</option>
                                            <option value="1984">1984</option>
                                            <option value="1985">1985</option>
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1989</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                        </select><span class="select2 select2-container select2-container--krajee"
                                                       dir="ltr" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0"
                                                        aria-labelledby="select2-addtagaskform-birthday-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-addtagaskform-birthday-container"
                                                            title="1980"><span
                                                                class="select2-selection__clear">×</span>1980</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <p class="help-block help-block-error hidden"></p>
                                    </div>

                                </div>
                                <div class="form-group field-addtagaskform-province">
                                    <label class="control-label col-sm-6 col-md-6 col-lg-6"
                                           for="addtagaskform-province">Vị trí: </label>
                                    <div class="col-sm-6">
                                        <select id="addtagaskform-province"
                                                class="form-control select2-hidden-accessible"
                                                name="addTagAskForm[province]" data-s2-options="s2options_d6851687"
                                                data-krajee-select2="select2_5e022f34" style="display:none"
                                                tabindex="-1" aria-hidden="true">
                                            <option value="">Chọn tỉnh/ TP</option>
                                            <option value="01">Hà Nội</option>
                                            <option value="79">Hồ Chí Minh</option>
                                            <option value="48">Đà Nẵng</option>
                                            <option value="89">An Giang</option>
                                            <option value="77">Bà Rịa - Vũng Tàu</option>
                                            <option value="24">Bắc Giang</option>
                                            <option value="06">Bắc Kạn</option>
                                            <option value="95">Bạc Liêu</option>
                                            <option value="27">Bắc Ninh</option>
                                            <option value="83">Bến Tre</option>
                                            <option value="74">Bình Dương</option>
                                            <option value="70">Bình Phước</option>
                                            <option value="60">Bình Thuận</option>
                                            <option value="52">Bình Định</option>
                                            <option value="96">Cà Mau</option>
                                            <option value="92">Cần Thơ</option>
                                            <option value="04">Cao Bằng</option>
                                            <option value="64">Gia Lai</option>
                                            <option value="02">Hà Giang</option>
                                            <option value="35">Hà Nam</option>
                                            <option value="42">Hà Tĩnh</option>
                                            <option value="30">Hải Dương</option>
                                            <option value="31">Hải Phòng</option>
                                            <option value="93">Hậu Giang</option>
                                            <option value="17">Hòa Bình</option>
                                            <option value="33">Hưng Yên</option>
                                            <option value="56">Khánh Hòa</option>
                                            <option value="91">Kiên Giang</option>
                                            <option value="62">Kon Tum</option>
                                            <option value="12">Lai Châu</option>
                                            <option value="68">Lâm Đồng</option>
                                            <option value="20">Lạng Sơn</option>
                                            <option value="10">Lào Cai</option>
                                            <option value="80">Long An</option>
                                            <option value="36">Nam Định</option>
                                            <option value="40">Nghệ An</option>
                                            <option value="37">Ninh Bình</option>
                                            <option value="58">Ninh Thuận</option>
                                            <option value="25">Phú Thọ</option>
                                            <option value="54">Phú Yên</option>
                                            <option value="44">Quảng Bình</option>
                                            <option value="49">Quảng Nam</option>
                                            <option value="51">Quảng Ngãi</option>
                                            <option value="22">Quảng Ninh</option>
                                            <option value="45">Quảng Trị</option>
                                            <option value="94">Sóc Trăng</option>
                                            <option value="14">Sơn La</option>
                                            <option value="72">Tây Ninh</option>
                                            <option value="34">Thái Bình</option>
                                            <option value="19">Thái Nguyên</option>
                                            <option value="38">Thanh Hóa</option>
                                            <option value="46">Thừa Thiên Huế</option>
                                            <option value="82">Tiền Giang</option>
                                            <option value="84">Trà Vinh</option>
                                            <option value="08">Tuyên Quang</option>
                                            <option value="86">Vĩnh Long</option>
                                            <option value="26">Vĩnh Phúc</option>
                                            <option value="15">Yên Bái</option>
                                            <option value="66">Đắk Lắk</option>
                                            <option value="67">Đắk Nông</option>
                                            <option value="11">Điện Biên</option>
                                            <option value="75">Đồng Nai</option>
                                            <option value="87">Đồng Tháp</option>
                                        </select><span class="select2 select2-container select2-container--krajee"
                                                       dir="ltr" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0"
                                                        aria-labelledby="select2-addtagaskform-province-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-addtagaskform-province-container"><span
                                                                class="select2-selection__placeholder">Chọn tỉnh/ TP</span></span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <p class="help-block help-block-error hidden"></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">

                                <p>Ảnh đại diện</p>
                                <div class="hidden">
                                    <div class="form-group field-base64-image">
                                        <div class="hidden"><input type="hidden" id="base64-image"
                                                                   class="form-control"
                                                                   name="addTagAskForm[avatar]"></div>
                                    </div>
                                </div>
                                <div class="box-certain-2-lua-chon">
                                    <div class="avatar-p-kt croppie-container" id="hinh-avatar">
                                        <div class="cr-boundary" aria-dropeffect="none"
                                             style="width: 120px; height: 120px;">
                                            <canvas class="cr-image" alt="preview" aria-grabbed="false"></canvas>
                                            <div class="cr-viewport cr-vp-square" tabindex="0"
                                                 style="width: 80px; height: 80px;"></div>
                                            <div class="cr-overlay"></div>
                                        </div>
                                        <div class="cr-slider-wrap"><input class="cr-slider" type="range"
                                                                           step="0.0001" aria-label="zoom"></div>
                                    </div>
                                    <div id="result-anh"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="box-certain-2-nut">
                                    <input type="file" id="upload" class="hidden">
                                    <button type="button" class="btn btn-primary but-upload"
                                            onclick="js:$('.but-cancel').click();$('#upload').click();">Chọn hình
                                        ảnh
                                    </button>
                                    <button type="button" class="btn btn-success actionDone">Cắt ảnh</button>
                                    <button type="button" class="btn btn-warning but-cancel"
                                            onclick="js:$('#result-anh').hide();">Hủy
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div id="showandanh02" class="row">
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <p></p>
                    <div class="text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                            Quay lại
                        </button>
                        <button type="submit" class="btn btn-success">
                            Đăng câu hỏi
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div id="modal04" class="fade modal" role="dialog" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                Nội quy đăng bài
            </div>
            <div class="modal-body">
                <div>
                    <p>Dưới đây là một số quy định về đăng bài trên KIENTRUC.com, nếu vi phạm một trong các điều thì
                        admin sẽ BLOCK tính năng đăng bài của người dùng đó trong một thời gian.</p>
                    <ol>
                        <li>Câu hỏi topic không liên quan đến Nhà Cửa, Xây Dựng</li>
                        <li>Có nội dung khiêu dâm, tục tĩu,18+, tranh luận, đả kích mang hướng tiêu cực</li>
                        <li>Có liên quan đến chính trị, phản động không phù hợp</li>
                        <li>Có nội dung xuyên tạc thuần phong mỹ tục đến Việt Nam hoặc đến dân tộc nhất định</li>
                        <li>Có nội dung không phù hợp hoặc spam quảng cáo</li>
                        <li>Có liên kết spam, dẫn đến những trang có nội dung xấu.</li>
                        <li>Tạo nhiều topic có cùng 1 nội dung.</li>
                    </ol>
                    <p>Điều kiện cần để đăng 1 topic thành công</p>
                    <ol>
                        <li>Tất cả tiêu đề và nội dung bài viết phải có Tiếng Việt có dấu</li>
                        <li>Tiêu đề topic có tối thiểu 5 chữ, tối đa 15 chữ</li>
                        <li>Nội dung bài viết có tối thiểu là 5 chữ, tối đa là 200 chữ</li>
                        <li>Mỗi topic, chủ nhà phải chọn tối thiểu là 1 chủ đề, tối đa là 3 chủ đề có liên quan để
                            kiến trúc sư tư vấn dễ hơn
                        </li>
                    </ol>
                </div>
                <div class="clearfix"></div>
                <div class="text-right">
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                        OK,tôi đã hiểu
                    </button>
                </div>


            </div>

        </div>
    </div>
</div>

<style type="text/css">
    .krajee-default.file-preview-frame {
        margin: 1%;
        width: 23%;
        box-shadow: none;
    }

    .krajee-default.file-preview-frame:not(.file-preview-error):hover {
        box-shadow: 0px 0px 1px #ccc;
    }

    .krajee-default .file-caption-info, .krajee-default .file-size-info {
        width: 100%;
    }

    .krajee-default.file-preview-frame .kv-file-content {
        height: 80px;
        display: table-cell;
        vertical-align: middle;
        max-width: 100%;
    }

    .file-preview-image {
        margin: 0 auto !important;
    }

    @media screen and (max-width: 426px) {
        .file-preview-thumbnails {
            display: inherit !important;
        }

        .krajee-default.file-preview-frame {
            width: 48%;
        }
    }

    div.input-group.file-caption-main {
        display: none;
    }

    button.button-add {
        display: inline-block;
        width: 22%;
        height: 120px;
        border: 1px dashed #ccc;
        background: transparent;
        position: relative;
        margin-bottom: 15px;
    }

    button.button-add:after {
        position: absolute;
        top: 49.5%;
        left: 20%;
        width: 60%;
        height: 2px;
        background: #ccc;
        content: '';
    }

    button.button-add:before {
        position: absolute;
        top: 20%;
        left: 49.5%;
        width: 2px;
        height: 60%;
        background: #ccc;
        content: '';
    }

    #fr-ask-tags .form-group {
        margin-bottom: 10px;
    }

    .margin-0px {
        margin: 0 !important;
    }

    div.box-certain-2-lua-chon {
        width: 120px;
        position: relative;
        display: inline-block;
    }

    #hinh-avatar {
        max-width: 120px;
    }

    #result-anh {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        height: 100%;
        width: 100%;
        background: #ececec;
        z-index: 1;
    }

    #result-anh img {
        margin: 45px auto;
        display: block;
    }

    div.box-certain-2-nut {
        display: inline-block;
        vertical-align: top;
    }

    .but-upload {
        display: block;
        margin-bottom: 5px;
    }

    .but-cancel {
        display: block;
        margin-bottom: 5px;
    }

    .actionDone {
        display: block;
        margin-bottom: 5px;
    }

    span#spanCountPrev {
        position: absolute;
        bottom: -27px;
        right: 25px;
        z-index: 1;
        color: #ccc;
        font-size: 12px;
    }

    .font14ccc {
        font-size: 14px;
        color: #9a9a9a;
    }

    div.show-when-full-word {
        position: relative;
    }

</style>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="heigh-20px"></div>
                <div class="ask-box-left bg-white">
                    <div class="ask-box-title-h4">
                        Dành cho bạn
                    </div>
                    <div class="col-md-12 click-down-up">
                        <button type="button" class="no-button" onclick="javascript:slideToggleMenu(this)"><i
                                    class="fa fa-angle-down"></i></button>
                        <div class="line-ask"></div>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list-group no-border-group">

                        <li class="list-group-item">
                            <span class="badge">0</span>
                            <a href="ask/personal" title="Câu hỏi của bạn">Câu hỏi của bạn</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">0</span>
                            <a href="ask/waiting" title="Đang chờ duyệt">Đang chờ duyệt</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">0</span>
                            <a href="ask/join" title="Bạn đã tham gia">Bạn đã tham gia</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">0</span>
                            <a href="ask/love-comment" title="KTS bạn yêu thích bình luận">KTS bạn yêu thích bình
                                luận</a>
                        </li>

                    </ul>
                </div>

                <div class="ask-box-left bg-white">
                    <div class="ask-box-title-h4">
                        Chủ đề khách hàng
                    </div>
                    <div class="col-md-12 click-down-up">
                        <button type="button" class="no-button" onclick="javascript:slideToggleMenu(this)"><i
                                    class="fa fa-angle-down"></i></button>
                        <div class="line-ask"></div>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list-group no-border-group" id="more-tags">
                        <li class="list-group-item">
                            <span class="badge">350</span>
                            <a href="/hoi-dap?tags=noi-that" title="Nội thất">Nội thất</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">264</span>
                            <a href="/hoi-dap?tags=phoi-mau-sac" title="Phối Màu Sắc">Phối Màu Sắc</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">163</span>
                            <a href="/hoi-dap?tags=phong-khach" title="Phòng Khách">Phòng Khách</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">90</span>
                            <a href="/hoi-dap?tags=phong-bep" title="Phòng Bếp">Phòng Bếp</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">81</span>
                            <a href="/hoi-dap?tags=phong-an" title="Phòng Ăn">Phòng Ăn</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">54</span>
                            <a href="/hoi-dap?tags=phong-ngu" title="Phòng Ngủ">Phòng Ngủ</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">49</span>
                            <a href="/hoi-dap?tags=phong-tam" title="Phòng Tắm">Phòng Tắm</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">35</span>
                            <a href="/hoi-dap?tags=mua-o-dau" title="Mua Ở Đâu">Mua Ở Đâu</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">33</span>
                            <a href="/hoi-dap?tags=chung-cu" title="Chung Cư">Chung Cư</a>
                        </li>
                        <li class="list-group-item">
                            <span class="badge">32</span>
                            <a href="/hoi-dap?tags=nha-mat-pho" title="Nhà Mặt Phố">Nhà Mặt Phố</a>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button style="font-size: 12px;color: #bfbfbf;font-style: italic;" class="btn-link"
                                data-page="2" onclick="javascript:moreTags(this,'#more-tags',[1,2]);">
                            Xem thêm <i class="fa fa-angle-double-down"></i>
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <style type="text/css">
                    .click-down-up {
                        position: relative;
                        z-index: 1;
                    }

                    .click-down-up button {
                        position: absolute;
                        z-index: 1;
                        top: -33px;
                        right: 20px;
                        border: 0;
                        background: transparent;
                    }
                </style>
                <script type="text/javascript">
                    function slideToggleMenu(el) {
                        $(el).parent().next('ul').slideToggle();
                        if ($(el).children('i').hasClass('fa-angle-down')) {
                            $(el).children('i').removeClass('fa-angle-down').addClass('fa-angle-right');
                        } else {
                            $(el).children('i').removeClass('fa-angle-right').addClass('fa-angle-down');
                        }
                    }

                    function moreTags(el, show, select) {
                        var page = $(el).attr('data-page');
                        $.ajax({
                            url: '/ask/ajax-get-more-tags?page=' + page,
                            type: 'post',
                            data: {
                                'select': select
                            },
                            //processData: false,
                            //contentType: false,
                            success: function (data) {
                                if (data) {
                                    $(el).attr('data-page', page * 1 + 1);
                                    var $str = '';
                                    const json = JSON.parse(data);
                                    $.each(json, function (key, value) {
                                        $str += '<li class="list-group-item">' +
                                            '<span class="badge">' + (value.total != null ? value.total : '') + '</span>' +
                                            '<a href="/hoi-dap?tags=' + value.link + '" title="Biệt Thự">' + value.name + '</a>' +
                                            '</li>';
                                    });
                                    $(show).append($str);
                                } else {
                                    $(el).remove();
                                }
                            }
                        });
                    }
                </script>
            </div>
            <div class="col-md-9 padding-left-0px">

                <div class="heigh-20px"></div>
                <div class="border-1px-e8e8e8">
                    <style type="text/css">
                        #bs-example-navbar-collapse-220 ul li a.index-ask-update:before {
                            opacity: 1;
                        }

                        #bs-example-navbar-collapse-220 ul li a.index-ask-update {
                            color: #248445;
                        }</style>
                    <nav class="navbar navbar-default menu-ask-main">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-220" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand cauhoi-index" href="hoi-dap" title="Topic">TOPIC</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-220">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="hoi-dap?sort=update" title="Mới cập nhật" class="index-ask-update">Mới
                                            cập nhật
                                            <span class="sr-only"> (
                                            current

                                            ) </span>
                                        </a>
                                    </li>
                                    <li><a href="hoi-dap?sort=new" title="Câu hỏi mới" class="index-ask-new">Câu hỏi
                                            mới</a></li>
                                    <li><a href="hoi-dap?sort=hot" title="Topic hot" class="index-ask-hot">Topic
                                            hot</a></li>
                                    <li><a href="hoi-dap?sort=comment" title="Chưa trả lời"
                                           class="index-ask-comment">Chưa trả lời</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <div class="line-ask"></div>
                    <div class="clearfix"></div>

                    <div style="background: white">


                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="text-center">
                </div>

            </div>
        </div>
    </div>
</section>


