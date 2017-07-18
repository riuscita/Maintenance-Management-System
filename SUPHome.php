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


<body class="w3-theme-l5" onload="loadFunc()">

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
            <div class="w3-container w3-padding w3-card-2 w3-default w3-round w3-margin" style="width: 350px">
                <h6 class="w3-opacity" style="color:darkslateblue;"><b>Available Labourers</b></h6>
                <table class="" width="100%" id="labrTable">

                </table>
            </div>


            <br>
            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>



<!-- Footer -->
<footer class="w3-container w3-theme-d5">
    <p>Powered by <a href="https://www.facebook.com/riuscitasolutions" target="_blank">riuscita</a></p>
</footer>

<!-- Request Description  Modal -->
<div id="settings" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-theme-d5">
            <span onclick="document.getElementById('settings').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Request Description</h1>
        </div>
        <div class="w3-container">
            <p>Request Description:</p>
            <form>
                <table>
                    <tr>
                        <th><input class="w3-input w3-padding-16 w3-border" id="reqID" disabled name="reqID"></th>
                        <th><input class="w3-input w3-padding-16 w3-border" id="uid" disabled name="uid"></th>
                        <th><input class="w3-input w3-padding-16 w3-border" id="dep" disabled name="dep"></th>
                    </tr>
                </table>

                <p><input class="w3-input w3-padding-16 w3-border" id="rDate" disabled name="rDate"></p>
                <p><input class="w3-input w3-padding-16 w3-border" id="rType" disabled name="rType"></p>
                <p><input class="w3-input w3-padding-16 w3-border" id="desc" disabled name="desc"></p>
                <p><input class="w3-input w3-padding-16 w3-border" id="rStatus" disabled name="rStatus"></p>
                <p><input class="w3-input w3-padding-16 w3-border" id="comDate" disabled name="comDate"></p>
                <p><input class="w3-input w3-padding-16 w3-border" id="workers" disabled name="workers"></p>


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


<!--Script to implement functions -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript">

    var ret=false;
    var hist=false;
    var reqt=false;

    function loadFunc() {
        getLabrDetails();

        //get the userID from local storage and set it to uid
        document.getElementById("userID").innerHTML+=sessionStorage.getItem('userID');
        document.getElementById('uid').innerHTML=sessionStorage.getItem('userID');

        refresh();
        loadHistory();
        loadSubmittedRequests();
        loadMyHistory();
        //setInterval(getLatestReq, 1000);


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

                var ar=res.split('|');

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
        //alert("done");
        var dataLabr = {};
        $.ajax({
            url :"GetLabrDetails.php",
            type : "POST",
            data: dataLabr,
            success:function (response) {
                $("#labrTable").html(response);
            }
        });
    }

    function loadHistory(){
        var idt=document.getElementById('uid').innerHTML;
        var nn="<center><img src='images/173841-200.png' width='10%' height:='10%'/><p>No recommended requests yet...</p></center>";

        var myData = {'action':"getHistory",'luid': idt};
        $.ajax({
            url: "HODAction.php",
            type: "POST",
            data: myData,
            success: function(res) {
                if(!$.trim(res)){
                    $("#hisTable").html(nn);
                    hist=true;
                }else{
                    if(hist){
                        var rr='<tr class="w3-theme-d2"> <th>Request Name</th> <th>Requested by</th><th>Status</th></tr>';
                        $("#hisTable").html(rr);
                    }
                    $("#hisTable").append(res);
                    hist=false;
                }
            }
        });
    }
    function loadMyHistory(){
        var idt=document.getElementById('uid').innerHTML;
        var nn="<center><img src='images/173841-200.png' width='10%' height:='10%'/><p>No requests so far...</p></center>";

        var myData = {'action':"getMyHistory",'luid': idt};
        $.ajax({
            url: "HODAction.php",
            type: "POST",
            data: myData,
            success: function(res) {
                if(!$.trim(res)){
                    $("#reqTable").html(nn);
                    reqt=true;
                }else{
                    if(reqt){
                        var rr='<tr class="w3-theme-d5"> <th>Request Name</th> <th>Date</th><th>Progress</th><th>Status</th></tr>';
                        $("#reqTable").html(rr);
                    }
                    $("#reqTable").append(res);
                    reqt=false;
                }
            }
        });
    }

    var llrid=-1;
    function loadSubmittedRequests(){
        var nn="<center><img src='images/173841-200.png' width='10%' height:='10%'/><p>No submitted requests yet...</p></center>";

        var myData = {'action':"getRequestList",'lrid':llrid};
        $.ajax({
            url: "SUPAction.php",
            type: "POST",
            data: myData,

            //when done , echo methds are passed to this function
            success: function(res) {

                //if res is nuull - the table refered by the id
                if(!$.trim(res)){
                    $("#recomTable").html(nn);
                    ret=true;           //when false no requests
                }else{
                    if(ret){
                        var rr='<tr class="w3-theme-d5"><th>Request Name</th><th>Requested by</th><th>Date</th><th>Action</th><th></th></tr>';
                        $("#recomTable").html(rr);
                    }
                    ret=false;
                    var rp=res.split('|');
                    $("#recomTable").append(rp[0]);
                    llrid=rp[1];
                }
            }
        });
    }

    function sendRecom(rid,fdbi,choice,des){
        var idt=document.getElementById('uid').innerHTML;
        var t=document.getElementById("tx"+fdbi);
        var a=document.getElementById("abt"+fdbi);
        var d=document.getElementById("dbt"+fdbi);
        var ds=document.getElementById("ds"+fdbi);
        var u=document.getElementById("un"+fdbi);
        var dt=document.getElementById("dt"+fdbi);

        var today=new Date();
        var dd=today.getDate();
        var mm=today.getMonth()+1;
        var yy=today.getFullYear();

        if(dd<10){
            dd='0'+dd.toString();
        }
        if(mm<10){
            mm='0'+mm.toString();
        }

        var dte=dd+'/'+mm+'/'+yy;

        var myData = {'action':"logRecommendation",'lrid': rid,'luid':idt,'choice':choice,'des':des,'date':dte};
        $.ajax({
            url: "SUPAction.php",
            type: "POST",
            data: myData,
            success: function(res) {
                //alert(res);
                a.style.display='none';
                d.style.display='none';
                ds.style.display='none';
                u.style.display='none';
                dt.style.display='none';
                refreshHistory();
            }
        });
    }

    function refreshHistory(){
        var idt=document.getElementById('uid').innerHTML;

        var myData = {'action':"getLatestRecord","luid": idt};
        $.ajax({
            url: "SUPAction.php",
            type: "POST",
            data: myData,
            success: function(ref) {
                $("#hisTable").append(ref);
            }
        });
    }

    function getLatestReq(){
        var myData = {'action':"getRequestList","lrid": llrid};
        $.ajax({
            url: "SUPAction.php",
            type: "POST",
            data: myData,
            success: function(res) {
                if($.trim(res)){
                    if(ret){
                        var rr='<tr class="w3-theme-d5"><th>Request Name</th><th>Requested by</th><th>Date</th><th>Action</th><th></th></tr>';
                        $("#recomTable").html(rr);
                    }
                    ret=false;
                    var rp=res.split('|');
                    $("#recomTable").append(rp[0]);
                    llrid=rp[1];
                }

            }
        });
    }



</script>


</body>
</html>
