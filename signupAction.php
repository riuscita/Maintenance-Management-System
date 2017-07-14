<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

$con = mysql_connect("localhost", "root", NULL);
mysql_select_db("mms");

if (!$con) {
    die("Connect faild" . mysqli_connect_error());
}

$uid = $_POST['uid'];
$name = $_POST['name'];
$dsg = $_POST['dsg'];
$psw = $_POST['psw'];
$dep = $_POST['dep'];

$sql = "INSERT INTO user_table VALUES('$uid','$name','$dsg','$psw','$dep')";
$sq = mysql_query($sql);

if ($sq) {
    echo 'success!!';
    return TRUE;
} else {
    echo 'faild';
    return FALSE;
}
?>
