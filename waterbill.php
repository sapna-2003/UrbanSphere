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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaterBill</title>
<script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
             background-image: linear-gradient(rgb(211, 203, 241),rgb(205, 232, 241));
        }
        .container {
            display: flex;
            height:60%;
            width: 80%;
            background: grey;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .image-section {
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-section img {
            width: 98%;
            height: 98%;
            object-fit: cover; 
        }
        .form-section {
            width: 50%;
            padding: 20px;
            background-color: #e6ccff; 
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }
            label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input {
            width: 88%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color:DarkViolet ;

    color: white;
    font-size: 15px;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    border-radius: 30px;
    cursor: pointer;
    transition: 0.3s;
    display: block;
    margin: 10px auto;

        }
        .btn:hover {
            background-color: DarkMagenta;
    transform: scale(1.05);
        }
        a{
             display: block;
    text-align: center;
    font-size: 16px;
    color: #6a11cb;
    font-weight: bold;
    margin-top: 10px;
    text-decoration: none;
    transition: 0.3s;

        } 
       a:hover {
    color: #2575fc;
    text-decoration: underline;
}
    </style>
</head>
<body>

    <div class="container">
        <div class="image-section">
          <img src="Images/main_bill_img.jpg" >            
        </div>

        <div class="form-section">
            <h2>Presonal Details</h2>
            <form action="charge.php" method="POST">
                <div class="form-group">
                   <label for="name">Resident Name:</label>
                   <input type="text" id="name" name="name" value="<?php echo $_SESSION['username']; ?>" readonly>
                </div>


                <br>
                
                <input type="hidden" name="amount" value="50000">
                
                   <button class="btn" type="submit">Pay Bill</button>
               <a href="payment.php">Go Back</a>

              </form>
        </div>
    </div>

</body>
</html>
