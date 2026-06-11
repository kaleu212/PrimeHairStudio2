<?php
$host = "192.168.56.1";
$user = "kaleu";
$pass = "kaka4488";
$db   = "prime_hair_studio";

$conn = new mysql($host, $user, $pass, $db);

if($conn->connect_error) {
    die("Erro na conexao: " . $conn->connect_error);

}
?>