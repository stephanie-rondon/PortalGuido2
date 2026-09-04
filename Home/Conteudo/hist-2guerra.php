<?php
$categoria = "HISTÓRIA";

$titulo = "Segunda Guerra Mundial: causas, acontecimentos e consequências";

$subtitulo = "Entre 1939 e 1945, o mundo enfrentou um dos maiores conflitos da história. A guerra envolveu dezenas de países e provocou profundas transformações políticas, econômicas e sociais.";

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
                    SEGUNDA<br>
                    <span>GUERRA MUNDIAL</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    A Segunda Guerra Mundial foi um conflito de escala global
                    que ocorreu entre 1939 e 1945. Envolveu diversas nações
                    e provocou milhões de mortes, além de causar profundas
                    mudanças políticas, econômicas e sociais em diferentes
                    partes do mundo.
                </p>

                <p>
                    O conflito não surgiu de um único acontecimento.
                    Diversos fatores políticos e econômicos contribuíram
                    para aumentar as tensões entre os países durante as
                    décadas que antecederam a guerra.
                </p>

                <h2>O cenário antes da guerra</h2>

                <p>
                    Após a Primeira Guerra Mundial, vários países europeus
                    enfrentaram dificuldades econômicas e políticas.
                    O Tratado de Versalhes impôs duras condições à Alemanha,
                    que perdeu territórios e foi responsabilizada pelo conflito.
                </p>

                <p>
                    Na década de 1930, a crise econômica, o desemprego e a
                    instabilidade política favoreceram o crescimento de
                    regimes autoritários em alguns países.
                </p>

                <h2>O crescimento do nazismo</h2>

                <p>
                    Na Alemanha, Adolf Hitler e o Partido Nazista chegaram
                    ao poder em 1933. O regime nazista defendia ideias
                    nacionalistas, racistas e expansionistas.
                </p>

                <p>
                    O governo nazista perseguiu diversos grupos, especialmente
                    a população judaica. Essa perseguição posteriormente
                    culminou no Holocausto, durante o qual cerca de seis
                    milhões de judeus foram assassinados.
                </p>

                <div class="caixa">

                    <strong>Importante:</strong>

                    <p>
                        O Holocausto foi o assassinato sistemático de milhões
                        de judeus pelos nazistas e seus colaboradores.
                        Também foram perseguidos e assassinados outros grupos,
                        incluindo pessoas com deficiência, povos Roma e Sinti,
                        prisioneiros de guerra soviéticos, opositores políticos
                        e outros grupos perseguidos pelo regime.
                    </p>

                </div>

                <h2>O início da Segunda Guerra Mundial</h2>

                <p>
                    Em 1º de setembro de 1939, a Alemanha invadiu a Polônia.
                    Pouco depois, Reino Unido e França declararam guerra
                    à Alemanha, dando início ao conflito europeu.
                </p>

                <p>
                    A guerra posteriormente se expandiu para diferentes
                    regiões do mundo, envolvendo países da Europa, Ásia,
                    África e Oceania.
                </p>

                <h2>Os principais grupos</h2>

                <h3>Potências do Eixo</h3>

                <p>
                    Alemanha, Itália e Japão formaram as principais potências
                    do Eixo.
                </p>

                <h3>Aliados</h3>

                <p>
                    Entre as principais potências aliadas estavam Reino Unido,
                    União Soviética, Estados Unidos, China e França.
                </p>

                <h2>O ataque a Pearl Harbor</h2>

                <p>
                    Em 7 de dezembro de 1941, o Japão atacou a base naval
                    norte-americana de Pearl Harbor, no Havaí.
                </p>

                <p>
                    O ataque levou os Estados Unidos a entrarem oficialmente
                    na guerra, aumentando significativamente a capacidade
                    militar e econômica dos Aliados.
                </p>

                <h2>A participação do Brasil</h2>

                <p>
                    O Brasil entrou na guerra ao lado dos Aliados em 1942.
                    O país enviou a Força Expedicionária Brasileira,
                    conhecida como FEB, para combater na Itália.
                </p>

                <p>
                    Os militares brasileiros participaram de importantes
                    operações contra as forças alemãs no território italiano.
                </p>

                <h2>O fim da guerra</h2>

                <p>
                    Em 1944, os Aliados realizaram o desembarque na Normandia,
                    conhecido como Dia D. A operação abriu uma importante
                    frente de combate contra a Alemanha na Europa Ocidental.
                </p>

                <p>
                    Em maio de 1945, a Alemanha se rendeu. No Pacífico,
                    a guerra continuou até agosto, quando os Estados Unidos
                    lançaram bombas atômicas sobre Hiroshima e Nagasaki.
                    O Japão anunciou sua rendição em agosto de 1945.
                </p>

                <div class="linha-tempo">

                    <div class="evento">
                        <strong>1939</strong>
                        <p>Invasão da Polônia e início da guerra.</p>
                    </div>

                    <div class="evento">
                        <strong>1941</strong>
                        <p>Ataque japonês a Pearl Harbor.</p>
                    </div>

                    <div class="evento">
                        <strong>1942</strong>
                        <p>Entrada do Brasil na guerra.</p>
                    </div>

                    <div class="evento">
                        <strong>1944</strong>
                        <p>Desembarque dos Aliados na Normandia.</p>
                    </div>

                    <div class="evento">
                        <strong>1945</strong>
                        <p>Fim da Segunda Guerra Mundial.</p>
                    </div>

                </div>

                <h2>Consequências da guerra</h2>

                <p>
                    A Segunda Guerra Mundial provocou enormes perdas humanas
                    e materiais. Cidades foram destruídas, milhões de pessoas
                    morreram e diversos países enfrentaram dificuldades
                    econômicas no período posterior ao conflito.
                </p>

                <p>
                    A guerra também modificou o equilíbrio de poder mundial.
                    Estados Unidos e União Soviética passaram a exercer grande
                    influência internacional, contribuindo para o início
                    da Guerra Fria.
                </p>

                <p>
                    Em 1945, foi criada a Organização das Nações Unidas (ONU),
                    com o objetivo de promover a cooperação internacional
                    e contribuir para a manutenção da paz e da segurança
                    entre os países.
                </p>

                <div class="dicas">

                    <h3>💡 Como estudar esse conteúdo</h3>

                    <ul>

                        <li>
                            Memorize os principais acontecimentos pela
                            ordem cronológica.
                        </li>

                        <li>
                            Estude as causas e não apenas as datas.
                        </li>

                        <li>
                            Diferencie os países do Eixo e os Aliados.
                        </li>

                        <li>
                            Observe as consequências políticas e sociais.
                        </li>

                        <li>
                            Relacione a Segunda Guerra Mundial com o início
                            da Guerra Fria.
                        </li>

                    </ul>

                </div>

                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Em que ano começou a Segunda Guerra Mundial?
                        </li>

                        <li>
                            Qual acontecimento marcou o início da guerra
                            na Europa?
                        </li>

                        <li>
                            Quais eram as principais potências do Eixo?
                        </li>

                        <li>
                            Por que os Estados Unidos entraram na guerra?
                        </li>

                        <li>
                            Qual foi a participação do Brasil no conflito?
                        </li>

                        <li>
                            Cite duas consequências da Segunda Guerra Mundial.
                        </li>

                        <li>
                            Qual organização internacional foi criada em 1945?
                        </li>

                    </ol>

                </div>

                <h2>Conclusão</h2>

                <p>
                    A Segunda Guerra Mundial foi um dos acontecimentos mais
                    importantes do século XX. Suas consequências ultrapassaram
                    os campos de batalha e influenciaram a política, a economia
                    e as relações internacionais durante décadas.
                </p>

                <p>
                    Estudar esse conflito permite compreender acontecimentos
                    posteriores, como a Guerra Fria, a criação da ONU e
                    diversas transformações ocorridas na sociedade mundial.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação e conhecimento

    </footer>

</body>

</html>