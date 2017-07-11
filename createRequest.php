<!DOCTYPE html>
<html>
<style>
    body{
        font-family: Calibri;
    }
    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }


    /* Set a style for all buttons */
    button {
        background-color: rgba(84,94,115,0.8);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,.createbtn {
        float: left;
        width: 20%;
    }

    /* Add padding to container elements */
    .container {
        padding: 45px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .createbtn {
            width: 100%;
        }
    }
</style>
<body>

<h2>Create Maintenance Request</h2>

<form action="/action_page.php" style="border:1px solid #ccc">
    <div class="container">

        <label><b>Maintenance Name</b></label>
        <input type="text" placeholder="Maintenance Name" name="requestname" required>

        <label><b>Date</b></label>
        <input type="text" placeholder="Date" name="requestdate" required>

        <label><b>Type</b></label>
        <input type="text" placeholder="Enter type" name="type" required>

        <label><b>Department</b></label>
        <input type="text" placeholder="Department" name="requestdepartment" required>

        <label><b>Location</b></label>
        <input type="text" placeholder="Enter Location" name="requestlocation" required>

        <label><b>Description</b></label>
        <input type="text" style="height:50px; align-content: flex-start" placeholder="Maintenance Description here" name="requestdescription" required>
        <input type="checkbox"> Urgent
        <p>By creating a maintenance request you agree to university <a href="#">Terms & Regulations</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="createbtn">Create</button>
        </div>
    </div>
</form>

</body>
</html>