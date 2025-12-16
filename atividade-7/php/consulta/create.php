<?php
require_once __DIR__ . "/../auth.php";
require_once __DIR__ . "/../conexao.php";

$resultadoMedicos = $conexao->query("SELECT * FROM medico");
$resultadoPacientes = $conexao->query("SELECT * FROM paciente");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Consulta</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
    <h2>Nova Consulta</h2>

    <form action="store.php" method="POST">

        <label>Médico:</label>
        <select name="id_medico">
            <?php while ($medico = $resultadoMedicos->fetch_assoc()): ?>
                <option value="<?= $medico['id'] ?>">
                    <?= $medico['nome'] ?>
                </option>
            <?php endwhile; ?>
        </select>

        <label>Paciente:</label>
        <select name="id_paciente">
            <?php while ($paciente = $resultadoPacientes->fetch_assoc()): ?>
                <option value="<?= $paciente['id'] ?>">
                    <?= $paciente['nome'] ?>
                </option>
            <?php endwhile; ?>
        </select>

        <label>Data e Hora:</label>
        <input type="datetime-local" name="data_hora">

        <label>Observações:</label>
        <textarea name="observacoes"></textarea>

        <button>Salvar</button>
    </form>
</div>

</body>
</html>
