<?php
$host = "192.168.56.102";
$user = "kaleu";
$pass = "kaka4488";
$db   = "prime hair studio";


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}