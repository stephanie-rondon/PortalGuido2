<?php
$categoria = "GEOGRAFIA";
$titulo = "Problemas Ambientais do Mundo: causas, consequências e soluções";

$subtitulo = "Entenda os principais problemas ambientais do planeta, suas causas, consequências para a sociedade e para a natureza, além das possíveis soluções para construir um futuro mais sustentável.";

$autor = "Redação Portal News";

$data = "4 de setembro de 2026";
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

    .formula {
        background: #0b1f3a;

        color: white;

        padding: 18px;

        margin: 20px 0;

        border-radius: 7px;

        text-align: center;

        font-size: 21px;

        font-family: "Courier New", monospace;
    }

    .passo {
        background: #f1f5f9;

        padding: 15px;

        margin: 10px 0;

        border-radius: 6px;
    }

    .passo strong {
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

    .tabela {
        width: 100%;

        border-collapse: collapse;

        margin: 25px 0;

        font-size: 15px;
    }

    .tabela th {
        background: #0b1f3a;

        color: white;

        padding: 13px;

        text-align: left;
    }

    .tabela td {
        padding: 13px;

        border-bottom: 1px solid #e2e8f0;
    }

    .tabela tr:nth-child(even) {
        background: #f8fafc;
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

        .formula {
            font-size: 16px;
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
                PROBLEMAS<br>
                <span>AMBIENTAIS</span>
            </div>

        </div>

        <div class="conteudo">

            <p class="primeiro">
                Os problemas ambientais são alterações provocadas
                principalmente pelas atividades humanas que afetam o
                equilíbrio dos ecossistemas, a qualidade de vida das
                populações e a disponibilidade de recursos naturais.
                Esses problemas podem ocorrer em escala local,
                regional ou global.
            </p>

            <p>
                Entre os principais problemas ambientais do mundo estão
                as mudanças climáticas, o desmatamento, a poluição do ar,
                da água e do solo, a perda de biodiversidade, a
                desertificação, a escassez de água, o excesso de resíduos
                e a degradação dos oceanos.
            </p>

            <div class="caixa">

                <strong>💡 Ideia principal:</strong>

                <p>
                    Os problemas ambientais estão relacionados à forma
                    como a sociedade utiliza os recursos naturais e
                    ocupa o espaço. Suas consequências podem atingir
                    tanto os ecossistemas quanto a economia e a saúde
                    das populações.
                </p>

                <div class="formula">
                    atividade humana + degradação ambiental = impactos socioambientais
                </div>

            </div>

            <h2>O que são problemas ambientais?</h2>

            <p>
                Problemas ambientais são situações que provocam
                desequilíbrios ou danos ao meio ambiente. Eles podem
                resultar da exploração excessiva dos recursos naturais,
                da poluição, da ocupação inadequada do território e de
                outras atividades humanas.
            </p>

            <p>
                Embora existam processos naturais que modificam o
                ambiente, muitos dos problemas ambientais atuais foram
                intensificados pelo crescimento populacional, pela
                industrialização, pela urbanização e pelos padrões de
                produção e consumo.
            </p>

            <div class="exemplo">

                <strong>Principais problemas ambientais:</strong>

                <div class="passo">
                    <strong>Mudanças climáticas:</strong> alterações no sistema climático relacionadas principalmente ao aumento da concentração de gases de efeito estufa.
                </div>

                <div class="passo">
                    <strong>Desmatamento:</strong> remoção da vegetação natural para diferentes atividades humanas.
                </div>

                <div class="passo">
                    <strong>Poluição:</strong> introdução de substâncias ou agentes que prejudicam o ambiente.
                </div>

                <div class="passo">
                    <strong>Perda de biodiversidade:</strong> redução da variedade de espécies e ecossistemas.
                </div>

                <div class="passo">
                    <strong>Desertificação:</strong> degradação de terras em regiões áridas, semiáridas e subúmidas secas.
                </div>

            </div>

            <h2>Mudanças climáticas</h2>

            <p>
                As mudanças climáticas correspondem a alterações
                persistentes nos padrões do clima. Atualmente, o
                aquecimento global provocado pelas atividades humanas
                é um dos principais desafios ambientais do planeta.
            </p>

            <p>
                A queima de combustíveis fósseis, o desmatamento e
                determinadas atividades industriais e agropecuárias
                aumentam a concentração de gases de efeito estufa na
                atmosfera.
            </p>

            <div class="formula">
                emissões de gases de efeito estufa → aquecimento global → alterações climáticas
            </div>

            <h3>Consequências das mudanças climáticas</h3>

            <p>
                Entre os possíveis impactos estão o aumento das
                temperaturas médias, alterações nos regimes de chuva,
                ondas de calor mais intensas, derretimento de geleiras,
                elevação do nível do mar e mudanças na distribuição
                de algumas espécies.
            </p>

            <p>
                Os efeitos também podem atingir a agricultura, os
                recursos hídricos, as cidades, a infraestrutura e
                diferentes atividades econômicas.
            </p>

            <h2>Efeito estufa</h2>

            <p>
                O efeito estufa é um fenômeno natural fundamental para
                a manutenção da temperatura adequada à vida na Terra.
                O problema ocorre quando atividades humanas aumentam
                excessivamente a concentração de determinados gases
                na atmosfera, intensificando o aquecimento.
            </p>

            <p>
                Entre os principais gases de efeito estufa estão o
                dióxido de carbono, o metano e o óxido nitroso.
            </p>

            <div class="caixa">

                <strong>🌎 Importante:</strong>

                <p>
                    O efeito estufa natural não é um problema. Ele é
                    essencial para a vida. O desafio ambiental está
                    relacionado à intensificação do efeito estufa
                    causada principalmente pelo aumento das emissões
                    de gases de efeito estufa.
                </p>

            </div>

            <h2>Desmatamento</h2>

            <p>
                O desmatamento consiste na remoção da vegetação natural
                de determinada área. Ele pode ocorrer para ampliar
                áreas agrícolas e pecuárias, construir cidades,
                estradas e outras infraestruturas ou explorar recursos
                naturais.
            </p>

            <p>
                A retirada da vegetação pode provocar perda de habitats,
                erosão do solo, alteração do ciclo da água e redução
                da biodiversidade.
            </p>

            <h3>Principais causas do desmatamento</h3>

            <div class="exemplo">

                <div class="passo">
                    <strong>Agropecuária:</strong> expansão de áreas destinadas à agricultura e criação de animais.
                </div>

                <div class="passo">
                    <strong>Exploração madeireira:</strong> retirada de árvores para produção de madeira.
                </div>

                <div class="passo">
                    <strong>Mineração:</strong> abertura de áreas para exploração de recursos minerais.
                </div>

                <div class="passo">
                    <strong>Infraestrutura:</strong> construção de estradas, hidrelétricas e outras obras.
                </div>

                <div class="passo">
                    <strong>Expansão urbana:</strong> crescimento das cidades sobre áreas naturais.
                </div>

            </div>

            <h2>Queimadas</h2>

            <p>
                As queimadas podem ocorrer naturalmente em determinados
                ecossistemas, mas muitas são provocadas por atividades
                humanas. Quando realizadas de maneira inadequada ou
                associadas ao desmatamento, podem causar graves impactos
                ambientais.
            </p>

            <p>
                A fumaça das queimadas contribui para a poluição do ar,
                enquanto o fogo pode destruir habitats, afetar animais
                e alterar as características do solo.
            </p>

            <h2>Poluição do ar</h2>

            <p>
                A poluição atmosférica ocorre quando gases, partículas
                ou outros poluentes são lançados na atmosfera em
                concentrações prejudiciais ao ambiente e à saúde.
            </p>

            <p>
                Veículos, indústrias, queimadas e determinadas formas
                de geração de energia estão entre as principais fontes
                de poluição atmosférica em diferentes regiões do mundo.
            </p>

            <table class="tabela">

                <tr>
                    <th>Poluente</th>
                    <th>Principais fontes</th>
                </tr>

                <tr>
                    <td>Material particulado</td>
                    <td>Queimadas, veículos, indústrias e outras atividades de combustão.</td>
                </tr>

                <tr>
                    <td>Dióxido de carbono</td>
                    <td>Principalmente combustão de combustíveis fósseis e mudanças no uso da terra.</td>
                </tr>

                <tr>
                    <td>Óxidos de nitrogênio</td>
                    <td>Veículos, indústrias e processos de combustão.</td>
                </tr>

                <tr>
                    <td>Dióxido de enxofre</td>
                    <td>Queima de combustíveis que contêm enxofre e processos industriais.</td>
                </tr>

            </table>

            <h2>Poluição da água</h2>

            <p>
                A poluição da água ocorre quando rios, lagos, oceanos
                ou águas subterrâneas recebem substâncias que alteram
                suas características e prejudicam os organismos vivos.
            </p>

            <p>
                Esgoto sem tratamento adequado, resíduos industriais,
                fertilizantes, agrotóxicos, petróleo e lixo são alguns
                exemplos de fontes de contaminação da água.
            </p>

            <div class="caixa">

                <strong>💧 Atenção:</strong>

                <p>
                    A água é essencial para o consumo humano,
                    agricultura, indústria, geração de energia e
                    manutenção dos ecossistemas. A degradação dos
                    recursos hídricos pode provocar problemas sociais,
                    econômicos e ambientais.
                </p>

            </div>

            <h2>Poluição do solo</h2>

            <p>
                A poluição do solo ocorre quando substâncias prejudiciais
                são acumuladas ou introduzidas no ambiente terrestre.
                Resíduos industriais, lixo, produtos químicos,
                combustíveis e uso inadequado de determinados produtos
                agrícolas podem contribuir para esse problema.
            </p>

            <p>
                A contaminação do solo pode afetar plantas, animais,
                águas subterrâneas e a própria produção agrícola.
            </p>

            <h2>Lixo e resíduos sólidos</h2>

            <p>
                O crescimento do consumo aumentou significativamente
                a quantidade de resíduos produzidos pelas sociedades.
                Quando o lixo não é coletado, tratado e destinado
                corretamente, pode provocar impactos ambientais.
            </p>

            <p>
                Plásticos, eletrônicos, embalagens e resíduos orgânicos
                são exemplos de materiais que precisam de diferentes
                formas de gerenciamento e tratamento.
            </p>

            <div class="exemplo">

                <strong>Formas de reduzir a geração de resíduos:</strong>

                <div class="passo">
                    <strong>Reduzir:</strong> consumir apenas o necessário e evitar desperdícios.
                </div>

                <div class="passo">
                    <strong>Reutilizar:</strong> utilizar novamente produtos e materiais sempre que possível.
                </div>

                <div class="passo">
                    <strong>Reciclar:</strong> transformar determinados resíduos em novos materiais.
                </div>

                <div class="passo">
                    <strong>Compostar:</strong> aproveitar resíduos orgânicos para produzir composto.
                </div>

                <div class="passo">
                    <strong>Destinar corretamente:</strong> encaminhar cada tipo de resíduo para o tratamento adequado.
                </div>

            </div>

            <h2>Plásticos nos oceanos</h2>

            <p>
                O descarte inadequado de materiais plásticos pode fazer
                com que resíduos cheguem aos rios e posteriormente aos
                oceanos. Esses materiais podem permanecer no ambiente
                durante longos períodos e afetar diferentes organismos.
            </p>

            <p>
                Animais marinhos podem ingerir resíduos plásticos ou
                ficar presos em materiais descartados. A presença de
                microplásticos também representa um importante tema
                de pesquisa ambiental.
            </p>

            <h2>Perda de biodiversidade</h2>

            <p>
                Biodiversidade é a variedade de formas de vida,
                incluindo espécies, genes e ecossistemas. A perda de
                biodiversidade ocorre quando espécies desaparecem ou
                quando os ecossistemas são degradados.
            </p>

            <p>
                Desmatamento, destruição de habitats, poluição,
                mudanças climáticas, espécies invasoras e exploração
                excessiva dos recursos naturais estão entre os fatores
                que podem ameaçar a biodiversidade.
            </p>

            <div class="formula">
                destruição de habitats + exploração excessiva + poluição = perda de biodiversidade
            </div>

            <h2>Extinção de espécies</h2>

            <p>
                A extinção ocorre quando uma espécie deixa de existir.
                Embora a extinção seja um processo natural da história
                da vida, atividades humanas podem acelerar
                significativamente a perda de espécies.
            </p>

            <p>
                A proteção dos habitats naturais, o combate à caça
                ilegal e o uso sustentável dos recursos são estratégias
                importantes para a conservação da biodiversidade.
            </p>

            <h2>Desertificação</h2>

            <p>
                A desertificação é um processo de degradação das terras
                em áreas áridas, semiáridas e subúmidas secas. Ela pode
                estar relacionada a fatores climáticos e à ação humana.
            </p>

            <p>
                Desmatamento, sobrepastoreio, práticas agrícolas
                inadequadas e uso excessivo dos recursos hídricos podem
                contribuir para a degradação do solo.
            </p>

            <h2>Escassez de água</h2>

            <p>
                A escassez de água ocorre quando a disponibilidade de
                recursos hídricos não é suficiente para atender às
                necessidades de uma população ou atividade em
                determinado local e período.
            </p>

            <p>
                O problema pode ser agravado por secas, mudanças
                climáticas, poluição, crescimento populacional,
                desperdício e uso inadequado dos recursos hídricos.
            </p>

            <table class="tabela">

                <tr>
                    <th>Uso da água</th>
                    <th>Exemplos</th>
                </tr>

                <tr>
                    <td>Agricultura</td>
                    <td>Irrigação e produção de alimentos.</td>
                </tr>

                <tr>
                    <td>Abastecimento</td>
                    <td>Consumo doméstico e uso urbano.</td>
                </tr>

                <tr>
                    <td>Indústria</td>
                    <td>Processos produtivos e resfriamento.</td>
                </tr>

                <tr>
                    <td>Energia</td>
                    <td>Geração de eletricidade em usinas hidrelétricas e outros processos.</td>
                </tr>

                <tr>
                    <td>Ecossistemas</td>
                    <td>Manutenção dos rios, lagos, áreas úmidas e demais ambientes aquáticos.</td>
                </tr>

            </table>

            <h2>Erosão do solo</h2>

            <p>
                A erosão é o processo de remoção e transporte de
                partículas do solo pela ação da água, do vento ou de
                outros agentes.
            </p>

            <p>
                A retirada da cobertura vegetal pode aumentar a erosão,
                especialmente quando o solo fica exposto à ação das
                chuvas. Isso pode reduzir a fertilidade do solo e
                provocar assoreamento de rios e reservatórios.
            </p>

            <h2>Enchentes e problemas urbanos</h2>

            <p>
                As enchentes são fenômenos naturais que podem ser
                agravados pela urbanização inadequada. A impermeabilização
                do solo por ruas, calçadas e construções reduz a
                infiltração da água da chuva.
            </p>

            <p>
                A ocupação de áreas de risco, o descarte de lixo nas
                ruas e a falta de planejamento urbano também podem
                aumentar os impactos das chuvas intensas.
            </p>

            <h2>Ilhas de calor urbanas</h2>

            <p>
                As ilhas de calor são fenômenos caracterizados por
                temperaturas mais elevadas em áreas urbanizadas quando
                comparadas a regiões próximas com maior presença de
                vegetação.
            </p>

            <p>
                A grande quantidade de concreto e asfalto, a redução
                da vegetação e a emissão de calor por veículos e
                equipamentos urbanos podem contribuir para esse
                fenômeno.
            </p>

            <h2>Degradação dos oceanos</h2>

            <p>
                Os oceanos sofrem impactos provocados pela poluição,
                pesca excessiva, destruição de habitats costeiros,
                mudanças climáticas e outras atividades humanas.
            </p>

            <p>
                A conservação dos oceanos é fundamental porque eles
                possuem grande importância para a biodiversidade,
                para a alimentação, para o transporte e para o equilíbrio
                climático do planeta.
            </p>

            <h2>Acidificação dos oceanos</h2>

            <p>
                A acidificação dos oceanos está relacionada à absorção
                de parte do dióxido de carbono presente na atmosfera
                pelas águas marinhas. Esse processo altera a química
                da água e pode dificultar a formação de estruturas de
                organismos que utilizam carbonato de cálcio.
            </p>

            <p>
                Ecossistemas marinhos, especialmente aqueles associados
                a organismos sensíveis às mudanças químicas da água,
                podem ser afetados por esse processo.
            </p>

            <h2>Pesca excessiva</h2>

            <p>
                A pesca excessiva ocorre quando a quantidade de peixes
                capturados ultrapassa a capacidade de determinadas
                populações se recuperarem naturalmente.
            </p>

            <p>
                A redução dos estoques pesqueiros pode prejudicar
                ecossistemas marinhos, comunidades que dependem da
                pesca e a segurança alimentar de diferentes regiões.
            </p>

            <h2>Chuvas ácidas</h2>

            <p>
                As chuvas ácidas ocorrem quando determinados poluentes
                atmosféricos reagem com a água presente na atmosfera,
                formando substâncias que podem aumentar a acidez da
                precipitação.
            </p>

            <p>
                Esse fenômeno pode prejudicar vegetações, solos,
                ambientes aquáticos e estruturas construídas.
            </p>

            <h2>Camada de ozônio</h2>

            <p>
                A camada de ozônio está localizada na estratosfera e
                possui importante função na proteção da vida contra
                parte da radiação ultravioleta do Sol.
            </p>

            <p>
                Determinadas substâncias produzidas pelo ser humano
                contribuíram historicamente para a redução do ozônio
                estratosférico. A cooperação internacional ajudou a
                reduzir o uso de várias dessas substâncias.
            </p>

            <h2>Problemas ambientais e sociedade</h2>

            <p>
                Os problemas ambientais não afetam todas as populações
                da mesma maneira. Comunidades com menor acesso a
                infraestrutura, serviços públicos e recursos financeiros
                podem apresentar maior vulnerabilidade diante de
                determinados impactos ambientais.
            </p>

            <p>
                Por isso, as questões ambientais também estão
                relacionadas à economia, à saúde, à urbanização,
                à desigualdade social e ao planejamento territorial.
            </p>

            <div class="caixa">

                <strong>🌱 Meio ambiente e sociedade:</strong>

                <p>
                    Preservar o meio ambiente não significa apenas
                    proteger plantas e animais. Também significa
                    proteger os recursos necessários para a alimentação,
                    a água, a saúde, a moradia, a economia e a qualidade
                    de vida das populações.
                </p>

            </div>

            <h2>Desenvolvimento sustentável</h2>

            <p>
                Desenvolvimento sustentável é a busca por formas de
                desenvolvimento que atendam às necessidades atuais sem
                comprometer a capacidade das futuras gerações de
                atenderem às suas próprias necessidades.
            </p>

            <p>
                O conceito envolve a integração de aspectos ambientais,
                sociais e econômicos. Portanto, sustentabilidade não
                significa apenas preservar a natureza, mas também
                promover qualidade de vida e uso responsável dos
                recursos.
            </p>

            <div class="formula">
                sustentabilidade = ambiente + sociedade + economia
            </div>

            <h2>Fontes de energia</h2>

            <p>
                A produção e o consumo de energia estão diretamente
                relacionados aos problemas ambientais. Combustíveis
                fósseis, como carvão, petróleo e gás natural, são
                importantes fontes de energia, mas sua utilização
                contribui para as emissões de gases de efeito estufa.
            </p>

            <p>
                Fontes renováveis, como solar, eólica, hidráulica e
                algumas formas de biomassa, podem contribuir para a
                diversificação da matriz energética e para a redução
                de determinadas emissões.
            </p>

            <table class="tabela">

                <tr>
                    <th>Fonte de energia</th>
                    <th>Característica ambiental</th>
                </tr>

                <tr>
                    <td>Solar</td>
                    <td>Utiliza a radiação solar para produzir energia.</td>
                </tr>

                <tr>
                    <td>Eólica</td>
                    <td>Utiliza a força dos ventos para gerar eletricidade.</td>
                </tr>

                <tr>
                    <td>Hidrelétrica</td>
                    <td>Utiliza o movimento da água para gerar eletricidade.</td>
                </tr>

                <tr>
                    <td>Petróleo</td>
                    <td>Combustível fóssil associado a emissões de gases de efeito estufa.</td>
                </tr>

                <tr>
                    <td>Carvão mineral</td>
                    <td>Combustível fóssil com elevada emissão de gases de efeito estufa e poluentes atmosféricos.</td>
                </tr>

                <tr>
                    <td>Gás natural</td>
                    <td>Combustível fóssil que também produz emissões de gases de efeito estufa.</td>
                </tr>

            </table>

            <h2>Conservação ambiental</h2>

            <p>
                A conservação ambiental envolve ações destinadas a
                proteger ecossistemas, espécies e recursos naturais,
                permitindo seu uso de maneira responsável.
            </p>

            <p>
                Unidades de conservação, recuperação de áreas
                degradadas, fiscalização ambiental, pesquisa científica
                e educação ambiental são algumas das estratégias
                utilizadas para proteger o meio ambiente.
            </p>

            <h2>Reciclagem e economia circular</h2>

            <p>
                A reciclagem consiste no reaproveitamento de materiais
                descartados para produzir novos produtos. Ela pode
                reduzir a necessidade de matérias-primas e diminuir a
                quantidade de resíduos encaminhados para aterros ou
                outros locais de disposição.
            </p>

            <p>
                A economia circular amplia essa ideia ao buscar sistemas
                de produção e consumo nos quais produtos e materiais
                sejam mantidos em uso pelo maior tempo possível,
                reduzindo desperdícios.
            </p>

            <h2>Educação ambiental</h2>

            <p>
                A educação ambiental contribui para que as pessoas
                compreendam os problemas ambientais e desenvolvam
                atitudes mais responsáveis em relação ao consumo,
                descarte de resíduos e conservação dos recursos naturais.
            </p>

            <p>
                Escolas, governos, empresas e organizações sociais podem
                participar de ações de educação ambiental e incentivar
                práticas sustentáveis.
            </p>

            <h2>Problemas ambientais globais</h2>

            <p>
                Alguns problemas ambientais ultrapassam as fronteiras
                dos países. As mudanças climáticas, a poluição dos
                oceanos, a perda de biodiversidade e a destruição da
                camada de ozônio são exemplos de questões que exigem
                cooperação internacional.
            </p>

            <p>
                Como os impactos ambientais podem atingir diferentes
                regiões do planeta, acordos e políticas internacionais
                são importantes para estabelecer metas e incentivar
                ações conjuntas.
            </p>

            <h2>Principais desafios ambientais atuais</h2>

            <div class="exemplo">

                <strong>Principais desafios ambientais do mundo:</strong>

                <div class="passo">
                    <strong>Mudanças climáticas:</strong> redução das emissões e adaptação aos impactos climáticos.
                </div>

                <div class="passo">
                    <strong>Desmatamento:</strong> conservação e recuperação das florestas.
                </div>

                <div class="passo">
                    <strong>Poluição:</strong> redução da emissão e do descarte de poluentes.
                </div>

                <div class="passo">
                    <strong>Biodiversidade:</strong> proteção de espécies e ecossistemas.
                </div>

                <div class="passo">
                    <strong>Água:</strong> preservação dos recursos hídricos e combate ao desperdício.
                </div>

                <div class="passo">
                    <strong>Resíduos:</strong> redução do consumo e melhoria da coleta, reciclagem e destinação.
                </div>

                <div class="passo">
                    <strong>Oceanos:</strong> combate à poluição e à exploração excessiva dos recursos marinhos.
                </div>

            </div>

            <div class="dicas">

                <h3>💡 Pontos importantes para estudar problemas ambientais</h3>

                <ul>

                    <li>
                        Entenda o que são problemas ambientais.
                    </li>

                    <li>
                        Estude as causas das mudanças climáticas.
                    </li>

                    <li>
                        Diferencie efeito estufa de aquecimento global.
                    </li>

                    <li>
                        Conheça as principais causas do desmatamento.
                    </li>

                    <li>
                        Estude os diferentes tipos de poluição.
                    </li>

                    <li>
                        Entenda as consequências da perda de biodiversidade.
                    </li>

                    <li>
                        Conheça o problema da escassez de água.
                    </li>

                    <li>
                        Estude a desertificação e a degradação dos solos.
                    </li>

                    <li>
                        Entenda os impactos do lixo e dos plásticos.
                    </li>

                    <li>
                        Conheça os principais problemas ambientais dos oceanos.
                    </li>

                    <li>
                        Relacione problemas ambientais e desigualdade social.
                    </li>

                    <li>
                        Estude o conceito de desenvolvimento sustentável.
                    </li>

                    <li>
                        Conheça formas de conservação ambiental.
                    </li>

                </ul>

            </div>

            <h2>Resumo dos problemas ambientais</h2>

            <table class="tabela">

                <tr>
                    <th>Problema</th>
                    <th>Principal característica</th>
                </tr>

                <tr>
                    <td>Mudanças climáticas</td>
                    <td>Alterações no sistema climático associadas ao aumento dos gases de efeito estufa.</td>
                </tr>

                <tr>
                    <td>Desmatamento</td>
                    <td>Remoção da vegetação natural para diferentes atividades humanas.</td>
                </tr>

                <tr>
                    <td>Poluição do ar</td>
                    <td>Presença de gases e partículas prejudiciais na atmosfera.</td>
                </tr>

                <tr>
                    <td>Poluição da água</td>
                    <td>Contaminação de rios, lagos, oceanos e águas subterrâneas.</td>
                </tr>

                <tr>
                    <td>Poluição do solo</td>
                    <td>Contaminação do ambiente terrestre por substâncias prejudiciais.</td>
                </tr>

                <tr>
                    <td>Perda de biodiversidade</td>
                    <td>Redução da variedade de espécies, genes e ecossistemas.</td>
                </tr>

                <tr>
                    <td>Desertificação</td>
                    <td>Degradação de terras em regiões áridas, semiáridas e subúmidas secas.</td>
                </tr>

                <tr>
                    <td>Escassez de água</td>
                    <td>Disponibilidade insuficiente de recursos hídricos para determinadas necessidades.</td>
                </tr>

                <tr>
                    <td>Resíduos sólidos</td>
                    <td>Problemas relacionados à produção, coleta, tratamento e descarte do lixo.</td>
                </tr>

                <tr>
                    <td>Degradação dos oceanos</td>
                    <td>Impactos causados por poluição, pesca excessiva e mudanças ambientais.</td>
                </tr>

                <tr>
                    <td>Desenvolvimento sustentável</td>
                    <td>Busca por equilíbrio entre necessidades sociais, econômicas e ambientais.</td>
                </tr>

            </table>

            <h2>Exercícios</h2>

            <div class="exercicios">

                <ol>

                    <li>
                        O que são problemas ambientais?
                    </li>

                    <li>
                        Quais são os principais problemas ambientais do mundo?
                    </li>

                    <li>
                        Explique o que são mudanças climáticas.
                    </li>

                    <li>
                        Qual é a diferença entre efeito estufa e aquecimento global?
                    </li>

                    <li>
                        Cite três causas do desmatamento.
                    </li>

                    <li>
                        Quais são as consequências do desmatamento?
                    </li>

                    <li>
                        O que é poluição atmosférica?
                    </li>

                    <li>
                        Cite três fontes de poluição da água.
                    </li>

                    <li>
                        Explique o que é perda de biodiversidade.
                    </li>

                    <li>
                        O que é desertificação?
                    </li>

                    <li>
                        Quais são as principais causas da escassez de água?
                    </li>

                    <li>
                        Quais problemas ambientais estão relacionados ao lixo?
                    </li>

                    <li>
                        Explique como os plásticos podem afetar os oceanos.
                    </li>

                    <li>
                        O que é desenvolvimento sustentável?
                    </li>

                    <li>
                        Cite cinco atitudes que podem contribuir para a preservação ambiental.
                    </li>

                </ol>

            </div>

            <h2>Conclusão</h2>

            <p>
                Os problemas ambientais representam alguns dos maiores
                desafios enfrentados pela sociedade contemporânea.
                Mudanças climáticas, desmatamento, poluição, perda de
                biodiversidade, escassez de água e degradação dos
                oceanos estão relacionados à maneira como os recursos
                naturais são utilizados.
            </p>

            <p>
                Esses problemas não afetam apenas a natureza. Eles
                também podem provocar consequências sociais e
                econômicas, atingindo a produção de alimentos, o
                abastecimento de água, a saúde, as cidades e a qualidade
                de vida das populações.
            </p>

            <p>
                A solução dos problemas ambientais depende da atuação
                conjunta de governos, empresas, instituições de ensino,
                organizações sociais e cidadãos. Medidas como redução
                da poluição, conservação dos ecossistemas, uso racional
                dos recursos e transição para formas mais sustentáveis
                de produção e consumo são fundamentais.
            </p>

            <p>
                A cooperação internacional também é essencial, pois
                muitos problemas ambientais ultrapassam as fronteiras
                nacionais. O clima, os oceanos, a biodiversidade e
                outros sistemas naturais conectam diferentes regiões
                do planeta.
            </p>

            <p>
                Em resumo, compreender os problemas ambientais significa
                analisar a relação entre <strong>sociedade, natureza,
                recursos naturais, produção, consumo, poluição,
                biodiversidade, mudanças climáticas e sustentabilidade</strong>.
            </p>

        </div>

    </article>

</main>

<footer>

    © 2026 Portal News • Educação, Geografia e conhecimento

</footer>

</body>

</html>
