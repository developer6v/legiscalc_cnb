<?php

// variáveis de requisição 
$name = $_POST['name'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$valor = $_POST['valor'];


$ch = curl_init("https://script.google.com/macros/s/AKfycbw0swWgbRF6uZj_xmpHDev6xonDuFYbFbiVWjt6gsFqYMcGFt1Fw8tyN-qWIl54RV7w/exec");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    "name" => $name,
    "phone" => $phone,
    "service" => $service,
    "valor" => $valor,
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Erro no cURL: ' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);