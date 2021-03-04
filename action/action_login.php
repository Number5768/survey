<?php

require '../config/function.php';

$op = $_GET['op'];

if ($op == 'login') {
    login();
} else {
}


function login()
{
    $user_id = $_GET['user_id'];
    $pwd = $_GET['pwd'];

    $ckshow =  select(
        "login",
        "WHERE user_id = '$user_id' and pwd = '$pwd'"
    );
    $array = json_encode($ckshow);
    echo $array;
}
