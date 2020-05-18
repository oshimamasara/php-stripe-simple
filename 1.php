<?php
// check Comporser   http://stripe.o-namae.com/1.php

require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey("sk_test_CcG5lG0S9hQRlcTKgv89mzaz00RVA9izTo");
$stripe = new \Stripe\StripeClient('sk_test_CcG5lG0S9hQRlcTKgv89mzaz00RVA9izTo');
$customer = $stripe->customers->create([
    'description' => 'example customer',
    'email' => 'email@example.com',
    'payment_method' => 'pm_card_visa',
]);
echo $customer;
echo 'Thank you!';
?>
