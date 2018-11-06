/**
 * Created by vietv on 4/21/2018.
 */

let check_required = function (id) {

    let tag = $('#' + id);

    if (tag.val() === '' || tag.val() === '0') {
        tag.css('border', '1px solid #da3535');
        return 1;
    }
    else {
        tag.css('border', '1px solid #ccc');
        return 0;
    }
};

let change_password = function () {
    let error = 0;

    error += check_required('password');
    error += check_required('new-password');
    error += check_required('re-password');

    if (error === 0) {
        $('#loader').css('display', 'block');

        let password_old = $('#password').val();
        let password = $('#new-password').val();
        let re_password = $('#re-password').val();

        let data = {};

        if (password_old)
            data.password_old = password_old;

        if (password) {
            data.password = password;
        }

        if (re_password) {
            data.re_password = re_password;
        }

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url:'/ajax/change-password',
            data: data,
            error: function () {
            },
            success: function (response) {
                $('#loader').css('display', 'none');

                if (response === true) {
                    alert('Cập nhật thành công');
                }
                else {
                    alert(response);
                }
            }
        });
    }
    else {
        alert('Yêu cầu nhập đầy đủ thông tin.');
    }
};