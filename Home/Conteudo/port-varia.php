<?php
$categoria = "PORTUGUÊS";

$titulo = "Variação Linguística: entenda como a língua muda de acordo com a sociedade";

$subtitulo = "A língua portuguesa apresenta diferentes formas de uso, que variam conforme a região, o grupo social, a época e a situação de comunicação.";

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


        .botao-voltar {
            display: inline-block;

            padding: 10px 18px;

            margin-bottom: 25px;

            background: #1769aa;
            color: white;

            text-decoration: none;

            font-size: 14px;
            font-weight: bold;

            border-radius: 6px;

            transition: 0.3s;
        }

        .botao-voltar:hover {
            background: #0b1f3a;

            transform: translateY(-2px);
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

            .botao-voltar {
                font-size: 13px;
                padding: 9px 15px;
            }

        }

    </style>

</head>

<body>

    <main>

        <article class="materia">

          

            <a href="../home.php" class="botao-voltar">
            ← Voltar para Pagina inicial
            </a>

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
                    VARIAÇÃO<br>
                    <span>& LÍNGUA PORTUGUESA</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    A língua portuguesa não é utilizada da mesma maneira
                    por todas as pessoas. Dependendo da região, da idade,
                    do grupo social, da profissão ou da situação de comunicação,
                    diferentes formas de falar e escrever podem ser utilizadas.
                </p>

                <p>
                    Essas diferenças fazem parte do funcionamento natural
                    de uma língua. A variação linguística é um dos temas
                    importantes para compreender como a linguagem está
                    relacionada à sociedade e à cultura.
                </p>

                <h2>O que é variação linguística?</h2>

                <p>
                    Variação linguística é a existência de diferentes formas
                    de utilizar uma mesma língua. Essas diferenças podem
                    aparecer no vocabulário, na pronúncia, na construção
                    das frases e até mesmo na escolha das palavras.
                </p>

                <p>
                    Uma pessoa pode utilizar uma determinada expressão em
                    uma conversa com amigos e escolher uma linguagem mais
                    formal em uma entrevista de emprego. As duas situações
                    fazem parte do uso da língua.
                </p>

                <h2>Variação regional</h2>

                <p>
                    A variação regional acontece quando determinados termos
                    ou formas de falar são característicos de uma região.
                    O Brasil possui grande diversidade cultural e linguística,
                    por isso existem muitas diferenças entre as regiões.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Em diferentes regiões brasileiras, uma mesma comida,
                        objeto ou atividade pode receber nomes diferentes.
                    </p>

                </div>

                <h2>Variação social</h2>

                <p>
                    A maneira de falar também pode variar de acordo com
                    o grupo social ao qual uma pessoa pertence. Profissão,
                    idade, escolaridade e contexto cultural podem influenciar
                    as escolhas linguísticas.
                </p>

                <h2>Variação histórica</h2>

                <p>
                    A língua também muda com o passar do tempo. Palavras
                    e expressões utilizadas no passado podem desaparecer
                    ou adquirir novos significados.
                </p>

                <p>
                    Da mesma forma, novas palavras podem surgir para
                    representar novas tecnologias, comportamentos e
                    acontecimentos da sociedade.
                </p>

                <h2>Linguagem formal e informal</h2>

                <p>
                    A linguagem formal costuma ser utilizada em situações
                    que exigem maior cuidado na comunicação, como documentos,
                    trabalhos escolares, entrevistas e textos acadêmicos.
                </p>

                <p>
                    Já a linguagem informal é comum em conversas cotidianas,
                    mensagens entre amigos e situações em que existe maior
                    proximidade entre os participantes.
                </p>

                <div class="caixa">

                    <strong>Importante para o ENEM:</strong>

                    <p>
                        Uma questão pode apresentar diferentes formas de
                        linguagem e pedir que o estudante identifique o
                        contexto social, regional ou comunicativo em que
                        determinada variedade linguística é utilizada.
                    </p>

                </div>

                <h2>Preconceito linguístico</h2>

                <p>
                    O preconceito linguístico acontece quando uma pessoa
                    é julgada ou discriminada por sua maneira de falar
                    ou escrever.
                </p>

                <p>
                    Muitas vezes, determinadas variedades são consideradas
                    "erradas" simplesmente porque não correspondem à norma
                    utilizada em determinados contextos sociais.
                </p>

                <p>
                    É importante compreender que diferentes formas de falar
                    possuem relação com a história, a cultura e a realidade
                    dos grupos que as utilizam.
                </p>

                <h2>Norma-padrão</h2>

                <p>
                    A norma-padrão corresponde a um conjunto de convenções
                    utilizadas em determinados contextos formais da língua.
                    Ela é importante para situações que exigem uma comunicação
                    mais padronizada.
                </p>

                <p>
                    Entretanto, conhecer a norma-padrão não significa afirmar
                    que todas as outras formas de utilização da língua
                    sejam inadequadas em qualquer situação.
                </p>

                <div class="dicas">

                    <h3>💡 Como estudar para o ENEM</h3>

                    <ul>

                        <li>
                            Observe quem está falando e para quem a mensagem
                            está sendo direcionada.
                        </li>

                        <li>
                            Identifique o contexto de comunicação.
                        </li>

                        <li>
                            Diferencie linguagem formal e informal.
                        </li>

                        <li>
                            Observe marcas regionais e sociais presentes
                            no texto.
                        </li>

                        <li>
                            Não confunda variação linguística com erro
                            de interpretação.
                        </li>

                        <li>
                            Analise a intenção comunicativa do texto.
                        </li>

                    </ul>

                </div>

                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            O que é variação linguística?
                        </li>

                        <li>
                            Explique o que caracteriza uma variação regional.
                        </li>

                        <li>
                            Qual é a diferença entre linguagem formal e informal?
                        </li>

                        <li>
                            O que pode ser considerado preconceito linguístico?
                        </li>

                        <li>
                            Por que a língua sofre mudanças ao longo do tempo?
                        </li>

                        <li>
                            Em uma questão do ENEM, por que é importante
                            observar o contexto em que determinada expressão
                            foi utilizada?
                        </li>

                    </ol>

                </div>

                <h2>Conclusão</h2>

                <p>
                    A língua portuguesa apresenta grande diversidade e está
                    diretamente relacionada à sociedade e à cultura.
                    As diferentes formas de falar e escrever fazem parte
                    da dinâmica natural da língua.
                </p>

                <p>
                    Para o ENEM, compreender a variação linguística é
                    especialmente importante porque as questões costumam
                    relacionar linguagem, contexto, identidade, cultura
                    e sociedade.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação e conhecimento

    </footer>

</body>

</html>