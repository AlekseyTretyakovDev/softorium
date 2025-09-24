<?php
// Подключение к БД
$host = $_ENV['POSTGRES_HOST'] ?? 'postgres';
$db = $_ENV['POSTGRES_DB'] ?? 'webapp';
$user = $_ENV['POSTGRES_USER'] ?? 'webuser';
$pass = $_ENV['POSTGRES_PASSWORD'] ?? 'securepassword';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
    echo "<h1>Подключение к БД успешно</h1>";
    phpinfo();
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
?>