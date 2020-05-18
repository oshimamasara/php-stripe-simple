<h1>hello8</h1>
<?php
  require_once('vendor/autoload.php');

  \Stripe\Stripe::setApiKey('sk_test_CcG5lG0S9hQRlcTKgv89mzaz00RVA9izTo');

  //$stripe = new \Stripe\StripeClient('sk_test_CcG5lG0S9hQRlcTKgv89mzaz00RVA9izTo');
  $customer = \Stripe\Customer::create(array(
    "name" => 'アギト',
    "email" => 'oshimamasara@gmail.com'
  ));
  // Create Subscription
  $subsc = \Stripe\Subscription::create([
    "customer" => $customer->id,
    'items' => [['plan' => 'plan_HISNoTCqknnvPr']],
  ]);

  echo $subsc;
