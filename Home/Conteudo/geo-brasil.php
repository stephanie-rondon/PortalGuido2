<?php $categoria = "GEOGRAFIA";
$titulo = "Geografia do Brasil: território, regiões, clima e população";

$subtitulo = "Conheça as principais características geográficas do Brasil, desde sua localização e divisão regional até o relevo, clima, vegetação, hidrografia, população e atividades econômicas.";

$autor = "Redação Portal News";

$data = "3 de setembro de 2026";
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

</head> <body>
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
                GEOGRAFIA<br>
                <span>& BRASIL</span>
            </div>

        </div>

        <div class="conteudo">

            <p class="primeiro">
                O Brasil é um dos maiores países do mundo e possui uma
                enorme diversidade natural, econômica e cultural.
                Seu território apresenta diferentes tipos de relevo,
                climas, vegetações, rios e paisagens, tornando o estudo
                da Geografia do Brasil fundamental para compreender
                como o país está organizado.
            </p>

            <p>
                Estudar a Geografia brasileira também permite entender
                a distribuição da população, as atividades econômicas,
                as diferenças entre as regiões e a relação entre a
                sociedade e o espaço geográfico.
            </p>

            <div class="caixa">

                <strong>💡 Ideia principal:</strong>

                <p>
                    A Geografia estuda o espaço geográfico e as relações
                    entre sociedade e natureza. No Brasil, isso envolve
                    compreender tanto as características naturais quanto
                    a maneira como as pessoas ocupam e transformam
                    o território.
                </p>

                <div class="formula">
                    sociedade + natureza = espaço geográfico
                </div>

            </div>

            <h2>Localização do Brasil</h2>

            <p>
                O Brasil está localizado no continente americano,
                especificamente na América do Sul. É banhado pelo
                Oceano Atlântico em sua extensa faixa litorânea.
            </p>

            <p>
                Grande parte do território brasileiro está localizada
                no Hemisfério Sul e no Hemisfério Ocidental. O país
                também é atravessado pela Linha do Equador e pelo
                Trópico de Capricórnio.
            </p>

            <div class="exemplo">

                <strong>Localização geográfica:</strong>

                <p>
                    O território brasileiro apresenta grande extensão
                    de norte a sul e de leste a oeste, o que contribui
                    para a existência de diferentes paisagens naturais
                    e condições climáticas.
                </p>

                <div class="passo">
                    <strong>Continente:</strong> América do Sul
                </div>

                <div class="passo">
                    <strong>Oceano:</strong> Atlântico
                </div>

                <div class="passo">
                    <strong>Hemisfério:</strong> principalmente Sul e Ocidental
                </div>

            </div>

            <h2>O território brasileiro</h2>

            <p>
                O território é o espaço sobre o qual um país exerce
                soberania. O Brasil possui um território de dimensões
                continentais, sendo um dos maiores países do planeta.
            </p>

            <p>
                A grande extensão territorial brasileira influencia
                diversos aspectos da vida nacional, como os tipos de
                clima, as formações vegetais, as atividades econômicas
                e a distribuição da população.
            </p>

            <table class="tabela">

                <tr>
                    <th>Característica</th>
                    <th>Importância</th>
                </tr>

                <tr>
                    <td>Grande extensão territorial</td>
                    <td>Favorece grande diversidade de paisagens</td>
                </tr>

                <tr>
                    <td>Extenso litoral</td>
                    <td>Permite atividades portuárias, pesqueiras e turísticas</td>
                </tr>

                <tr>
                    <td>Diversidade climática</td>
                    <td>Influencia vegetação e atividades agrícolas</td>
                </tr>

                <tr>
                    <td>Diferentes formas de relevo</td>
                    <td>Influenciam ocupação e atividades econômicas</td>
                </tr>

            </table>

            <h2>As cinco regiões do Brasil</h2>

            <p>
                Para facilitar o estudo e a organização do território,
                o Brasil é dividido em cinco grandes regiões pelo
                Instituto Brasileiro de Geografia e Estatística (IBGE).
            </p>

            <div class="formula">
                Norte • Nordeste • Centro-Oeste • Sudeste • Sul
            </div>

            <p>
                Cada região possui características próprias relacionadas
                ao clima, relevo, vegetação, economia, população e
                formação histórica.
            </p>

            <table class="tabela">

                <tr>
                    <th>Região</th>
                    <th>Características gerais</th>
                </tr>

                <tr>
                    <td>Norte</td>
                    <td>Grande presença da Amazônia e extensa rede hidrográfica</td>
                </tr>

                <tr>
                    <td>Nordeste</td>
                    <td>Diversidade de paisagens, incluindo áreas semiáridas e litorâneas</td>
                </tr>

                <tr>
                    <td>Centro-Oeste</td>
                    <td>Presença do Cerrado, Pantanal e forte atividade agropecuária</td>
                </tr>

                <tr>
                    <td>Sudeste</td>
                    <td>Grande concentração populacional e importante atividade industrial</td>
                </tr>

                <tr>
                    <td>Sul</td>
                    <td>Clima subtropical predominante e forte presença da agropecuária</td>
                </tr>

            </table>

            <h2>Região Norte</h2>

            <p>
                A Região Norte é formada por estados que ocupam grande
                parte da área da Amazônia brasileira. A região possui
                uma das maiores redes hidrográficas do planeta.
            </p>

            <p>
                A Floresta Amazônica é uma de suas principais
                características naturais. O Rio Amazonas e seus
                afluentes possuem grande importância para o transporte,
                a economia e a vida das populações locais.
            </p>

            <h2>Região Nordeste</h2>

            <p>
                A Região Nordeste apresenta grande diversidade natural.
                Seu território possui áreas de litoral, planaltos,
                depressões e regiões de clima semiárido.
            </p>

            <p>
                A Caatinga é uma formação vegetal característica do
                interior nordestino. No litoral, existem áreas de
                Mata Atlântica e diferentes ecossistemas costeiros.
            </p>

            <div class="caixa">

                <strong>Você sabia?</strong>

                <p>
                    O Nordeste apresenta diferentes sub-regiões,
                    com características naturais e econômicas próprias.
                    Entre elas estão a Zona da Mata, o Agreste,
                    o Sertão e o Meio-Norte.
                </p>

            </div>

            <h2>Região Centro-Oeste</h2>

            <p>
                O Centro-Oeste é conhecido pela presença de grandes
                áreas de Cerrado e pelo Pantanal, uma das maiores
                áreas úmidas continentais do planeta.
            </p>

            <p>
                A região também possui grande importância para a
                produção agropecuária brasileira, com destaque para
                culturas como soja e milho e para a criação de gado.
            </p>

            <h2>Região Sudeste</h2>

            <p>
                A Região Sudeste concentra uma parcela significativa
                da população brasileira e possui grande importância
                econômica.
            </p>

            <p>
                A região apresenta intensa urbanização e reúne grandes
                centros industriais, comerciais e financeiros.
                Também possui importantes áreas agrícolas e de mineração.
            </p>

            <h2>Região Sul</h2>

            <p>
                A Região Sul é formada pelos estados do Paraná,
                Santa Catarina e Rio Grande do Sul.
            </p>

            <p>
                O clima subtropical é uma de suas características
                marcantes, embora existam variações locais. A região
                possui importantes atividades agrícolas, industriais
                e pecuárias.
            </p>

            <h2>O relevo brasileiro</h2>

            <p>
                O relevo corresponde às diferentes formas presentes
                na superfície terrestre. No Brasil, predominam formas
                de relevo antigas, como planaltos, planícies e depressões.
            </p>

            <div class="formula">
                Planaltos • Planícies • Depressões
            </div>

            <h3>Planaltos</h3>

            <p>
                São áreas onde predominam processos de erosão.
                Podem apresentar superfícies elevadas e diferentes
                formas, como chapadas e serras.
            </p>

            <h3>Planícies</h3>

            <p>
                São áreas relativamente mais baixas e onde predominam
                processos de sedimentação. As planícies podem ser
                encontradas próximas a rios, lagos e áreas costeiras.
            </p>

            <h3>Depressões</h3>

            <p>
                São áreas rebaixadas em relação às regiões próximas.
                Podem apresentar diferentes origens e dimensões.
            </p>

            <h2>Climas do Brasil</h2>

            <p>
                A grande extensão territorial do Brasil contribui
                para a existência de diferentes tipos de clima.
                Entre os principais estão o equatorial, tropical,
                tropical de altitude, tropical atlântico e subtropical.
            </p>

            <table class="tabela">

                <tr>
                    <th>Clima</th>
                    <th>Características</th>
                </tr>

                <tr>
                    <td>Equatorial</td>
                    <td>Temperaturas elevadas e muita umidade durante grande parte do ano</td>
                </tr>

                <tr>
                    <td>Tropical</td>
                    <td>Verão geralmente chuvoso e inverno mais seco</td>
                </tr>

                <tr>
                    <td>Tropical de altitude</td>
                    <td>Temperaturas mais amenas em áreas elevadas</td>
                </tr>

                <tr>
                    <td>Tropical Atlântico</td>
                    <td>Influência da proximidade do Oceano Atlântico</td>
                </tr>

                <tr>
                    <td>Subtropical</td>
                    <td>Estações do ano mais marcadas e temperaturas mais baixas no inverno</td>
                </tr>

            </table>

            <h2>Vegetação brasileira</h2>

            <p>
                A vegetação brasileira é extremamente diversificada
                devido às diferenças de clima, relevo, solo e
                disponibilidade de água.
            </p>

            <div class="exemplo">

                <strong>Principais formações vegetais:</strong>

                <div class="passo">
                    <strong>Amazônia:</strong> floresta densa, úmida e com grande biodiversidade.
                </div>

                <div class="passo">
                    <strong>Cerrado:</strong> vegetação adaptada a períodos de seca e ao fogo.
                </div>

                <div class="passo">
                    <strong>Caatinga:</strong> vegetação adaptada ao clima semiárido.
                </div>

                <div class="passo">
                    <strong>Mata Atlântica:</strong> formação florestal muito diversa e bastante alterada pela ocupação humana.
                </div>

                <div class="passo">
                    <strong>Pampa:</strong> predominância de campos naturais no sul do país.
                </div>

                <div class="passo">
                    <strong>Pantanal:</strong> área marcada por ciclos de cheias e vazantes.
                </div>

            </div>

            <h2>Hidrografia do Brasil</h2>

            <p>
                A hidrografia corresponde ao conjunto de águas de
                determinada área. O Brasil possui uma extensa rede
                de rios, com grande importância para abastecimento,
                transporte, agricultura e geração de energia.
            </p>

            <p>
                Entre as principais bacias hidrográficas brasileiras
                estão as bacias Amazônica, Tocantins-Araguaia,
                São Francisco, Paraná, Paraguai e Uruguai.
            </p>

            <div class="formula">
                rios + afluentes = rede hidrográfica
            </div>

            <h3>Rio Amazonas</h3>

            <p>
                O sistema hidrográfico amazônico possui enorme
                importância ambiental, econômica e social.
                Seus rios são utilizados por diferentes comunidades
                para transporte, pesca e outras atividades.
            </p>

            <h3>Rio São Francisco</h3>

            <p>
                O Rio São Francisco possui grande importância para
                várias áreas do país, especialmente para o abastecimento,
                irrigação, geração de energia e atividades econômicas.
            </p>

            <h2>População brasileira</h2>

            <p>
                A população brasileira está distribuída de maneira
                desigual pelo território. Existem áreas com elevada
                concentração populacional e outras com densidades
                demográficas muito menores.
            </p>

            <p>
                A maior concentração populacional ocorre principalmente
                nas áreas próximas ao litoral e em grandes centros
                urbanos, embora o processo de ocupação também tenha
                avançado para o interior do país.
            </p>

            <div class="caixa">

                <strong>💡 Urbanização:</strong>

                <p>
                    A urbanização é o processo de crescimento da
                    população que vive em áreas urbanas. O Brasil passou
                    por uma intensa urbanização ao longo do século XX,
                    transformando profundamente sua organização espacial.
                </p>

            </div>

            <h2>Urbanização e cidades</h2>

            <p>
                As cidades concentram atividades econômicas,
                serviços, comércio, indústria, educação e saúde.
                Ao mesmo tempo, o crescimento urbano pode gerar
                problemas relacionados à mobilidade, habitação,
                saneamento e meio ambiente.
            </p>

            <p>
                As grandes cidades brasileiras possuem forte influência
                sobre as regiões próximas e participam de redes urbanas
                cada vez mais complexas.
            </p>

            <h2>Economia e atividades produtivas</h2>

            <p>
                O território brasileiro apresenta grande diversidade
                econômica. As atividades produtivas estão relacionadas
                às características naturais, à infraestrutura,
                à disponibilidade de recursos e à organização da sociedade.
            </p>

            <table class="tabela">

                <tr>
                    <th>Setor</th>
                    <th>Exemplos</th>
                </tr>

                <tr>
                    <td>Agropecuária</td>
                    <td>Produção agrícola e criação de animais</td>
                </tr>

                <tr>
                    <td>Indústria</td>
                    <td>Produção de bens, máquinas, alimentos e veículos</td>
                </tr>

                <tr>
                    <td>Mineração</td>
                    <td>Extração de recursos minerais</td>
                </tr>

                <tr>
                    <td>Serviços</td>
                    <td>Comércio, educação, saúde, transporte e tecnologia</td>
                </tr>

                <tr>
                    <td>Turismo</td>
                    <td>Atividades relacionadas ao lazer e à visitação de diferentes lugares</td>
                </tr>

            </table>

            <h2>Biomas brasileiros</h2>

            <p>
                Bioma é uma grande área que apresenta características
                semelhantes de vegetação, clima, fauna e outros
                elementos naturais.
            </p>

            <p>
                O Brasil possui seis grandes biomas terrestres:
                Amazônia, Cerrado, Caatinga, Mata Atlântica,
                Pantanal e Pampa.
            </p>

            <div class="exemplo">

                <strong>Os seis biomas brasileiros:</strong>

                <div class="passo">
                    <strong>Amazônia</strong> — predominante na região Norte.
                </div>

                <div class="passo">
                    <strong>Cerrado</strong> — muito presente no Centro-Oeste e em outras áreas do país.
                </div>

                <div class="passo">
                    <strong>Caatinga</strong> — característica principalmente do interior do Nordeste.
                </div>

                <div class="passo">
                    <strong>Mata Atlântica</strong> — associada principalmente às áreas próximas ao litoral.
                </div>

                <div class="passo">
                    <strong>Pantanal</strong> — localizado principalmente nos estados de Mato Grosso e Mato Grosso do Sul.
                </div>

                <div class="passo">
                    <strong>Pampa</strong> — encontrado principalmente no Rio Grande do Sul.
                </div>

            </div>

            <h2>Problemas ambientais</h2>

            <p>
                O território brasileiro também enfrenta diferentes
                problemas ambientais. Entre eles estão o desmatamento,
                as queimadas, a poluição dos rios, a perda de
                biodiversidade e a degradação dos solos.
            </p>

            <p>
                Esses problemas podem estar relacionados às atividades
                econômicas e à ocupação inadequada do espaço.
                A conservação ambiental busca equilibrar o uso dos
                recursos naturais com a preservação dos ecossistemas.
            </p>

            <div class="dicas">

                <h3>💡 Pontos importantes para estudar Geografia do Brasil</h3>

                <ul>

                    <li>
                        Conheça as cinco regiões brasileiras e suas características.
                    </li>

                    <li>
                        Estude a relação entre clima, relevo e vegetação.
                    </li>

                    <li>
                        Memorize os principais biomas brasileiros.
                    </li>

                    <li>
                        Entenda a importância dos rios e das bacias hidrográficas.
                    </li>

                    <li>
                        Observe como a população está distribuída pelo território.
                    </li>

                    <li>
                        Estude o processo de urbanização brasileira.
                    </li>

                    <li>
                        Relacione os recursos naturais com as atividades econômicas.
                    </li>

                    <li>
                        Não estude os elementos naturais de forma isolada:
                        eles estão relacionados entre si.
                    </li>

                </ul>

            </div>

            <h2>Resumo da Geografia do Brasil</h2>

            <table class="tabela">

                <tr>
                    <th>Tema</th>
                    <th>Principal característica</th>
                </tr>

                <tr>
                    <td>Território</td>
                    <td>Grande extensão e diversidade de paisagens</td>
                </tr>

                <tr>
                    <td>Regiões</td>
                    <td>Norte, Nordeste, Centro-Oeste, Sudeste e Sul</td>
                </tr>

                <tr>
                    <td>Relevo</td>
                    <td>Predomínio de planaltos, planícies e depressões</td>
                </tr>

                <tr>
                    <td>Clima</td>
                    <td>Grande diversidade climática</td>
                </tr>

                <tr>
                    <td>Vegetação</td>
                    <td>Grande variedade de formações vegetais</td>
                </tr>

                <tr>
                    <td>Hidrografia</td>
                    <td>Extensa rede de rios e bacias hidrográficas</td>
                </tr>

                <tr>
                    <td>População</td>
                    <td>Distribuição desigual e forte urbanização</td>
                </tr>

                <tr>
                    <td>Economia</td>
                    <td>Agricultura, indústria, mineração e serviços</td>
                </tr>

            </table>

            <h2>Exercícios</h2>

            <div class="exercicios">

                <ol>

                    <li>
                        Em qual continente o Brasil está localizado?
                    </li>

                    <li>
                        Quais são as cinco regiões do Brasil?
                    </li>

                    <li>
                        Cite duas características da Região Norte.
                    </li>

                    <li>
                        Qual é a formação vegetal característica do
                        interior do Nordeste?
                    </li>

                    <li>
                        Quais são as principais formas de relevo
                        encontradas no território brasileiro?
                    </li>

                    <li>
                        Cite três tipos de clima presentes no Brasil.
                    </li>

                    <li>
                        Quais são os seis principais biomas brasileiros?
                    </li>

                    <li>
                        Qual é a importância dos rios para a sociedade?
                    </li>

                    <li>
                        Por que a população brasileira está distribuída
                        de maneira desigual pelo território?
                    </li>

                    <li>
                        O que é urbanização?
                    </li>

                    <li>
                        Cite três atividades econômicas importantes
                        para o território brasileiro.
                    </li>

                    <li>
                        Cite dois problemas ambientais que podem afetar
                        o território brasileiro.
                    </li>

                </ol>

            </div>

            <h2>Conclusão</h2>

            <p>
                A Geografia do Brasil permite compreender a enorme
                diversidade presente no território nacional.
                O país possui diferentes formas de relevo, climas,
                vegetações, rios e paisagens.
            </p>

            <p>
                Além dos elementos naturais, é importante compreender
                como a sociedade ocupa e transforma o espaço.
                A distribuição da população, o crescimento das cidades,
                as atividades econômicas e os problemas ambientais
                estão diretamente relacionados à organização do
                território brasileiro.
            </p>

            <p>
                Para estudar Geografia com mais facilidade, procure
                relacionar os diferentes assuntos. Clima influencia
                vegetação, relevo influencia rios, recursos naturais
                influenciam atividades econômicas e a população
                transforma constantemente o espaço geográfico.
            </p>

            <p>
                Em resumo, estudar o Brasil é compreender a relação
                entre <strong>território, natureza, sociedade,
                população e economia</strong>.
            </p>

        </div>

    </article>

</main>

<footer>

    © 2026 Portal News • Educação, Geografia e conhecimento

</footer>

</body> </html>