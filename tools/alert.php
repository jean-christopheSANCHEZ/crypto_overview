<?php 

function price_range($basse, $haute, $currency, $message){
    $price = get_price(currency_to_link($currency));

    if($price < $basse){
        $string = $currency . $message .$basse;
        echo "<script type='text/javascript'>alert('$string');</script>";
    }elseif($price > $haute){
        $string = $currency . $message .$haute;
        echo "<script type='text/javascript'>alert('$string');</script>";
    }
    else{
        //echo "<script type='text/javascript'>alert('OK');</script>";
    }
}

function price_range_in($basse, $currency, $message){
    $price = get_price(currency_to_link($currency));

    if($price > $basse){
        $string = $currency . $message .$basse;
        echo "<script type='text/javascript'>alert('$string');</script>";
    }
    else{
        //echo "<script type='text/javascript'>alert('OK');</script>";
    }
}

function alert_color_in($basse, $currency){
    $price = get_price(currency_to_link($currency));
    if($price > $basse){
        echo "style='background-color:red'";
    }
    else{
        //echo "style='background-color:green'";
    }
}

function alert_color($basse, $haute, $currency){
    $price = get_price(currency_to_link($currency));
    if($price < $basse){
        echo "style='background-color:orange'";
    }elseif($price > $haute){
        echo "style='background-color:orange'";
    }
    else{
        echo "style='background-color:green'";
    }
}

function launch_alert($refresh_time){
    while (true) {
        price_range(38000, 41000, "BTC", "a cassé la borne des ");
        sleep($refresh_time);
    }
}

?>