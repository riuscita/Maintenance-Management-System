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

$sql = "SELECT RID FROM request_table ORDER BY RID DESC LIMIT 1";
$rst = mysql_query($sql);

if (mysql_num_rows($rst)>0){
    $row = mysql_fetch_array($rst);
    echo "$row[RID]";
}else{
    echo '0';
}

?>
