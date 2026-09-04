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
        <select name="disciplina" id="select-disciplina" required>
            <option value="">Selecione a disciplina</option>
            <option value="Matemática">Matemática</option>
            <option value="Geografia">Geografia</option>
            <option value="História">História</option>
            <option value="Português">Português</option>
        </select>

        <label>Assunto:</label>
        <select name="assunto" id="select-assunto" required>
            <option value="">Selecione o assunto</option>

            <!-- Matemática -->
            <option value="Estatística" data-disciplina="Matemática">Estatística</option>
            <option value="Frações" data-disciplina="Matemática">Frações</option>
            <option value="Equações" data-disciplina="Matemática">Equações</option>
            <option value="Geometria" data-disciplina="Matemática">Geometria</option>

            <!-- Geografia -->
            <option value="Geografia do Brasil" data-disciplina="Geografia">Geografia do Brasil</option>
            <option value="Globalização" data-disciplina="Geografia">Globalização</option>
            <option value="Problemas ambientais do mundo" data-disciplina="Geografia">Problemas ambientais do mundo</option>
            <option value="Geopolítica" data-disciplina="Geografia">Geopolítica</option>

            <!-- História -->
            <option value="História do Brasil" data-disciplina="História">História do Brasil</option>
            <option value="Segunda Guerra Mundial" data-disciplina="História">Segunda Guerra Mundial</option>
            <option value="Ditadura Militar" data-disciplina="História">Ditadura Militar</option>
            <option value="Era Vargas" data-disciplina="História">Era Vargas</option>

            <!-- Português -->
            <option value="Interpretação de texto" data-disciplina="Português">Interpretação de texto</option>
            <option value="Gramática" data-disciplina="Português">Gramática</option>
            <option value="Produção textual" data-disciplina="Português">Produção textual</option>
            <option value="Variação linguística" data-disciplina="Português">Variação linguística</option>
        </select>

        <label>Link da videoaula:</label>
        <input type="url" name="link" placeholder="https://www.youtube.com/..." required>

        <label>Descrição:</label>
        <textarea name="descricao" required></textarea>

        <button type="submit">Cadastrar Videoaula</button>

    </form>

</div>

<!-- Script para filtrar assuntos dinamicamente -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const selectDisciplina = document.getElementById("select-disciplina");
    const selectAssunto = document.getElementById("select-assunto");
    const assuntosOpcoes = Array.from(selectAssunto.querySelectorAll("option[data-disciplina]"));

    function atualizarAssuntos() {
        const disciplinaSelecionada = selectDisciplina.value;

        // Oculta/exibe opções com base na disciplina selecionada
        assuntosOpcoes.forEach(opt => {
            if (!disciplinaSelecionada || opt.getAttribute("data-disciplina") === disciplinaSelecionada) {
                opt.style.display = "";
            } else {
                opt.style.display = "none";
            }
        });

        // Caso a opção de assunto selecionada não seja válida para a disciplina atual, reseta
        const opcaoValida = Array.from(selectAssunto.options).some(
            opt => opt.value === selectAssunto.value && opt.style.display !== "none"
        );
        if (!opcaoValida) {
            selectAssunto.value = "";
        }
    }

    // Aplica o filtro na mudança da disciplina
    selectDisciplina.addEventListener("change", atualizarAssuntos);
    
    // Executa no carregamento inicial
    atualizarAssuntos();
});
</script>

</body>
</html>