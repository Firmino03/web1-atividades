<?php
include 'conexao.php';

$sql = "SELECT * FROM consultas";
$result = $conexao->query($sql);
?>

<h2>Consultas Médicas</h2>
<a href="create.php">Nova Consulta</a>
<table border="1">
  <tr>
    <th>Paciente</th>
    <th>Email</th>
    <th>Data</th>
    <th>Horário</th>
    <th>Tipo</th>
    <th>Ações</th>
  </tr>
  <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['nome_paciente'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['data'] ?></td>
      <td><?= $row['horario'] ?></td>
      <td><?= $row['tipo_consulta'] ?></td>
      <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Editar</a> |
        <a href="delete.php?id=<?= $row['id'] ?>">Excluir</a>
      </td>
    </tr>
  <?php } ?>
</table>
