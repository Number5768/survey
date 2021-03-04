<?php

require '../config/function.php';

// ตัวแปรที่รับมาจาก in_meterJs
$op = $_GET['op'];


if ($op == 'tables_survey') {
    tables_survey();
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
