<?php
require_once __DIR__ . "/../auth.php";

require_once __DIR__ . "/../conexao.php";

$idMedico = $_POST['id_medico'];
$idPaciente = $_POST['id_paciente'];
$dataHoraConsulta = $_POST['data_hora'];
$observacoesConsulta = $_POST['observacoes'];

$conexao->query("
    INSERT INTO consulta
    (id_medico, id_paciente, data_hora, observacoes)
    VALUES
    ($idMedico, $idPaciente, '$dataHoraConsulta', '$observacoesConsulta')
");

header("Location: index.php");
