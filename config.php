<?php
require('stripe-php-master/init.php');

$publishableKey = 'pk_test_51K9vOCETgOUDccbLLYCgUpGX9L9jKCFUXhr4lXyXWXOACZdU1V0FVasyMEnSARmH6ZcAa8FRioTTVNTVwGApJ8UM00ADqbOR0C';
$secretKey = 'sk_test_51K9vOCETgOUDccbL9TP6a8nRSd6Cih3N6f47mwMv29Wnv7YhaRXHKN4pDoZnSvURApMO7iXYWrjepMCmTBftCXFv00RvEI9SKe';

\Stripe\Stripe::setApiKey($secretKey);
?>
