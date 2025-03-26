<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.html");
    exit;
}

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
            height: 800px; 
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

      
   <!--    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->

    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br>
    <div class="container">
		<div class="contact-box">
			
			<div class="right">
		        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScdtjlMUKCOfu51_ydl0nMsAeq0y7CmuRQUVLGQFh57W61WEw/viewform?embedded=true" width="640" height="1060" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

			</div>
		</div>
	</div>
  </div>
</body>
</html>
  }
}
?>










