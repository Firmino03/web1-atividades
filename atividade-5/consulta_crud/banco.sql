CREATE DATABASE crud_consultas;
USE crud_consultas;

CREATE TABLE consultas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_paciente VARCHAR(100),
  email VARCHAR(100),
  data DATE,
  horario TIME,
  tipo_consulta VARCHAR(50)
);
