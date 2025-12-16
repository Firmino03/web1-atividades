<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "crud_consultas";

$conexao = new mysqli($host, $user, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
