<form action="store.php" method="post">
  Nome do Paciente: <input type="text" name="nome_paciente" required><br>
  Email: <input type="email" name="email" required><br>
  Data da Consulta: <input type="date" name="data" required><br>
  Horário: <input type="time" name="horario" required><br>
  Tipo de Consulta: 
    <input type="radio" name="tipo_consulta" value="Presencial" required> Presencial
    <input type="radio" name="tipo_consulta" value="Online" required> Online<br>
  <button type="submit">Salvar</button>
</form>
