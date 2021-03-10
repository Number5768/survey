$(document).ready(function () {
    showtables_survey();
    BarChart();
});

//เรียกใช้ functionตาราง
function showtables_survey() {
    $.ajax({
        url: '../action/action_report.php?op=tables_survey',
        type: 'get',
        cache: false,
        success: function (data) {
            var dataSet = JSON.parse(data);
            showDataSet(dataSet);
        },
    });
}

//แสดงตาราง
function showDataSet(dataSet) {
    if (dataSet == null) {
        dataSet = dataSet = null;
    } else if ($.fn.DataTable.isDataTable('#tables_survey')) {
        viewShowDetailRefer.destroy();
        $('#tables_survey').empty();
    }

    viewShowDetailRefer = $('#tables_survey').DataTable({
        pageLength: 10,
        lengthMenu: [10, 20, 50, 100, 200, 500, 1000],
        language: {
            processing: 'กำลังประมวลผล...',
            loadingRecords: 'Loading...',
            lengthMenu: 'แสดง _MENU_ รายการ',
            search: 'ค้นหา :',
            zeroRecords: "<font color='red'><center>ไม่พบข้อมูลที่คุณต้องการ ค้นหา</center></font>",
            info: 'แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ',
            infoEmpty: 'แสดง 0 ถึง 0 จากทั้งหมด 0 รายการ',
            infoFiltered: '(ค้นหา จากทั้งหมด _MAX_ รายการ)',
            paginate: {
                first: 'หน้าแรก',
                last: 'หน้าสุดท้าย',
                next: 'ถัดไป',
                previous: 'ก่อนหน้า',
            },
        },
        data: dataSet,
        columns: [
            {
                mData: 'number',
                title: 'ลำดับ',
            },
            {
                mData: 'Full_name',
                title: 'ชื่อ-สกุล',
            },
            {
                mData: 'Relationship',
                title: 'ความสัมพันธ์กับผู้ป่วย',
            },
            {
                mData: 'Tel',
                title: 'เบอร์โทร',
            },
            {
                mData: 'data_start',
                title: 'วันที่มารับบริการ',
            },
            {
                mData: 'p1',
                title: 'ข้อที่ 1',
            },
            {
                mData: 'p2',
                title: 'ข้อที่ 2',
            },
            {
                mData: 'p3',
                title: 'ข้อที่ 3',
            },
            {
                mData: 'p4',
                title: 'ข้อที่ 4',
            },
            {
                mData: 'p5',
                title: 'ข้อที่ 5',
            },
            {
                mData: 'p6',
                title: 'ข้อที่ 6',
            },
            {
                mData: 'p7',
                title: 'ข้อที่ 7',
            },
            {
                mData: 'p8',
                title: 'ข้อที่ 8',
            },
            {
                mData: 'p9',
                title: 'ข้อที่ 9',
            },
            {
                mData: 'Suggestion',
                title: 'ข้อเสนอแนะ',
            },
        ],
    });
}
function BarChart() {
    $.ajax({
        url: '../action/action_report.php?op=Bar_Chart',
        type: 'get',
        cache: false,
        success: function (data) {
            // debugger;
            var BarChart = JSON.parse(data);
            var BarChart1 = BarChart[0];
            var BarChart2 = BarChart[1];
            var BarChart3 = BarChart[2];
            var chart = new CanvasJS.Chart("chartContainer",
                {
                    animationEnabled: true,
                    animationDuration: 2000,
                    height: 680,
                    width: 1600,
                    min: 0,
                    title: {
                        text: "แบบสำรวจวัดระดับความพึงพอใจ"
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: function (e) {
                            //console.log("legend click: " + e.dataPointIndex);
                            //console.log(e);
                            if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                e.dataSeries.visible = false;
                            } else {
                                e.dataSeries.visible = true;
                            }

                            e.chart.render();
                        }
                    },
                    data: [
                        {
                            type: "column",
                            indexLabel: "{y}",
                            indexLabelPlacement: "outside",
                            indexLabelOrientation: "horizontal",
                            cursor: "pointer",
                            showInLegend: true,
                            legendText: "มาก",
                            color: "#FF4500",
                            dataPoints: BarChart1
                        },
                        {
                            type: "column",
                            indexLabel: "{y}",
                            indexLabelPlacement: "outside",
                            indexLabelOrientation: "horizontal",
                            cursor: "pointer",
                            showInLegend: true,
                            legendText: "ปานกลาง",
                            color: "#FFA500",
                            dataPoints: BarChart2
                        },
                        {
                            type: "column",
                            indexLabel: "{y}",
                            indexLabelPlacement: "outside",
                            indexLabelOrientation: "horizontal",
                            cursor: "pointer",
                            showInLegend: true,
                            legendText: "น้อย",
                            color: "#F5DEB3",
                            dataPoints: BarChart3
                        },
                    ]
                });
            chart.render();
            $('.canvasjs-chart-credit').hide();
        },
    });
}