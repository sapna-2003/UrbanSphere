<?php
session_start();


// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: Adminlogin.php");
//     exit;
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View complaints</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>

    <style>
.goog-inline-block.goog-float-left {
            display: none; /* Hide the title */
        }

 iframe {
            display: block;
            width: 990px;
            height: 600px; 
            border: none;
        }
</style>
</head>
<body>
<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Urban<span>Sphere</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="Images/cmlogo.jpg" class="profile_image" alt="logo">
        <h4> Community Members </h4>
      </center>
      <a href="update_events.php"class="active"><i class="fas fa-bullhorn"></i><span>Update Events</span></a>
      <a href="events.php"><i class="fas fa-bullhorn"></i><span>View Meetings</span></a>  
      <a href="viewcomplaints.php" ><i class="fas fa-envelope-open-text"></i><span>View Feedback</span></a>
      
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br><br>
	<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQbmJd33pD5wQ3HMHyM6jR1i8STEcBDDPUNA6BcGRLoINKOJr-aIZw22zwNkfH_mJ2SfLZ-bbVYbExA/pubhtml?widget=true&amp;headers=false" height="1050" width="990"></iframe>
        
    </div>
</body>
</html>