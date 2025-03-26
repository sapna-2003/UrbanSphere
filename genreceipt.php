require 'vendor/autoload.php';
require_once('tcpdf/tcpdf.php');
session_start(); 

\Stripe\Stripe::setApiKey('sk_test_51QtYkn2NnsEnTbxIUPanSApGy8I31cyX35QNimEIY9LPHUaDBhTN6xtlsVBAbloMUTWbTZsFOHa6X6XpIjhJUqBy004xnb5Zto'); 

$session_id = $_GET['session_id'] ?? '';

if ($session_id) {
    try {
        // ✅ Retrieve the Stripe Checkout Session
        $session = \Stripe\Checkout\Session::retrieve($session_id);
        $payment_intent_id = $session->payment_intent;

        // ✅ Fetch Payment Intent to Get Receipt No
        $payment_intent = \Stripe\PaymentIntent::retrieve($payment_intent_id);
        $receiptNo = $payment_intent->charges->data[0]->receipt_number ?? $payment_intent->charges->data[0]->id;
        $amount = "₹ " . number_format($payment_intent->amount_received / 100, 2);
        $date = date("F d, Y h:i A", $payment_intent->created);
        $status = ucfirst($payment_intent->status);

    } catch (\Exception $e) {
        die("Error fetching receipt: " . $e->getMessage());
    }
} else {
    die("Session ID not found.");
}

// ✅ Generate PDF with Correct Receipt No
$pdf = new TCPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('UrbanSphere');
$pdf->SetTitle("Payment Receipt - Flat UNKNOWN");
$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

// ✅ Use Unicode Font (Supports ₹ Symbol)
$pdf->SetFont('dejavusans', '', 12);

// ✅ Generate Receipt Content
$html = "
<h2 style='text-align:center;color:green;'>Payment Receipt</h2>
<p style='text-align:center;'>Thank you for your payment.</p>
<table border='1' cellpadding='5'>
    <tr><td><strong>Receipt No:</strong></td><td>$receiptNo</td></tr>
    <tr><td><strong>Date:</strong></td><td>$date</td></tr>
    <tr><td><strong>Amount Paid:</strong></td><td>$amount</td></tr>
    <tr><td><strong>Status:</strong></td><td style='color:green;'>$status</td></tr>
</table>
<p style='text-align:center;'>Keep this receipt for your records.</p>
";

// ✅ Write to PDF
$pdf->writeHTML($html, true, false, true, false, '');

// ✅ Output PDF (Download)
$pdf->Output("Payment_Receipt.pdf", "D");
