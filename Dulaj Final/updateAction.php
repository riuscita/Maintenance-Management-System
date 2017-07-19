<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
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

$sql = "UPDATE USER_TABLE SET USER_NAME='$name',DESIGNATION='$dsg',PASSWORD='$psw',DEPARTMENT='$dep' WHERE UID='$uid'";
$sq = mysql_query($sql);

if ($sq) {
    echo 'success!!';
} else {
    echo 'faild';
}

?>
