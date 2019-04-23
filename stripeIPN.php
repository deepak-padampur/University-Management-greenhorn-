<?php
require_once "config.php";
\Stripe\Stripe::setVerifySslCerts(false);

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:

$productID=$_GET['id'];
if(!isset($_POST['stripe']) || !isset($products[$productID])){
    header("Location:pricing.php");
    exit();
}

$token = $_POST['stripeToken'];
$email =$_POST['stripeEmail'];

 
$charge = \Stripe\Charge::create([
    'amount' => $products[$productID]["price"],
    'currency' => 'INR',
    'description' =>  $products[$productID]["title"],
    'source' => $token,
]);
//send email
echo "('success! you have been charged $' .($products[$productID]['price'])'";
?>