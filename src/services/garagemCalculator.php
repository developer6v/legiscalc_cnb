<?php

function calculatorGaragem ($valor) {
    $emolumento = $frj = $total = 'undefined';
    
    if ($valor >= 0 && $valor <= 13233.43) {
        $emolumento = 164.10;
        $frj = 37.30;
    } elseif ($valor >= 13233.44 && $valor <= 19850.14) {
        $emolumento = 189.23;
        $frj = 43.01;
    } elseif ($valor >= 19850.15 && $valor <= 27790.20) {
        $emolumento = 268.64;
        $frj = 61.06;
    } elseif ($valor >= 27790.21 && $valor <= 34406.92) {
        $emolumento = 350.68;
        $frj = 79.71;
    } elseif ($valor >= 34406.93 && $valor <= 42346.98) {
        $emolumento = 438.02;
        $frj = 99.56;
    } elseif ($valor >= 42346.99 && $valor <= 51610.38) {
        $emolumento = 528.01;
        $frj = 120.02;
    } elseif ($valor >= 51610.39 && $valor <= 59550.44) {
        $emolumento = 621.97;
        $frj = 141.37;
    } elseif ($valor >= 59550.45 && $valor <= 68813.84) {
        $emolumento = 718.56;
        $frj = 163.33;
    } elseif ($valor >= 68813.85 && $valor <= 76753.90) {
        $emolumento = 819.14;
        $frj = 186.19;
    } elseif ($valor >= 76753.91 && $valor <= 87340.65) {
        $emolumento = 923.69;
        $frj = 209.95;
    } elseif ($valor >= 87340.66 && $valor <= 96604.05) {
        $emolumento = 1033.54;
        $frj = 234.92;
    } elseif ($valor >= 96604.06 && $valor <= 107190.79) {
        $emolumento = 1146.00;
        $frj = 260.49;
    } elseif ($valor >= 107190.80 && $valor <= 117777.54) {
        $emolumento = 1263.79;
        $frj = 287.26;
    } elseif ($valor >= 117777.55 && $valor <= 128364.28) {
        $emolumento = 1385.53;
        $frj = 314.93;
    } elseif ($valor >= 128364.29 && $valor <= 140274.37) {
        $emolumento = 1511.25;
        $frj = 343.51;
    } elseif ($valor >= 140274.38 && $valor <= 152184.45) {
        $emolumento = 1605.21;
        $frj = 364.86;
    } elseif ($valor >= 152184.46 && $valor <= 164094.54) {
        $emolumento = 1699.17;
        $frj = 386.22;
    } elseif ($valor >= 164094.55 && $valor <= 177327.97) {
        $emolumento = 1790.48;
        $frj = 406.98;
    } elseif ($valor >= 177327.98 && $valor <= 190561.42) {
        $emolumento = 1880.47;
        $frj = 427.43;
    } elseif ($valor >= 190561.43 && $valor <= 203794.85) {
        $emolumento = 1969.12;
        $frj = 447.58;
    } elseif ($valor >= 203794.86 && $valor <= 217028.27) {
        $emolumento = 2056.46;
        $frj = 467.43;
    } elseif ($valor >= 217028.28 && $valor <= 267028.27) {
        $emolumento = 2106.46;
        $frj = 478.80;
    } elseif ($valor >= 267028.28 && $valor <= 317028.27) {
        $emolumento = 2156.46;
        $frj = 490.16;
    } elseif ($valor >= 317028.28 && $valor <= 367028.27) {
        $emolumento = 2206.46;
        $frj = 501.53;
    } elseif ($valor >= 367028.28 && $valor <= 417028.27) {
        $emolumento = 2256.46;
        $frj = 512.89;
    } elseif ($valor >= 417028.28 && $valor <= 467028.27) {
        $emolumento = 2306.46;
        $frj = 524.26;
    } elseif ($valor >= 467028.28 && $valor <= 517028.27) {
        $emolumento = 2356.46;
        $frj = 535.62;
    } elseif ($valor >= 517028.28 && $valor <= 567028.27) {
        $emolumento = 2406.46;
        $frj = 546.99;
    } elseif ($valor >= 567028.28 && $valor <= 617028.27) {
        $emolumento = 2456.46;
        $frj = 558.35;
    } elseif ($valor >= 617028.28 && $valor <= 667028.27) {
        $emolumento = 2506.46;
        $frj = 569.72;
    } elseif ($valor >= 667028.28 && $valor <= 717028.27) {
        $emolumento = 2556.46;
        $frj = 581.08;
    } elseif ($valor >= 717028.28 && $valor <= 767028.27) {
        $emolumento = 2606.46;
        $frj = 592.45;
    } elseif ($valor >= 767028.28 && $valor <= 817028.27) {
        $emolumento = 2656.46;
        $frj = 603.81;
    } elseif ($valor >= 817028.28 && $valor <= 867028.27) {
        $emolumento = 2706.46;
        $frj = 615.18;
    } elseif ($valor >= 867028.28 && $valor <= 917028.27) {
        $emolumento = 2756.46;
        $frj = 626.54;
    } elseif ($valor >= 917028.28 && $valor <= 967028.27) {
        $emolumento = 2806.46;
        $frj = 637.91;
    } elseif ($valor >= 967028.28 && $valor <= 1017028.27) {
        $emolumento = 2856.46;
        $frj = 649.27;
    } elseif ($valor >= 1017028.28 && $valor <= 1067028.27) {
        $emolumento = 2906.46;
        $frj = 660.64;
    } elseif ($valor >= 1067028.28 && $valor <= 1117028.27) {
        $emolumento = 2956.46;
        $frj = 672.00;
    } elseif ($valor >= 1117028.28 && $valor <= 1167028.27) {
        $emolumento = 3006.46;
        $frj = 683.37;
    } elseif ($valor >= 1167028.28 && $valor <= 1217028.27) {
        $emolumento = 3056.46;
        $frj = 694.73;
    } elseif ($valor >= 1217028.28 && $valor <= 1267028.27) {
        $emolumento = 3106.46;
        $frj = 706.10;
    } elseif ($valor >= 1267028.28 && $valor <= 1317028.27) {
        $emolumento = 3156.46;
        $frj = 717.46;
    } elseif ($valor >= 1317028.28 && $valor <= 1367028.27) {
        $emolumento = 3206.46;
        $frj = 728.83;
    } elseif ($valor >= 1367028.28 && $valor <= 1417028.27) {
        $emolumento = 3256.46;
        $frj = 740.19;
    } elseif ($valor >= 1417028.28 && $valor <= 1467028.27) {
        $emolumento = 3306.46;
        $frj = 751.56;
    } elseif ($valor >= 1467028.28 && $valor <= 1517028.27) {
        $emolumento = 3356.46;
        $frj = 762.92;
    } elseif ($valor >= 1517028.28 && $valor <= 1567028.27) {
        $emolumento = 3406.46;
        $frj = 774.29;
    } elseif ($valor >= 1567028.28 && $valor <= 1617028.27) {
        $emolumento = 3456.46;
        $frj = 785.65;
    } elseif ($valor >= 1617028.28 && $valor <= 1667028.27) {
        $emolumento = 3506.46;
        $frj = 797.02;
    } elseif ($valor >= 1667028.28 && $valor <= 1717028.27) {
        $emolumento = 3556.46;
        $frj = 808.38;
    } elseif ($valor >= 1717028.28 && $valor <= 1767028.27) {
        $emolumento = 3606.46;
        $frj = 819.75;
    } elseif ($valor >= 1767028.28 && $valor <= 1817028.27) {
        $emolumento = 3656.46;
        $frj = 831.11;
    } elseif ($valor >= 1817028.28 && $valor <= 1867028.27) {
        $emolumento = 3706.46;
        $frj = 842.48;
    } elseif ($valor >= 1867028.28 && $valor <= 1917028.27) {
        $emolumento = 3756.46;
        $frj = 853.84;
    } elseif ($valor >= 1917028.28 && $valor <= 1967028.27) {
        $emolumento = 3806.46;
        $frj = 865.21;
    } elseif ($valor >= 1967028.28 && $valor <= 2017028.27) {
        $emolumento = 3856.46;
        $frj = 876.57;
    } elseif ($valor >= 2017028.28 && $valor <= 2067028.27) {
        $emolumento = 3906.46;
        $frj = 887.94;
    } elseif ($valor >= 2067028.28 && $valor <= 2117028.27) {
        $emolumento = 3956.46;
        $frj = 899.30;
    } elseif ($valor >= 2117028.28 && $valor <= 2167028.27) {
        $emolumento = 4006.46;
        $frj = 910.67;
    } elseif ($valor >= 2167028.28 && $valor <= 2217028.27) {
        $emolumento = 4056.46;
        $frj = 922.03;
    } elseif ($valor >= 2217028.28 && $valor <= 2267028.27) {
        $emolumento = 4106.46;
        $frj = 933.40;
    } elseif ($valor >= 2267028.28 && $valor <= 2317028.27) {
        $emolumento = 4156.46;
        $frj = 944.76;
    } elseif ($valor >= 2317028.28 && $valor <= 2367028.27) {
        $emolumento = 4206.46;
        $frj = 956.13;
    } elseif ($valor >= 2367028.28 && $valor <= 2417028.27) {
        $emolumento = 4256.46;
        $frj = 967.49;
    } elseif ($valor >= 2417028.28 && $valor <= 2467028.27) {
        $emolumento = 4306.46;
        $frj = 978.86;
    } elseif ($valor >= 2467028.28 && $valor <= 2517028.27) {
        $emolumento = 4356.46;
        $frj = 990.22;
    } elseif ($valor >= 2517028.28 && $valor <= 2567028.27) {
        $emolumento = 4406.46;
        $frj = 1001.59;
    } elseif ($valor >= 2567028.28 && $valor <= 2617028.27) {
        $emolumento = 4456.46;
        $frj = 1012.95;
    } elseif ($valor >= 2617028.28 && $valor <= 2667028.27) {
        $emolumento = 4506.46;
        $frj = 1024.32;
    } elseif ($valor >= 2667028.28 && $valor <= 2717028.27) {
        $emolumento = 4556.46;
        $frj = 1035.68;
    } elseif ($valor >= 2717028.28 && $valor <= 2767028.27) {
        $emolumento = 4606.46;
        $frj = 1047.05;
    } elseif ($valor >= 2767028.28 && $valor <= 2817028.27) {
        $emolumento = 4656.46;
        $frj = 1058.41;
    } elseif ($valor >= 2817028.28 && $valor <= 2867028.27) {
        $emolumento = 4706.46;
        $frj = 1069.78;
    } elseif ($valor >= 2867028.28 && $valor <= 2917028.27) {
        $emolumento = 4756.46;
        $frj = 1081.14;
    } elseif ($valor >= 2917028.28 && $valor <= 2967028.27) {
        $emolumento = 4806.46;
        $frj = 1092.51;
    } elseif ($valor >= 2967028.28 && $valor <= 3017028.27) {
        $emolumento = 4856.46;
        $frj = 1103.87;
    } elseif ($valor >= 3017028.28 && $valor <= 3067028.27) {
        $emolumento = 4906.46;
        $frj = 1115.24;
    } elseif ($valor >= 3067028.28 && $valor <= 3117028.27) {
        $emolumento = 4956.46;
        $frj = 1126.60;
    } elseif ($valor >= 3117028.28 && $valor <= 3167028.27) {
        $emolumento = 5006.46;
        $frj = 1137.97;
    } elseif ($valor >= 3167028.28 && $valor <= 3217028.27) {
        $emolumento = 5056.46;
        $frj = 1149.33;
    } elseif ($valor >= 3217028.28 && $valor <= 3267028.27) {
        $emolumento = 5106.46;
        $frj = 1160.70;
    } elseif ($valor >= 3267028.28 && $valor <= 3317028.27) {
        $emolumento = 5156.46;
        $frj = 1172.06;
    } elseif ($valor >= 3317028.28 && $valor <= 3367028.27) {
        $emolumento = 5206.46;
        $frj = 1183.43;
    } elseif ($valor >= 3367028.28 && $valor <= 3417028.27) {
        $emolumento = 5256.46;
        $frj = 1194.79;
    } elseif ($valor >= 3417028.28 && $valor <= 3467028.27) {
        $emolumento = 5306.46;
        $frj = 1206.16;
    } elseif ($valor >= 3467028.28 && $valor <= 3517028.27) {
        $emolumento = 5356.46;
        $frj = 1217.52;
    } elseif ($valor >= 3517028.28) {
        $emolumento = 5392.18;
        $frj = 1225.64;
    }

    $total = $emolumento + $frj;

    $result = [
        'emolumento' => ($emolumento * 0.666666667),
        'frj' => ($frj * 0.666666667),
        'total' => ($total * 0.666666667),
    ];

    return $result;    
}
?>