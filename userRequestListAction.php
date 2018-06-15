<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
require_once 'dbConnection.php';

function getAllRecords() {

    $uid = $_POST['luid'];

    $sql = "SELECT * FROM request_table WHERE UID=$uid";
    $rst = mysql_query($sql);

    $displayString = "";
    if (mysql_num_rows($rst) > 0) {
        while ($row = mysql_fetch_array($rst)) {
            $prog = 0;
            if ($row["STATUS"] == 'submitted') {
                $prog = 0;
            } elseif ($row["STATUS"] == 'RECOM_HOD') {
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
            $displayString.='<td><p id=s'.$row["RID"].'>' . $row["STATUS"] . '</p></td>';
            $displayString.='</tr>';
        }
        echo $displayString;
        //echo mysql_result($rst, 0);
    } else {
        echo NULL;
    }
}

function getLatestRecord() {
    $uid = $_POST['luid'];
    $sql = "SELECT * FROM request_table WHERE UID=$uid ORDER BY RID DESC LIMIT 1";
    $rst = mysql_query($sql);

    if (mysql_num_rows($rst) > 0) {
        $displayString = "";
        $row = mysql_fetch_array($rst);
        $prog = 0;
        if ($row["STATUS"] == 'submitted') {
            $prog = 0;
        } elseif ($row["STATUS"] == 'RECOM_HOD') {
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
        echo '';
    }
}

function getCompletedRequests() {

    $uid = $_POST['luid'];

    $sql = "SELECT * FROM request_table WHERE UID=$uid AND STATUS='completed' AND FEEDBACK!=''";
    $rst = mysql_query($sql);

    $displayString = "";
    if (mysql_num_rows($rst) > 0) {
        while ($row = mysql_fetch_array($rst)) {
            $displayString.='<tr>';
            $displayString.='<td>' . $row["DES"] . '</td>';
            $displayString.='<td>' . $row["DATE"] . '</td>';
            $displayString.='<td>' . $row["COM_DATE"] . '</td>';
            $displayString.='<td>' . $row["FEEDBACK"] . '</td>';
            $displayString.='</tr>';
        }
        //echo mysql_result($rst, 0);
    }
    echo $displayString;
}

function getFeedbackList() {
    $uid = $_POST['luid'];

    $sql = "SELECT DES,RID FROM request_table WHERE UID=$uid AND STATUS='completed' AND FEEDBACK=''";
    $rst = mysql_query($sql);

    $displayString = "";
    if (mysql_num_rows($rst) > 0) {
        $i = 1;
        while ($row = mysql_fetch_array($rst)) {
            $displayString.='<tr><td><span class="w3-badge w3-theme-l3">' . $i . '</span>' . $row["DES"] . '</td><td></td></tr>';
            $displayString.='<tr><td><input class="w3-input w3-padding-10 w3-border" type="text" 
                            placeholder="Write some feedback ..." id="fd' . $i . '">
                            <div id="tx' . $i . '" class="w3-text w3-hide w3-animate-zoom w3-padding-10 w3-border w3-theme-l3"><p><center> - Your feedback is successfully sent - </center></p></div>
                            </td>';
            $displayString.='<td><button class="w3-button w3-padding-10 w3-border w3-theme-d3"
                            onclick="sendFeedback(' . $row["RID"] . ',' . $i . ')" id="bt' . $i . '">send</button>
                            </td>
                            </tr>';


            $i = $i + 1;
        }
        //echo mysql_result($rst, 0);
    }
    echo $displayString;
}

function logFeedback() {
    $rid = $_POST['lrid'];
    $fdb = $_POST['fdb'];

    $sql = "UPDATE request_table SET FEEDBACK='$fdb' WHERE RID='$rid'";
    $sq = mysql_query($sql);
    if ($sq) {
        echo 'success';
    } else {
        echo 'faild';
    }
}

function getLastRecord() {
    $sql = "SELECT RID FROM request_table ORDER BY RID DESC LIMIT 1";
    $rst = mysql_query($sql);

    if (mysql_num_rows($rst) > 0) {
        $row = mysql_fetch_array($rst);
        echo "$row[RID]";
    } else {
        echo '0';
    }
}

function createRequest() {

    $rid = $_POST['rid'];
    $dd = $_POST['date'];
    $dep = $_POST['dep'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $uid = $_POST['uid'];
    $status = $_POST['status'];

    $sql = "INSERT INTO request_table (RID,DATE,DEPARTMENT,TYPE,DES,UID,STATUS) VALUES ('$rid','$dd','$dep','$type','$desc','$uid','$status')";
    $sq = mysql_query($sql);

    if ($sq) {
        echo 'success!!';
    } else {
        echo 'faild';
    }
}

function getStatus(){
    $rid=$_POST['rid'];
    $sql="SELECT STATUS FROM request_table where RID='$rid'";
    $rst = mysql_query($sql);

    if (mysql_num_rows($rst) > 0) {
        $row = mysql_fetch_array($rst);
        echo $row['STATUS'];
    } else {
        echo '';
    }
}

function markNotification(){
    $nid=$_POST['nid'];
    $sql="UPDATE notification_table SET STATUS=1 WHERE NID='$nid'";
    $sq = mysql_query($sql);
}

$action = $_POST['action'];

if ($action == 'getAllRecords') {
    getAllRecords();
} elseif ($action == 'getLatestRecord') {
    getLatestRecord();
} elseif ($action == 'getCompletedRequests') {
    getCompletedRequests();
} elseif ($action == 'getFeedbackList') {
    getFeedbackList();
} elseif ($action == 'logFeedback') {
    logFeedback();
} elseif ($action == 'getLastRecord') {
    getLastRecord();
} elseif ($action == 'createRequest') {
    createRequest();
}elseif (($action=='markNotification')) {
    markNotification();
}
?>
