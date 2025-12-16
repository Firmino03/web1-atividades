<?php
require_once __DIR__ . "/../auth.php";
require_once __DIR__ . "/../conexao.php";

$resultadoPacientes = $conexao->query("SELECT * FROM paciente");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacientes</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">

<h2>Pacientes</h2>

<a class="btn" href="create.php">Novo Paciente</a>

<table>
    <tr>
        <th>Nome</th>
        <th>Data Nascimento</th>
        <th>Tipo Sanguíneo</th>
        <th>Ações</th>
    </tr>

    <?php while ($paciente = $resultadoPacientes->fetch_assoc()): ?>
    <tr>
        <td><?= $paciente['nome'] ?></td>
        <td><?= $paciente['data_nascimento'] ?></td>
        <td><?= $paciente['tipo_sanguineo'] ?></td>
        <td class="acoes">
            <a class="btn btn-editar" href="edit.php?id=<?= $paciente['id'] ?>">Editar</a>
            <a class="btn btn-excluir" href="delete.php?id=<?= $paciente['id'] ?>">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</div>

</body>
</html>
