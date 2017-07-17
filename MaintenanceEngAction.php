<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
require_once 'dbConnection.php';

function getAllRecords() {

    $sql = "SELECT request_table.DES,request_table.STATUS,request_table.DATE,user_table.USER_NAME FROM request_table INNER JOIN user_table ON request_table.UID=user_table.uid
        WHERE STATUS='recommended'";
    $rst = mysql_query($sql);

    $displayString = "";
    if (mysql_num_rows($rst) > 0) {
        while ($row = mysql_fetch_array($rst)) {
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
            $displayString.='<td>' . $row["USER_NAME"] . '</td>';
            $displayString.='<td>' . $row["DATE"] . '</td>';
            $displayString.='<td><div class = "w3-light-grey w3-round-xlarge">';
            $displayString.='<div class = "w3-container w3-grey w3-round-xlarge" style = "width:' . $prog . '%">' . $prog . '%</div>';
            $displayString.='</div></td>';
            $displayString.='<td>' . $row["STATUS"] . '</td>';
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
    $sql = "SELECT * FROM request_table WHERE STATUS='RECOM_HOD' ORDER BY RID DESC LIMIT 1";
    $rst = mysql_query($sql);
    

    if (mysql_num_rows($rst) > 0) {
        $displayString = "";
        $row = mysql_fetch_array($rst);
        $uname=  getUserName($row['UID']);
        $displayString.='<tr>';
        $displayString.='<td>' . $row["DES"] . '</td>';
        $displayString.='<td>' . $uname . '</td>';
        $displayString.='<td>' . $row["STATUS"] . '</td>';
        $displayString.='</tr>';

        echo $displayString;
    } else {
        echo '';
    }
}

function getUserName($uid){
    $sql="SELECT USER_NAME FROM user_table WHERE UID='$uid'";
    $rst = mysql_query($sql);
    $row = mysql_fetch_array($rst);
    return $row['USER_NAME'];
}

function getHistory() {

    $uid = $_POST['luid'];

    $sql = "SELECT request_table.DES,request_table.STATUS,user_table.USER_NAME FROM request_table INNER JOIN user_table ON request_table.UID=user_table.uid
        WHERE HODID=$uid";
    $rst = mysql_query($sql);

    $displayString = "";
    if (mysql_num_rows($rst) > 0) {
        while ($row = mysql_fetch_array($rst)) {
            $displayString.='<tr>';
            $displayString.='<td>' . $row["DES"] . '</td>';
            $displayString.='<td>' . $row["USER_NAME"] . '</td>';
            $displayString.='<td>' . $row["STATUS"] . '</td>';
            $displayString.='</tr>';
        }
        //echo mysql_result($rst, 0);
    }
    echo $displayString;
}

function getRequestList() {
    $rid = $_POST['lrid'];
    $sql = "SELECT request_table.RID,request_table.DES,request_table.DATE,user_table.USER_NAME FROM request_table INNER JOIN user_table ON request_table.UID=user_table.uid
        WHERE STATUS='RECOM_HOD' AND RID>$rid";
    $rst = mysql_query($sql);
    
    $displayString = "";
    $act = "accept";
    $rr=0;
    if (mysql_num_rows($rst) > 0) {
        $i = 1;
        while ($row = mysql_fetch_array($rst)) {
            $displayString.='<tr><td><div id="ds' . $i . '" class="w3-text">' . $row["DES"] . '</div></td>';
            $displayString.='<td><div id="un' . $i . '" class="w3-text">' . $row["USER_NAME"] . '</div></td>';
            $displayString.='<td><div id="dt' . $i . '" class="w3-text">' . $row["DATE"] . '</div></td>';
            $displayString.='<div id="tx' . $i . '" class="w3-text w3-hide w3-animate-zoom w3-padding-10 w3-border w3-theme-l3"><p><center> - Your feedback is successfully sent - </center></p></div>';
            $displayString.='<td><button class="w3-button w3-padding-10 w3-border w3-theme-d3" onclick="sendRecom(' . $row["RID"] . ',' . $i . ', \'accept\', \'' . $row["DES"] . '\' )" id="abt' . $i . '">Accept</button>
                            </td>';
            $act = 'decline';
            $displayString.='<td><button class="w3-button w3-padding-10 w3-border w3-theme-d3" onclick="sendRecom(' . $row["RID"] . ',' . $i . ', \'decline\', \'' . $row["DES"] . '\' )" id="dbt' . $i . '">Decline</button>
                            </td>
                            </tr>';
            $rr=$row["RID"];
            $i = $i + 1;
        }
        $displayString.='|'.$rr;
        //echo mysql_result($rst, 0);
    }
    
    echo $displayString;
}

function getUID($rid) {
    $sql = "SELECT UID FROM request_table where RID=$rid";
    $rst = mysql_query($sql);
    $row = mysql_fetch_array($rst);
    return $row["UID"];
}

function logRecommendation() {
    $rid = $_POST['lrid'];
    $uid = $_POST['luid'];
    $ch = $_POST['choice'];
    $ds = $_POST['des'];
    $date = $_POST['date'];
    $uuid = getUID($rid);
    $msg = "";

    if ($ch == 'accept') {
        $sql = "UPDATE request_table SET WEID='$uid',STATUS='WEChecked' WHERE RID='$rid'";
        $msg = "Maintenance Engineer accepted " . $ds;
    } else {
        $sql = "UPDATE request_table SET STATUS='CANCEL' WHERE RID='$rid'";
        $msg = "Maintenance Engineer rejected " . $ds;
    }

    /*$sq = mysql_query($sql);
    if ($sq) {
        notify($uuid, $msg, $date,$rid,'HOD');
        echo 'success';
    } else {
        echo 'faild';
    }*/
}

function notify($uid, $msg, $date,$rid,$type) {
    $sql = "INSERT INTO notification_table (NOTIFICATION,RECEIVER,STATUS,NOTI_DATE,RID,NTYPE) VALUES('$msg','$uid',0,'$date','$rid','$type')";
    $sq = mysql_query($sql);
    //echo $sq;
}

function getNotification() {
    $uid = $_POST['uid'];
    $c = $_POST['mnid'];
    $sql = "SELECT * FROM notification_table WHERE RECEIVER='$uid' AND STATUS=0 AND NID>$c";
    $rst = mysql_query($sql);
    $displayText = "";
    $lind = '0';

    if (mysql_num_rows($rst) > 0) {
        while ($row = mysql_fetch_array($rst)) {
            $displayText.=' <div onclick="showNoti('.$row["RID"].', \''.$row["NTYPE"].'\' ,'.$row["NID"].')" class="w3-bar-item w3-button w3-border" id="b'.$row["NID"].'" >
                            <div class="w3-text w3-medium">' . $row["NOTIFICATION"] . '</div><br />
                            <div class="w3-text w3-small">' . $row["NOTI_DATE"] . '</div>   
                            </div> ';
            $lind = $row["NID"];
        }
        $count = mysql_num_rows($rst);
        $displayText.='|' . $count . '|' . $lind;
        echo $displayText;
    } else {
        echo '';
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

    $sql = "INSERT INTO request_table (RID,DATE,DEPARTMENT,TYPE,DES,UID,STATUS,HODID) VALUES ('$rid','$dd','$dep','$type','$desc','$uid','$status','$uid')";
    $sq = mysql_query($sql);

    if ($sq) {
        echo 'success!!';
    } else {
        echo 'faild';
    }
}

function getMyHistory() {
    $uid = $_POST['luid'];

    $sql = "SELECT * FROM request_table WHERE WEID=$uid";
    $rst = mysql_query($sql);

    $displayString = "";
    if (mysql_num_rows($rst) > 0) {
        while ($row = mysql_fetch_array($rst)) {
            $prog = 0;
            if ($row["STATUS"] == 'WEChecked') {
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
        }
        echo $displayString;
        //echo mysql_result($rst, 0);
    } else {
        echo NULL;
    }
}

function getLatestMyRecord() {
    $uid = $_POST['luid'];
    $sql = "SELECT * FROM request_table WHERE UID=$uid ORDER BY RID DESC LIMIT 1";
    $rst = mysql_query($sql);

    if (mysql_num_rows($rst) > 0) {
        $displayString = "";
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
}

$action = $_POST['action'];

if ($action == 'getAllRecords') {
    getAllRecords();
} elseif ($action == 'getLatestRecord') {
    getLatestRecord();
} elseif ($action == 'getHistory') {
    getHistory();
} elseif ($action == 'getRequestList') {
    getRequestList();
} elseif ($action == 'logRecommendation') {
    logRecommendation();
} elseif ($action == 'getLastRecord') {
    getLastRecord();
} elseif ($action == 'createRequest') {
    createRequest();
} elseif ($action == 'getNotification') {
    getNotification();
} elseif ($action == 'getLatestMyRecord') {
    getLatestMyRecord();
} elseif ($action == 'getMyHistory') {
    getMyHistory();
}
?>
