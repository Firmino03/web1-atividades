<?php
require_once __DIR__ . "/php/auth.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Clínica</title>

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">

    <h1>Sistema de Clínica</h1>

    <p class="bem-vindo">
        Bem-vindo, <strong><?= $_SESSION['usuario_nome']; ?></strong>
    </p>

    <div class="menu">
        <a href="php/medico/index.php">Gerenciar Médicos</a>
        <a href="php/paciente/index.php">Gerenciar Pacientes</a>
        <a href="php/consulta/index.php">Gerenciar Consultas</a>
        <a href="php/login/logout.php">Sair</a>
    </div>

</div>

</body>
</html>
