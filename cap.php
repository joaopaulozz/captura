<?php
// Captura dados como IP, navegador, e localização (se disponível)
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$timestamp = date("Y-m-d H:i:s");

// Registra os dados capturados (simulação)
$log = "IP: $ip | Navegador: $user_agent | Data/Hora: $timestamp\n";
file_put_contents('logs.txt', $log, FILE_APPEND);

// Simula uma captura de dados
echo "<h1>Atenção!</h1>";
echo "<p>Este QR Code capturou alguns dados seus:</p>";
echo "<ul>";
echo "<li><strong>Endereço IP:</strong> $ip</li>";
echo "<li><strong>Navegador:</strong> $user_agent</li>";
echo "<li><strong>Data/Hora de Acesso:</strong> $timestamp</li>";
echo "</ul>";
echo "<p>Isso é apenas uma demonstração de como QR Codes podem ser usados para capturar informações sensíveis sem você perceber.</p>";
?>
