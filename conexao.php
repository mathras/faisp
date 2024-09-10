<?php 

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);


$host = '';
$user = '';
$password = '';
$database = '';


$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>