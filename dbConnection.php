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
?>
