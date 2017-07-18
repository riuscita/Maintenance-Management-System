<?php
include('dbConnection.php');

$sqllabr = "SELECT FNAME,STATUS FROM labr_table";
$sqlreq = "SELECT 
          RID,UID,DEPARTMENT,DATE,TYPE,DES,STATUS,COM_DATE,LID 
          FROM labr_table";
$sql = mysqli_query($con,$sqllabr);
$sqr = mysqli_query($con,$sqlreq);

$tablelbr="<col width='30%'><col width='10%'>";
$tablelbr="<tr><th bgcolor='#556b2f'>Name</th><th bgcolor='#556b2f'>Status</th></tr>";


while($row = mysqli_fetch_array($sql)){

    $tablelbr.="<tr><td>";
    $tablelbr.=$row['FNAME'];
    $tablelbr.="</td><td>";
    $tablelbr.=$row['STATUS'];
    $tablelbr.="</td></tr>";
}


echo $tablelbr;

?>