<?php
session_start();
require 'vendor/autoload.php';  
\Stripe\Stripe::setApiKey('sk_test_51QtYkn2NnsEnTbxIUPanSApGy8I31cyX35QNimEIY9LPHUaDBhTN6xtlsVBAbloMUTWbTZsFOHa6X6XpIjhJUqBy004xnb5Zto');  // Replace with your actual Stripe Secret Key
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #A9C3D5, #C3D4E0); 
        }

        .contact-box {
            max-width: 850px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(to bottom, #A9C3D5, #C3D4E0); 
            box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
            padding: 25px 0px;
            margin: auto;
        }

        h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        table {
            width: 90%;
            border: 1px solid black;
            font-family: Arial, sans-serif;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;

        }

        th {
            background-color: #19B3D3;
            color: white;
            font-weight: bold;
            border: 1px solid black;
        }

        tr:nth-child(even) {
            background-color: #f5f5f7;
        }

        tr:hover {
            background-color: #ddd;
        }

        td:last-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <!-- Header -->
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

    <!-- Sidebar -->
    <div class="sidebar">
        <center>
            <img src="Images/logo.jpg" class="profile_image" alt="">
            <h4>Admin</h4>
        </center>
        <a href="managemem.php"><i class="fas fa-desktop"></i><span>Manage Residents</span></a>
        <a href="addnotice.php"><i class="fas fa-bullhorn"></i><span>Update Meetings</span></a>  
        <a href="admin_payment.php" class="active"><i class="fas fa-file-invoice-dollar"></i><span>View Payments</span></a>
    </div>

    <!-- Content -->
    <div class="content"><br><br><br>
        <div class="container">
            <div class="contact-box">
                <h2>Recent Payments</h2>
                <?php
                try {
                    $payments = \Stripe\PaymentIntent::all(['limit' => 10]);

                    echo "<table>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Currency</th>
                        <th>Status</th>
                    </tr>";

                    foreach ($payments->data as $payment) {
                        $paymentDate = date('M d, h:i A', $payment->created);
                        echo "<tr>
                        <td>{$paymentDate}</td>
                        <td>₹ " . number_format($payment->amount / 100, 2) . "</td>
                        <td>" . strtoupper($payment->currency) . "</td>
                        <td style='color:" . ($payment->status == 'succeeded' ? "green" : "red") . "; font-weight:bold;'>{$payment->status}</td>
                        </tr>";
                    }
                    echo "</table>";

                } catch (Exception $e) {
                    echo "<p style='color: red; font-weight: bold;'>Error fetching payments: " . $e->getMessage() . "</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
