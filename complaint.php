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
    <title>Register complaint</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>


}
.contact-box{
	width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}



.right{
	padding: 0px 40px;
}

h2{
	position: relative;
	margin-bottom: 45px;
	font-size: 30px;
	padding: 15px 40px;
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
        <img src="Images/logo.jpg" class="profile_image" alt="">
        <h4> <?php echo $_SESSION['username']?> </h4>
      </center>
      <a href="Welcome.php" class="active"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="event_board.php"><i class="fas fa-bullhorn"></i><span>Events Board</span></a>
      <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Bill Payment</span></a>      
      <a href="complaint.php"><i class="fas fa-envelope-open-text"></i><span>Feedback</span></a>

      
   <!--    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->

    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br>
    <div class="container">
		<div class="contact-box">
			
			<div class="right">
				<h2>Register Your Valuable Feedback</h2>
       <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd8gPXZwgmej2EzuUukVFfidMwbSv1MyY6mEde402fBI4XnYQ/viewform?embedded=true" width="1000" height="1005" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
			</div>
		</div>
	</div>
  </div>
</body>
</html>
  }
}
?>










