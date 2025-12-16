<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$idMedico = $_GET['id_medico'];
$idPaciente = $_GET['id_paciente'];
$dataHoraConsulta = $_GET['data_hora'];

$conexao->query("
    DELETE FROM consulta
    WHERE id_medico = $idMedico
      AND id_paciente = $idPaciente
      AND data_hora = '$dataHoraConsulta'
");

header("Location: index.php");
