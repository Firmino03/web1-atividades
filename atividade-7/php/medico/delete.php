<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$idMedico = $_GET['id'];

$conexao->query("DELETE FROM medico WHERE id = $idMedico");

header("Location: index.php");
