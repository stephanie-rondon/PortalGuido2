<?php

include "banco.php";

$titulo = $_POST["titulo"];
$disciplina = $_POST["disciplina"];
$assunto = $_POST["assunto"];
$link = $_POST["link"];
$descricao = $_POST["descricao"];

$sql = "INSERT INTO videoaulas 
(titulo, disciplina, assunto, link, descricao)
VALUES 
('$titulo', '$disciplina', '$assunto', '$link', '$descricao')";

if ($conexao->query($sql) === TRUE) {

    header("Location: index.php");

} else {

    echo "Erro ao cadastrar a videoaula.";

}

?>