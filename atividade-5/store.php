<?php
include 'conexao.php';

$nome = $_POST['nome_paciente'];
$email = $_POST['email'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$tipo = $_POST['tipo_consulta'];

$sql = "INSERT INTO consultas (nome_paciente, email, data, horario, tipo_consulta)
        VALUES ('$nome', '$email', '$data', '$horario', '$tipo')";

$conexao->query($sql);
header('Location: index.php');
