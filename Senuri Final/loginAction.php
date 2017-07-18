
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

$sql = "SELECT * FROM user_table WHERE UID=$uid";
$rst = mysql_query($sql);

$displayString="";
if (mysql_num_rows($rst)>0){
    $row = mysql_fetch_array($rst);
    $displayString .= "$row[USER_NAME]|";
    $displayString .= "$row[DESIGNATION]|";
    $displayString .= "$row[PASSWORD]|";
    $displayString .= "$row[DEPARTMENT]|";
    //$_SESSION["logged"] = 'true';
    //$displayString .= $_SESSION["logged"];
    echo $displayString;
    //echo mysql_result($rst, 0);
}else{
    echo NULL;
}
?>
