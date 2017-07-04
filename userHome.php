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
        <script>
            function loadFunc(){
                document.getElementById("uHomeName").innerHTML=sessionStorage.getItem('userName');
                document.getElementById("userID").innerHTML+=sessionStorage.getItem('userID');
                document.getElementById("userDsg").innerHTML+=sessionStorage.getItem('userDesg');
            }
        </script>

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-theme-d5 w3-right-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" title="Acount"><i class="fa fa-user w3-margin-right"></i>User</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Settings"><i class="fa fa-circle-o-notch"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Reports"><i class="fa fa-globe"></i></a>
                <div class="w3-dropdown-hover w3-hide-small w3-left">
                    <button class="w3-button w3-padding-large w3-right-align" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
                    <div class="w3-dropdown-content w3-card-4 w3-medium w3-bar-block" style="width:300px">
                        <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                        <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
                        <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
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
                            <p id="userDsg"><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i>Designation : </p>
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
                            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Profile</button>
                            <div id="Demo3" class="w3-hide w3-container">
                                <div class="w3-row-padding">
                                    <br>
                                    <div class="w3-half">
                                        <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                </div>
                            </div>
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
                                    <table class="w3-table w3-bordered">
                                        <col width="25%">
                                        <col width="50%">
                                        <col width="25%">
                                        <tr class="w3-theme-d5">
                                            <th>Request Name</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>Jill</td>
                                            <td><div class="w3-light-grey w3-round-xlarge">
                                                    <div class="w3-container w3-grey w3-round-xlarge" style="width:25%">25%</div>
                                                </div></td>
                                            <td>Supervised</td>
                                        </tr>
                                        <tr>
                                            <td>Eve</td>
                                            <td>Jackson</td>
                                            <td>94</td>
                                        </tr>
                                        <tr>
                                            <td>Adam</td>
                                            <td>Johnson</td>
                                            <td>67</td>
                                        </tr>
                                        <tr>
                                            <td>Adam</td>
                                            <td>Johnson</td>
                                            <td>67</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w3-container w3-padding w3-card-2 w3-white w3-round w3-margin" id="history">
                        <h6 class="w3-opacity">My History</h6>
                        <table class="w3-table w3-bordered">
                            <tr class="w3-theme-d2">
                                <th>Request Name</th>
                                <th>Requested Data</th>
                                <th>Completed Date</th>
                                <th>Feedback</th>
                            </tr>
                            <tr>
                                <td>Jill</td>
                                <td><div class="w3-light-grey w3-round-xlarge">
                                        <div class="w3-container w3-grey w3-round-xlarge" style="width:25%">25%</div>
                                    </div></td>
                                <td>Supervised</td>
                            </tr>
                            <tr>
                                <td>Eve</td>
                                <td>Jackson</td>
                                <td>94</td>
                            </tr>
                            <tr>
                                <td>Adam</td>
                                <td>Johnson</td>
                                <td>67</td>
                            </tr>
                            <tr>
                                <td>Adam</td>
                                <td>Johnson</td>
                                <td>67</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="w3-container w3-padding w3-card-2 w3-white w3-round w3-margin" id="comReq">
                        <h6 class="w3-opacity">Completed requests</h6>
                        <p><span class="w3-badge w3-green">1</span> Tap maintenance</p>
                        <p><input class="w3-input w3-padding-10 w3-border" type="text" placeholder="Write some feedback ..."></p>
                        <p><span class="w3-badge w3-green">2</span> Tap maintenance</p>
                        <p><input class="w3-input w3-padding-10 w3-border" type="text" placeholder="Write some feedback ..."></p>
                        <p><span class="w3-badge w3-green">3</span> Tap maintenance</p>
                        <p><input class="w3-input w3-padding-10 w3-border" type="text" placeholder="Write some feedback ..."></p>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w3-col m2">
                    <div class="w3-card-2 w3-round w3-white w3-center">
                        <div class="w3-container">
                            <p>Have a maintenence request ?</p>
                            <p><button class="w3-button w3-block w3-theme-l4">Create new request</button></p>
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

        <!-- Footer -->
        <footer class="w3-container w3-theme-d3 w3-padding-16">
            <h5>Footer</h5>
        </footer>

        <footer class="w3-container w3-theme-d5">
            <p>Powered by <a href="https://www.polyvore.com" target="_blank">riuscita</a></p>
        </footer>
        
    </body>
</html> 


<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
