<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$idMedico = $_POST['id'];
$nomeMedico = $_POST['nome'];
$especialidadeMedico = $_POST['especialidade'];

$conexao->query("
    UPDATE medico
    SET nome = '$nomeMedico',
        especialidade = '$especialidadeMedico'
    WHERE id = $idMedico
");

header("Location: index.php");
