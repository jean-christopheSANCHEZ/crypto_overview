<?php 

function currency_to_link($currency){
  $link = 'https://www.binance.com/fr/trade/'.$currency.'_USDT?layout=pro';
  return $link;
}

function get_price($link){
  $mkr_usdt = file_get_contents($link);
  $doc = new DOMDocument();
  $doc->loadHTML($mkr_usdt);
  $title = $doc->getElementsByTagName("title");
  foreach($title as $title_value) {
    $tmp=  $title_value->nodeValue;
  }
  $mkr = explode(" ",$tmp);
  return $mkr[0];
}

?>