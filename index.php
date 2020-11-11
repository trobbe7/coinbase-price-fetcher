<?php
require_once('./coinbase.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="./assets/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript" src="./assets/script.js"></script>

</head>

<body onload="load()">

<div class="split left">
  <div class="centered">
    <img src="./assets/btc.png" alt="Logo Bitcoin">
    <h2><?php echo $btc_amount_eur, " €";?></h2>
    <p><?php echo $btc_amount_usd, " $";?></p>

    <?php
// coinbase.php - Display your BTC balance if you have one

//
//    if ($btc_balance > 1) {
//      echo ('<hr />');
//      echo ('<h2>' . $btc_balance . ' € </h2>');
//    }
//    else {
//
//    }
    ?>

  </div>
</div>

<div class="split right">
  <div class="centered">
    <img src="./assets/eth.png" alt="Logo Ethereum">
    <h2 class="padding"><?php echo $eth_amount_eur, " €";?></h2>
    <p><?php echo $eth_amount_usd, " €";?></p>

    <?php
// coinbase.php - Display your ETH balance if you have one

//    if ($eth_balance > 1) {
//      echo ('<hr />');
//      echo ('<h2>' . $eth_balance . ' € </h2>');
//    }
//    else {
//
//    }
    ?>

  </div>
</div>

</body>
</html>
