<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Crypto currency</title>
  <meta name="description" content="Listings crypto price from binance.com">
  <script type="text/javascript" src="js/get_title.js"></script>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
      include __DIR__ . '/tools/get_price.php';
      include __DIR__ . '/tools/print.php';
      include __DIR__ . '/tools/alert.php';
    ?>
    <div class="split left">
      <h1>Fondamentaux :</h1>
      <p id="BTC" <?php alert_color(38000,41000, "BTC")?>><a style="text-decoration:none" href='https://www.binance.com/fr/trade/BTC_USDT?layout=pro' target="_blank">BTC : </a><?php print_message(get_price(currency_to_link('BTC')), "red", "span"); print_tab(); print_message("on passe entre 38000 et 41000 : moment achat !", "blue", "span")?></p>
      <p id="ETH" <?php alert_color(2200,3000, "ETH")?>><a style="text-decoration:none" href='https://www.binance.com/fr/trade/ETH_USDT?layout=pro' target="_blank">ETH : </a><?php print_message(get_price(currency_to_link('ETH')), "red", "span");?></p>
      <p id="BNB" <?php alert_color(320,390, "BNB")?>><a style="text-decoration:none" href='https://www.binance.com/fr/trade/BNB_USDT?layout=pro' target="_blank">BNB : </a><?php print_message( get_price(currency_to_link('BNB')), "red", "span");?></p>
      <p id="SOL" <?php alert_color(90,105, "SOL")?>><a style="text-decoration:none" href='https://www.binance.com/fr/trade/SOL_USDT?layout=pro' target="_blank">SOL : </a><?php print_message(get_price(currency_to_link('SOL')), "red", "span");?></p>
    </div>
    <div class="split right">
      <h1>Alt potentiel :</h1>
      <p id="FTT" <?php alert_color(36,40, "FTT")?>><a style="text-decoration:none" href='https://www.binance.com/fr/trade/FTT_USDT?layout=pro' target="_blank">FTT : </a><?php print_message(get_price(currency_to_link('FTT')), "red", "span"); print_tab(); print_message("entre 36 et 40", "blue", "span");?></p>
      <p id="MKR" <?php alert_color(1700,2300, "MKR")?>><a style="text-decoration:none" href='https://www.binance.com/fr/trade/MKR_USDT?layout=pro' target="_blank">MKR : </a><?php print_message(get_price(currency_to_link('MKR')), "red", "span"); print_tab(); print_message("entre 2300 et 1700, si on casse 1700 chaud", "blue", "span");?></p>
      <p id="SHIB" <?php alert_color_in(0.0001, "SHIB")?>><a style="text-decoration:none" href='https://www.binance.com/fr/trade/SHIB_USDT?layout=pro' target="_blank">SHIB : </a><?php print_message(get_price(currency_to_link('SHIB')), "red", "span"); print_tab(); print_message("prix achat : 0.000032", "blue", "span");?></p>
      <p id="SAND"><a style="text-decoration:none" href='https://www.binance.com/fr/trade/SAND_USDT?layout=pro' target="_blank">SAND : </a><?php print_message(get_price(currency_to_link('SAND')), "red", "span"); print_tab(); print_message("meta potentiel", "blue", "span");?></p>
      <p id="MANA"><a style="text-decoration:none" href='https://www.binance.com/fr/trade/MANA_USDT?layout=pro' target="_blank">MANA : </a><?php print_message(get_price(currency_to_link('MANA')), "red", "span"); print_tab(); print_message("meta potentiel", "blue", "span");?></p>
    
    </div>

    <?php 
      //launch_alert(10);
      price_range(38000,41000,"BTC", " a cassé la borne des ");
      price_range(2200,3000,"ETH", " a cassé la borne des ");
      price_range(320, 390,"BNB", " a cassé la borne des ");
      price_range(90,105,"SOL", " a cassé la borne des ");
      price_range(36,40,"FTT", " a cassé la borne des ");
      price_range(1700,2300,"MKR", " a cassé la borne des ");
      price_range_in(0.0001,"SHIB", " *100 ");
    ?>

</body>
</html>