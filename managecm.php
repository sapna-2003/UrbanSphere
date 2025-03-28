<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//    header("location: cmlogin.php");
//    exit;
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Member</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
      .content-table {
  border-collapse: collapse;
  margin: 25px 0;
  margin-left: 13px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  /* overflow: hidden; */
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #19B3D3;
  color: #ffffff;
  text-align: left;
  font-weight: 900;
}

.content-table th,
.content-table td {
  padding: 15px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #82abc7;
}
.Table_btn{
    padding: 5px;
    background: #0B87A6;
    text-decoration: none;
    float: right;
    margin-top: -3px;
    margin-right: 40px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Table_btn:hover{
    background: #19B3D3;
  }
  .Table_btn1{
    padding: 8px;
    background: #0B87A6;
    text-decoration: none;
    float: left;
    margin-top: -1px;
    margin-left: 15px;
    margin-right: 40px;
    border-radius: 5px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Table_btn1:hover{
    background: #19B3D3;
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
        <img src="Images/cmlogo.jpg" class="profile_image" alt="Logo">
        <h4> Community Members </h4>
      </center>
      <a href="update_events.php"class="active"><i class="fas fa-bullhorn"></i><span>Update Events</span></a>
      <a href="events.php"><i class="fas fa-bullhorn"></i><span>View Meetings</span></a>
      <a href="viewcomplaints.php" ><i class="fas fa-envelope-open-text"></i><span>View Feedback</span></a>


    </div>
    <!--sidebar end-->


 
</body>
</html>