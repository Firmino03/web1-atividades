<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$nomeMedico = $_POST['nome'];
$especialidadeMedico = $_POST['especialidade'];

$conexao->query("
    INSERT INTO medico (nome, especialidade)
    VALUES ('$nomeMedico', '$especialidadeMedico')
");

header("Location: index.php");
