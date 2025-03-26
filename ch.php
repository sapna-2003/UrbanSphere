<?php
require 'vendor/autoload.php';


\Stripe\Stripe::setApiKey('sk_test_51QtYkn2NnsEnTbxIUPanSApGy8I31cyX35QNimEIY9LPHUaDBhTN6xtlsVBAbloMUTWbTZsFOHa6X6XpIjhJUqBy004xnb5Zto'); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = isset($_POST['amount']) ? intval($_POST['amount']) : 80000; // Rs 800 (amount in paise)
    $name = htmlspecialchars($_POST['name']);
    $flatno = htmlspecialchars($_POST['flatno']);

    try {
        // Create Stripe Checkout session
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'customer_email' => $_POST['email'],
            'line_items' => [[
                    'price_data' => [
                    'currency' => 'inr',
                    'product_data' => ['name' => "Maintenance Bill for Flat $flatno"],
                    'unit_amount' => $amount, 
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost/Society-Management-System-main/Society-Management-System-main/tq.php',
            'cancel_url' => 'http://localhost/Society-Management-System-main/Society-Management-System-main/m_bill.php',
        ]);

        // Redirect to Stripe Checkout page
        header("Location: " . $session->url);
        exit;
    } catch (\Stripe\Exception\ApiErrorException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
