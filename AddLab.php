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
<form method="post" action="AddLabAction.php" border="">
	Labourer ID: <input type="number" name="labrid"><br />
	First Name: <input type="text" size="12" maxlength="12" name="fname"><br />
	Last Name: <input type="text" size="12" maxlength="36" name="lname"><br />
	Working Description: <input type="text" name="work"><br/>
	Labourer Type: <input type="text" name="labrtype"><br />
	Recent Status: <input type="text" name="status" disabled ><br />
	Description: <input type="text" name="lbrabout"><br/>
	<button type="submit" class="createLabr">ADD</button>
	<button type="button" class="cancelbtn">Cancel</button>
</form>


</body>
</html>