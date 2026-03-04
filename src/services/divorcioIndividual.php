<?php

function divorcioIndividual ($valor) {
    $emolumento = $frj = $issqn = $total = 'undefined';
  
    if ($valor <= 97195.46) {
        $emolumento = 601.77;
        $frj = 136.78;
        $issqn = 18.05;
    } else if ($valor < 206798.84) {
        $emolumento = 1221.22;
        $frj = 277.58;
        $issqn = 36.64;
    } else  {
        $emolumento = 2407.13;
        $frj = 547.14;
        $issqn = 72.21;
    }


    $total = $emolumento + $frj + $issqn;

    $result = [
        'emolumento' => $emolumento,
        'frj' => $frj,
        'issqn' => $issqn,
        'total' => $total
    ];

    return $result;    
}
