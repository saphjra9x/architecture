/**
 * Created by User on 6/5/2018.
 */
function crollTargetID(clasID) {
    $('html, body').animate({scrollTop: $(clasID).offset().top - 10}, 1000);
}

function countNumberImageUpload(fr) {
    var $num = 0;
    //dau tien kiem tra html co thumbnail khong
    var $html = fr.find('.file-preview-thumbnails');
    if($html.children().length != 0) {
        //neu trong the html nay co thumbnail nghia la co hinh
        if($html.children().length < 3){
            //co nghia la co 1 hinh, khong phai kiem tra tiep
            $num = 1;
        }else{
            //thi tiep tuc
            //kiem tra xem bao nhieu hinh
            var $attr = fr.find('.file-caption-name').attr('title');
            if (typeof $attr !== typeof undefined && $attr !== false) {
                //neu ton tai title va title khac rong thi lam
                $num = $attr.toString();
                $num = $num.replace(/[^0-9]+/g, "") * 1;
                //toan la chu thi se ra ket qua = 0
                //if ($num == 0) $num = 1;
                //tuc nghia la co 1 hinh thoi
            }
        }
    }
    //tra ket qua ve
    return $num
}

function loadNumberCart() {
    $.ajax({
        url: '/shopping/number-cart',
        type: 'GET',
        /*data: {
         'id' : id
         },*/
        success: function (data) {
            $('body').find('span.shop-quantity')
                .attr('data-num',data)
                .html(data);
        }
    });
}
function likedProject(el,id) {
    $(el).parent().loading();
    $.ajax({
        url: '/project/ajax-liked',
        type: 'post',
        data: {
            'idPost': id,
        },
        //processData: false,
        //contentType: false,
        success: function (data) {
            if (data === '0') {
                alert('Lỗi: like bị lỗi');
            } else if (data === '-2') {
                alert('Lỗi: Chưa đăng nhập');
            } else {
                $(el).parent().loading('stop');
                $(el).next('button').html($(el).next('button').html()*1 + 1*data);
            }
        }
    });
}
function YeuThichDuAn(id) {
    $('body').loading();
    $.ajax({
        url: '/project/ajax-liked',
        type: 'post',
        data: {
            'idPost': id,
        },
        //processData: false,
        //contentType: false,
        success: function (data) {
            $('body').loading('stop');
            if (data === '0') {
                alert('Lỗi: like bị lỗi');
            } else if (data === '-2') {
                alert('Lỗi: Chưa đăng nhập');
            } else if (data === '-1'){
                alert('Đã bỏ yêu thích dự án này.');
            }else if (data === '1'){
                $('#modal-YeuThichDuAn').modal({
                    show: true,
                    backdrop: 'static'
                });
            }
            $('body').loading('stop');
        }
    });
}
function initTextarea() {
    $('body').on('keyup input', 'textarea', function () {
        var offset = this.offsetHeight - this.clientHeight;
        var scroll = $('body').scrollTop();
        $(this).css('height', 'auto').css('height', this.scrollHeight + offset);
        $('body').scrollTop(scroll);
    }).removeAttr('data-autoresize');
}
function readOutLink(link,vitri) {
    /**
     * Get HTML asynchronously
     * @param  {String}   url      The URL to get HTML from
     * @param  {Function} callback A callback funtion. Pass in "response" variable to use returned HTML.
     */
    var getHTML = function ( url, callback ) {
        $.ajax({
            url: '/comment/ajax-html-other-page',
            method: "POST",
            data: {
              'url' : url
            },
            context: document.body,
            success: function(response) {
                callback(response);
            }
        });
    };
    getHTML( link, function (response) {
        if(response != '0') {
            //console.log($(response));
            var parser = new DOMParser();
            response = parser.parseFromString(response, "text/html");
            var x = $(response).find("meta");
            var y = $(response).find("title");
            var obj = {
                image: '',
                title: y[0].text,
                description: '',
                url: link
            };
            for (var i = 0; i < x.length; i++) {

                if ($(x[i]).attr('property') == "og:image" || $(x[i]).attr('name') == "og:image") {
                    obj.image = $(x[i]).attr('content');
                }
                if ($(x[i]).attr('name') == "description") {
                    obj.description = $(x[i]).attr('content');
                }
            }
            //xem truoc link
            $(vitri).html('<div class="alert alert-success alert-dismissible" role="alert">' +
                '<div class="row">' +
                '<div class="col-md-3">' +
                '<img src="' + obj.image + '" alt="" class="img-responsive">' +
                '</div>' +
                '<div class="col-md-9"><h4>' + obj.title + '</h4>' +
                '<p>' + obj.description + '</p>' +
                '<hr>' +
                '<p class="mb-0">Nguồn: ' + obj.url + '</p>' +
                '</div>' +
                '</div>' +
                '</div>');
            return true;
        }else{
            $(vitri).html('<div class="alert alert-warning">' +
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                '<div class="col-md-3">' +
                'Thông báo:' +
                '</div>' +
                '<div class="col-md-9">Không tìm thấy link này!</div>' +
                '<div class="clearfix"></div>' +
                '</div>');
        }
        return false;
    });

}
function getInfoVideoYoutube(linkYoutube, preview) {

    var getYoutubeIdByUrl = function (url) {
        var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
        var match = url.match(regExp);
        if (match && match[7].length == 11) {
            return match[7];
        }
        return false;
    };

    var formatSecondsAsTime = function (secs) {
        var hr = Math.floor(secs / 3600),
            min = Math.floor((secs - (hr * 3600)) / 60),
            sec = Math.floor(secs - (hr * 3600) - (min * 60));

        if (hr < 10) {
            hr = "0" + hr;
        }
        if (min < 10) {
            min = "0" + min;
        }
        if (sec < 10) {
            sec = "0" + sec;
        }
        if (hr) {
            hr = "00";
        }
        return hr + ':' + min + ':' + sec;
    };

    if (linkYoutube) {
        var id = getYoutubeIdByUrl(linkYoutube);
        var url = 'https://www.youtube.com/watch?v=' + id;
        if (id) {
            $.getJSON('https://noembed.com/embed',
                {format: 'json', url: url}, function (data) {
                    $(preview).html('<div class="alert alert-success">' +
                        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                        '<div class="col-md-4">' +
                        '<img src="' + data.thumbnail_url + '" alt="" class="img-responsive" />' +
                        '</div>' +
                        '<div class="col-md-8">' +
                        '<h4>' + data.title + '</h4>' +
                        '<h5>' + data.author_name + '</h5>' +
                        '</div>' +
                        '<div class="clearfix"></div>' +
                        '</div>');
                    //console.log(data);
                    //yt_duration = formatSecondsAsTime( yt_response.duration );
                });
        }else{
            $(preview).html('<div class="alert alert-warning">' +
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                '<div class="col-md-3">' +
                'Thông báo:' +
                '</div>' +
                '<div class="col-md-9">Không tìm thấy link này!</div>' +
                '<div class="clearfix"></div>' +
                '</div>');
        }
    }else{
        $(preview).html('');
    }
}
function removeAD(el,load,idpost) {
    if(window.confirm('Bạn chắc chắn muốn gỡ dự án ra khỏi trang chủ ?')) {
        $.ajax({
            url: '/project/ajax-change-status',
            type: 'post',
            data: {
                'idPost': idpost
            },
            //processData: false,
            //contentType: false,
            success: function (data) {
                if (data === '0') {
                    alert('Lỗi: like bị lỗi');
                } else if (data === '-1') {
                    alert('Lỗi: Chưa đăng nhập');
                } else {
                    switch (load) {
                        case 2://load lai phan setting
                            alert('Dự án đã gỡ khỏi trang chủ!');
                            var daynek = $('#divMenu-'+idpost);
                            var project = daynek.attr('data-project');
                            daynek.html('<div class="dropdown">' +
                                '<button type="button" class="btn btn-default dropdown-toggle" ' +
                                'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' +
                                '<span class="fa fa-cog"></span>' +
                                '</button>' +
                                '<ul class="dropdown-menu">' +
                                '<li><a href="project/edit?id='+project+'">Chỉnh sửa dự án</a></li>' +
                                '<li><a href="javascript:registerAD(this,'+idpost+')" id="A-'+idpost+'">Yêu cầu được lên trang chủ</a></li>' +
                                '<li><a href="#">Yêu cầu TAG sản phẩm</a></li><li role="separator" class="divider"></li>' +
                                '<li><a href="javascript:deleteJs(\'project/delete?id='+project+'\')">Xóa dự án này</a></li>' +
                                '</ul>' +
                                '</div>');
                            break;
                        case 1://load lai trang
                            window.location.reload(true);
                            break;
                        default://an di item nay
                            $('#divMenu-'+idpost).parent().parent().hide();
                            break;
                    }
                }
            }
        });
    }
}
function registerAD(el,idpost) {
    $.ajax({
        url: '/project/ajax-register-status',
        type: 'post',
        data: {
            'idPost': idpost
        },
        //processData: false,
        //contentType: false,
        success: function (data) {
            if (data === '0') {
                alert('Lỗi: like bị lỗi');
            } else if (data === '-1') {
                alert('Lỗi: Chưa đăng nhập');
            } else if (data === '1'){
                alert('Đã hủy yêu cầu!');
                $('body').find('#A-'+idpost).html('Yêu cầu lên trang chủ');
            }else if (data === '2'){
                alert('Dự án sẽ được công khai trang chủ!');
                $('body').find('#A-'+idpost).html('Hủy yêu cầu lên trang chủ');
            }
        }
    });
}

function catChuoiNumber(nameID,num) {
    var string = $('body').find(nameID).val();
    var array = JSON.parse("[" + string + "]");

    //tim xem
    var found = array.indexOf(num*1);

    if(found > -1){
        //co thi xoa
        array.splice(found, 1);
        //console.log('xoa');
    }else{
        //k co thi them
        array.push(num*1);
        //console.log('them');
    }
    var strnew = array.toString();
    $('body').find(nameID).val(strnew);
}

function getInfoParam() {
    var str = '';
    str += '?lct='+$('.submitBoLoc').find('input[name=lct]').val();
    str += '&hm='+$('.submitBoLoc').find('input[name=hm]').val();
    str += '&pc='+$('.submitBoLoc').find('input[name=pc]').val();
    str += '&tt='+$('.submitBoLoc').find('input[name=tt]').val();
    str += '&sort='+$('.submitBoLoc').find('input[name=sort]').val();
    return str;
}

function getAllUrlParams(url) {

    // get query string from url (optional) or window
    var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

    // we'll store the parameters here
    var obj = {};

    // if query string exists
    if (queryString) {

        // stuff after # is not part of query string, so get rid of it
        queryString = queryString.split('#')[0];

        // split our query string into its component parts
        var arr = queryString.split('&');

        for (var i=0; i<arr.length; i++) {
            // separate the keys and the values
            var a = arr[i].split('=');

            // in case params look like: list[]=thing1&list[]=thing2
            var paramNum = undefined;
            var paramName = a[0].replace(/\[\d*\]/, function(v) {
                paramNum = v.slice(1,-1);
                return '';
            });

            // set parameter value (use 'true' if empty)
            var paramValue = typeof(a[1])==='undefined' ? true : a[1];

            // (optional) keep case consistent
            paramName = paramName.toLowerCase();
            paramValue = paramValue.toLowerCase();

            // if parameter name already exists
            if (obj[paramName]) {
                // convert value to array (if still string)
                if (typeof obj[paramName] === 'string') {
                    obj[paramName] = [obj[paramName]];
                }
                // if no array index number specified...
                if (typeof paramNum === 'undefined') {
                    // put the value on the end of the array
                    obj[paramName].push(paramValue);
                }
                // if array index number specified...
                else {
                    // put the value at that index number
                    obj[paramName][paramNum] = paramValue;
                }
            }
            // if param name doesn't exist yet, set it
            else {
                obj[paramName] = paramValue;
            }
        }
    }

    return obj;
}

function resultSort(sort) {
    var str = window.location.href;
    var exSort = getAllUrlParams().sort;
    if(exSort === 'undefined'){
        //neu khong co
        if(window.location.search.length){
            str += '?sort='+exSort;
        }else{
            str += '&sort='+exSort;
        }
    }else{
        //neu ma co
        str = str.replace("sort="+exSort, "sort="+sort);
    }
    window.location.href = str;
}

function replaceLink(s) {
    return s.replace(/&/g, "%26").replace(/:/g, "%3A").replace(/\//g, "%2F").replace(/=/g, "%3D");
}
function callShareFb(link) {
    var childWindow;
    $link = 'https://www.facebook.com/sharer.php?u='+replaceLink(link);
    var left = (screen.width/2)-(600/2);
    var top = (screen.height/2)-(400/2);
    childWindow = window.open($link, 'child', "width=600, height=400, top="+top+", left="+left+", location=no, menubar=no, scrollbars=no, status=no, toolbar=no");
}
function callShareGl(link) {
    var childWindow;
    $link = 'https://plus.google.com/share?url='+replaceLink(link);
    var left = (screen.width/2)-(600/2);
    var top = (screen.height/2)-(400/2);
    childWindow = window.open($link, 'child', "width=600, height=400, top="+top+", left="+left+", location=no, menubar=no, scrollbars=no, status=no, toolbar=no");
}
function callSharePt(link) {
    var childWindow;
    $link = 'https://www.pinterest.com/pin/create/button/?url='+replaceLink(link);
    var left = (screen.width/2)-(600/2);
    var top = (screen.height/2)-(400/2);
    childWindow = window.open($link, 'child', "width=600, height=400, top="+top+", left="+left+", location=no, menubar=no, scrollbars=no, status=no, toolbar=no");
}
function reportPost(type,id) {
    $('body').loading();
    switch (type){
        case 1://khong phai du an
            //break;
        case 2://khong lien quan den noi that
            //break;
        case 3://co tinh, y dinh spam
            $.ajax({
                url: '/report/report',
                type: 'post',
                data: {
                    'type': type,
                    'post': id
                },
                //processData: false,
                //contentType: false,
                success: function (data) {
                    if (data === '0') {
                        alert('Lỗi: like bị lỗi');
                    } else if (data === '-1') {
                        alert('Lỗi: Chưa đăng nhập');
                    } else{
                        $('#modal-ReportThank').modal({
                            show: true,
                            backdrop: 'static'
                        });
                    }
                }
            });
            $('body').loading('stop');
            break;
        case 4://lay cap ban quyen cua nguoi khac
            $('body').loading('stop');
            $.ajax({
                url: '/report/ajax-get-info-customer',
                type: 'post',
                /*data: {
                    'type': type,
                    'post': id
                },*/
                //processData: false,
                //contentType: false,
                success: function (data) {
                    if (data === '-1') {
                        alert('Lỗi: Chưa đăng nhập');
                    } else{
                        const json = JSON.parse(data);
                        $('#modal-ReportImportant').modal({
                            show: true,
                            backdrop: 'static'
                        }).find('#form-report-info').attr('action','/report/report-info?type='+type+'&post='+id);
                        //$('body').find('#reportform-verifycode-image').click();
                        $('body').find('#report-id-phone').val(json.phone);
                        $('body').find('#report-id-email').val(json.email);
                        $('body').find('#report-id-name').val(json.full_name);
                    }
                }
            });
            break;
    }
    $('body').loading('stop');
}

function reportComment(type,id) {
    $('body').loading();
    $.ajax({
        url: '/report/report-comment',
        type: 'post',
        data: {
            'type': type,
            'post': id
        },
        //processData: false,
        //contentType: false,
        success: function (data) {
            if (data === '0') {
                alert('Lỗi: like bị lỗi');
            } else if (data === '-1') {
                alert('Lỗi: Chưa đăng nhập');
            } else {
                $('#modal-ReportThank').modal({
                    show: true,
                    backdrop: 'static'
                });
            }
        }
    });
    $('body').loading('stop');
}

$(function ($) {'use strict';
    $('[data-toggle="tooltip"]').tooltip();
    initTextarea();
    loadNumberCart();
    $('body').on('click','.kt-cbx-label',function () {
        var $id = $(this).attr('for');
        var $nameID = $(this).attr('data-no');
        if($('#'+$id).is(":checked")){
            $(this).children('i').removeClass('kt-square-o');
            //console.log('un check');
            //console.log($('input#'+$id).val());
            catChuoiNumber('input[name='+$nameID+']',$('input#'+$id).val());
        }else{
            $(this).children('i').addClass('kt-square-o');
            //console.log('check');
            //console.log($('input#'+$id).val());
            catChuoiNumber('input[name='+$nameID+']',$('input#'+$id).val());
        }
        //$('.ajaxLinkLoad').attr('href','https://www.kientruc.com/du-an-moi'+getInfoParam());
        //$('.ajaxLinkLoad').click();
        $('.submitBoLoc').submit();

    })
});
