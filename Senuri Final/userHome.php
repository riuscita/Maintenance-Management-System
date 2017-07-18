<!DOCTYPE html>
<html>
    <title>USER | HOME</title>
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
                <a href="javascript:logout()" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Logout"><i class="fa fa-circle-o-notch"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Reports"><i class="fa fa-globe"></i></a>
                <div class="w3-dropdown-hover w3-hide-small w3-left">
                    <button class="w3-button w3-padding-large w3-right-align" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green" id="count">0</span></button>     
                    <div class="w3-dropdown-content w3-card-4 w3-medium w3-bar-block" style="width:300px" id="noti">
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
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
                                    <h6 class="w3-opacity">Ongoing maintenance tasks</h6>
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
                        </div>
                    </div>

                    <div class="w3-container w3-padding w3-card-2 w3-white w3-round w3-margin" id="comReq">
                        <h6 class="w3-opacity">Completed requests</h6>
                        <table class="w3-table" id="feedback">
                            <col width="90%">
                            <col width="10%">

                        </table>
                    </div>

                    <div class="w3-container w3-padding w3-card-2 w3-white w3-round w3-margin">
                        <h6 class="w3-opacity">My History</h6>
                        <table class="w3-table w3-bordered" id="comTable">
                            <tr class="w3-theme-d2">
                                <th>Request Name</th>
                                <th>Requested Data</th>
                                <th>Completed Date</th>
                                <th>Feedback</th>
                            </tr>
                        </table>
                    </div>

                </div>
                <!-- Right Column -->
                <div class="w3-col m2">
                    <div class="w3-card-2 w3-round w3-white w3-center">
                        <div class="w3-container">
                            <p>Have a maintenence request ?</p>
                            <p><button class="w3-button w3-block w3-theme-l4" onclick="document.getElementById('createReq').style.display='block'">Create new request</button></p>
                        </div>
                    </div>
                    <br>
                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>
        <br>

        <!-- Profile Settings Modal -->
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


        <!-- Create Request Modal -->
        <div id="createReq" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-theme-d5">
                    <span onclick="document.getElementById('createReq').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1>Create new request</h1>
                </div>
                <div class="w3-container">
                    <p>Create Maintenance Assistance Request:</p>
                    <form>
                        <p><select class="w3-select w3-padding-16 w3-border" id="type" required name="type">
                                <option value="" disabled selected>Choose your request type</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Civil">Civil</option>
                                <option value="">Plumbing</option>
                            </select></p>
                        <p><input class="w3-input w3-padding-16 w3-border" id="desc" required name="desc"></p>
                        <p><button class="w3-button" type="button" name="updateBtn" onclick="addRequest()">Submit</button></p>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script type ="text/javascript" language="javascript">
                            function addRequest(){
                                var d=new Date();
                                var rrid=getRID()+1;                            
                                var rid=rrid.toString();
                                var m=d.getMonth()+1;
                                var dd=d.getFullYear().toString()+"-"+m.toString()+"-"+d.getDate().toString();
                                var depe=document.getElementById('dep').value;
                                var typee=document.getElementById('type').value;
                                var desce=document.getElementById('desc').value;
                                var uide=document.getElementById('uid').innerHTML;
                                var status='submitted';
                                var myData = {"action":"createRequest","rid":rid,"date":dd,"dep":depe,"type":typee,"desc":desce,"uid":uide,"status":status};
                                
                                $.ajax({
                                    url: "userRequestListAction.php",
                                    type: "POST",
                                    data: myData,
                                    success: function(data) {
                                        //$("#responseDiv").html(data);
                                        alert(data);
                                        document.getElementById('createReq').style.display='none';
                                        document.getElementById('message').style.display='block';
                                    }  
                                });

                            }
                            
                            function getRID(){
                                var myData={"action":"getLastRecord"};
                                $.ajax({
                                    url: "userRequestListAction.php",
                                    type: "POST",
                                    data: myData,
                                    success: function(data) {
                                        rData=parseInt(data);
                                        return (rData)
                                    }  
                                });
                                return rData;
                            }
                            
                            function refreshHistory(){
                                var idt=document.getElementById('uid').innerHTML;
                
                                var myData = {'action':"getLatestRecord","luid": idt};
                                $.ajax({
                                    url: "userRequestListAction.php",
                                    type: "POST",
                                    data: myData,
                                    success: function(ref) {
                                        var nn="<center><img src='images/173841-200.png' width='10%' height:='10%'/><p>No completed requests yet...</p></center>";
                                        if(!$.trim(ref)){
                                            $("#reqTable").html(nn);
                                            rt=true;
                                        }else{
                                            if(rt){
                                                var fr='<tr class="w3-theme-d5"><th>Request Name</th><th>Date</th><th>Progress</th><th>Status</th></tr>';
                                                $("#reqTable").html(fr+ref);
                                                rt=false;
                                            }else{
                                                $("#reqTable").append(ref);
                                            }
                                        }
                        
                                    }  
                                });
                            }
                            
                            function logout(){
                                var myData = {};
                                $.ajax({
                                    url: "logoutAction.php",
                                    type: "POST",
                                    data: myData,
                                    success: function(ref) {
                                        window.location.href='http://localhost/testPHP/index.php';
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
                    <p>Your maintenance request sent..</p>
                    <p><button class="w3-button" type="button" name="loginBtn" onclick="msgLogin()">ok</button></p>

                    <script>
                        function msgLogin(){
                            document.getElementById('message').style.display='none';
                            refreshHistory();
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
                    <p>Sorry , your maintenance request did not send. Please try again</p>
                    <p><button class="w3-button" type="button" name="okBtn" onclick="errorFunc()">ok</button></p>
                    <p><button class="w3-button" type="button" name="cancelBtn" onclick="cancelFunc()">cancel</button></p>

                    <script>
                        function errorFunc(){
                            document.getElementById('error').style.display='none';
                        }
                        function cancelFunc(){
                            document.getElementById('error').style.display='none';
                        }
                    </script>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-theme-d3 w3-padding-16">
            <h5>Footer</h5>
        </footer>

        <footer class="w3-container w3-theme-d5">
            <p>Powered by <a href="https://www.polyvore.com" target="_blank">riuscita</a></p>
        </footer>

        <script>
            function loadFunc(){
                document.getElementById("userID").innerHTML+=sessionStorage.getItem('userID');
                document.getElementById('uid').innerHTML=sessionStorage.getItem('userID');
                loadHistory();
                refresh();
                loadCompletedHistory();
                loadFeedbackInput();
                setInterval(getNotification, 1000);
                
            }
            
            var llnid=0;
            
            function getNotification(){
                var idt=document.getElementById('uid').innerHTML;
                var cc=document.getElementById('count').innerHTML;
                cc=Number(cc);
                var myData = {'action':"getNotification",'uid':idt,'mnid':llnid};
                $.ajax({
                    url: "HODAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        if($.trim(res)){
                            //alert(res);
                            var ar=res.split('|');
                            $("#noti").append(ar[0]);
                            var hh=Number(ar[1]);
                            hh=cc+hh;
                            $("#count").html(hh);
                            llnid=ar[2];
                        }else{
                            //$("#count").html(ar[0]);
                        }
                    }
                });    
            }
            
            function showNoti(rid,type,nid){
                var cc=document.getElementById('count').innerHTML;
                cc=Number(cc);
                if(type=='HOD'){
                    refreshStatus(rid);
                }else if(type=='COM'){
                    /*loadHistory();
                    loadCompletedHistory();
                    loadFeedbackInput();*/
                }
                var xname='b'+nid
                var b=document.getElementById(xname);
                b.style.display='none';
                markNotification(nid);
                var hh=cc-1;
                $("#count").html(hh);
            }
            
            function markNotification(nid){
                var myData = {'action':"markNotification",'nid': nid};
                $.ajax({
                    url: "userRequestListAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        //$("#responseDiv").html(data);
                    }  
                });
            }
            
            function refreshStatus(rid){
                var myData = {'action':"getStatus",'rid': rid};
                $.ajax({
                    url: "userRequestListAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        //$("#responseDiv").html(data);
                        if($.trim(res)){
                            var rrid='s'+rid;
                            document.getElementById(rrid).value=res;
                        }
                        
                    }  
                });
            }
            
            function refresh(){
                var idt=document.getElementById('uid').innerHTML;
                
                var myData = {"luid": idt};
                $.ajax({
                    url: "loginAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        //$("#responseDiv").html(data);
                                            
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
            
            var rt=false;
            function loadHistory(){
                var idt=document.getElementById('uid').innerHTML;
                
                var myData = {'action':"getAllRecords",'luid': idt};
                $.ajax({
                    url: "userRequestListAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        var nn="<center><img src='images/173841-200.png' width='10%' height:='10%'/><p>No completed requests yet...</p></center>";
                        if(!$.trim(res)){
                            $("#reqTable").html(nn);
                            rt=true;
                        }else{
                            if(rt){
                                var fr='<tr class="w3-theme-d5"><th>Request Name</th><th>Date</th><th>Progress</th><th>Status</th></tr>';
                                $("#reqTable").html(fr+res);
                                rt=false;
                            }else{
                                $("#reqTable").append(res);
                            }
                        }
                        
                    }  
                });
            }
            var ct=false;
            function loadCompletedHistory(){
                var idt=document.getElementById('uid').innerHTML;
                var nn="<center><img src='images/173841-200.png' width='10%' height:='10%'/><p>No completed requests yet...</p></center>";
                
                var myData = {'action':"getCompletedRequests",'luid': idt};
                $.ajax({
                    url: "userRequestListAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        //$("#responseDiv").html(data);
                        if(!$.trim(res)){
                            $("#comTable").html(nn);
                            ct=true;
                        }else{
                            $("#comTable").append(res);
                            ct=false;
                        }
                    }  
                });
            }
            
            function refreshCompletedHistory(rid){
                //called when req is completed at last
                var idt=document.getElementById('uid').innerHTML;
                
                var myData = {'action':"getStatus",'rid': rid};
                $.ajax({
                    url: "userRequestListAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        //$("#responseDiv").html(data);
                        if($.trim(res)){
                            if(ct){
                                var st='<tr class="w3-theme-d2"><th>Request Name</th><th>Requested Data</th><th>Completed Date</th><th>Feedback</th></tr>';
                                $("#comTable").append(res+st);
                                ct=false;
                            }else{
                                $("#comTable").append(res);
                            }                            
                        }
                        
                    }  
                });
            }
            
            
            function loadFeedbackInput(){
                var idt=document.getElementById('uid').innerHTML;
                var nn="<center><img src='images/173841-200.png' width='10%' height:='10%'/><p>No completed requests yet...</p></center>";
                
                var myData = {'action':"getFeedbackList",'luid': idt};
                $.ajax({
                    url: "userRequestListAction.php",
                    type: "POST",
                    data: myData,
                    success: function(res) {
                        //$("#responseDiv").html(data);
                        if(!$.trim(res)){
                            
                            $("#feedback").html(nn);
                        }else{
                            $("#feedback").append(res);
                        }
                        
                        
                    }  
                });
            }
            
            function sendFeedback(rid,fdbi){
                var val=document.getElementById("fd"+fdbi).value;
                var fr="#"+"fd"+fdbi;
                if(val!=""){
                    var myData = {'action':"logFeedback",'lrid': rid,'fdb':val};
                    $.ajax({
                        url: "userRequestListAction.php",
                        type: "POST",
                        data: myData,
                        success: function(res) {
                            var f=document.getElementById("fd"+fdbi);
                            var b=document.getElementById("bt"+fdbi);
                            var t=document.getElementById("tx"+fdbi);
                            f.style.display='none';
                            b.style.display='none';
                            t.className += " w3-show";
                            loadCompletedHistory();
                        }  
                    });    
                }else{
                    alert("Please enter feedback")
                }
            }
            
        </script>


    </body>
</html> 

