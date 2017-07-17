<?php

/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 17-Jul-17
 * Time: 2:58 PM
 */

include('dbConnection.php');

$labrid = $_POST['labrid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$work = $_POST['work'];
$labrtype = $_POST['labrtype'];
$status = $_POST['status'];
$desc = $_POST['lbrabout'];

$sqlget = "INSERT INTO labr_table(LABRID,FNAME,LNAME,LABRTYPE,WRK,STATUS,DES) VALUES('$labrid','$fname','$lname','$labrtype','$work','$status','$desc')";
$sqldata = mysqli_query($con,$sqlget);

if ($sqldata) {
    echo 'success!!';
} else {
    echo 'faild';
}

?>