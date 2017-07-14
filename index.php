<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TEST|PROJECT</title>
    </head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h5 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
            background-image: url("images/one.jpeg");
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
    </style>


    <body>

        <div class="bgimg w3-display-container w3-text-black w3-border-white">
            <div class="w3-display-middle w3-jumbo">
                <p>MONO ⛌ </p>

            </div>
            <div class="w3-display-topleft w3-container w3-xlarge">
                <p><button onclick="document.getElementById('signup').style.display='block'" class="w3-button w3-black">sign up</button></p>
                <p><button onclick="document.getElementById('login').style.display='block'" class="w3-button w3-black">login</button></p>
            </div>
            <div class="w3-display-bottomleft w3-container w3-text-white">
                <p class="w3-xlarge">monday - friday 10-23 | saturday 14-02</p>
                <p class="w3-large">42 village St, New York</p>
                <p>powered by <a href="https://www.polyvore.com" target="_blank">riuscita</a></p>
            </div>
        </div>

        <!-- Sign up Modal -->
        <div id="signup" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-black">
                    <span onclick="document.getElementById('signup').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1>Sign up</h1>
                </div>
                <div class="w3-container">
                    <p>Please fill this form:</p>
                    <form>
                        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" id="name" required name="name"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="University ID" id="uid" required name="uid"></p>
                        <p><select class="w3-select w3-padding-16 w3-border" id="dsg" required name="dsg" onchange="selectBox()">
                                <option value="" disabled selected>Choose your designation</option>
                                <option value="Lecturer">Lecturer</option>
                                <option value="Visiting Lecturer">Visiting Lecturer</option>
                                <option value="Junior Lecturer">Junior Lecturer</option>
                                <option value="Lab Assistant">Lab Assistant</option>
                                <option value="Office worker">Office worker</option>
                                <option value="HOD">HOD</option>
                            </select></p>
                        <p><select class="w3-select w3-padding-16 w3-border" id="dep" required name="dep" onchange="selectDep()">
                                <option value="" disabled selected>Choose your department</option>
                                <option value="CSE">CSE</option>
                                <option value="ENTC">ENTC</option>
                                <option value="Civil">Civil</option>
                                <option value="Mech">Mech</option>
                                <option value="Chemical">Chemical</option>
                                <option value="Material">Material</option>
                            </select></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Type a password" id="password" required name="psw"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Re type Password" id="repassword" required name="rpsw"></p>
                        <p><button class="w3-button" type="button" name="signupBtn" onclick="msg(this.form)">Done</button></p>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script type ="text/javascript" language="javascript">
                            function msg(form){
                                var ps=document.getElementById('password').value;
                                var rps=document.getElementById('repassword').value;
                                var uidt=document.getElementById('uid').value;
                                var namet=document.getElementById('name').value;
                                var dsge=document.getElementById("dsg").value;
                                var depe=document.getElementById("dep").value;
                                
                                document.getElementById('password').value="";
                                document.getElementById('repassword').value="";
                                document.getElementById('uid').value="";
                                document.getElementById('name').value="";
                                document.getElementById("dsg").value="";
                                document.getElementById("dep").value="";
                                
                                if(ps==rps){
                                    var myData = {"uid": uidt, "name": namet,"dsg":dsge,"psw":ps,"dep":depe};
                                    $.ajax({
                                        url: "signupAction.php",
                                        type: "POST",
                                        data: myData,
                                        success: function(data) {
                                            $("#responseDiv").html(data);
                                        }  
                                    });

                                    document.getElementById('signup').style.display='none';
                                    document.getElementById('message').style.display='block';
                                }else{
                                    document.getElementById('error').style.display='block';
                                }
                            }
                        </script>

                    </form>
                </div>
            </div>
        </div>


        <!-- Login Modal -->
        <div id="login" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-black">
                    <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1>Login</h1>
                </div>
                <div class="w3-container">
                    <form action="/action_page.php" target="_blank">
                        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="University ID" id="uuid" required name="uuid"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" id="upassword" required name="upassword"></p>
                        <p><button class="w3-button" type="button" name="loginBtn" onclick="login()">Login</button></p>


                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script type ="text/javascript" language="javascript">
                            function login(){
                                var ps=document.getElementById('upassword').value;
                                var idt=document.getElementById('uuid').value;
                                
                                document.getElementById('upassword').value="";
                                document.getElementById('uuid').value="";
                                
                                var myData = {"luid": idt};
                                $.ajax({
                                    url: "loginAction.php",
                                    type: "POST",
                                    data: myData,
                                    success: function(res) {
                                        //$("#responseDiv").html(data);
                                        if (!$.trim(res)){
                                            alert('no such user..');
                                        }else{
                                            
                                            var ar=res.split('|');
                                            //$.trim(res)
                                            if ($.trim(ar[2])==ps){
                                                //alert(ar);
                                                sessionStorage.setItem('userName',ar[0]);
                                                sessionStorage.setItem('userID',idt);
                                                sessionStorage.setItem('userDesg',ar[1]);
                                                sessionStorage.setItem('userDep',ar[3]);
                                                sessionStorage.setItem('userPass',ar[2]);
                                                if (ar[1]=='HOD'){
                                                    window.location.href="http://localhost/testPHP/HODHome.php";
                                                }else{
                                                    window.location.href="http://localhost/testPHP/userHome.php#";
                                                }
                                                
                                                
                                            }else{
                                                alert("Incorrect password");
                                                document.getElementById('login').style.display='none';
                                                document.getElementById('error').style.display='block';
                                            }
                                        }
                                    }  
                                });
                                
                                
                            }
                        </script>

                    </form>
                </div>
            </div>
        </div>

        <!-- Message Modal -->
        <div id="message" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-black">
                    <span onclick="document.getElementById('message').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1>Success</h1>
                </div>
                <div class="w3-container">
                    <p>Sign up Success !! Please login</p>
                    <p><button class="w3-button" type="button" name="loginBtn" onclick="msgLogin(this.form)">login</button></p>

                    <script>
                        function msgLogin(form){
                            document.getElementById('message').style.display='none';
                            document.getElementById('login').style.display='block';
                        }
                    </script>
                </div>
            </div>
        </div>

        <!-- Error Modal -->
        <div id="error" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-black">
                    <span onclick="document.getElementById('error').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1>Error</h1>
                </div>
                <div class="w3-container">
                    <p>Incorrect password. Please login again</p>
                    <p><button class="w3-button" type="button" name="loginBtn" onclick="errorFunc(this.form)">Login</button></p>

                    <script>
                        function errorFunc(form){
                            document.getElementById('error').style.display='none';
                            document.getElementById('login').style.display='block';
                        }
                    </script>
                </div>
            </div>
        </div>


        <?php
        // put your code here
        ?>
    </body>
</html>
