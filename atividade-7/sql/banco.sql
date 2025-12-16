CREATE DATABASE clinica;
USE clinica;

-- TABELA MÉDICO
CREATE TABLE medico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especialidade VARCHAR(100) NOT NULL
);

-- TABELA PACIENTE
CREATE TABLE paciente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    tipo_sanguineo VARCHAR(3) NOT NULL
);

-- TABELA CONSULTA (N para N)
CREATE TABLE consulta (
    id_medico INT,
    id_paciente INT,
    data_hora TIMESTAMP,
    observacoes TEXT,

    PRIMARY KEY (id_medico, id_paciente, data_hora),

    FOREIGN KEY (id_medico) REFERENCES medico(id) ON DELETE CASCADE,
    FOREIGN KEY (id_paciente) REFERENCES paciente(id) ON DELETE CASCADE
);
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
INSERT INTO usuario (nome, email, senha)
VALUES (
    'Administrador',
    'admin@email.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
);
