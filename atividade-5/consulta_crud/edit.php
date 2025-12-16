<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM consultas WHERE id=$id";
$result = $conexao->query($sql);
$dado = $result->fetch_assoc();
?>

<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?= $dado['id'] ?>">
  Nome: <input type="text" name="nome_paciente" value="<?= $dado['nome_paciente'] ?>"><br>
  Email: <input type="email" name="email" value="<?= $dado['email'] ?>"><br>
  Data: <input type="date" name="data" value="<?= $dado['data'] ?>"><br>
  Horário: <input type="time" name="horario" value="<?= $dado['horario'] ?>"><br>
  Tipo:
  <input type="radio" name="tipo_consulta" value="Presencial" <?= $dado['tipo_consulta'] == 'Presencial' ? 'checked' : '' ?>> Presencial
  <input type="radio" name="tipo_consulta" value="Online" <?= $dado['tipo_consulta'] == 'Online' ? 'checked' : '' ?>> Online<br>
  <button type="submit">Atualizar</button>
</form>
