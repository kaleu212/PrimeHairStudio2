<?php

if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') {

    // Ambiente local
    $host = "192.168.56.102";
    $user = "kaleu";
    $pass = "kaka4488";
    $db   = "prime hair studio";

} else {

    // Ambiente ProFreeHost
    $host = "sql103.ezyro.com";
    $user = "ezyro_42232273";
    $pass = "kaka4488";
    $db   = "ezyro_42232273_primehairstudio";

}

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>