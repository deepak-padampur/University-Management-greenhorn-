<?php
require_once "stripe-php-master/init.php";
require_once "products.php";
$stripeDetails=array(
  "secretKey" =>"sk_test_gvPu8ju9sCE2K5ZAebUzRL9C",
  "publishableKey" =>"pk_test_O5J6Km4GJC2xZ4q0wWhxS8cJ"


);



// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);


?>