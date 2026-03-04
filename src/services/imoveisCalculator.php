<?php

function calculatorImoveis($valor) {
    $emolumento = $frj = $issqn = $total = 'undefined';


    $valor = (float) $valor;

    if ($valor >= 0.00 && $valor <= 13786.58) {
        $emolumento = 170.95; $frj = 38.85;  $issqn = 5.12;  $total = 214.92;

    } elseif ($valor >= 13786.59 && $valor <= 20679.87) {
        $emolumento = 197.13; $frj = 44.80;  $issqn = 5.91;  $total = 247.84;

    } elseif ($valor >= 20679.88 && $valor <= 28951.83) {
        $emolumento = 279.86; $frj = 63.61;  $issqn = 8.39;  $total = 351.86;

    } elseif ($valor >= 28951.84 && $valor <= 35845.12) {
        $emolumento = 365.33; $frj = 83.03;  $issqn = 10.95; $total = 459.31;

    } elseif ($valor >= 35845.13 && $valor <= 44117.08) {
        $emolumento = 456.32; $frj = 103.72; $issqn = 13.68; $total = 573.72;

    } elseif ($valor >= 44117.09 && $valor <= 53767.69) {
        $emolumento = 550.08; $frj = 125.03; $issqn = 16.50; $total = 691.61;

    } elseif ($valor >= 53767.70 && $valor <= 62039.64) {
        $emolumento = 647.96; $frj = 147.28; $issqn = 19.43; $total = 814.67;

    } elseif ($valor >= 62039.65 && $valor <= 71690.25) {
        $emolumento = 748.59; $frj = 170.15; $issqn = 22.45; $total = 941.19;

    } elseif ($valor >= 71690.26 && $valor <= 79962.21) {
        $emolumento = 853.38; $frj = 193.97; $issqn = 25.60; $total = 1072.95;

    } elseif ($valor >= 79962.22 && $valor <= 90991.48) {
        $emolumento = 962.30; $frj = 218.73; $issqn = 28.86; $total = 1209.89;

    } elseif ($valor >= 90991.49 && $valor <= 100642.09) {
        $emolumento = 1076.74; $frj = 244.74; $issqn = 32.30; $total = 1353.78;

    } elseif ($valor >= 100642.10 && $valor <= 111671.36) {
        $emolumento = 1193.90; $frj = 271.37; $issqn = 35.81; $total = 1501.08;

    } elseif ($valor >= 111671.37 && $valor <= 122700.64) {
        $emolumento = 1316.91; $frj = 299.26; $issqn = 39.50; $total = 1655.67;

    } elseif ($valor >= 122700.65 && $valor <= 133729.90) {
        $emolumento = 1443.44; $frj = 328.09; $issqn = 43.30; $total = 1814.83;

    } elseif ($valor >= 133729.91 && $valor <= 146137.83) {
        $emolumento = 1574.42; $frj = 357.86; $issqn = 47.23; $total = 1979.51;

    } elseif ($valor >= 146137.84 && $valor <= 158545.76) {
        $emolumento = 1672.30; $frj = 380.11; $issqn = 50.16; $total = 2102.57;

    } elseif ($valor >= 158545.77 && $valor <= 170953.69) {
        $emolumento = 1770.19; $frj = 402.36; $issqn = 53.10; $total = 2225.65;

    } elseif ($valor >= 170953.70 && $valor <= 184740.27) {
        $emolumento = 1865.32; $frj = 423.98; $issqn = 55.95; $total = 2345.25;

    } elseif ($valor >= 184740.28 && $valor <= 198526.88) {
        $emolumento = 1959.07; $frj = 445.29; $issqn = 58.77; $total = 2463.13;

    } elseif ($valor >= 198526.89 && $valor <= 212313.47) {
        $emolumento = 2051.42; $frj = 466.28; $issqn = 61.54; $total = 2579.24;

    } elseif ($valor >= 212313.48 && $valor <= 226100.05) {
        $emolumento = 2142.42; $frj = 486.97; $issqn = 64.27; $total = 2693.66;

    } elseif ($valor >= 226100.06 && $valor <= 276100.06) {
        $emolumento = 2192.42; $frj = 498.33; $issqn = 65.77; $total = 2756.52;

    } elseif ($valor >= 276100.07 && $valor <= 326100.07) {
        $emolumento = 2242.42; $frj = 509.70; $issqn = 67.27; $total = 2819.39;

    } elseif ($valor >= 326100.08 && $valor <= 376100.08) {
        $emolumento = 2292.42; $frj = 521.06; $issqn = 68.77; $total = 2882.25;

    } elseif ($valor >= 376100.09 && $valor <= 426100.09) {
        $emolumento = 2342.42; $frj = 532.43; $issqn = 70.27; $total = 2945.12;

    } elseif ($valor >= 426100.10 && $valor <= 476100.10) {
        $emolumento = 2392.42; $frj = 543.79; $issqn = 71.77; $total = 3007.98;

    } elseif ($valor >= 476100.11 && $valor <= 526100.11) {
        $emolumento = 2442.42; $frj = 555.16; $issqn = 73.27; $total = 3070.85;

    } elseif ($valor >= 526100.12 && $valor <= 576100.12) {
        $emolumento = 2492.42; $frj = 566.52; $issqn = 74.77; $total = 3133.71;

    } elseif ($valor >= 576100.13 && $valor <= 626100.13) {
        $emolumento = 2542.42; $frj = 577.89; $issqn = 76.27; $total = 3196.58;

    } elseif ($valor >= 626100.14 && $valor <= 676100.14) {
        $emolumento = 2592.42; $frj = 589.25; $issqn = 77.77; $total = 3259.44;

    } elseif ($valor >= 676100.15 && $valor <= 726100.15) {
        $emolumento = 2642.42; $frj = 600.62; $issqn = 79.27; $total = 3322.31;

    } elseif ($valor >= 726100.16 && $valor <= 776100.16) {
        $emolumento = 2692.42; $frj = 611.98; $issqn = 80.77; $total = 3385.17;

    } elseif ($valor >= 776100.17 && $valor <= 826100.17) {
        $emolumento = 2742.42; $frj = 623.35; $issqn = 82.27; $total = 3448.04;

    } elseif ($valor >= 826100.18 && $valor <= 876100.18) {
        $emolumento = 2792.42; $frj = 634.71; $issqn = 83.77; $total = 3510.90;

    } elseif ($valor >= 876100.19 && $valor <= 926100.19) {
        $emolumento = 2842.42; $frj = 646.08; $issqn = 85.27; $total = 3573.77;

    } elseif ($valor >= 926100.20 && $valor <= 976100.20) {
        $emolumento = 2892.42; $frj = 657.44; $issqn = 86.77; $total = 3636.63;

    } elseif ($valor >= 976100.21 && $valor <= 1026100.21) {
        $emolumento = 2942.42; $frj = 668.81; $issqn = 88.27; $total = 3699.50;

    } elseif ($valor >= 1026100.22 && $valor <= 1076100.22) {
        $emolumento = 2992.42; $frj = 680.17; $issqn = 89.77; $total = 3762.36;

    } elseif ($valor >= 1076100.23 && $valor <= 1126100.23) {
        $emolumento = 3042.42; $frj = 691.54; $issqn = 91.27; $total = 3825.23;

    } elseif ($valor >= 1126100.24 && $valor <= 1176100.24) {
        $emolumento = 3092.42; $frj = 702.90; $issqn = 92.77; $total = 3888.09;

    } elseif ($valor >= 1176100.25 && $valor <= 1226100.25) {
        $emolumento = 3142.42; $frj = 714.27; $issqn = 94.27; $total = 3950.96;

    } elseif ($valor >= 1226100.26 && $valor <= 1276100.26) {
        $emolumento = 3192.42; $frj = 725.63; $issqn = 95.77; $total = 4013.82;

    } elseif ($valor >= 1276100.27 && $valor <= 1326100.27) {
        $emolumento = 3242.42; $frj = 737.00; $issqn = 97.27; $total = 4076.69;

    } elseif ($valor >= 1326100.28 && $valor <= 1376100.28) {
        $emolumento = 3292.42; $frj = 748.36; $issqn = 98.77; $total = 4139.55;

    } elseif ($valor >= 1376100.29 && $valor <= 1426100.29) {
        $emolumento = 3342.42; $frj = 759.73; $issqn = 100.27; $total = 4202.42;

    } elseif ($valor >= 1426100.30 && $valor <= 1476100.30) {
        $emolumento = 3392.42; $frj = 771.09; $issqn = 101.77; $total = 4265.28;

    } elseif ($valor >= 1476100.31 && $valor <= 1526100.31) {
        $emolumento = 3442.42; $frj = 782.46; $issqn = 103.27; $total = 4328.15;

    } elseif ($valor >= 1526100.32 && $valor <= 1576100.32) {
        $emolumento = 3492.42; $frj = 793.82; $issqn = 104.77; $total = 4391.01;

    } elseif ($valor >= 1576100.33 && $valor <= 1626100.33) {
        $emolumento = 3542.42; $frj = 805.19; $issqn = 106.27; $total = 4453.88;

    } elseif ($valor >= 1626100.34 && $valor <= 1676100.34) {
        $emolumento = 3592.42; $frj = 816.55; $issqn = 107.77; $total = 4516.74;

    } elseif ($valor >= 1676100.35 && $valor <= 1726100.35) {
        $emolumento = 3642.42; $frj = 827.92; $issqn = 109.27; $total = 4579.61;

    } elseif ($valor >= 1726100.36 && $valor <= 1776100.36) {
        $emolumento = 3692.42; $frj = 839.28; $issqn = 110.77; $total = 4642.47;

    } elseif ($valor >= 1776100.37 && $valor <= 1826100.37) {
        $emolumento = 3742.42; $frj = 850.65; $issqn = 112.27; $total = 4705.34;

    } elseif ($valor >= 1826100.38 && $valor <= 1876100.38) {
        $emolumento = 3792.42; $frj = 862.01; $issqn = 113.77; $total = 4768.20;

    } elseif ($valor >= 1876100.39 && $valor <= 1926100.39) {
        $emolumento = 3842.42; $frj = 873.38; $issqn = 115.27; $total = 4831.07;

    } elseif ($valor >= 1926100.40 && $valor <= 1976100.40) {
        $emolumento = 3892.42; $frj = 884.74; $issqn = 116.77; $total = 4893.93;

    } elseif ($valor >= 1976100.41 && $valor <= 2026100.41) {
        $emolumento = 3942.42; $frj = 896.11; $issqn = 118.27; $total = 4956.80;

    } elseif ($valor >= 2026100.42 && $valor <= 2076100.42) {
        $emolumento = 3992.42; $frj = 907.47; $issqn = 119.77; $total = 5019.66;

    } elseif ($valor >= 2076100.43 && $valor <= 2126100.43) {
        $emolumento = 4042.42; $frj = 918.84; $issqn = 121.27; $total = 5082.53;

    } elseif ($valor >= 2126100.44 && $valor <= 2176100.44) {
        $emolumento = 4092.42; $frj = 930.20; $issqn = 122.77; $total = 5145.39;

    } elseif ($valor >= 2176100.45 && $valor <= 2226100.45) {
        $emolumento = 4142.42; $frj = 941.57; $issqn = 124.27; $total = 5208.26;

    } elseif ($valor >= 2226100.46 && $valor <= 2276100.46) {
        $emolumento = 4192.42; $frj = 952.93; $issqn = 125.77; $total = 5271.12;

    } elseif ($valor >= 2276100.47 && $valor <= 2326100.47) {
        $emolumento = 4242.42; $frj = 964.30; $issqn = 127.27; $total = 5333.99;

    } elseif ($valor >= 2326100.48 && $valor <= 2376100.48) {
        $emolumento = 4292.42; $frj = 975.66; $issqn = 128.77; $total = 5396.85;

    } elseif ($valor >= 2376100.49 && $valor <= 2426100.49) {
        $emolumento = 4342.42; $frj = 987.03; $issqn = 130.27; $total = 5459.72;

    } elseif ($valor >= 2426100.50 && $valor <= 2476100.50) {
        $emolumento = 4392.42; $frj = 998.39; $issqn = 131.77; $total = 5522.58;

    } elseif ($valor >= 2476100.51 && $valor <= 2526100.51) {
        $emolumento = 4442.42; $frj = 1009.76; $issqn = 133.27; $total = 5585.45;

    } elseif ($valor >= 2526100.52 && $valor <= 2576100.52) {
        $emolumento = 4492.42; $frj = 1021.12; $issqn = 134.77; $total = 5648.31;

    } elseif ($valor >= 2576100.53 && $valor <= 2626100.53) {
        $emolumento = 4542.42; $frj = 1032.49; $issqn = 136.27; $total = 5711.18;

    } elseif ($valor >= 2626100.54 && $valor <= 2676100.54) {
        $emolumento = 4592.42; $frj = 1043.85; $issqn = 137.77; $total = 5774.04;

    } elseif ($valor >= 2676100.55 && $valor <= 2726100.55) {
        $emolumento = 4642.42; $frj = 1055.22; $issqn = 139.27; $total = 5836.91;

    } elseif ($valor >= 2726100.56 && $valor <= 2776100.56) {
        $emolumento = 4692.42; $frj = 1066.58; $issqn = 140.77; $total = 5899.77;

    } elseif ($valor >= 2776100.57 && $valor <= 2826100.57) {
        $emolumento = 4742.42; $frj = 1077.95; $issqn = 142.27; $total = 5962.64;

    } elseif ($valor >= 2826100.58 && $valor <= 2876100.58) {
        $emolumento = 4792.42; $frj = 1089.31; $issqn = 143.77; $total = 6025.50;

    } elseif ($valor >= 2876100.59 && $valor <= 2926100.59) {
        $emolumento = 4842.42; $frj = 1100.68; $issqn = 145.27; $total = 6088.37;

    } elseif ($valor >= 2926100.60 && $valor <= 2976100.60) {
        $emolumento = 4892.42; $frj = 1112.04; $issqn = 146.77; $total = 6151.23;

    } elseif ($valor >= 2976100.61 && $valor <= 3026100.61) {
        $emolumento = 4942.42; $frj = 1123.41; $issqn = 148.27; $total = 6214.10;

    } elseif ($valor >= 3026100.62 && $valor <= 3076100.62) {
        $emolumento = 4992.42; $frj = 1134.77; $issqn = 149.77; $total = 6276.96;

    } elseif ($valor >= 3076100.63 && $valor <= 3126100.63) {
        $emolumento = 5042.42; $frj = 1146.14; $issqn = 151.27; $total = 6339.83;

    } elseif ($valor >= 3126100.64 && $valor <= 3176100.64) {
        $emolumento = 5092.42; $frj = 1157.50; $issqn = 152.77; $total = 6402.69;

    } elseif ($valor >= 3176100.65 && $valor <= 3226100.65) {
        $emolumento = 5142.42; $frj = 1168.87; $issqn = 154.27; $total = 6465.56;

    } elseif ($valor >= 3226100.66 && $valor <= 3276100.66) {
        $emolumento = 5192.42; $frj = 1180.23; $issqn = 155.77; $total = 6528.42;

    } elseif ($valor >= 3276100.67 && $valor <= 3326100.67) {
        $emolumento = 5242.42; $frj = 1191.60; $issqn = 157.27; $total = 6591.29;

    } elseif ($valor >= 3326100.68 && $valor <= 3376100.68) {
        $emolumento = 5292.42; $frj = 1202.96; $issqn = 158.77; $total = 6654.15;

    } elseif ($valor >= 3376100.69 && $valor <= 3426100.69) {
        $emolumento = 5342.42; $frj = 1214.33; $issqn = 160.27; $total = 6717.02;

    } elseif ($valor >= 3426100.70 && $valor <= 3476100.70) {
        $emolumento = 5392.42; $frj = 1225.69; $issqn = 161.77; $total = 6779.88;

    } elseif ($valor >= 3476100.71 && $valor <= 3526100.71) {
        $emolumento = 5442.42; $frj = 1237.06; $issqn = 163.27; $total = 6842.75;

    } elseif ($valor >= 3526100.72 && $valor <= 3576100.72) {
        $emolumento = 5492.42; $frj = 1248.42; $issqn = 164.77; $total = 6905.61;

    } elseif ($valor >= 3576100.73 && $valor <= 3626100.73) {
        $emolumento = 5542.42; $frj = 1259.79; $issqn = 166.27; $total = 6968.48;

    } elseif ($valor >= 3626100.74 && $valor <= 3676100.74) {
        $emolumento = 5592.42; $frj = 1271.15; $issqn = 167.77; $total = 7031.34;

    } elseif ($valor >= 3676100.75 && $valor <= 3726100.75) {
        $emolumento = 5642.42; $frj = 1282.52; $issqn = 169.27; $total = 7094.21;

    } elseif ($valor >= 3726100.76) {
        $emolumento = 5664.71; $frj = 1287.58; $issqn = 169.94; $total = 7122.23;
    }

    return [
        'emolumento' => $emolumento,
        'frj'        => $frj,
        'issqn'      => $issqn,
        'total'      => $total,
        'value'      => $valor,
    ];
}
