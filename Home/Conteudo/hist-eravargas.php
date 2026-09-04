<?php $categoria = "HISTÓRIA";
$titulo = "Era Vargas: transformações políticas, sociais e econômicas no Brasil";

$subtitulo = "O período de Getúlio Vargas marcou profundas mudanças na política, na economia e nas relações de trabalho, tornando-se um dos temas importantes para compreender a história do Brasil.";

$autor = "Redação Portal News";

$data = "1 de setembro de 2026";
?>
<!DOCTYPE html> <html lang="pt-BR"> <head>
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

    /* BOTÃO VOLTAR */
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

        z-index: 10;
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

</head> <body>
<a href="../home.php" class="botao-home">
    ← Voltar para Página inicial
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
                ERA<br>
                <span>VARGAS</span>
            </div>

        </div>

        <div class="conteudo">

            <p class="primeiro">
                A Era Vargas corresponde ao período em que Getúlio Vargas
                exerceu grande influência sobre a política brasileira,
                entre 1930 e 1945. Durante esses anos, o Brasil passou
                por importantes transformações políticas, econômicas e
                sociais que ajudaram a modificar a estrutura do país.
            </p>

            <p>
                O período é especialmente importante para compreender
                temas como industrialização, relações de trabalho,
                participação política, centralização do poder e formação
                das leis trabalhistas. Por isso, a Era Vargas aparece
                com frequência nos estudos de História e pode ser relacionada
                a diferentes questões do ENEM.
            </p>

            <h2>O contexto antes de Vargas</h2>

            <p>
                Antes de 1930, a política brasileira era marcada pela
                forte influência das oligarquias estaduais. A economia
                dependia principalmente da produção agrícola, com destaque
                para o café.
            </p>

            <p>
                A crise econômica mundial de 1929 prejudicou a economia
                brasileira e afetou diretamente o setor cafeeiro. Ao
                mesmo tempo, aumentaram as disputas políticas entre grupos
                que buscavam maior participação no poder.
            </p>

            <div class="caixa">

                <strong>Importante para o ENEM:</strong>

                <p>
                    Ao estudar a Era Vargas, procure relacionar o contexto
                    econômico e político com as mudanças sociais. O ENEM
                    costuma trabalhar História de forma contextualizada,
                    relacionando diferentes acontecimentos.
                </p>

            </div>

            <h2>A Revolução de 1930</h2>

            <p>
                Em 1930, Getúlio Vargas chegou ao poder após um movimento
                político que derrubou o presidente Washington Luís.
                Esse processo ficou conhecido como Revolução de 1930.
            </p>

            <p>
                Vargas assumiu o governo provisório e iniciou uma fase
                de maior centralização política. Os governos estaduais
                passaram a sofrer maior intervenção do governo federal.
            </p>

            <h2>O Governo Provisório</h2>

            <p>
                Entre 1930 e 1934, Vargas governou de maneira provisória.
                Nesse período, foram realizadas mudanças na organização
                política e administrativa do país.
            </p>

            <p>
                O governo também buscou fortalecer o poder federal e
                reduzir a influência das antigas oligarquias estaduais.
            </p>

            <h2>A Constituição de 1934</h2>

            <p>
                Em 1934, uma nova Constituição foi promulgada. Ela trouxe
                algumas mudanças importantes, incluindo avanços relacionados
                aos direitos políticos e trabalhistas.
            </p>

            <p>
                O voto feminino, por exemplo, já havia sido reconhecido
                pelo Código Eleitoral de 1932 e foi incorporado à ordem
                constitucional de 1934.
            </p>

            <h2>O Estado Novo</h2>

            <p>
                Em 1937, Vargas instaurou o Estado Novo, período marcado
                pela concentração de poder nas mãos do governo federal.
            </p>

            <p>
                O Congresso Nacional foi fechado e houve restrições à
                participação política e à liberdade de expressão.
                A censura também passou a fazer parte da estrutura
                governamental.
            </p>

            <div class="caixa">

                <strong>Atenção:</strong>

                <p>
                    Estado Novo e Era Vargas não são exatamente a mesma
                    coisa. A Era Vargas inclui diferentes fases entre
                    1930 e 1945, enquanto o Estado Novo corresponde ao
                    período autoritário iniciado em 1937.
                </p>

            </div>

            <h2>As leis trabalhistas</h2>

            <p>
                Uma das características mais conhecidas do governo Vargas
                foi a criação de medidas relacionadas aos direitos dos
                trabalhadores urbanos.
            </p>

            <p>
                Durante esse período, foram estabelecidas normas sobre
                jornada de trabalho, férias, salário mínimo e outros
                direitos.
            </p>

            <p>
                Em 1943, foi criada a Consolidação das Leis do Trabalho,
                conhecida como CLT. Ela reuniu diversas normas relacionadas
                às relações de trabalho.
            </p>

            <div class="exemplo">

                <strong>Para lembrar:</strong>

                <p>
                    CLT = Consolidação das Leis do Trabalho.
                </p>

                <p>
                    A CLT foi criada em 1943 e tornou-se um dos principais
                    marcos da legislação trabalhista brasileira.
                </p>

            </div>

            <h2>Industrialização e economia</h2>

            <p>
                Durante a Era Vargas, o governo passou a incentivar de
                maneira mais intensa a industrialização brasileira.
            </p>

            <p>
                A criação de empresas estatais e o investimento em
                infraestrutura contribuíram para ampliar a capacidade
                industrial do país.
            </p>

            <p>
                Um dos exemplos mais importantes foi a criação da
                Companhia Siderúrgica Nacional, a CSN, em 1941.
            </p>

            <p>
                A expansão da indústria contribuiu para transformar
                a economia brasileira, que gradualmente passou a depender
                menos exclusivamente da agricultura.
            </p>

            <h2>Propaganda e construção da imagem de Vargas</h2>

            <p>
                O governo Vargas utilizou os meios de comunicação para
                divulgar suas ações e construir uma imagem positiva
                do governo perante a população.
            </p>

            <p>
                Durante o Estado Novo, o Departamento de Imprensa e
                Propaganda, conhecido como DIP, teve papel importante
                na produção de propaganda oficial e no controle da
                circulação de informações.
            </p>

            <p>
                A utilização da propaganda política é um aspecto importante
                para compreender como governos podem utilizar os meios
                de comunicação para influenciar a opinião pública.
            </p>

            <h2>O fim da Era Vargas</h2>

            <p>
                A Segunda Guerra Mundial também teve influência sobre
                a política brasileira. O Brasil participou do conflito
                ao lado dos Aliados, enquanto internamente o país vivia
                sob um governo autoritário.
            </p>

            <p>
                Essa contradição contribuiu para aumentar as pressões
                pela redemocratização.
            </p>

            <p>
                Em 1945, Getúlio Vargas deixou o poder, encerrando a
                primeira fase de seu longo período de influência na
                política brasileira.
            </p>

            <div class="linha-tempo">

                <div class="evento">

                    <strong>1930</strong>

                    <p>
                        Getúlio Vargas chega ao poder.
                    </p>

                </div>

                <div class="evento">

                    <strong>1932</strong>

                    <p>
                        Código Eleitoral estabelece importantes mudanças,
                        incluindo o reconhecimento do voto feminino.
                    </p>

                </div>

                <div class="evento">

                    <strong>1934</strong>

                    <p>
                        Promulgação de uma nova Constituição.
                    </p>

                </div>

                <div class="evento">

                    <strong>1937</strong>

                    <p>
                        Início do Estado Novo.
                    </p>

                </div>

                <div class="evento">

                    <strong>1943</strong>

                    <p>
                        Criação da CLT.
                    </p>

                </div>

                <div class="evento">

                    <strong>1945</strong>

                    <p>
                        Fim do Estado Novo e saída de Vargas do poder.
                    </p>

                </div>

            </div>

            <h2>Por que a Era Vargas é importante?</h2>

            <p>
                A Era Vargas marcou uma mudança significativa na relação
                entre o Estado e a sociedade brasileira. O governo passou
                a atuar de maneira mais direta na economia e nas relações
                de trabalho.
            </p>

            <p>
                Ao mesmo tempo, o período apresentou diferentes formas
                de participação e controle político. Por isso, é importante
                analisar tanto as medidas sociais e econômicas quanto
                os mecanismos de concentração de poder.
            </p>

            <div class="dicas">

                <h3>💡 Como estudar para o ENEM</h3>

                <ul>

                    <li>
                        Entenda o contexto da Revolução de 1930.
                    </li>

                    <li>
                        Diferencie as fases da Era Vargas.
                    </li>

                    <li>
                        Relacione industrialização e atuação do Estado.
                    </li>

                    <li>
                        Estude a criação da CLT e as relações de trabalho.
                    </li>

                    <li>
                        Entenda a importância da propaganda política.
                    </li>

                    <li>
                        Relacione o Estado Novo ao contexto internacional
                        da Segunda Guerra Mundial.
                    </li>

                    <li>
                        Nas questões do ENEM, procure analisar o contexto
                        histórico apresentado antes de escolher a resposta.
                    </li>

                </ul>

            </div>

            <h2>Exercícios</h2>

            <div class="exercicios">

                <ol>

                    <li>
                        Quais fatores contribuíram para a chegada de
                        Getúlio Vargas ao poder em 1930?
                    </li>

                    <li>
                        Qual foi a importância da Revolução de 1930 para
                        a política brasileira?
                    </li>

                    <li>
                        O que foi o Estado Novo?
                    </li>

                    <li>
                        Qual foi a importância da CLT para os trabalhadores
                        brasileiros?
                    </li>

                    <li>
                        Como o governo Vargas incentivou a industrialização
                        do Brasil?
                    </li>

                    <li>
                        Qual era a função do Departamento de Imprensa e
                        Propaganda, o DIP?
                    </li>

                    <li>
                        Por que a participação do Brasil na Segunda Guerra
                        Mundial criou uma contradição política durante
                        o Estado Novo?
                    </li>

                </ol>

            </div>

            <h2>Conclusão</h2>

            <p>
                A Era Vargas foi um período de profundas transformações
                na história brasileira. O fortalecimento do governo federal,
                a industrialização, as mudanças nas relações de trabalho
                e a criação da CLT marcaram a sociedade brasileira.
            </p>

            <p>
                Ao mesmo tempo, diferentes fases do período apresentaram
                características políticas distintas. Compreender essas
                diferenças é fundamental para analisar a história do Brasil
                de maneira crítica e contextualizada.
            </p>

        </div>

    </article>

</main>

<footer>

    © 2026 Portal News • Informação, educação e conhecimento

</footer>
