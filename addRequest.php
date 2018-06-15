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

$rid = $_POST['rid'];
$dd = $_POST['date'];
$dep = $_POST['dep'];
$type = $_POST['type'];
$desc = $_POST['desc'];
$uid = $_POST['uid'];
$status = $_POST['status'];

/*$rid = '3';
$dd = '2017-7-3';
$dep ='CSE';
$type = 'Plummbing';
$desc = 'Main tap broken';
$uid = '2';
$status ='Submitted*/

$sql = "INSERT INTO request_table (RID,DATE,DEPARTMENT,TYPE,DES,UID,STATUS) VALUES ('$rid','$dd','$dep','$type','$desc','$uid','$status')";
$sq = mysql_query($sql);

if ($sq) {
    echo 'success!!';
} else {
    echo 'faild';
}

?>
