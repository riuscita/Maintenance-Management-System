<!DOCTYPE html>
<html>
<head>
	<title>Enter Labourer Details</title>
	<style>
    body{
        font-family: Calibri;
    }
    /* Full-width input fields */
    input[type=text] , input[type=number]{
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: Green;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 20%;
    }
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }
    </style>
</head>
<body>
<form method="post" action="AddLab.php" border="">
	Labourer ID: <input type="number" name="labrid" required><br />
	First Name: <input type="text" size="12" maxlength="12" name="fname" required><br />
	Last Name: <input type="text" size="12" maxlength="36" name="lname" required><br />
	Working Description: <input type="text" name="work" required><br/>
	Labourer Type: <input type="text" name="labrtype" required><br />
	Recent Status: <input type="text" name="status" disabled ><br />
	Description: <input type="text" name="lbrabout" required><br/>
	<button type="submit" class="createLabr" name="addLabr" >ADD</button>
	<button type="reset" class="cancelbtn">Cancel</button>
</form>

<?php
    //include the databse connection setting up file
include('dbConnection.php');

    //checking whether the submit is clicked or not
if(isset($_POST['addLabr'])){

    //declairing variables for the form
    $labrid = $_POST['labrid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $work = $_POST['work'];
    $labrtype = $_POST['labrtype'];
    //$status = $_POST['status'];
    $desc = $_POST['lbrabout'];
    $status = "Busy";

    //setting the query text
    $sqlget = "INSERT INTO labr_table(LABRID,FNAME,LNAME,LABRTYPE,WRK,STATUS,DES) VALUES('$labrid','$fname','$lname','$labrtype','$work','$status','$desc')";

    //my sql query
    $sqldata = mysqli_query($con, $sqlget);

    //if condition to check whether the query has been put to the table
    if ($sqldata) {
        echo 'success!!';
    } else {
        echo 'faild';
    }
}

?>

</body>
</html>