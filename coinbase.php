<?php

$balance_display = 0.00000001; // minimum value to display the balance - need at least 0.01€ for the balance to display

$your_btc_balance = 0; // use a point rather than a comma for the decimal - put to 0 if you want to disable the balance function
$your_eth_balance = 0; // use a point rather than a comma for the decimal - put to 0 if you want to disable the balance function

$ctx = stream_context_create(["http"=>["user_agent"=>"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:63.0) Gecko/20100101 Firefox/63.0"]]);

$btc_eur = file_get_contents('https://api.coinbase.com/v2/prices/spot?currency=EUR', true, $ctx);
$btc_eur = json_decode($btc_eur, true);
$btc_amount_eur = $btc_eur['data']['amount'];
$btc_balance = $btc_amount_eur * $your_btc_balance;
$btc_balance = round($btc_balance, 2);

$btc_usd = file_get_contents('https://api.coinbase.com/v2/prices/spot?currency=USD', true, $ctx);
$btc_usd = json_decode($btc_usd, true);
$btc_amount_usd = $btc_usd['data']['amount'];

$eth_eur = file_get_contents('https://api.coinbase.com/v2/prices/ETH-EUR/spot', true, $ctx);
$eth_eur = json_decode($eth_eur, true);
$eth_amount_eur = $eth_eur['data']['amount'];
$eth_balance = $eth_amount_eur * $your_eth_balance;
$eth_balance = round($eth_balance, 2);

$eth_usd = file_get_contents('https://api.coinbase.com/v2/prices/ETH-USD/spot', true, $ctx);
$eth_usd = json_decode($eth_usd, true);
$eth_amount_usd = $eth_usd['data']['amount'];

?>
