<?php
require_once __DIR__ . "/../auth.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Paciente</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
    <h2>Novo Paciente</h2>

    <form action="store.php" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento" required>

        <label>Tipo Sanguíneo</label>
        <input type="text" name="tipo_sanguineo" required>

        <button>Salvar</button>
    </form>
</div>

</body>
</html>
