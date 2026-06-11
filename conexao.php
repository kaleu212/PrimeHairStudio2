<?php
$host = "192.168.56.101";
$user = "kaleu";
$pass = "kaka4488";
$db   = "prime hair studio";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error) {
    die("Erro na conexao: " . $conn->connect_error);

}
?>