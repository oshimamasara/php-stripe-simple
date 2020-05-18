<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Pay Page</title>
</head>
<body>
    <h2>（テスト）メルマガに登録</h2>
    <h2>月　300円</h2>
    <form action="./charge-2.php" method="post" id="payment-form">
    <div class="form-row">
        <input type="text" name="name" class="form-control StripeElement StripeElement--empty" placeholder="お名前"><br>
        <input type="email" name="email" class="form-control StripeElement StripeElement--empty" placeholder="メールアドレス">
        <div id="card-element" class="form-control"></div>
        <div id="card-errors" role="alert"></div>
    </div>
    <button>購入</button>
    </form>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="js/charge.js"></script>
</body>
</html>