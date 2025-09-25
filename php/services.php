<?php
header('Content-Type: application/json');

$services = [
    'nginx' => gethostbyname('nginx-proxy') ?: 'N/A',
    'php' => gethostbyname('php-fpm') ?: 'N/A',
    'postgres' => gethostbyname('postgres-db') ?: 'N/A',
];

echo json_encode($services, JSON_PRETTY_PRINT);
?>
