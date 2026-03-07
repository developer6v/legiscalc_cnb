<?php

function divorcioIndividual ($valor) {
    $emolumento = $frj = $total = 'undefined';
  
    if ($valor <= 93295.7) {
        $emolumento = 577.63;
        $frj = 131.29;
    } else if ($valor < 198501.48) {
        $emolumento = 1172.23;
        $frj = 266.44;
    } else  {
        $emolumento = 2310.55;
        $frj = 525.18;
    }

    $total = $emolumento + $frj;

    $result = [
        'emolumento' => $emolumento,
        'frj' => $frj,
        'total' => $total
    ];

    return $result;    
}
?>