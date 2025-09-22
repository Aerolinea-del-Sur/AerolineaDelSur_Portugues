<?php
$host = 'smtpout.secureserver.net';
$port = 465;
$timeout = 10;

echo "🔍 Probando conexión a $host:$port...<br>";

$connection = @fsockopen($host, $port, $errno, $errstr, $timeout);

if ($connection) {
    echo "✅ Conexión establecida a $host:$port";
    fclose($connection);
} else {
    echo "❌ No se pudo conectar: $errstr ($errno)";
}
?>
