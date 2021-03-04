<?php

require '../config/function.php';

$op = $_GET['op'];

if ($op == 'num_data') {
    num_data();
} else if ($op == 'JQKnob') {
    JQKnob();
} else {
}


function num_data()
{
    $data_people = num_rows(
        "survey_data",
        ""
    );

    $Suggestion = num_rows(
        "survey_data",
        "WHERE Suggestion != '' AND Suggestion != '-'"
    );


    $arraySum['id'] = $data_people;
    $arraySum['Suggestion'] = $Suggestion;
    echo json_encode($arraySum);
}


function JQKnob()
{

    $p1 = num_rows(
        "survey_data",
        ""
    );
    $p1_max = num_rows(
        "survey_data",
        "where p1 = '1'"
    );
    $p1_medium = num_rows(
        "survey_data",
        "where p1 = '2'"
    );
    $p1_min = num_rows(
        "survey_data",
        "where p1 = '3'"
    );
    $p1_id = num_rows(
        "survey_data",
        ""
    );

    $p2 = num_rows(
        "survey_data",
        ""
    );
    $p2_max = num_rows(
        "survey_data",
        "where p2 = '1'"
    );
    $p2_medium = num_rows(
        "survey_data",
        "where p2 = '2'"
    );
    $p2_min = num_rows(
        "survey_data",
        "where p2 = '3'"
    );
    $p2_id = num_rows(
        "survey_data",
        ""
    );

    $p3 = num_rows(
        "survey_data",
        ""
    );
    $p3_max = num_rows(
        "survey_data",
        "where p3 = '1'"
    );
    $p3_medium = num_rows(
        "survey_data",
        "where p3 = '2'"
    );
    $p3_min = num_rows(
        "survey_data",
        "where p3 = '3'"
    );
    $p3_id = num_rows(
        "survey_data",
        ""
    );

    $p4 = num_rows(
        "survey_data",
        ""
    );
    $p4_max = num_rows(
        "survey_data",
        "where p4 = '1'"
    );
    $p4_medium = num_rows(
        "survey_data",
        "where p4 = '2'"
    );
    $p4_min = num_rows(
        "survey_data",
        "where p4 = '3'"
    );
    $p4_id = num_rows(
        "survey_data",
        ""
    );

    $p5 = num_rows(
        "survey_data",
        ""
    );
    $p5_max = num_rows(
        "survey_data",
        "where p5 = '1'"
    );
    $p5_medium = num_rows(
        "survey_data",
        "where p5 = '2'"
    );
    $p5_min = num_rows(
        "survey_data",
        "where p5 = '3'"
    );
    $p5_id = num_rows(
        "survey_data",
        ""
    );

    $p6 = num_rows(
        "survey_data",
        ""
    );
    $p6_max = num_rows(
        "survey_data",
        "where p6 = '1'"
    );
    $p6_medium = num_rows(
        "survey_data",
        "where p6 = '2'"
    );
    $p6_min = num_rows(
        "survey_data",
        "where p6 = '3'"
    );
    $p6_id = num_rows(
        "survey_data",
        ""
    );

    $p7 = num_rows(
        "survey_data",
        ""
    );
    $p7_max = num_rows(
        "survey_data",
        "where p7 = '1'"
    );
    $p7_medium = num_rows(
        "survey_data",
        "where p7 = '2'"
    );
    $p7_min = num_rows(
        "survey_data",
        "where p7 = '3'"
    );
    $p7_id = num_rows(
        "survey_data",
        ""
    );

    $p8 = num_rows(
        "survey_data",
        ""
    );
    $p8_max = num_rows(
        "survey_data",
        "where p8 = '1'"
    );
    $p8_medium = num_rows(
        "survey_data",
        "where p8 = '2'"
    );
    $p8_min = num_rows(
        "survey_data",
        "where p8 = '3'"
    );
    $p8_id = num_rows(
        "survey_data",
        ""
    );

    $p9 = num_rows(
        "survey_data",
        ""
    );
    $p9_max = num_rows(
        "survey_data",
        "where p9 = '1'"
    );
    $p9_medium = num_rows(
        "survey_data",
        "where p9 = '2'"
    );
    $p9_min = num_rows(
        "survey_data",
        "where p9 = '3'"
    );
    $p9_id = num_rows(
        "survey_data",
        ""
    );


    $Suggestion = num_rows(
        "survey_data",
        ""
    );
    $Suggestion_id = num_rows(
        "survey_data",
        ""
    );



    $arraySum['p1'] = $p1;
    $arraySum['p1_max'] = $p1_max;
    $arraySum['p1_medium'] = $p1_medium;
    $arraySum['p1_min'] = $p1_min;
    $arraySum['p1_id'] = $p1_id;

    $arraySum['p2'] = $p2;
    $arraySum['p2_max'] = $p2_max;
    $arraySum['p2_medium'] = $p2_medium;
    $arraySum['p2_min'] = $p2_min;
    $arraySum['p2_id'] = $p2_id;

    $arraySum['p3'] = $p3;
    $arraySum['p3_max'] = $p3_max;
    $arraySum['p3_medium'] = $p3_medium;
    $arraySum['p3_min'] = $p3_min;
    $arraySum['p3_id'] = $p3_id;

    $arraySum['p4'] = $p4;
    $arraySum['p4_max'] = $p4_max;
    $arraySum['p4_medium'] = $p4_medium;
    $arraySum['p4_min'] = $p4_min;
    $arraySum['p4_id'] = $p4_id;

    $arraySum['p5'] = $p5;
    $arraySum['p5_max'] = $p5_max;
    $arraySum['p5_medium'] = $p5_medium;
    $arraySum['p5_min'] = $p5_min;
    $arraySum['p5_id'] = $p5_id;

    $arraySum['p6'] = $p6;
    $arraySum['p6_max'] = $p6_max;
    $arraySum['p6_medium'] = $p6_medium;
    $arraySum['p6_min'] = $p6_min;
    $arraySum['p6_id'] = $p6_id;

    $arraySum['p7'] = $p7;
    $arraySum['p7_max'] = $p7_max;
    $arraySum['p7_medium'] = $p7_medium;
    $arraySum['p7_min'] = $p7_min;
    $arraySum['p7_id'] = $p7_id;

    $arraySum['p8'] = $p8;
    $arraySum['p8_max'] = $p8_max;
    $arraySum['p8_medium'] = $p8_medium;
    $arraySum['p8_min'] = $p8_min;
    $arraySum['p8_id'] = $p8_id;

    $arraySum['p9'] = $p9;
    $arraySum['p9_max'] = $p9_max;
    $arraySum['p9_medium'] = $p9_medium;
    $arraySum['p9_min'] = $p9_min;
    $arraySum['p9_id'] = $p9_id;

    $arraySum['Suggestion'] = $Suggestion;
    $arraySum['Suggestion_id'] = $Suggestion_id;

    echo json_encode($arraySum);
}
