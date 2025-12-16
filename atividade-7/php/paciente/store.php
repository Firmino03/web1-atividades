<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$nomePaciente = $_POST['nome'];
$dataNascimento = $_POST['data_nascimento'];
$tipoSanguineo = $_POST['tipo_sanguineo'];

$conexao->query("
    INSERT INTO paciente (nome, data_nascimento, tipo_sanguineo)
    VALUES ('$nomePaciente', '$dataNascimento', '$tipoSanguineo')
");

header("Location: index.php");
