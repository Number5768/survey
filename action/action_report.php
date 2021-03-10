<?php

require '../config/function.php';

// ตัวแปรที่รับมาจาก in_meterJs
$op = $_GET['op'];


if ($op == 'tables_survey') {
    tables_survey();
} else if ($op == 'Bar_Chart') {
    Bar_Chart();
} else {
}

function tables_survey()
{
    global $conn;
    $sql = "SELECT
    survey_data.Full_name,
    survey_data.Relationship,
    survey_data.Tel,
    survey_data.data_start,
    survey_data.p1,
    survey_data.p2,
    survey_data.p3,
    survey_data.p4,
    survey_data.p5,
    survey_data.p6,
    survey_data.p7,
    survey_data.p8,
    survey_data.p9,
    survey_data.Suggestion
	FROM survey_data";
    //  echo $sql; die;
    $dbquery = $conn->query($sql);
    $rows = array();
    $number = 1;
    while ($result = mysqli_fetch_array($dbquery)) {

        if ($result['p1'] == 1) {
            $result['p1'] = 'มาก';
            $result['p2'] = 'มาก';
            $result['p3'] = 'มาก';
            $result['p4'] = 'มาก';
            $result['p5'] = 'มาก';
            $result['p6'] = 'มาก';
            $result['p7'] = 'มาก';
            $result['p8'] = 'มาก';
            $result['p9'] = 'มาก';
        } else if ($result['p1'] == 2) {
            $result['p1'] = 'ปานกลาง';
            $result['p2'] = 'ปานกลาง';
            $result['p3'] = 'ปานกลาง';
            $result['p4'] = 'ปานกลาง';
            $result['p5'] = 'ปานกลาง';
            $result['p6'] = 'ปานกลาง';
            $result['p7'] = 'ปานกลาง';
            $result['p8'] = 'ปานกลาง';
            $result['p9'] = 'ปานกลาง';
        } else if ($result['p1'] == 3) {
            $result['p1'] = 'น้อย';
            $result['p2'] = 'น้อย';
            $result['p3'] = 'น้อย';
            $result['p4'] = 'น้อย';
            $result['p5'] = 'น้อย';
            $result['p6'] = 'น้อย';
            $result['p7'] = 'น้อย';
            $result['p8'] = 'น้อย';
            $result['p9'] = 'น้อย';
        }

        $result['data_start'] = date("d/m/Y", strtotime($result['data_start']));
        $result['number'] = $number;
        $number++;
        $rows[] = $result;
    }

    //เปลีย่นจาก php => json
    $array = json_encode($rows);
    echo ($array);
}

function Bar_Chart()
{
    global $conn;
    $sql = "SELECT 
    (SELECT COUNT(p1) FROM survey_data WHERE p1 = '1') AS p1_max,
    (SELECT COUNT(p1) FROM survey_data WHERE p1 = '2') AS p1_medium,
    (SELECT COUNT(p1) FROM survey_data WHERE p1 = '3') AS p1_min,
    (SELECT COUNT(p2) FROM survey_data WHERE p2 = '1') AS p2_max,
    (SELECT COUNT(p2) FROM survey_data WHERE p2 = '2') AS p2_medium,
    (SELECT COUNT(p2) FROM survey_data WHERE p2 = '3') AS p2_min,
    (SELECT COUNT(p3) FROM survey_data WHERE p3 = '1') AS p3_max,
    (SELECT COUNT(p3) FROM survey_data WHERE p3 = '2') AS p3_medium,
    (SELECT COUNT(p3) FROM survey_data WHERE p3 = '3') AS p3_min, 
    (SELECT COUNT(p4) FROM survey_data WHERE p4 = '1') AS p4_max,
    (SELECT COUNT(p4) FROM survey_data WHERE p4 = '2') AS p4_medium,
    (SELECT COUNT(p4) FROM survey_data WHERE p4 = '3') AS p4_min, 
    (SELECT COUNT(p5) FROM survey_data WHERE p5 = '1') AS p5_max,
    (SELECT COUNT(p5) FROM survey_data WHERE p5 = '2') AS p5_medium,
    (SELECT COUNT(p5) FROM survey_data WHERE p5 = '3') AS p5_min, 
    (SELECT COUNT(p6) FROM survey_data WHERE p6 = '1') AS p6_max,
    (SELECT COUNT(p6) FROM survey_data WHERE p6 = '2') AS p6_medium,
    (SELECT COUNT(p6) FROM survey_data WHERE p6 = '3') AS p6_min, 
    (SELECT COUNT(p7) FROM survey_data WHERE p7 = '1') AS p7_max,
    (SELECT COUNT(p7) FROM survey_data WHERE p7 = '2') AS p7_medium,
    (SELECT COUNT(p7) FROM survey_data WHERE p7 = '3') AS p7_min, 
    (SELECT COUNT(p8) FROM survey_data WHERE p8 = '1') AS p8_max,
    (SELECT COUNT(p8) FROM survey_data WHERE p8 = '2') AS p8_medium,
    (SELECT COUNT(p8) FROM survey_data WHERE p8 = '3') AS p8_min, 
    (SELECT COUNT(p9) FROM survey_data WHERE p9 = '1') AS p9_max,
    (SELECT COUNT(p9) FROM survey_data WHERE p9 = '2') AS p9_medium,
    (SELECT COUNT(p9) FROM survey_data WHERE p9 = '3') AS p9_min 
    FROM survey_data LIMIT 1";
    //  echo $sql; die;
    $dbquery = $conn->query($sql);
    $result = mysqli_fetch_array($dbquery);
    // $array = json_encode($result);

    $Bar_Chart1 = [];
    $Bar_Chart2 = [];
    $Bar_Chart3 = [];
    
    $show_report_detail['y'] = intval($result['p1_max']);
    $show_report_detail['label'] = "ข้อที่1";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p2_max']);
    $show_report_detail['label'] = "ข้อที่2";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p3_max']);
    $show_report_detail['label'] = "ข้อที่3";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p4_max']);
    $show_report_detail['label'] = "ข้อที่4";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p5_max']);
    $show_report_detail['label'] = "ข้อที่5";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p6_max']);
    $show_report_detail['label'] = "ข้อที่6";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p7_max']);
    $show_report_detail['label'] = "ข้อที่7";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p8_max']);
    $show_report_detail['label'] = "ข้อที่8";
    array_push($Bar_Chart1, $show_report_detail);
    $show_report_detail['y'] = intval($result['p9_max']);
    $show_report_detail['label'] = "ข้อที่9";
    array_push($Bar_Chart1, $show_report_detail);
    
    $show_report_detail['y'] = intval($result['p1_medium']);
    $show_report_detail['label'] = "ข้อที่1";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p2_medium']);
    $show_report_detail['label'] = "ข้อที่2";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p3_medium']);
    $show_report_detail['label'] = "ข้อที่3";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p4_medium']);
    $show_report_detail['label'] = "ข้อที่4";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p5_medium']);
    $show_report_detail['label'] = "ข้อที่5";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p6_medium']);
    $show_report_detail['label'] = "ข้อที่6";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p7_medium']);
    $show_report_detail['label'] = "ข้อที่7";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p8_medium']);
    $show_report_detail['label'] = "ข้อที่8";
    array_push($Bar_Chart2, $show_report_detail);
    $show_report_detail['y'] = intval($result['p9_medium']);
    $show_report_detail['label'] = "ข้อที่9";
    array_push($Bar_Chart2, $show_report_detail);
    
    $show_report_detail['y'] = intval($result['p1_min']);
    $show_report_detail['label'] = "ข้อที่1";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p2_min']);
    $show_report_detail['label'] = "ข้อที่2";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p3_min']);
    $show_report_detail['label'] = "ข้อที่3";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p4_min']);
    $show_report_detail['label'] = "ข้อที่4";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p5_min']);
    $show_report_detail['label'] = "ข้อที่5";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p6_min']);
    $show_report_detail['label'] = "ข้อที่6";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p7_min']);
    $show_report_detail['label'] = "ข้อที่7";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p8_min']);
    $show_report_detail['label'] = "ข้อที่8";
    array_push($Bar_Chart3, $show_report_detail);
    $show_report_detail['y'] = intval($result['p9_min']);
    $show_report_detail['label'] = "ข้อที่9";
    array_push($Bar_Chart3, $show_report_detail);

    $Bar_Chart_show = [];
    array_push($Bar_Chart_show, $Bar_Chart1,$Bar_Chart2,$Bar_Chart3,);
    echo json_encode($Bar_Chart_show);
    
}
