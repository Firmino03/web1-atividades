<?php
require_once __DIR__ . "/../auth.php";
require_once __DIR__ . "/../conexao.php";

$idMedico = $_GET['id'];

$resultado = $conexao->query("SELECT * FROM medico WHERE id = $idMedico");
$medico = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Médico</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
    <h2>Editar Médico</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $medico['id'] ?>">

        <label>Nome</label>
        <input type="text" name="nome" value="<?= $medico['nome'] ?>">

        <label>Especialidade</label>
        <input type="text" name="especialidade" value="<?= $medico['especialidade'] ?>">

        <button>Atualizar</button>
    </form>
</div>

</body>
</html>
