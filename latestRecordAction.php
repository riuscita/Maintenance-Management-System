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

$sql = "SELECT * FROM request_table ORDER BY RID DESC LIMIT 1";
$rst = mysql_query($sql);

if (mysql_num_rows($rst) > 0) {
    $displayString="";
    $row = mysql_fetch_array($rst);
    $prog = 0;
    if ($row["STATUS"] == 'submitted') {
        $prog = 0;
    } elseif ($row["STATUS"] == 'recommended') {
        $prog = 30;
    } elseif ($row["STATUS"] == 'WEChecked') {
        $prog = 50;
    } elseif ($row["STATUS"] == 'STChecked') {
        $prog = 70;
    } elseif ($row["STATUS"] == 'SVChecked') {
        $prog = 80;
    } elseif ($row["STATUS"] == 'LBAssigned') {
        $prog = 85;
    } else {
        $prog = 100;                            //completed
    }

    $displayString.='<tr>';
    $displayString.='<td>' . $row["DES"] . '</td>';
    $displayString.='<td>' . $row["DATE"] . '</td>';
    $displayString.='<td><div class = "w3-light-grey w3-round-xlarge">';
    $displayString.='<div class = "w3-container w3-grey w3-round-xlarge" style = "width:' . $prog . '%">' . $prog . '%</div>';
    $displayString.='</div></td>';
    $displayString.='<td>' . $row["STATUS"] . '</td>';
    $displayString.='</tr>';
    
    echo $displayString;
} else {
    echo '0';
}
?>
