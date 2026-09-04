<?php
$arquivo="conteudos.json";

if(!file_exists($arquivo)){
    file_put_contents($arquivo,json_encode([]));
}

$conteudos=json_decode(file_get_contents($arquivo),true);

if(!is_array($conteudos)){
    $conteudos=[];
}

$mensagem="";
$erro="";

if(isset($_GET["excluir"])){
    $id=$_GET["excluir"];

    $conteudos=array_values(array_filter($conteudos,function($c)use($id){
        return $c["id"]!==$id;
    }));

    file_put_contents($arquivo,json_encode($conteudos,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));

    header("Location: script.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $materia=trim($_POST["materia"]??"");
    $titulo=trim($_POST["titulo"]??"");
    $descricao=trim($_POST["descricao"]??"");
    $nivel=trim($_POST["nivel"]??"");
    $conteudo=trim($_POST["conteudo"]??"");
    $link=trim($_POST["link"]??"");

    if(!$materia||!$titulo||!$descricao||!$nivel||!$conteudo){

        $erro="Preencha todos os campos obrigatórios.";

    }else{

        $icones=[
            "Português"=>"📖",
            "Matemática"=>"📐",
            "História"=>"🏛️",
            "Geografia"=>"🌎"
        ];

        $conteudos[]=[
            "id"=>uniqid(),
            "materia"=>$materia,
            "icone"=>$icones[$materia]??"📚",
            "titulo"=>$titulo,
            "descricao"=>$descricao,
            "nivel"=>$nivel,
            "conteudo"=>$conteudo,
            "link"=>$link,
            "data"=>date("d/m/Y H:i")
        ];

        file_put_contents(
            $arquivo,
            json_encode($conteudos,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE)
        );

        $mensagem="Conteúdo publicado com sucesso!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Portal do Guido - Professor</title>

    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif
    }

    body {
        background: #f4f6f8;
        color: #222
    }

    .navbar {
        height: 70px;
        background: #24243e;
        color: white;
        padding: 15px 7%;
        display: flex;
        align-items: center;
        justify-content: flex-start
    }

    .logo {
        font-size: 24px;
        font-weight: bold
    }

    .hero {
        padding: 50px 7%;
        text-align: center;
        background: linear-gradient(135deg, #24243e, #6c63ff);
        color: white
    }

    .hero h1 {
        font-size: 36px;
        margin-bottom: 10px
    }

    .hero p {
        font-size: 17px
    }

    .container {
        width: 65%;
        max-width: 900px;
        margin: 40px auto;
    }

    .form-box {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 3px 15px #0001
    }

    .form-box h2 {
        margin-bottom: 25px;
        color: #24243e
    }

    .campo {
        margin-bottom: 18px
    }

    .campo label {
        display: block;
        font-weight: bold;
        margin-bottom: 7px
    }

    .campo input,
    .campo select,
    .campo textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 7px;
        font-size: 15px;
        outline: none
    }

    .campo textarea {
        min-height: 130px;
        resize: vertical
    }

    .contador {
        text-align: right;
        font-size: 12px;
        color: #777;
        margin-top: 4px
    }

    .obrigatorio {
        color: #e63946
    }

    .publicar {
        width: 100%;
        padding: 14px;
        border: 0;
        border-radius: 8px;
        background: #6c63ff;
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer
    }

    .publicar:hover {
        background: #554df0
    }

    .sucesso {
        background: #d1fae5;
        color: #065f46;
        padding: 14px;
        border-radius: 8px;
        margin-bottom: 20px
    }

    .erro {
        background: #fee2e2;
        color: #991b1b;
        padding: 14px;
        border-radius: 8px;
        margin-bottom: 20px
    }

    .lista {
        width: 86%;
        max-width: 1200px;
        margin: 50px auto
    }

    .lista h2 {
        margin-bottom: 20px
    }

    .conteudo-item {
        background: white;
        padding: 20px;
        border-radius: 12px;
        margin-bottom: 15px;
        box-shadow: 0 3px 10px #0001;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px
    }

    .info {
        flex: 1
    }

    .materia {
        color: #6c63ff;
        font-weight: bold;
        margin-bottom: 5px
    }

    .info h3 {
        margin-bottom: 6px
    }

    .info p {
        color: #666;
        margin-bottom: 6px
    }

    .excluir {
        text-decoration: none;
        background: #fee2e2;
        color: #dc2626;
        padding: 9px 14px;
        border-radius: 7px;
        font-weight: bold
    }

    footer {
        margin-top: 60px;
        padding: 25px;
        background: #111827;
        color: #aaa;
        text-align: center
    }

    @media(max-width:800px) {

        .navbar {
            height: auto;
            padding: 15px;
        }

        .container {
            width: 90%
        }

        .lista {
            width: 90%
        }

        .conteudo-item {
            align-items: flex-start;
            flex-direction: column
        }

        .hero {
            padding: 40px 20px
        }

        .hero h1 {
            font-size: 28px
        }

    }
    </style>

</head>

<body>

    <nav class="navbar">

        <div class="logo">
            Portal do Guido
        </div>

    </nav>

    <section class="hero">

        <h1>
            Área do Professor
        </h1>

        <p>
            Publique materiais e ajude seus alunos a aprender.
        </p>

    </section>

    <div class="container">

        <div class="form-box">

            <h2>
                Publicar conteúdo
            </h2>

            <?php if($mensagem): ?>

            <div class="sucesso">
                ✅ <?=htmlspecialchars($mensagem)?>
            </div>

            <?php endif; ?>

            <?php if($erro): ?>

            <div class="erro">
                ⚠️ <?=htmlspecialchars($erro)?>
            </div>

            <?php endif; ?>

            <form method="POST" id="formConteudo">

                <div class="campo">

                    <label>
                        Matéria <span class="obrigatorio">*</span>
                    </label>

                    <select name="materia" id="materia" required>

                        <option value="">
                            Selecione uma matéria
                        </option>

                        <option value="Português">
                            Português
                        </option>

                        <option value="Matemática">
                            Matemática
                        </option>

                        <option value="História">
                            História
                        </option>

                        <option value="Geografia">
                            Geografia
                        </option>

                    </select>

                </div>

                <div class="campo">

                    <label>
                        Título <span class="obrigatorio">*</span>
                    </label>

                    <input type="text" name="titulo" id="titulo" maxlength="100"
                        placeholder="Ex: Introdução à Estatística" required>

                    <div class="contador">
                        <span id="contadorTitulo">0</span>/100
                    </div>

                </div>

                <div class="campo">

                    <label>
                        Descrição <span class="obrigatorio">*</span>
                    </label>

                    <textarea name="descricao" id="descricao" maxlength="200" placeholder="Explique o conteúdo..."
                        required></textarea>

                    <div class="contador">
                        <span id="contadorDescricao">0</span>/200
                    </div>

                </div>

                <div class="campo">

                    <label>
                        Nível de ensino <span class="obrigatorio">*</span>
                    </label>

                    <select name="nivel" id="nivel" required>

                        <option value="">
                            Selecione o nível
                        </option>

                        <option value="Ensino Fundamental">
                            Ensino Fundamental
                        </option>

                        <option value="Ensino Médio">
                            Ensino Médio
                        </option>

                        <option value="EJA">
                            EJA
                        </option>

                        <option value="Pré-Vestibular">
                            Pré-Vestibular
                        </option>

                    </select>

                </div>

                <div class="campo">

                    <label>
                        Conteúdo da aula <span class="obrigatorio">*</span>
                    </label>

                    <textarea name="conteudo" id="conteudo" placeholder="Digite o conteúdo completo..."
                        required></textarea>

                </div>

                <div class="campo">

                    <label>
                        Link complementar
                    </label>

                    <input type="url" name="link" id="link" placeholder="https://exemplo.com">

                </div>

                <button type="submit" class="publicar">
                    Publicar conteúdo
                </button>

            </form>

        </div>

    </div>

    <section class="lista">

        <h2>
            Conteúdos publicados
        </h2>

        <?php if(empty($conteudos)): ?>

        <div class="conteudo-item">

            <div class="info">

                <h3>
                    Nenhum conteúdo publicado.
                </h3>

                <p>
                    Publique seu primeiro conteúdo.
                </p>

            </div>

        </div>

        <?php else: ?>

        <?php foreach(array_reverse($conteudos) as $c): ?>

        <div class="conteudo-item">

            <div class="info">

                <div class="materia">

                    <?=htmlspecialchars($c["icone"])?>
                    <?=htmlspecialchars($c["materia"])?>

                </div>

                <h3>
                    <?=htmlspecialchars($c["titulo"])?>
                </h3>

                <p>
                    <?=htmlspecialchars($c["descricao"])?>
                </p>

                <small>
                    📌 <?=htmlspecialchars($c["nivel"])?>
                    &nbsp;•&nbsp;
                    <?=htmlspecialchars($c["data"])?>
                </small>

            </div>

            <a href="script.php?excluir=<?=urlencode($c["id"])?>" class="excluir">
                🗑️ Excluir
            </a>

        </div>

        <?php endforeach; ?>

        <?php endif; ?>

    </section>

    <footer>
        © 2026 Portal do Guido — Área do Professor
    </footer>

    <script src="script.js"></script>

</body>

</html>