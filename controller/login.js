$(document).ready(function () {
    $('.limiter').on('submit', () => {
        return false;
    });
    $('.limiter').keypress((e) => {
        if (e.which === 13) {
            $('.limiter').submit();
            login();
        }
    });
});
$(document).on('click', '#login_user', function (e) {
    e.stopImmediatePropagation();
    login();
});

//login
function login() {
    var user_id = $('#user_id').val();
    var pwd = $('#pwd').val();

    if (user_id == '' || pwd == '') {
        swal({
            title: "กรุณากรอกข้อมูลให้ครบด้วยครับ!",
            text: "Please fill out all information!",
            icon: "warning",
            button: false,
            timer: 2300,
        });
        return false;
    }
    $.ajax({
        url: '../survey/action/action_login.php?op=login',
        type: 'get',
        data: {
            user_id: user_id,
            pwd: pwd,
        },
        success: function (data) {
            if (data != 'null') {
                var status = JSON.parse(data);
                swal({
                    title: "เข้าสู่ระบบสำเร็จ",
                    text: "Login Successfully",
                    icon: "success",
                    button: false,
                    timer: 2000,
                });
                sessionStorage.setItem('F_name', status['F_name']);
                sessionStorage.setItem('L_name', status['L_name']);
                setTimeout(function () {
                    window.location = 'http://localhost/survey/src';
                }, 1500);
            } else {
                swal({
                    title: "Username หรือ Password",
                    text: "ไม่ถูกต้อง !!!",
                    icon: "error",
                    button: false,
                    timer: 2000,
                });
            }
        },
    });
}
