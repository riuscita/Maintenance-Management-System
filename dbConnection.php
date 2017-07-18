<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysqli_connect("localhost", "root", NULL,"mms");

if (!$con) {
    die("Connect failed" . mysqli_connect_error());
}else{
	echo "connection successful!";
}

?>
