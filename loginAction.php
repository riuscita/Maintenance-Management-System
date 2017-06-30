
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

$uid = $_POST['luid'];

$sql = "SELECT PASSWORD FROM user_table WHERE UID='$uid'";
$rst = mysql_query($sql);

if (mysql_num_rows($rst)>0){
    echo mysql_result($rst, 0);
}else{
    echo NULL;
}
?>
