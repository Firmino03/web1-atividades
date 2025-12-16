<?php
require_once __DIR__ . "/../auth.php";
require_once __DIR__ . "/../conexao.php";

$resultadoMedicos = $conexao->query("SELECT * FROM medico");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Médicos</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
    <h2>Médicos</h2>

    <a class="btn" href="create.php">Novo Médico</a>

    <table>
        <tr>
            <th>Nome</th>
            <th>Especialidade</th>
            <th>Ações</th>
        </tr>

        <?php while ($medico = $resultadoMedicos->fetch_assoc()): ?>
        <tr>
            <td><?= $medico['nome'] ?></td>
            <td><?= $medico['especialidade'] ?></td>
            <td>
                <div class="acoes">
                    <a class="btn btn-editar" href="edit.php?id=<?= $medico['id'] ?>">Editar</a>
                    <a class="btn btn-excluir" href="delete.php?id=<?= $medico['id'] ?>">Excluir</a>
                </div>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
