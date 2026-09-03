<?php

include "banco.php";

$disciplina = "";
$assunto = "";

if (isset($_GET["disciplina"])) {
    $disciplina = $_GET["disciplina"];
}

if (isset($_GET["assunto"])) {
    $assunto = $_GET["assunto"];
}

$sql = "SELECT * FROM videoaulas WHERE 1=1";

if ($disciplina != "") {
    $sql .= " AND disciplina = '$disciplina'";
}

if ($assunto != "") {
    $sql .= " AND assunto = '$assunto'";
}

$sql .= " ORDER BY id DESC";

$resultado = $conexao->query($sql);

$total = $resultado->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Portal de Videoaulas</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <h1>Portal de Videoaulas</h1>

    <p>Conteúdos para ajudar nos seus estudos</p>

    <nav>

        <a href="index.php">Início</a>

        <a href="cadastrar.php">Cadastrar Videoaula</a>

    </nav>

</header>

<div class="container">

    <h2>Pesquisar Videoaulas</h2>

    <form method="GET" action="index.php">

        <label>Disciplina:</label>

        <select name="disciplina">

            <option value="">Todas</option>

            <option value="Matemática">Matemática</option>

            <option value="Geografia">Geografia</option>

            <option value="História">História</option>

            <option value="Português">Português</option>

        </select>

        <label>Assunto:</label>

        <select name="assunto">

            <option value="">Todos</option>

            <option value="Estatística">Estatística</option>
            <option value="Frações">Frações</option>
            <option value="Equações">Equações</option>
            <option value="Geometria">Geometria</option>

            <option value="Geografia do Brasil">Geografia do Brasil</option>
            <option value="Globalização">Globalização</option>
            <option value="Problemas ambientais do mundo">Problemas ambientais do mundo</option>
            <option value="Geopolítica">Geopolítica</option>

            <option value="História do Brasil">História do Brasil</option>
            <option value="Segunda Guerra Mundial">Segunda Guerra Mundial</option>
            <option value="Ditadura Militar">Ditadura Militar</option>
            <option value="Era Vargas">Era Vargas</option>

            <option value="Interpretação de texto">Interpretação de texto</option>
            <option value="Gramática">Gramática</option>
            <option value="Produção textual">Produção textual</option>
            <option value="Variação linguística">Variação linguística</option>

        </select>

        <button type="submit">Pesquisar</button>

        <a class="botao" href="index.php">Limpar filtros</a>

    </form>

    <h3>
        <?php echo $total; ?> videoaula(s) encontrada(s)
    </h3>


    <div class="videos">

        <?php

        if ($resultado->num_rows > 0) {

            while ($video = $resultado->fetch_assoc()) {

        ?>

                <div class="card">

                    <h2>
                        <?php echo $video["titulo"]; ?>
                    </h2>

                    <p>
                        <strong>Disciplina:</strong>
                        <?php echo $video["disciplina"]; ?>
                    </p>

                    <p>
                        <strong>Assunto:</strong>
                        <?php echo $video["assunto"]; ?>
                    </p>

                    <p>
                        <?php echo $video["descricao"]; ?>
                    </p>

                    <a
                        class="assistir"
                        href="<?php echo $video["link"]; ?>"
                        target="_blank">
                        Assistir Videoaula
                    </a>

                    <a
                        class="excluir"
                        href="excluir.php?id=<?php echo $video["id"]; ?>"
                        onclick="return confirm('Deseja excluir esta videoaula?');">
                        Excluir
                    </a>

                </div>

        <?php

            }

        } else {

            echo "<p>Nenhuma videoaula encontrada.</p>";

        }

        ?>

    </div>

</div>

</body>
</html>
