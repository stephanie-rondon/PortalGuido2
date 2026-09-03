<?php

include "banco.php";

$disciplina = $_GET["disciplina"] ?? "";
$assunto = $_GET["assunto"] ?? "";

$sql = "SELECT * FROM videoaulas WHERE 1=1";
$params = [];
$types = "";

if ($disciplina !== "") {
    $sql .= " AND disciplina = ?";
    $params[] = $disciplina;
    $types .= "s";
}

if ($assunto !== "") {
    $sql .= " AND assunto = ?";
    $params[] = $assunto;
    $types .= "s";
}

$sql .= " ORDER BY id DESC";

$stmt = $conexao->prepare($sql);

if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$resultado = $stmt->get_result();
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
        <select name="disciplina" id="select-disciplina">
            <option value="">Todas</option>
            <option value="Matemática" <?php echo ($disciplina === 'Matemática') ? 'selected' : ''; ?>>Matemática</option>
            <option value="Geografia" <?php echo ($disciplina === 'Geografia') ? 'selected' : ''; ?>>Geografia</option>
            <option value="História" <?php echo ($disciplina === 'História') ? 'selected' : ''; ?>>História</option>
            <option value="Português" <?php echo ($disciplina === 'Português') ? 'selected' : ''; ?>>Português</option>
        </select>

        <label>Assunto:</label>
        <select name="assunto" id="select-assunto">
            <option value="">Todos</option>
           
            <option value="Estatística" data-disciplina="Matemática">Estatística</option>
            <option value="Frações" data-disciplina="Matemática">Frações</option>
            <option value="Equações" data-disciplina="Matemática">Equações</option>
            <option value="Geometria" data-disciplina="Matemática">Geometria</option>

            <option value="Geografia do Brasil" data-disciplina="Geografia">Geografia do Brasil</option>
            <option value="Globalização" data-disciplina="Geografia">Globalização</option>
            <option value="Problemas ambientais do mundo" data-disciplina="Geografia">Problemas ambientais do mundo</option>
            <option value="Geopolítica" data-disciplina="Geografia">Geopolítica</option>

            <option value="História do Brasil" data-disciplina="História">História do Brasil</option>
            <option value="Segunda Guerra Mundial" data-disciplina="História">Segunda Guerra Mundial</option>
            <option value="Ditadura Militar" data-disciplina="História">Ditadura Militar</option>
            <option value="Era Vargas" data-disciplina="História">Era Vargas</option>

            <option value="Interpretação de texto" data-disciplina="Português">Interpretação de texto</option>
            <option value="Gramática" data-disciplina="Português">Gramática</option>
            <option value="Produção textual" data-disciplina="Português">Produção textual</option>
            <option value="Variação linguística" data-disciplina="Português">Variação linguística</option>
        </select>

        <button type="submit">Pesquisar</button>
        <a class="botao" href="index.php">Limpar filtros</a>

    </form>

    <h3>
        <?php echo $total; ?> videoaula(s) encontrada(s)
    </h3>

    <div class="videos">
        <?php if ($total > 0): ?>
            <?php while ($video = $resultado->fetch_assoc()): ?>
                <div class="card">
                    <h2><?php echo htmlspecialchars($video["titulo"]); ?></h2>
                    <p><strong>Disciplina:</strong> <?php echo htmlspecialchars($video["disciplina"]); ?></p>
                    <p><strong>Assunto:</strong> <?php echo htmlspecialchars($video["assunto"]); ?></p>
                    <p><?php echo htmlspecialchars($video["descricao"]); ?></p>
                    <a class="assistir" href="<?php echo htmlspecialchars($video["link"]); ?>" target="_blank">Assistir Videoaula</a>
                    <a class="excluir" href="excluir.php?id=<?php echo $video["id"]; ?>" onclick="return confirm('Deseja excluir esta videoaula?');">Excluir</a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhuma videoaula encontrada.</p>
        <?php endif; ?>
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const selectDisciplina = document.getElementById("select-disciplina");
    const selectAssunto = document.getElementById("select-assunto");
    const assuntosOpcoes = Array.from(selectAssunto.querySelectorAll("option[data-disciplina]"));
    const assuntoAtual = "<?php echo addslashes($assunto); ?>";

    function atualizarAssuntos() {
        const disciplinaSelecionada = selectDisciplina.value;

        assuntosOpcoes.forEach(opt => {
            if (!disciplinaSelecionada || opt.getAttribute("data-disciplina") === disciplinaSelecionada) {
                opt.style.display = "";
            } else {
                opt.style.display = "none";
            }
        });

        const opcaoValida = Array.from(selectAssunto.options).some(
            opt => opt.value === selectAssunto.value && opt.style.display !== "none"
        );
        if (!opcaoValida) {
            selectAssunto.value = "";
        }
    }

    selectDisciplina.addEventListener("change", atualizarAssuntos);
    
    if (assuntoAtual) {
        selectAssunto.value = assuntoAtual;
    }
    
    atualizarAssuntos();
});
</script>

</body>
</html>