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
        <img src="Images/logo.jpg" class="profile_image" alt="logo_img">
        <h4> <?php echo $_SESSION['username']?> </h4>
      </center>
      <a href="Welcome.php" class="active"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="event_board.php"><i class="fas fa-bullhorn"></i><span>Events Board</span></a>
      <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Bill Payment</span></a>      
      <a href="complaint.php"><i class="fas fa-envelope-open-text"></i><span>Feedback</span></a>
         <!--    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->

    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br><br>
	<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSkEjuERDGAwN7lYiHJgAp_g3xdDPPAO3lZyFdqdg6LL2BnSCiQcgNMCiEfrtAWd76E1bB8b8t9kF4L/pubhtml?widget=true&amp;headers=false"></iframe>


        
    </div>
</body>
</html>