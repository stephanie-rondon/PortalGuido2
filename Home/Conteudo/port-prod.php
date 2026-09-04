<?php
$categoria = "PORTUGUÊS";

$titulo = "Produção Textual: como escrever um bom texto";

$subtitulo = "Aprender a organizar ideias, desenvolver argumentos e construir uma conclusão ajuda o estudante a produzir textos mais claros, coerentes e eficientes.";

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

            /* BOTÃO HOME NO CELULAR */
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
                    PRODUÇÃO<br>
                    <span>& TEXTUAL</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    Produzir um bom texto significa organizar ideias de maneira
                    clara, lógica e adequada ao objetivo da comunicação.
                    Para escrever bem, não basta conhecer regras gramaticais:
                    também é necessário saber desenvolver ideias e construir
                    uma sequência que faça sentido para o leitor.
                </p>

                <p>
                    A escrita está presente em praticamente todas as áreas
                    da vida. Os estudantes escrevem trabalhos, redações,
                    respostas de atividades, mensagens e diferentes tipos
                    de textos durante sua formação.
                </p>

                <p>
                    Por isso, desenvolver uma boa capacidade de escrita pode
                    facilitar tanto o desempenho escolar quanto a comunicação
                    em diferentes situações do cotidiano.
                </p>

                <h2>Antes de começar a escrever</h2>

                <p>
                    Antes de iniciar um texto, é importante compreender
                    exatamente qual é o tema proposto. Também devemos observar
                    qual é o objetivo da produção e quem será o público leitor.
                </p>

                <div class="caixa">

                    <strong>Uma boa estratégia:</strong>

                    <p>
                        Antes de escrever, anote as principais ideias que
                        deseja apresentar. Essa pequena organização ajuda
                        a evitar repetições e facilita a construção dos
                        parágrafos.
                    </p>

                </div>

                <h2>A estrutura de um texto</h2>

                <p>
                    Dependendo do gênero textual, a estrutura pode variar.
                    Entretanto, muitos textos escolares podem ser organizados
                    em três partes principais: introdução, desenvolvimento
                    e conclusão.
                </p>

                <h3>Introdução</h3>

                <p>
                    A introdução apresenta o assunto que será desenvolvido.
                    Ela deve contextualizar o leitor e indicar a ideia central
                    do texto.
                </p>

                <h3>Desenvolvimento</h3>

                <p>
                    O desenvolvimento é a parte em que as ideias principais
                    são explicadas. Em textos argumentativos, essa etapa pode
                    apresentar argumentos, exemplos, dados e explicações que
                    sustentem o ponto de vista defendido.
                </p>

                <h3>Conclusão</h3>

                <p>
                    A conclusão encerra o texto retomando as principais ideias.
                    Dependendo da proposta, também pode apresentar uma reflexão,
                    uma solução ou uma proposta relacionada ao tema.
                </p>

                <h2>Coerência</h2>

                <p>
                    A coerência está relacionada ao sentido geral do texto.
                    As ideias precisam estar relacionadas entre si e seguir
                    uma sequência que possa ser compreendida pelo leitor.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        "Lucas estudou durante toda a semana para a avaliação.
                        Por isso, sentiu-se preparado no dia da prova."
                    </p>

                    <p>
                        As duas ideias estão relacionadas de forma lógica:
                        o estudo contribuiu para que Lucas se sentisse preparado.
                    </p>

                </div>

                <h2>Coesão</h2>

                <p>
                    A coesão é responsável por ajudar a conectar as diferentes
                    partes de um texto. Para isso, podemos utilizar palavras
                    e expressões que estabelecem relações entre as ideias.
                </p>

                <div class="exemplo">

                    <strong>Alguns conectivos:</strong>

                    <p>
                        portanto, porém, entretanto, além disso, porque,
                        dessa forma, por isso, assim e por outro lado.
                    </p>

                </div>

                <h2>Como desenvolver argumentos?</h2>

                <p>
                    Em textos de opinião e textos argumentativos, é importante
                    apresentar uma ideia e explicar por que ela deve ser
                    considerada.
                </p>

                <p>
                    Um argumento pode ser desenvolvido por meio de exemplos,
                    fatos, comparações, explicações e informações relacionadas
                    ao assunto discutido.
                </p>

                <h2>A importância do vocabulário</h2>

                <p>
                    Um vocabulário amplo permite ao estudante encontrar
                    diferentes maneiras de expressar uma mesma ideia.
                    A leitura de livros, notícias, artigos e outros gêneros
                    textuais contribui para ampliar o conhecimento de palavras.
                </p>

                <p>
                    Entretanto, utilizar palavras difíceis não significa
                    necessariamente escrever melhor. O mais importante é
                    escolher palavras adequadas ao contexto e que permitam
                    transmitir a mensagem com clareza.
                </p>

                <h2>Evite repetições</h2>

                <p>
                    Repetir a mesma palavra muitas vezes pode deixar o texto
                    cansativo. Uma estratégia é utilizar pronomes, sinônimos
                    ou reorganizar as frases.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        "A escola oferece atividades culturais. Essas atividades
                        ajudam os estudantes a desenvolver novos conhecimentos."
                    </p>

                    <p>
                        Na segunda frase, a expressão "essas atividades"
                        retoma uma informação apresentada anteriormente.
                    </p>

                </div>

                <h2>A importância da revisão</h2>

                <p>
                    Depois de terminar a primeira versão do texto, é importante
                    fazer uma revisão cuidadosa.
                </p>

                <p>
                    Durante a revisão, o estudante pode verificar erros de
                    ortografia, pontuação, concordância, repetição de palavras
                    e problemas na organização das ideias.
                </p>

                <div class="dicas">

                    <h3>💡 Dicas para escrever melhor</h3>

                    <ul>

                        <li>
                            Leia atentamente o tema antes de começar.
                        </li>

                        <li>
                            Organize suas ideias previamente.
                        </li>

                        <li>
                            Desenvolva uma ideia principal em cada parágrafo.
                        </li>

                        <li>
                            Utilize conectivos para ligar as ideias.
                        </li>

                        <li>
                            Evite repetições desnecessárias.
                        </li>

                        <li>
                            Utilize uma linguagem adequada ao público.
                        </li>

                        <li>
                            Revise o texto antes de entregá-lo.
                        </li>

                        <li>
                            Leia diferentes tipos de textos para ampliar
                            seu vocabulário.
                        </li>

                    </ul>

                </div>

                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Quais são as três partes principais de um texto?
                        </li>

                        <li>
                            Qual é a função da introdução?
                        </li>

                        <li>
                            O que deve ser apresentado no desenvolvimento?
                        </li>

                        <li>
                            Qual é a diferença entre coerência e coesão?
                        </li>

                        <li>
                            Cite três conectivos que podem ser utilizados
                            para ligar ideias.
                        </li>

                        <li>
                            Por que devemos evitar repetições excessivas
                            em um texto?
                        </li>

                        <li>
                            Por que a revisão é importante?
                        </li>

                        <li>
                            Escolha um tema de sua preferência e escreva
                            uma introdução sobre ele.
                        </li>

                    </ol>

                </div>

                <h2>Desafio de produção</h2>

                <div class="caixa">

                    <strong>Proposta:</strong>

                    <p>
                        Escreva um texto de aproximadamente 15 linhas sobre
                        o tema "A importância da leitura na vida dos estudantes".
                    </p>

                    <p>
                        Organize seu texto em introdução, desenvolvimento
                        e conclusão. Apresente pelo menos dois argumentos
                        e utilize conectivos para relacionar as ideias.
                    </p>

                </div>

                <h2>Conclusão</h2>

                <p>
                    Escrever bem é uma habilidade que pode ser desenvolvida
                    com prática, leitura e revisão. O estudante não precisa
                    produzir um texto perfeito na primeira tentativa.
                </p>

                <p>
                    O mais importante é aprender a organizar as ideias,
                    desenvolver argumentos, utilizar uma linguagem adequada
                    e revisar aquilo que foi escrito.
                </p>

                <p>
                    Quanto maior for o contato com diferentes tipos de textos,
                    maior será o repertório do estudante para produzir suas
                    próprias ideias de maneira clara e eficiente.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação e conhecimento

    </footer>

</body>

</html>