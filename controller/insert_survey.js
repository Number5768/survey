$(document).on('click', '#send_survey', (e) => {
    e.stopImmediatePropagation();

    var Full_name = $('#Full_name').val();
    var Relationship = $('#Relationship').val();
    var data_start = $('#data_start').val();
    var Tel = $('#Tel').val();
    var p1 = $('input:radio[name = p1]:checked').val();
    var p2 = $('input:radio[name = p2]:checked').val();
    var p3 = $('input:radio[name = p3]:checked').val();
    var p4 = $('input:radio[name = p4]:checked').val();
    var p5 = $('input:radio[name = p5]:checked').val();
    var p6 = $('input:radio[name = p6]:checked').val();
    var p7 = $('input:radio[name = p7]:checked').val();
    var p8 = $('input:radio[name = p8]:checked').val();
    var p9 = $('input:radio[name = p9]:checked').val();
    var Suggestion = $('#Suggestion').val();

    if (Full_name == '' || Relationship == '' || Tel == '' || p1 == '' || p2 == '' || p3 == '' || p4 == '' || p5 == '' || p6 == '' || p7 == '' || p8 == '' || p9 == '') {
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
        url: '../survey/action/action_survey.php?op=insert_survey',
        data: {
            Full_name: Full_name,
            Relationship: Relationship,
            Tel: Tel,
            data_start: data_start,
            p1: p1,
            p2: p2,
            p3: p3,
            p4: p4,
            p5: p5,
            p6: p6,
            p7: p7,
            p8: p8,
            p9: p9,
            Suggestion: Suggestion
        },
        cache: false,
        success: function (data) {
            if (data == 1) {
                swal({
                    title: "บันทึกข้อมูลสำเร็จ",
                    text: "Successfully saved data",
                    icon: "success",
                    button: false,
                    timer: 2000,
                });
                clear();
            } else {
                swal({
                    title: "เกิดข้อผิดพลาด",
                    text: "Something went wrong",
                    icon: "error",
                    button: false,
                    timer: 2000,
                });
            }
        },
    });
});

//ตรวจ 0-9 Tel
function chk_Number_Tel() {
    var lettersNumber = /^[0-9,-]+$/;
    var Tel = $('#Tel').val();
    if (!lettersNumber.test(Tel)) {
        $('#txt_chk_Num_Tel').html('กรุณากรอก ตัวเลข 0-9 เท่านั้น!!!');
        $('#txt_chk_Num_Tel').css('color', 'red');

        $('#Tel').focus();
        $('#Tel').select();
        return false;
    }
    $('#txt_chk_Num_Tel').html('');
}



//กำหนดรูปแบบในนี้ _-____-_____-_-__
function autoTab2(obj, typeCheck) {
    if (typeCheck == 1) {
        var pattern = new String('_-____-_____-_-__'); // กำหนดรูปแบบในนี้
        var pattern_ex = new String('-'); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
    } else {
        var pattern = new String('__-____-____'); // กำหนดรูปแบบในนี้
        var pattern_ex = new String('-'); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
    }
    var returnText = new String('');
    var obj_l = obj.value.length;
    var obj_l2 = obj_l - 1;

    for (i = 0; i < pattern.length; i++) {
        if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
            returnText += obj.value + pattern_ex;
            obj.value = returnText;
        }
    }
    if (obj_l >= pattern.length) {
        obj.value = obj.value.substr(0, pattern.length);
    }
}


clear = () => {
    $('#Full_name').val('');
    $('#Relationship').val('');
    $('#Tel').val('');
    $('#data_start').val('');
    $('#Suggestion').val('');
    $('input:radio[name = p1]:checked').prop('checked', false);
    $('input:radio[name = p2]:checked').prop('checked', false);
    $('input:radio[name = p3]:checked').prop('checked', false);
    $('input:radio[name = p4]:checked').prop('checked', false);
    $('input:radio[name = p5]:checked').prop('checked', false);
    $('input:radio[name = p6]:checked').prop('checked', false);
    $('input:radio[name = p7]:checked').prop('checked', false);
    $('input:radio[name = p8]:checked').prop('checked', false);
    $('input:radio[name = p9]:checked').prop('checked', false);
}