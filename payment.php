<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.html");
    exit;
}

?>

<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payment</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
      .far{
        color:#a7abde;
        padding-left: 15px;
        
      }
      .col-div-3 .box p{
        font-size: 25px;

      }
      .box .fas{
        color:#a7abde;
        position:absolute;
        padding-top: 50px;
        

      }
      .box .fas .fa-home{
        color:#a7abde;
        padding-left: 20px;
      }
      .box p{

	}
       .bill-option {
            margin: 10px 10px 10px 300px;
        }
        .bill-option button {
            display: block;
            width: 500px;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .bill-option button:hover {
            background-color: MediumSeaGreen;
        }
	.bill-image {
            text-align: center; 
            margin-top: 80px; 
        }
        .bill-image img {
            max-width: 480px; 
            height: auto;
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
    
      <div class="content">
        <div class="container">
	   <div class="bill-image">
                <img src="images/bill_img.jpg" alt="Bill Payment Illustration">
           </div>
	   <form method="POST" >
                <div class="bill-option">
                  <a href="waterbill.php">
                  <button type="button">Maintenance Bill</button></a>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>