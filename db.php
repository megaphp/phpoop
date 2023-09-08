<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "oop";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>
