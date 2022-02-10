<?php
  function print_price($eth, $btc, $bnb, $sol){    
    echo "ETH : ";
    echo $eth;
    echo "<br>";
    echo "BTC : ";
    echo $btc;
    echo "<br>";
    echo "BNB : ";
    echo $bnb;
    echo "<br>";
    echo "SOL : ";
    echo $sol;
}

function log_date($path){
  $date = getdate();
  $fp = fopen($path, 'a');
  var_dump(implode(date[4]));
  print_r(array_keys($date));
  fwrite($fp, implode(array_keys($date, "mday"))."/".implode(array_keys($date, "mon"))." ".implode(array_keys($date,"hours"))." : ".implode(array_keys($date,"minutes"))."\n");
  fclose($fp);
}

function append_log($path, $value){
  $fp = fopen($path, 'a');
  fwrite($fp, $value.",");
  log_date($path);
  fclose($fp);
}

function print_message($string, $color, $type){

  echo '<'.$type.' style="Color:'.$color.'">'.$string.'</'.$type.'>';
}

function print_tab(){
  echo "&nbsp;&nbsp;&nbsp;&nbsp;";
}
?>