CREATE DATABASE portal_videoaulas;

USE portal_videoaulas;

CREATE TABLE videoaulas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    disciplina VARCHAR(50) NOT NULL,
    assunto VARCHAR(100) NOT NULL,
    link VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL
);