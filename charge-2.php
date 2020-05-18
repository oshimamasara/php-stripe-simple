<?php
  require_once('vendor/autoload.php');
  \Stripe\Stripe::setApiKey('sk_test_CcG5lG0S9hQRlcTKgv89mzaz00RVA9izTo');

  // Sanitize POST Array
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $name = $POST['name'];
  $email = $POST['email'];
  $token = $POST['stripeToken'];
  //echo $name;
  //echo $token;
  //echo '-------'."\n";

  // Create Customer In Stripe
  $customer = \Stripe\Customer::create(array(
    "name" => $name,
    "email" => $email,
    "source" => $token
  ));
  //echo $customer;
  //echo '-------'."\n";
  $subsc = \Stripe\Subscription::create([
    "customer" => $customer->id,
    'items' => [['plan' => 'plan_HISNoTCqknnvPr']],
  ]);
  //echo $subsc;

  // Redirect to success  echo しまくってたら header ❌
  header('Location: success_subsc.php?tid='.$subsc->id);
  //require 'success_subsc.php';
  //echo 'FINISH';