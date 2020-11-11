<?php

$ctx = stream_context_create(["http"=>["user_agent"=>"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:63.0) Gecko/20100101 Firefox/63.0"]]);

$btc_eur = file_get_contents('https://api.coinbase.com/v2/prices/spot?currency=EUR', true, $ctx);
$btc_eur = json_decode($btc_eur, true);
$btc_amount_eur = $btc_eur['data']['amount'];
$btc_balance = $btc_amount_eur * 0;
$btc_balance = round($btc_balance, 2);

// echo $btc_amount_eur, " €";

$btc_usd = file_get_contents('https://api.coinbase.com/v2/prices/spot?currency=USD', true, $ctx);
$btc_usd = json_decode($btc_usd, true);
$btc_amount_usd = $btc_usd['data']['amount'];

// echo $btc_amount_usd, " $";

$eth_eur = file_get_contents('https://api.coinbase.com/v2/prices/ETH-EUR/spot', true, $ctx);
$eth_eur = json_decode($eth_eur, true);
$eth_amount_eur = $eth_eur['data']['amount'];
$eth_balance = $eth_amount_eur * 0.29968586;
$eth_balance = round($eth_balance, 2);

// echo $eth_amount_eur, " €";

$eth_usd = file_get_contents('https://api.coinbase.com/v2/prices/ETH-USD/spot', true, $ctx);
$eth_usd = json_decode($eth_usd, true);
$eth_amount_usd = $eth_usd['data']['amount'];

// echo $eth_amount_usd, " $";

?>
