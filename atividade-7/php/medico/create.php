<?php
require_once __DIR__ . "/../auth.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Médico</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
    <h2>Novo Médico</h2>

    <form action="store.php" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>Especialidade</label>
        <input type="text" name="especialidade" required>

        <button type="submit">Salvar</button>
    </form>
</div>

</body>
</html>
