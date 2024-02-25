<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="PaymentUi.css" />
</head>
<body>
<section class="container">
<?php

require('config.php');
session_start();
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
    $customername = $_SESSION['customername'];
    $contactno = $_SESSION['contactno'];
    $registration = $_SESSION['registration'];
    $smartcard = $_SESSION['smartcard'];
    $examfee = $_SESSION['examfee'];
    $sql = "INSERT INTO `razor` (`order_id`, `razorpay_payment_id`, `status`, `email`, `price`,`customername`,`contactno`,`registration`,`smartcard`,`examfee`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$price','$customername','$contactno','$registration','$smartcard','$examfee')";
    if(mysqli_query($conn, $sql)){
        echo "payment details inserted to db";
    }

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>

<a href="../student_profile.php"><button class="bttn">Back</button></a>
</section>

</body>
</html>

