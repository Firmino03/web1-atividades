<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$user = "karol";
$pass = "root";
$db   = "clinica";

$conexao = new mysqli($host, $user, $pass, $db);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
