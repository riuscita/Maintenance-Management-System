<!DOCTYPE html>
<html>
<title>SUP | HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>


<body class="w3-theme-l5" onload="getLabrDetails()">

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d5 w3-right-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a class="w3-bar-item w3-button w3-padding-large w3-theme-d4" title="Acount" onclick="document.getElementById('settings').style.display='block'"  ><i class="fa fa-user w3-margin-right"></i>User</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Log out"><i class="fa fa-circle-o-notch"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Reports"><i class="fa fa-globe"></i></a>
    </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container">
                    <h4 id="uHomeName" class="w3-center"></h4>
                    <p class="w3-center"><img src="images/u2.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                    <hr>
                    <p id="userID"> <i class="fa fa-bars fa-fw w3-margin-right w3-text-theme"></i>University ID  : </p>
                    <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i>Designation : <text class="w3-text" id="userDsg"></text></p>
                    <p><i class="fa fa-users fa-fw w3-margin-right w3-text-theme"></i>Department : <text class="w3-text" id="userDep"></text></p>
                </div>
            </div>
            <br>

            <!-- Accordion -->
            <div class="w3-card-2 w3-round">
                <div class="w3-white">
                    <button onclick="document.getElementById('comReq').scrollIntoView()" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Completed requests</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <p>Some text..</p>
                    </div>
                    <button onclick="document.getElementById('history').scrollIntoView()" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My History</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div>
                    <button onclick="document.getElementById('settings').style.display='block'" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Profile</button>

                </div>
            </div>
            <br>
            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m7">
            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card-2 w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h6 class="w3-opacity">Maintenance Requests (Not Assigned)</h6>
                            <table class="w3-table" id="recomTable">
                                <col width="40%">
                                <col width="20%">
                                <col width="20%">
                                <col width="10%">
                                <col width="10%">
                                <tr class="w3-theme-d5">
                                    <th>Request Name</th>
                                    <th>Requested by</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--Assigned, but not started -->
            <div class="w3-container w3-padding w3-card-2 w3-white w3-round w3-margin">
                <h6 class="w3-opacity">Not started Requests</h6>
                <table class="w3-table w3-bordered" id="hisTable">
                    <tr class="w3-theme-d2">
                        <th>Request Name</th>
                        <th>Requested by</th>
                        <th>Status</th>
                        <th>Assigned Labourers</th>
                    </tr>
                </table>
            </div>

            <!--On gooing Maintenance -->
            <div class="w3-container w3-padding w3-card-2 w3-white w3-round w3-margin">
                <h6 class="w3-opacity">On going Maintenance</h6>
                <table class="w3-table w3-bordered" id="reqTable">
                    <col width="20%">
                    <col width="20%">
                    <col width="40%">
                    <col width="20%">
                    <tr class="w3-theme-d5">
                        <th>Request Name</th>
                        <th>Date</th>
                        <th>Progress</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>

        </div>

        <!-- Right Column -->
        <div class="w3-col m2">

            <!--Labourer table-->
            <div class="w3-container w3-padding w3-card-2 w3-green w3-round w3-margin" style="width: 350px">
                <h6 class="w3-opacity" style="color:yellow;"><b>Available Labourers</b></h6>
                <table class="" id="labrTable">
                    <col width="30%">
                    <col width="10%">

                </table>
            </div>

            <!--
            <div class="w3-card-2 w3-round w3-white w3-center">



                <div class="w3-container">


                    <p>Have a maintenence request ?</p>
                    <p><button class="w3-button w3-block w3-theme-l4" onclick="document.getElementById('createReq').style.display='block'">Create new request</button></p>
                </div>



            </div>
            -->

            <br>
            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>


<!-- Request Description  Modal -->
<div id="settings" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-theme-d5">
            <span onclick="document.getElementById('settings').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Profile Settings</h1>
        </div>
        <div class="w3-container">
            <p>Change your profile settings:</p>
            <form>
                <p><input class="w3-input w3-padding-16 w3-border" id="name" required name="name"></p>
                <p class="w3-input w3-padding-16 w3-border" id="uid" required name="uid"></p>
                <p><select class="w3-select w3-padding-16 w3-border" id="dsg" required name="dsg" onchange="selectBox()">
                        <option value="" disabled selected>Choose your designation</option>
                        <option value="Lecturer">Lecturer</option>
                        <option value="Visiting Lecturer">Visiting Lecturer</option>
                        <option value="Junior Lecturer">Junior Lecturer</option>
                        <option value="Lab Assistant">Lab Assistant</option>
                        <option value="Office worker">Office worker</option>
                    </select></p>
                <p><select class="w3-select w3-padding-16 w3-border" id="dep" required name="dep" onchange="selectDep()">
                        <option value="" disabled selected>Choose your department</option>
                        <option value="CSE">CSE</option>
                        <option value="ENTC">ENTC</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Civil">Civil</option>
                        <option value="Mech">Mech</option>
                        <option value="Chemical">Chemical</option>
                        <option value="Material">Material</option>
                    </select></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Type a new password" id="password" required name="psw"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Re type Password" id="repassword" required name="rpsw"></p>
                <p><button class="w3-button" type="button" name="updateBtn" onclick="update(this.form)">Save Changes</button></p>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script type ="text/javascript" language="javascript">
                    function update(form){
                        var ps=document.getElementById('password').value;
                        var rps=document.getElementById('repassword').value;
                        var uidt=document.getElementById('uid').innerHTML;
                        var namet=document.getElementById('name').value;
                        var dsge=document.getElementById("dsg").value;
                        var depe=document.getElementById("dep").value;

                        if(ps==rps){
                            if(!$.trim(ps)){
                                ps=sessionStorage.getItem('userPass');
                            }
                            var myData = {"uid": uidt, "name": namet,"dsg":dsge,"psw":ps,"dep":depe};
                            $.ajax({
                                url: "updateAction.php",
                                type: "POST",
                                data: myData,
                                success: function(data) {
                                    $("#responseDiv").html(data);
                                }
                            });

                            document.getElementById('settings').style.display='none';
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
<!-- Footer -->
<footer class="w3-container w3-theme-d5">
    <p>Powered by <a href="https://www.facebook.com/riuscitasolutions" target="_blank">riuscita</a></p>
</footer>




<!--Script to implement functions -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript">

    function loadFunc() {
        alert("load function done");
        //get the userid from local storage and set it to uid
        document.getElementsById("userID").innerHTML+=localStorage.getItem('userID');
        document.getElementsById('uid').innerHTML=localStorage.getItem('userID');
        //refresh();
        getLabrDetails();
        //more functions are need to be implemented

    }
    //refresh the page
    function  refresh() {
        document.getElementById('uid').innerHTML = 8;
        var idt = document.getElementById('uid').innerHTML;
        var myData ={"luid":idt};

        $.ajax({
            url: "loginAction.php",
            type: "POST",
            data: myData,
            success: function(res){
                var ar.split('|');

                document.getElementById("uHomeName").innerHTML=ar[0];
                document.getElementById("userDsg").innerHTML=ar[1];
                document.getElementById("userDep").innerHTML=ar[3];

                document.getElementById('name').value=ar[0];
                document.getElementById("dsg").value=ar[1];
                document.getElementById("dep").value=ar[3];

            }
        });
    }
    function getLabrDetails() {
        alert("done");
        var dataLabr = {};
        $.ajax({
            url :"GetLabrDetails.php",
            type : "POST",
            data: dataLabr,
            success:function (response) {
                alert(response);
                $("#labrTable").html(response);
            }
        });
    }



</script>


</body>
</html>
