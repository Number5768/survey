$(document).ready(function () {
    chart();
    var F_name = sessionStorage.getItem('F_name');
    var L_name = sessionStorage.getItem('L_name');
    $('.F_name').html(F_name);
    $('.L_name').html(L_name);

    if (sessionStorage.length == 0) {
        window.location = 'http://localhost/survey';
    }
})

$(document).on('click', '.divMenu', function () {
    var link = $(this).attr('attr_link');
    $.ajax({
        url: '../src/' + link,
        cache: false,
        success: function (data) {
            $('#showContent').html(data);
        },
    });
});

//CHART
function chart() {
    $.ajax({
        url: '../src/chart.php',
        cache: false,
        success: function (data) {
            $('#showContent').html(data);
        },
    });
}


$(document).on('click', '.nav-item-box .nav-link-box', function (e) {
    e.stopImmediatePropagation();

    var status = $(this).attr('status');
    if (!$('#nav-item-box-' + status).hasClass('menu-open')) {
        $('.nav-item-box').removeClass('menu-open');
        $('#nav-item-box-' + status).addClass('menu-open');
        $('.nav-treeview-box').slideUp();
        $('.menu-open .nav-treeview-box').slideDown();
    } else if ($('#nav-item-box-' + status).hasClass('menu-open')) {
        $('.nav-item-box').removeClass('menu-open');
        $('#nav-item-box-' + status).removeClass('menu-open');
        $('.nav-treeview-box').slideUp();
    }
});

function logout() {
    swal({
        title: "ออกจากระบบสำเร็จ",
        text: "Successfully Logged Out.",
        icon: "success",
        button: false,
        timer: 2000,
    });
    sessionStorage.clear();
    setTimeout(function () {
        window.location = 'http://localhost/survey';
    }, 2000);

}