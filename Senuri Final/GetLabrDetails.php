<?php
include('dbConnection.php');

$sqllabr = "SELECT FNAME,STATUS FROM labr_table";
$sqlreq = "SELECT 
          RID,UID,DEPARTMENT,DATE,TYPE,DES,STATUS,COM_DATE,LID 
          FROM labr_table";
$sql = mysql_query($sqllabr);
$sqr = mysql_query($sqlreq);

$tablebr="";
/*$tablelbr="<col width='30%'><col width='10%'>";
$tablelbr="<tr><th bgcolor='#7d97a5'>Name</th><th bgcolor='#7d97a5'>Status</th></tr>";*/

$i=0;
while($row = mysql_fetch_array($sql)){
    
    $tablebr.='<div class="w3-container  w3-display-container w3-theme-l4 w3-margin-bottom" style="height:40px;" id="lb_'.$i.'" draggable="true" ondragstart="drag(event)">
                                <span class="w3-text w3-display-middle" id="lb'.$i.'">'.$row['FNAME'].'</span>
                                <span class="w3-button w3-display-right" onclick="sendBack(this,\'lb_'.$i.'\')">x</span>
                            </div>';

    /*$tablelbr.="<tr><td>";
    $tablelbr.=$row['FNAME'];
    $tablelbr.="</td><td>";
    $tablelbr.=$row['STATUS'];
    $tablelbr.=' <span class="w3-text-red">⚫</span>';
    $tablelbr.="</td></tr>";*/
    $i=$i+1;
}
echo $tablebr;

?>