<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$idPaciente = $_POST['id'];
$nomePaciente = $_POST['nome'];
$dataNascimento = $_POST['data_nascimento'];
$tipoSanguineo = $_POST['tipo_sanguineo'];

$conexao->query("
    UPDATE paciente
    SET nome = '$nomePaciente',
        data_nascimento = '$dataNascimento',
        tipo_sanguineo = '$tipoSanguineo'
    WHERE id = $idPaciente
");

header("Location: index.php");
