<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background: #f4f4f4; }
        h2 { color: green; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: left; }
        .btn { padding: 10px 20px; font-size: 16px; border: none; cursor: pointer; border-radius: 5px; text-decoration: none; }
        .btn-primary { background-color: green; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Receipt 📜</h2>

        <table>
            <tr><td><strong>Receipt No:</strong></td><td>pi_3QwiQo2NnsEnTbxI1ESF2Dvo</td></tr>
            <tr><td><strong>Date:</strong></td><td><?php echo date("F d, Y h:i A"); ?></td></tr>
            <tr><td><strong>Amount Paid:</strong></td><td>₹ 500.00</td></tr>
            <tr><td><strong>Status:</strong></td><td style="color:green;">Succeeded</td></tr>
        </table>

        <br>
        <p> Click to download your Receipt 👇</p><br>

        <!-- ✅ Button to Download Receipt as PDF -->
        <a href="genreceipt.php" class="btn btn-primary">Download Receipt</a>
    </div>
</body>
</html>
