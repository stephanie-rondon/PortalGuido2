<?php
$categoria = "PORTUGUÊS";

$titulo = "Gramática: conheça as principais classes de palavras";

$subtitulo = "A gramática ajuda a compreender como as palavras são organizadas e utilizadas na construção de frases, textos e diferentes formas de comunicação.";

$autor = "Redação Portal News";

$data = "1 de setembro de 2026";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portal News - <?php echo $titulo; ?></title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1e293b;
        }

        /* BOTÃO HOME FIXO */

        .botao-home {
            position: fixed;
            top: 20px;
            left: 20px;

            background: #0b1f3a;
            color: white;

            padding: 10px 16px;

            border-radius: 6px;

            text-decoration: none;

            font-size: 14px;
            font-weight: bold;

            box-shadow: 0 3px 10px rgba(11, 31, 58, 0.15);

            transition: 0.2s;

            z-index: 9999;
        }

        .botao-home:hover {
            background: #1769aa;
            transform: translateY(-2px);
        }

        main {
            max-width: 1050px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .materia {
            background: white;
            padding: 45px;
            border-radius: 10px;

            box-shadow:
                0 5px 20px rgba(11, 31, 58, 0.06);
        }

        .categoria {
            color: #1769aa;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        h1 {
            color: #0b1f3a;
            font-size: 42px;
            line-height: 1.15;
            max-width: 850px;
            margin-bottom: 18px;
        }

        .subtitulo {
            color: #64748b;
            font-size: 17px;
            line-height: 1.6;
            max-width: 800px;
            margin-bottom: 18px;
        }

        .informacoes {
            display: flex;
            gap: 10px;
            font-size: 13px;
            margin-bottom: 30px;
        }

        .autor {
            font-weight: bold;
            color: #1e293b;
        }

        .data {
            color: #64748b;
        }

        .imagem {
            height: 280px;
            border-radius: 8px;

            background:
                linear-gradient(
                    135deg,
                    #0b1f3a,
                    #1769aa
                );

            display: flex;
            align-items: center;
            justify-content: center;

            position: relative;
            overflow: hidden;
            margin-bottom: 35px;
        }

        .imagem::before {
            content: "";

            width: 280px;
            height: 280px;

            border-radius: 50%;

            background: rgba(62, 166, 255, 0.25);

            position: absolute;

            left: -70px;
            top: -50px;
        }

        .imagem::after {
            content: "";

            width: 180px;
            height: 180px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.08);

            position: absolute;

            right: 80px;
            bottom: -100px;
        }

        .texto-imagem {
            color: white;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            z-index: 2;
        }

        .texto-imagem span {
            color: #3ea6ff;
        }

        .conteudo {
            max-width: 800px;
            font-size: 17px;
            line-height: 1.8;
            color: #334155;
        }

        .conteudo p {
            margin-bottom: 22px;
        }

        .conteudo h2 {
            color: #0b1f3a;
            font-size: 28px;
            margin-top: 38px;
            margin-bottom: 18px;
        }

        .conteudo h3 {
            color: #1769aa;
            font-size: 21px;
            margin-top: 25px;
            margin-bottom: 12px;
        }

        .conteudo .primeiro {
            font-size: 19px;
            font-weight: 500;
            color: #1e293b;
        }

        .exemplo {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 22px;
            margin: 25px 0;
            border-radius: 8px;
        }

        .exemplo strong {
            color: #1769aa;
        }

        .caixa {
            background: #f1f7fd;
            border-left: 4px solid #1769aa;
            padding: 20px;
            margin: 28px 0;
            border-radius: 5px;
        }

        .caixa strong {
            color: #0b1f3a;
        }

        .dicas {
            background: #0b1f3a;
            color: white;
            padding: 25px;
            border-radius: 8px;
            margin: 30px 0;
        }

        .dicas h3 {
            color: #3ea6ff;
            margin-top: 0;
        }

        .dicas ul {
            padding-left: 22px;
        }

        .dicas li {
            margin-bottom: 10px;
        }

        .exercicios {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 25px;
            margin-top: 35px;
            border-radius: 8px;
        }

        .exercicios ol {
            padding-left: 25px;
        }

        .exercicios li {
            margin-bottom: 18px;
        }

        footer {
            height: 70px;
            background: #0b1f3a;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #bfd4ea;
            font-size: 13px;
        }

        /* RESPONSIVO */

        @media (max-width: 700px) {

            main {
                margin: 20px auto;
            }

            .materia {
                padding: 25px;
            }

            h1 {
                font-size: 30px;
            }

            .subtitulo {
                font-size: 15px;
            }

            .imagem {
                height: 220px;
            }

            .texto-imagem {
                font-size: 24px;
            }

            .informacoes {
                flex-direction: column;
            }

            .botao-home {
                top: 10px;
                left: 10px;

                padding: 8px 12px;

                font-size: 12px;
            }

        }

    </style>

</head>

<body>

    <!-- BOTÃO FIXO -->

    <a href="../home.php" class="botao-home">
        ← Voltar para Pagina inicial
    </a>

    <main>

        <article class="materia">

            <div class="categoria">
                <?php echo $categoria; ?>
            </div>

            <h1>
                <?php echo $titulo; ?>
            </h1>

            <div class="subtitulo">
                <?php echo $subtitulo; ?>
            </div>

            <div class="informacoes">

                <span class="autor">
                    Por <?php echo $autor; ?>
                </span>

                <span class="data">
                    • <?php echo $data; ?>
                </span>

            </div>

            <div class="imagem">

                <div class="texto-imagem">
                    GRAMÁTICA<br>
                    <span>& PORTUGUÊS</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    A gramática é o conjunto de regras e princípios que
                    ajudam a compreender como uma língua funciona. Ela
                    permite entender a organização das palavras, das frases
                    e dos textos, contribuindo para uma comunicação mais
                    clara e eficiente.
                </p>

                <p>
                    Conhecer a gramática não significa apenas decorar regras.
                    É importante compreender como as palavras funcionam
                    dentro das frases e como suas funções podem mudar
                    dependendo do contexto.
                </p>

                <h2>O que são classes de palavras?</h2>

                <p>
                    As palavras da Língua Portuguesa podem ser classificadas
                    de acordo com suas características e funções. Entre as
                    principais classes estão os substantivos, adjetivos,
                    verbos, pronomes, artigos, advérbios, preposições,
                    conjunções e numerais.
                </p>

                <h2>Substantivos</h2>

                <p>
                    O substantivo é a palavra utilizada para nomear pessoas,
                    animais, objetos, lugares, sentimentos, ideias e diversos
                    outros elementos.
                </p>

                <div class="exemplo">

                    <strong>Exemplos:</strong>

                    <p>
                        casa, estudante, cachorro, Brasil, escola,
                        alegria e amizade.
                    </p>

                </div>

                <h2>Adjetivos</h2>

                <p>
                    Os adjetivos são palavras que caracterizam ou atribuem
                    qualidades aos substantivos.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        "A menina inteligente resolveu o problema."
                    </p>

                    <p>
                        Na frase, a palavra "inteligente" caracteriza
                        o substantivo "menina".
                    </p>

                </div>

                <h2>Verbos</h2>

                <p>
                    Os verbos indicam ações, estados, acontecimentos ou
                    fenômenos. Eles são fundamentais para a construção
                    das frases.
                </p>

                <div class="exemplo">

                    <strong>Exemplos:</strong>

                    <p>
                        estudar, correr, escrever, aprender, ser e estar.
                    </p>

                    <p>
                        Na frase "Maria estudou para a prova", o verbo
                        "estudou" indica uma ação realizada por Maria.
                    </p>

                </div>

                <h2>Pronomes</h2>

                <p>
                    Os pronomes podem substituir ou acompanhar substantivos,
                    evitando repetições e ajudando na organização do texto.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        "João comprou um livro. Ele começou a ler o livro
                        no mesmo dia."
                    </p>

                    <p>
                        O pronome "ele" substitui o nome João.
                    </p>

                </div>

                <h2>Artigos</h2>

                <p>
                    Os artigos acompanham os substantivos e ajudam a indicar
                    se estamos falando de algo determinado ou não determinado.
                </p>

                <div class="exemplo">

                    <strong>Exemplos:</strong>

                    <p>
                        o, a, os, as, um, uma, uns e umas.
                    </p>

                </div>

                <h2>Advérbios</h2>

                <p>
                    Os advérbios podem modificar o sentido de um verbo,
                    de um adjetivo ou de outro advérbio. Eles podem indicar
                    circunstâncias como tempo, lugar, modo e intensidade.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        "Pedro chegou rapidamente."
                    </p>

                    <p>
                        A palavra "rapidamente" indica o modo como Pedro chegou.
                    </p>

                </div>

                <h2>Por que estudar gramática?</h2>

                <p>
                    O conhecimento gramatical ajuda o estudante a compreender
                    melhor os textos que lê e a produzir textos mais claros.
                    Também facilita a identificação das funções que as
                    palavras exercem dentro de uma frase.
                </p>

                <div class="caixa">

                    <strong>Uma dica importante:</strong>

                    <p>
                        Em vez de tentar decorar todas as regras de uma vez,
                        procure observar exemplos e praticar. A compreensão
                        melhora quando o estudante percebe como a regra
                        funciona dentro de uma frase real.
                    </p>

                </div>

                <div class="dicas">

                    <h3>💡 Dicas para estudar gramática</h3>

                    <ul>

                        <li>
                            Leia textos diferentes regularmente.
                        </li>

                        <li>
                            Observe como as palavras são utilizadas.
                        </li>

                        <li>
                            Faça exercícios de classificação de palavras.
                        </li>

                        <li>
                            Procure identificar os verbos das frases.
                        </li>

                        <li>
                            Observe quais palavras caracterizam os substantivos.
                        </li>

                        <li>
                            Revise os conteúdos com frequência.
                        </li>

                    </ul>

                </div>

                <h2>Exercícios</h2>

                <div class="exercicios">

                    <p>
                        <strong>Identifique a classe das palavras destacadas:</strong>
                    </p>

                    <ol>

                        <li>
                            "O <strong>aluno</strong> estudou para a prova."
                        </li>

                        <li>
                            "A casa é <strong>grande</strong>."
                        </li>

                        <li>
                            "Maria <strong>escreveu</strong> uma redação."
                        </li>

                        <li>
                            "<strong>Ele</strong> comprou um novo caderno."
                        </li>

                        <li>
                            "João chegou <strong>rapidamente</strong>."
                        </li>

                    </ol>

                    <p>
                        <strong>Desafio:</strong>
                    </p>

                    <p>
                        Crie uma frase que contenha pelo menos um substantivo,
                        um adjetivo, um verbo e um pronome.
                    </p>

                </div>

                <h2>Conclusão</h2>

                <p>
                    Estudar gramática é compreender melhor o funcionamento
                    da Língua Portuguesa. Ao conhecer as classes de palavras,
                    o estudante consegue analisar frases e textos com maior
                    facilidade.
                </p>

                <p>
                    A prática é essencial para desenvolver esse conhecimento.
                    Por isso, além de estudar as regras, é importante ler,
                    escrever e resolver exercícios regularmente.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação e conhecimento

    </footer>

</body>

</html>