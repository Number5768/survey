$(document).ready(function () {
    //ต้องการเรียกใช้ function เมื่อมีการเรียกใช้ Js
    sumrow();
    all();
});

//Chart Meter And User
function sumrow() {
    $.ajax({
        url: '../action/action_num.php?op=num_data',
        type: 'get',
        cache: false,
        success: function (data) {
            var sum = JSON.parse(data);
            $('#data_people').html(sum.id);
            $('#Suggestion').html(sum.Suggestion);
        },
    });
}

//JQUERY KNOB
function all() {
    $.ajax({
        url: '../action/action_num.php?op=JQKnob',
        type: 'get',
        cache: false,
        success: function (data) {
            var Knob = JSON.parse(data);
            $('#p1').val(Knob.p1);
            $('#p1_max').val(Knob.p1_max);
            $('#p1_medium').val(Knob.p1_medium);
            $('#p1_min').val(Knob.p1_min);

            $('#p2').val(Knob.p2);
            $('#p2_max').val(Knob.p2_max);
            $('#p2_medium').val(Knob.p2_medium);
            $('#p2_min').val(Knob.p2_min);

            $('#p3').val(Knob.p3);
            $('#p3_max').val(Knob.p3_max);
            $('#p3_medium').val(Knob.p3_medium);
            $('#p3_min').val(Knob.p3_min);

            $('#p4').val(Knob.p4);
            $('#p4_max').val(Knob.p4_max);
            $('#p4_medium').val(Knob.p4_medium);
            $('#p4_min').val(Knob.p4_min);

            $('#p5').val(Knob.p5);
            $('#p5_max').val(Knob.p5_max);
            $('#p5_medium').val(Knob.p5_medium);
            $('#p5_min').val(Knob.p5_min);

            $('#p6').val(Knob.p6);
            $('#p6_max').val(Knob.p6_max);
            $('#p6_medium').val(Knob.p6_medium);
            $('#p6_min').val(Knob.p6_min);

            $('#p7').val(Knob.p7);
            $('#p7_max').val(Knob.p7_max);
            $('#p7_medium').val(Knob.p7_medium);
            $('#p7_min').val(Knob.p7_min);

            $('#p8').val(Knob.p8);
            $('#p8_max').val(Knob.p8_max);
            $('#p8_medium').val(Knob.p8_medium);
            $('#p8_min').val(Knob.p8_min);

            $('#p9').val(Knob.p9);
            $('#p9_max').val(Knob.p9_max);
            $('#p9_medium').val(Knob.p9_medium);
            $('#p9_min').val(Knob.p9_min);

            $('#Suggestion').val(Knob.Suggestion);

            //datamax
            $('#p1').attr('data-max', Knob.p1_id);
            $('#p1_max').attr('data-max', Knob.p1_id);
            $('#p1_medium').attr('data-max', Knob.p1_id);
            $('#p1_min').attr('data-max', Knob.p1_id);

            $('#p2').attr('data-max', Knob.p2_id);
            $('#p2_max').attr('data-max', Knob.p2_id);
            $('#p2_medium').attr('data-max', Knob.p2_id);
            $('#p2_min').attr('data-max', Knob.p2_id);

            $('#p3').attr('data-max', Knob.p3_id);
            $('#p3_max').attr('data-max', Knob.p3_id);
            $('#p3_medium').attr('data-max', Knob.p3_id);
            $('#p3_min').attr('data-max', Knob.p3_id);

            $('#p4').attr('data-max', Knob.p4_id);
            $('#p4_max').attr('data-max', Knob.p4_id);
            $('#p4_medium').attr('data-max', Knob.p4_id);
            $('#p4_min').attr('data-max', Knob.p4_id);

            $('#p5').attr('data-max', Knob.p5_id);
            $('#p5_max').attr('data-max', Knob.p5_id);
            $('#p5_medium').attr('data-max', Knob.p5_id);
            $('#p5_min').attr('data-max', Knob.p5_id);

            $('#p6').attr('data-max', Knob.p6_id);
            $('#p6_max').attr('data-max', Knob.p6_id);
            $('#p6_medium').attr('data-max', Knob.p6_id);
            $('#p6_min').attr('data-max', Knob.p6_id);

            $('#p7').attr('data-max', Knob.p7_id);
            $('#p7_max').attr('data-max', Knob.p7_id);
            $('#p7_medium').attr('data-max', Knob.p7_id);
            $('#p7_min').attr('data-max', Knob.p7_id);

            $('#p8').attr('data-max', Knob.p8_id);
            $('#p8_max').attr('data-max', Knob.p8_id);
            $('#p8_medium').attr('data-max', Knob.p8_id);
            $('#p8_min').attr('data-max', Knob.p8_id);

            $('#p9').attr('data-max', Knob.p9_id);
            $('#p9_max').attr('data-max', Knob.p9_id);
            $('#p9_medium').attr('data-max', Knob.p9_id);
            $('#p9_min').attr('data-max', Knob.p9_id);
            // $('#Suggestion_id').attr('data-max', Knob.Suggestion_id);
            jQueryKnob();
        },
    });
}

function jQueryKnob() {
    $('.knob').knob({
        draw: function () {
            // "tron" case
            if (this.$.data('skin') == 'tron') {
                var a = this.angle(this.cv), // Angle
                    sa = this.startAngle, // Previous start angle
                    sat = this.startAngle, // Start angle
                    ea, // Previous end angle
                    eat = sat + a, // End angle
                    r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor && (sat = eat - 0.3) && (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor && (sa = ea - 0.3) && (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(
                    this.xy,
                    this.xy,
                    this.radius - this.lineWidth + 1 + (this.lineWidth * 2) / 3,
                    0,
                    2 * Math.PI,
                    false
                );
                this.g.stroke();

                return false;
            }
        },
    });
} 