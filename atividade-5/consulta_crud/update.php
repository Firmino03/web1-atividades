<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome_paciente'];
$email = $_POST['email'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$tipo = $_POST['tipo_consulta'];

$sql = "UPDATE consultas SET 
          nome_paciente='$nome',
          email='$email',
          data='$data',
          horario='$horario',
          tipo_consulta='$tipo'
        WHERE id=$id";

$conexao->query($sql);
header('Location: index.php');
