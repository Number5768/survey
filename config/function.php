<?php

require 'condb.php';


function insert($table, $field, $value)
{
    //เพิ่มข้อมูล
    //ดึงconnentdatabaseมาใช้
    global $conn;
    $sql = "insert into $table ($field) values ($value)";
    // echo $sql; die;
    $result = $conn->query($sql);
    return $result;
}

//แก้ไขข้อมูล
function update($table, $command, $condition)
{
    global $conn;
    $sql = "UPDATE $table SET $command $condition";
    // echo $sql; die;
    $result = $conn->query($sql);
    return $result;
}
//เลือกข้อมูล
function select($table, $condition)
{
    global $conn;
    $sql = "select * from $table $condition";
    // return $sql; die;
    $dbquery = $conn->query($sql);
    $result = mysqli_fetch_array($dbquery);
    return $result;
}

//เลือกหลายแถว
function selects($table, $condition)
{
    global $conn;
    $sql = "select * from $table $condition";
    // echo $sql; die;
    $dbquery = $conn->query($sql);
    $rows = array();
    while ($result = mysqli_fetch_array($dbquery)) {
        $rows[] = $result;
    }
    return $rows;
}

//ลบข้อมูล
function del($table, $condition)
{
    global $conn;
    $sql = "delete from $table $condition";
    // echo $sql; die;
    $result = $conn->query($sql);
    return $result;
}


function num_rows($table, $condition)
{
    global $conn;
    $sql = "select * from $table $condition";
    // return $sql;die;
    $dbquery = $conn->query($sql);
    $num_rows = $dbquery->num_rows;
    return $num_rows;
}

//random number
function random_password($len)
{
    srand((float)microtime() * 10000000);
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $ret_str = "";
    $num = strlen($chars);
    for ($i = 0; $i < $len; $i++) {
        $ret_str .= $chars[rand() % $num];
        $ret_str .= "";
    }
    return $ret_str;
}
function DThai_long($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    //$strHour= date("H",strtotime($strDate));
    //$strMinute= date("i",strtotime($strDate));
    //$strSeconds= date("s",strtotime($strDate));
    $strMonthCut = array('', 'มกราคม', 'กุมภาพันธุ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฏาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}
