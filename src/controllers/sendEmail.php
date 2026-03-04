<?php

// variáveis de requisição 
$name = $_POST['name'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$valor = $_POST['valor'];
$phoneEdited = preg_replace('/\D/', '', $phone);

// configuração da mensagem
$message = "
<html>
<head>
  <title>Simulação de Orçamento</title>
</head>
<body>
  <p><strong>Simulação de orçamento:</strong></p>
  <ul>
    <li><strong>Nome:</strong> {$name}</li>
    <li><strong>Telefone:</strong> {$phone}</li>
    <li><strong>Serviço:</strong> {$service}</li>
  </ul>
  <p><strong>Valor das taxas:</strong> {$valor}</p>
  <p>Entre em contato com o cliente: <a href='https://wa.me/{$phoneEdited}'>https://wa.me/{$phoneEdited}</a></p>
</body>
</html>
";


// configuração de envio de email
$to = 'cartorio@tabelionatojoinville.com.br';
$subject = 'Novo Orçamento - ' . $service;
$headers = 'From: leads@tabelionatojoinville.com.br' . "\r\n" .
           'Reply-To: leads@tabelionatojoinville.com.br' . "\r\n" .
           'X-Mailer: PHP/' . phpversion() .
           'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=UTF-8' . "\r\n";


// envio de email e tratamento
if (mail($to, $subject, $message, $headers)) {
    echo 'E-mail enviado com sucesso!';
} else {
    echo 'Falha no envio do e-mail.';
}