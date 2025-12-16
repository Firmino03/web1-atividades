<?php
require_once __DIR__ . "/../auth.php";
require_once __DIR__ . "/../conexao.php";

$sqlConsultas = "
SELECT
    consulta.id_medico,
    consulta.id_paciente,
    medico.nome AS nome_medico,
    paciente.nome AS nome_paciente,
    consulta.data_hora,
    consulta.observacoes
FROM consulta
JOIN medico ON consulta.id_medico = medico.id
JOIN paciente ON consulta.id_paciente = paciente.id
";

$resultadoConsultas = $conexao->query($sqlConsultas);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consultas</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">

<h2>Consultas</h2>

<a class="btn" href="create.php">Nova Consulta</a>

<table>
    <tr>
        <th>Médico</th>
        <th>Paciente</th>
        <th>Data/Hora</th>
        <th>Observações</th>
        <th>Ações</th>
    </tr>

    <?php while ($consulta = $resultadoConsultas->fetch_assoc()): ?>
    <tr>
        <td><?= $consulta['nome_medico'] ?></td>
        <td><?= $consulta['nome_paciente'] ?></td>
        <td><?= $consulta['data_hora'] ?></td>
        <td><?= $consulta['observacoes'] ?></td>
        <td>
            <div class="acoes">
                <a class="btn btn-excluir"
                   href="delete.php?id_medico=<?= $consulta['id_medico'] ?>
                   &id_paciente=<?= $consulta['id_paciente'] ?>
                   &data_hora=<?= $consulta['data_hora'] ?>">
                    Excluir
                </a>
            </div>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</div>

</body>
</html>
