<?php
$host = 'localhost';
$db = 'lotto_counter';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    file_put_contents('logs/error_log.txt', $e->getMessage(), FILE_APPEND);
    die("Connection failed: " . $e->getMessage());
}
?>
