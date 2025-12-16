<?php
require_once __DIR__ . "/../auth.php";
require_once __DIR__ . "/../conexao.php";

$idPaciente = $_GET['id'];

$resultado = $conexao->query("SELECT * FROM paciente WHERE id = $idPaciente");
$paciente = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
    <h2>Editar Paciente</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $paciente['id'] ?>">

        <label>Nome</label>
        <input type="text" name="nome" value="<?= $paciente['nome'] ?>">

        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento" value="<?= $paciente['data_nascimento'] ?>">

        <label>Tipo Sanguíneo</label>
        <input type="text" name="tipo_sanguineo" value="<?= $paciente['tipo_sanguineo'] ?>">

        <button>Atualizar</button>
    </form>
</div>

</body>
</html>
