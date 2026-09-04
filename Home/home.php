<?php

$conteudos = [
    // ["Matéria", "Ícone", "Título", "Descrição", "Nível", "Caminho do Arquivo"]
    ["Matemática", "📊", "Estatística", "Aprenda os principais conceitos de estatística.", "Ensino Médio", "Conteudo/estatistica.php"],
    ["Matemática", "🔢", "Equações", "Aprenda a resolver diferentes tipos de equações.", "Ensino Médio", "Conteudo/equacoes.php"],
    ["Matemática", "📐", "Geometria", "Estude formas, medidas, áreas e volumes.", "Ensino Médio", "Conteudo/geometria.php"],

    ["Geografia", "🇧🇷", "Geografia do Brasil", "Conheça o território e as regiões do Brasil.", "Ensino Médio", "Conteudo/geo-brasil.php"],
    ["Geografia", "🌎", "Globalização", "Aprenda os principais conceitos da globalização.", "Ensino Médio", "Conteudo/globalizacao.php"],
    ["Geografia", "🌐", "Geopolítica", "Entenda as relações de poder entre países.", "Ensino Médio", "Conteudo/geografia4.php"],

    ["História", "🇧🇷", "História do Brasil", "Conheça os principais acontecimentos da história brasileira.", "Ensino Médio", "Conteudo/hist-hist-brasil.php"],
    ["História", "⚔️", "Segunda Guerra Mundial", "Estude as causas e consequências da guerra.", "Ensino Médio", "Conteudo/hist-2guerra.php"],
    ["História", "🏛️", "Ditadura Militar", "Entenda o período da Ditadura Militar no Brasil.", "Ensino Médio", "Conteudo/hist-ditadura.php"],
    ["História", "📜", "Era Vargas", "Conheça o período político de Getúlio Vargas.", "Ensino Médio", "Conteudo/hist-eravargas.php"],

    ["Português", "📖", "Interpretação de texto", "Aprenda técnicas para interpretar textos.", "Ensino Médio", "Conteudo/port-interpre.php"],
    ["Português", "✍️", "Gramática", "Estude as principais regras da língua portuguesa.", "Ensino Médio", "Conteudo/port-gram.php"],
    ["Português", "📝", "Produção textual", "Aprenda a produzir textos claros e organizados.", "Ensino Médio", "Conteudo/port-prod.php"],
    ["Português", "💬", "Variação linguística", "Entenda as diferentes formas de falar português.", "Ensino Médio", "Conteudo/port-varia.php"]
];

$materias = [
    ["Todas", "📚"],
    ["Português", "📖"],
    ["Matemática", "📐"],
    ["História", "🏛️"],
    ["Geografia", "🌎"]
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortalGuido</title>

    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial;
    }

    body {
        background: #f4f6f8;
        color: #222;
    }

    /* NAVBAR */
    .navbar {
        height: 70px;
        background: #24243e;
        color: white;
        padding: 15px 7%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 2;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    .pesquisa {
        display: flex;
        gap: 8px;
    }

    .pesquisa input {
        width: 300px;
        padding: 10px;
        border: none;
        border-radius: 6px;
    }

    .pesquisa button {
        padding: 10px 15px;
        border: none;
        border-radius: 6px;
        background: #6c63ff;
        color: white;
        cursor: pointer;
    }

    /* HERO */
    .hero {
        padding: 55px 7%;
        text-align: center;
        background: linear-gradient(135deg, #24243e, #6c63ff);
        color: white;
    }

    .hero h1 {
        font-size: 38px;
        margin-bottom: 10px;
    }

    /* SEÇÕES */
    .section {
        width: 86%;
        margin: 35px auto;
    }

    .section h2 {
        margin-bottom: 20px;
    }

    /* CARROSSEL */
    .carousel-box {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .carousel {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        scroll-behavior: smooth;
        scrollbar-width: none;
        flex: 1;
        padding: 5px;
    }

    .carousel::-webkit-scrollbar {
        display: none;
    }

    .subject {
        min-width: 180px;
        height: 90px;
        background: white;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 3px 10px #0001;
    }

    .subject:hover,
    .subject.active {
        background: #6c63ff;
        color: white;
    }

    .subject-icon {
        font-size: 28px;
        margin-bottom: 5px;
    }

    .arrow {
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 50%;
        background: #6c63ff;
        color: white;
        font-size: 20px;
        cursor: pointer;
    }

    .arrow:disabled {
        background: #ccc;
    }

    /* CARDS */
    .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .card {
        background: white;
        border-radius: 12px;
        padding: 22px;
        box-shadow: 0 3px 10px #0001;
        transition: 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .materia {
        color: #6c63ff;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card h3 {
        margin-bottom: 10px;
    }

    .card p {
        color: #666;
        line-height: 1.5;
        margin-bottom: 12px;
    }

    .card button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 6px;
        background: #24243e;
        color: white;
        cursor: pointer;
    }

    .card button:hover {
        background: #6c63ff;
    }

    .none {
        display: none;
        text-align: center;
        padding: 40px;
        color: #666;
    }

    /* FOOTER */
    footer {
        margin-top: 50px;
        padding: 25px;
        text-align: center;
        background: #111827;
        color: #aaa;
    }

    /* RESPONSIVO */
    @media (max-width: 700px) {
        .navbar {
            height: auto;
            flex-direction: column;
            gap: 12px;
            padding: 15px;
        }

        .pesquisa {
            width: 100%;
        }

        .pesquisa input {
            width: 100%;
        }

        .hero {
            padding: 40px 20px;
        }

        .hero h1 {
            font-size: 30px;
        }

        .section {
            width: 90%;
        }

        .subject {
            min-width: 160px;
        }
    }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">
            📚 PortalGuido
        </div>
        <div class="pesquisa">
            <input type="text" id="pesquisa" placeholder="Pesquisar conteúdo..." onkeyup="pesquisar()">
            <button onclick="pesquisar()">🔍</button>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <h1>Encontre o que você precisa estudar</h1>
        <p>Consulte conteúdos de diferentes matérias de forma simples e rápida.</p>
    </section>

    <!-- MATÉRIAS -->
    <section class="section">
        <h2>📖 Matérias</h2>
        <div class="carousel-box">
            <button class="arrow" id="prev">‹</button>
            <div class="carousel" id="carousel">
                <?php foreach ($materias as $i => $m): ?>
                <div class="subject <?= $i ? '' : 'active' ?>" onclick="filtrar('<?= $m[0] ?>', this)">
                    <span class="subject-icon"><?= $m[1] ?></span>
                    <?= $m[0] ?>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="arrow" id="next">›</button>
        </div>
    </section>

    <!-- CONTEÚDOS -->
    <section class="section">
        <h2>📖 Conteúdos disponíveis</h2>
        <div class="cards">
            <?php foreach ($conteudos as $c): ?>
            <div class="card" data-materia="<?= $c[0] ?>" data-search="<?= strtolower(implode(' ', $c)) ?>">
                <div class="materia"><?= $c[0] ?></div>
                <h3><?= $c[2] ?></h3>
                <p><?= $c[3] ?></p>
                <p>📌 <?= $c[4] ?></p>
                <button onclick="abrirConteudo('<?= $c[5] ?>')">
                    Acessar conteúdo
                </button>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="none" id="none">
            <h3>😕 Nenhum conteúdo encontrado.</h3>
            <p>Tente pesquisar outro termo.</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        © 2026 PortalGuido — Plataforma de estudos
    </footer>

    <script src="script.js"></script>
</body>

</html>