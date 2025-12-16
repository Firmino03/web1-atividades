<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM consultas WHERE id=$id";
$conexao->query($sql);

header('Location: index.php');
