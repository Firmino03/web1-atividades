<link rel="stylesheet" href="css/style.css">

<h1>Nova Consulta</h1>

<a class="btn-voltar" href="index.php">← Voltar</a>

<form action="store.php" method="post">

  <label>Nome do Paciente:</label>
  <input type="text" name="nome_paciente" required>

  <label>Email:</label>
  <input type="email" name="email" required>

  <label>Data da Consulta:</label>
  <input type="date" name="data" required>

  <label>Horário:</label>
  <input type="time" name="horario" required>

  <label>Tipo de Consulta:</label>
  <div class="radio-group">
      <input type="radio" name="tipo_consulta" value="Presencial" required> Presencial
      <input type="radio" name="tipo_consulta" value="Online" required> Online
  </div>

  <button type="submit">Salvar</button>

</form>
