<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Videoaula</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Portal de Videoaulas</h1>

    <nav>
        <a href="index.php">Início</a>
        <a href="cadastrar.php">Cadastrar Videoaula</a>
    </nav>
</header>

<div class="container">

    <h2>Cadastrar Videoaula</h2>

    <form action="salvar.php" method="POST">

        <label>Título da videoaula:</label>
        <input type="text" name="titulo" required>

        <label>Disciplina:</label>
        <select name="disciplina" required>

            <option value="">Selecione</option>

            <option value="Matemática">Matemática</option>
            <option value="Geografia">Geografia</option>
            <option value="História">História</option>
            <option value="Português">Português</option>

        </select>

        <label>Assunto:</label>
        <select name="assunto" required>

            <option value="">Selecione</option>

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

        <label>Link da videoaula:</label>
        <input type="url" name="link" placeholder="https://www.youtube.com/..." required>

        <label>Descrição:</label>
        <textarea name="descricao" required></textarea>

        <button type="submit">Cadastrar Videoaula</button>

    </form>

</div>

</body>
</html>
