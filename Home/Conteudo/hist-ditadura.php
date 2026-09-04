<?php
$categoria = "HISTÓRIA";

$titulo = "Ditadura Militar no Brasil: contexto, acontecimentos e redemocratização";

$subtitulo = "O período entre 1964 e 1985 marcou profundamente a história brasileira, com mudanças políticas, restrições de direitos, resistência e o processo de retorno à democracia.";

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

        /* BOTÃO HOME */
        .botao-home {
            position: absolute;
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

        .linha-tempo {
            border-left: 3px solid #1769aa;
            padding-left: 20px;
            margin: 25px 0;
        }

        .evento {
            margin-bottom: 25px;
        }

        .evento strong {
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
                    DITADURA<br>
                    <span>& DEMOCRACIA</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    A Ditadura Militar foi um período da história brasileira
                    que começou em 1964 e terminou em 1985. Durante esse período,
                    o país foi governado por militares e passou por profundas
                    transformações políticas, econômicas e sociais.
                </p>

                <p>
                    O período foi marcado por restrições às liberdades políticas,
                    censura, perseguição de opositores e diferentes formas de
                    resistência. Também ocorreram importantes mudanças na
                    economia e na infraestrutura brasileira.
                </p>

                <h2>O contexto político antes de 1964</h2>

                <p>
                    No início da década de 1960, o Brasil vivia um período de
                    grande instabilidade política. O presidente João Goulart,
                    conhecido como Jango, defendia propostas de reformas
                    sociais e econômicas chamadas de Reformas de Base.
                </p>

                <p>
                    Entre essas propostas estavam mudanças relacionadas à
                    reforma agrária, educação, sistema tributário e outras
                    áreas da sociedade.
                </p>

                <p>
                    Ao mesmo tempo, havia forte oposição de grupos políticos,
                    empresariais e setores das Forças Armadas ao governo.
                    O cenário nacional tornou-se cada vez mais dividido.
                </p>

                <h2>O golpe de 1964</h2>

                <p>
                    Em 31 de março e 1º de abril de 1964, setores das Forças
                    Armadas derrubaram o governo de João Goulart.
                </p>

                <p>
                    O movimento recebeu apoio de diferentes grupos civis
                    e políticos e contou também com apoio do governo dos
                    Estados Unidos no contexto da Guerra Fria.
                </p>

                <div class="caixa">

                    <strong>Importante:</strong>

                    <p>
                        O golpe de 1964 interrompeu o governo constitucional
                        de João Goulart e iniciou um período de regime militar
                        que durou 21 anos.
                    </p>

                </div>

                <h2>Os governos militares</h2>

                <p>
                    Durante a ditadura, o Brasil foi governado por cinco
                    presidentes militares. O período foi marcado por
                    mudanças institucionais e pelo aumento do controle
                    político sobre a sociedade.
                </p>

                <p>
                    O governo utilizou diferentes mecanismos para limitar
                    a atuação de grupos considerados opositores.
                </p>

                <h2>O AI-5</h2>

                <p>
                    Em dezembro de 1968, foi decretado o Ato Institucional
                    Número 5, conhecido como AI-5. A medida ampliou os
                    poderes do governo e intensificou a repressão política.
                </p>

                <p>
                    O período posterior ao AI-5 ficou marcado pelo aumento
                    da censura, das prisões políticas e da repressão contra
                    organizações consideradas contrárias ao regime.
                </p>

                <h2>A censura</h2>

                <p>
                    A censura atingiu diferentes áreas da sociedade.
                    Jornais, revistas, músicas, filmes, peças de teatro
                    e outros meios de comunicação poderiam ter conteúdos
                    cortados ou proibidos.
                </p>

                <p>
                    Artistas e jornalistas desenvolveram diferentes formas
                    de resistência cultural. Algumas músicas e obras
                    utilizavam metáforas para criticar a situação política.
                </p>

                <h2>Perseguição e resistência</h2>

                <p>
                    Durante o regime, pessoas consideradas opositoras foram
                    perseguidas, presas e, em diversos casos, submetidas
                    à tortura. Algumas também foram obrigadas a deixar o país.
                </p>

                <p>
                    A resistência ocorreu de diferentes maneiras. Estudantes,
                    artistas, jornalistas, políticos e movimentos sociais
                    participaram de manifestações e ações pela retomada das
                    liberdades democráticas.
                </p>

                <h2>O chamado Milagre Econômico</h2>

                <p>
                    Entre o final da década de 1960 e o início da década
                    de 1970, o Brasil apresentou altas taxas de crescimento
                    econômico.
                </p>

                <p>
                    Esse período ficou conhecido como Milagre Econômico.
                    Houve grandes investimentos em infraestrutura e expansão
                    da produção industrial.
                </p>

                <p>
                    Entretanto, o crescimento econômico também foi acompanhado
                    por aumento da desigualdade social e crescimento da
                    dívida externa.
                </p>

                <h2>O processo de abertura política</h2>

                <p>
                    A partir da segunda metade da década de 1970, iniciou-se
                    um processo gradual de abertura política.
                </p>

                <p>
                    A sociedade brasileira passou a pressionar cada vez mais
                    pelo retorno das liberdades democráticas e pela ampliação
                    da participação política.
                </p>

                <div class="linha-tempo">

                    <div class="evento">
                        <strong>1964</strong>
                        <p>Golpe que derrubou o governo de João Goulart.</p>
                    </div>

                    <div class="evento">
                        <strong>1968</strong>
                        <p>Decretação do AI-5 e intensificação da repressão.</p>
                    </div>

                    <div class="evento">
                        <strong>1979</strong>
                        <p>Lei da Anistia e avanço do processo de abertura política.</p>
                    </div>

                    <div class="evento">
                        <strong>1984</strong>
                        <p>Grande mobilização popular pelas eleições diretas.</p>
                    </div>

                    <div class="evento">
                        <strong>1985</strong>
                        <p>Fim do regime militar e início da Nova República.</p>
                    </div>

                </div>

                <h2>As Diretas Já</h2>

                <p>
                    Entre 1983 e 1984, milhões de brasileiros participaram
                    de manifestações conhecidas como Diretas Já.
                </p>

                <p>
                    O movimento defendia a realização de eleições diretas
                    para presidente da República e tornou-se um dos maiores
                    movimentos populares da história brasileira.
                </p>

                <h2>O fim da ditadura</h2>

                <p>
                    Em 1985, Tancredo Neves foi eleito indiretamente pelo
                    Colégio Eleitoral. Ele faleceu antes de tomar posse,
                    e José Sarney assumiu a Presidência.
                </p>

                <p>
                    Esse momento marcou o início da Nova República e o
                    processo de reconstrução das instituições democráticas.
                </p>

                <h2>A Constituição de 1988</h2>

                <p>
                    Um dos principais acontecimentos do processo de
                    redemocratização foi a elaboração da Constituição
                    Federal de 1988.
                </p>

                <p>
                    A Constituição ampliou direitos individuais e sociais
                    e estabeleceu importantes princípios para o funcionamento
                    da democracia brasileira.
                </p>

                <div class="dicas">

                    <h3>💡 Como estudar esse período</h3>

                    <ul>

                        <li>
                            Organize os acontecimentos em ordem cronológica.
                        </li>

                        <li>
                            Entenda as causas políticas do golpe de 1964.
                        </li>

                        <li>
                            Estude conceitos como censura, repressão e anistia.
                        </li>

                        <li>
                            Conheça as diferentes formas de resistência.
                        </li>

                        <li>
                            Relacione a Ditadura Militar com a redemocratização.
                        </li>

                        <li>
                            Estude a importância da Constituição de 1988.
                        </li>

                    </ul>

                </div>

                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Em que ano começou a Ditadura Militar no Brasil?
                        </li>

                        <li>
                            Quem era o presidente brasileiro deposto pelo
                            golpe de 1964?
                        </li>

                        <li>
                            O que foi o AI-5?
                        </li>

                        <li>
                            O que era a censura durante o regime militar?
                        </li>

                        <li>
                            O que foi o movimento Diretas Já?
                        </li>

                        <li>
                            Em que ano terminou a Ditadura Militar?
                        </li>

                        <li>
                            Qual foi a importância da Constituição Federal
                            de 1988 para a democracia brasileira?
                        </li>

                    </ol>

                </div>

                <h2>Conclusão</h2>

                <p>
                    A Ditadura Militar representa um período fundamental
                    para compreender a história política e social do Brasil
                    contemporâneo.
                </p>

                <p>
                    Estudar esse período permite compreender as consequências
                    de um regime autoritário, as diferentes formas de resistência
                    e o processo de reconstrução das instituições democráticas.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação e conhecimento

    </footer>

</body>

</html>