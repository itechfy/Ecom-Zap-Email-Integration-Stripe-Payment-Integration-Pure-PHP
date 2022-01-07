<?php
include("config.php");

$token = $_POST["stripeToken"];
$contact_name = $_POST["name"];
$token_card_type = $_POST["stripeTokenType"];
$email = $_POST["stripeEmail"];
$amount = $_POST["money"];
$desc = $_POST["description"];

$charge = \Stripe\Charge::create([
    'amount'=>str_replace(",","",$amount) * 100,
    'description' => $desc,
    'currency' => 'usd',
    'source'=>$token,
]);
if($charge){
    //show success msg
    echo "Sent";
}


?>