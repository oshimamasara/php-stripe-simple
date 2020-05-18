<?php
  if(!empty($_GET['tid'] )) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
  } else {
    header('Location: 1.php');
  }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ありがとうございました</title>
  <style>
  body{
    max-width: 700px;
    margin: 0 auto;
    padding: 3rem;
  }
  </style>
</head>
<body>
  <div class="container mt-4">
    <h1>お買い上げ頂きありがとうございました</h1>
    <ul>
        <li>購入商品： メルマガ</li>
        <li>ご購入価格： 300 円</li>
        <li>お取引 ID: <?php echo $tid; ?></li>
    </ul>
    <hr>
    <p><a href="subscription_pay.php" class="btn btn-light mt-2">もどる</a></p>
  </div>
</body>
</html>