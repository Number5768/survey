<?php

require '../config/function.php';

$op = $_GET['op'];

if ($op == 'insert_survey') {
    insert_survey();
} else {
}


function insert_survey()
{
    $Full_name = $_GET['Full_name'];
    $Relationship = $_GET['Relationship'];
    $Tel = $_GET['Tel'];
    $data_start = $_GET['data_start'];
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    $p3 = $_GET['p3'];
    $p4 = $_GET['p4'];
    $p5 = $_GET['p5'];
    $p6 = $_GET['p6'];
    $p7 = $_GET['p7'];
    $p8 = $_GET['p8'];
    $p9 = $_GET['p9'];
    $Suggestion = $_GET['Suggestion'];

    $data = insert(
        "survey_data",
        "Full_name,Relationship,data_start,Tel,p1,p2,p3,p4,p5,p6,p7,p8,p9,Suggestion",
        "'$Full_name','$Relationship','$data_start','$Tel','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$Suggestion'"
    );
    echo $data;
}
