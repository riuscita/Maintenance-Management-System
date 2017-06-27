<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Test Web Page</title>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/w3.css">
    <body>

        <div class="w3-container w3-teal">
            <h1>Maintenance Management System</h1>
        </div>

        <div class="w3-container w3-border-light-gray">
            <h3>Insert your maintenance request here..</h3>
        </div>

        <div class="w3-bar w3-black w3-margin-bottom">
            <button class="w3-bar-item w3-button" onclick="window.open('http://www.polyvore.com')">Polyvore</button>
            <button class="w3-bar-item w3-button" onclick="window.open('http://www.hm.com')">H&M</button>
        </div>

        <div class="w3-container">
            <button class="w3-button" onclick="document.getElementById('time').innerHTML=Date()">Time</button>
            <p id="time"></p>
        </div>

        <div class="w3-row-padding w3-content" style="max-width: 1400px">
            <div class="w3-half">
                <img src="images/ch4.jpg" style="width: 50%">
            </div>

            <div class="w3-half">
                <div class="w3-container w3-hover-text-light-green" style="width: 500px">
                    <h2>Request repair</h2>
                </div>

                <div class="w3-card-4" style="width: 500px">
                    <form class="w3-container" action="index.php" method="post">
                        <p>
                            <label class="w3-label w3-margin-top">ID</label>
                            <input class="w3-input" type="text" name="ID"></p>

                        <p>
                            <label class="w3-label">Name</label>
                            <input class="w3-input" type="text" name="Name"></p>

                        <p>
                            <label class="w3-label w3-margin-bottom">Department</label>
                            <input class="w3-input" type="text" name="Dep"></p>
                        <p>
                            <label class="w3-label">Select the repair type</label></p>
                        <p>
                            <input type="radio" name="radio" value="electrical">
                            <label class="w3-label">Electrical</label>

                            <input type="radio" name="radio" value="water">
                            <label class="w3-label">Water</label>

                            <input type="radio" class="w3-margin-bottom" name="radio" value="civil">
                            <label class="w3-label">Civil</label></p>

                        <p>
                            <button class="w3-button" name="done">Done</button></p>

                    </form>
                </div>

            </div>
        </div>

        <?php

        
        function request_repair() {

            $host = "localhost";
            $user = "root";
            $database = "firsttest";

            $con = mysql_connect($host, $user, NULL);
            mysql_select_db($database);
            echo("Connect sucessfully !");

            $id = $_POST["ID"];
            $name = $_POST["Name"];
            $dep = $_POST["Dep"];
            $type = $_POST["radio"];

            if (!$con) {
                die("Connect faild" . mysqli_connect_error());
            }

            $sql = "INSERT INTO requesttable VALUES('$id','$name','$dep','$type')";
            $sq = mysql_query($sql);
            echo $sq;
            if (!$sq) {
                echo mysql_error();
            } else {
                echo 'Added successfully !';

                $to = 'ktl.desilva@gmail.com';
                $subject = 'TEST';
                $message = 'Hi! , Email service Done ...have a nice day :)';
                $email = 'riuscitacom@gmail.com';
                $headers = 'From: ' . $email . "\r\n" .
                        'Reply-To: ' . $email . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                $pp = mail($to, $subject, $message,$headers);

                if ($pp) {
                    echo "Sent succesfully !";
                } else {
                    echo "Sent faild !";
                }
            }
        }

        if (isset($_POST["done"])) {
            request_repair();
        }
        ?>

    </body>
</html>
