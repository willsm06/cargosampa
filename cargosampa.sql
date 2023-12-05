CREATE TABLE Despacho (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(255) NOT NULL,
    cnpj VARCHAR(20) NOT NULL,
    tel VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE Retirada (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(255) NOT NULL,
    cnpj VARCHAR(20) NOT NULL,
    tel VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE Carga (
    id INT AUTO_INCREMENT PRIMARY KEY,
    partida VARCHAR(255) NOT NULL,
    chegada VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    risco VARCHAR(50) NOT NULL,
    peso DECIMAL(10,2) NOT NULL,
    alimenticio VARCHAR(3) NOT NULL
);
