<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$idPaciente = $_GET['id'];

$conexao->query("DELETE FROM paciente WHERE id = $idPaciente");

header("Location: index.php");
