/**
 * Created by User on 5/4/2018.
 */

function joinFriendProject() {
    var cus         = $('body').find('#dangkiktsstep02-id_category_team-01').val();
    var cus_txt     = $('body').find('#dangkiktsstep02-id_category_team-01').children("option[value='"+cus+"']").first().text();
    var cate        = $('body').find('#dangkiktsstep02-id_category_team-02').val();
    var cate_txt    = $('body').find('#dangkiktsstep02-id_category_team-02').children("option[value='"+cate+"']").first().text();
    var str = '<div class="">' +
        '<div class="col-md-4 text-right" style="padding-top: 7px;padding-bottom: 7px;">'+cus_txt+'</div>' +
        '<div class="col-md-4 text-left" style="padding-top: 7px;padding-bottom: 7px;">'+cate_txt+'</div>' +
        '<div class="col-md-4 text-left">' +
        '<input type="hidden" name="DangKiKtsStep02[input_team][]" value="'+cus+':'+cate+'">' +
        '<button class="btn btn-link" type="button" onclick="javascript:deleteTeam(this)">Xóa</button>' +
        '</div>' +
        '</div>';
    $('body').find('#add-team').append(str);
    //console.log(cus_txt);
    //console.log(cate_txt);
}

function deleteTeam(el) {
    $(el).parent().parent().remove();
}

$(function ($) {'use strict';

    $('body').on('beforeSubmit','#them-du-an-moi-form', function (event, jqXHR, settings) {
        const form = $(this);

        if (form.find('.has-error').length) {
            return false;
        }

        if(countNumberImageUpload(form) < 4){
            alert('Bạn phải đăng ít nhất 4 hình ảnh cho dự án. Xin cảm ơn!');
            return false;
        }


        $('body').loading();

        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: form.serialize(),
            //data: new FormData(this),
            //processData: false,
            //contentType: false,
            success: function (data) {
                if(data === '0') {
                    alert('Lỗi: tạo dự án bị lỗi');
                }else if(data === '-1') {
                    alert('Lỗi: Chưa đăng nhập');
                }else if(data === '-2') {
                    alert('Lỗi: Hình ảnh phải ít nhất 1 ảnh');
                }else {
                    const json = JSON.parse(data);
                    $('#input-imageFiles').attr("data-id",json.id);
                    $('#input-imageFiles').attr("data-src",json.src);
                    $('#input-imageFiles').attr("data-alt",json.alt);

                    $("#input-imageFiles").fileinput('upload');
                    $('#input-imageFiles').on('filebatchuploadcomplete', function(event, data, previewId, index) {
                        window.location.href = json.link;
                    });
                }
            }
        });


        return false;
    });

});
