<?php
$categoria = "GEOGRAFIA";
$titulo = "Globalização: conceitos, características, impactos e desafios";

$subtitulo = "Entenda o processo de globalização, sua relação com a economia, a tecnologia, os transportes, a cultura e as transformações no espaço geográfico.";

$autor = "Redação Portal News";

$data = "3 de setembro de 2026";
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
                GLOBALIZAÇÃO<br>
                <span>& MUNDO</span>
            </div>

        </div>

        <div class="conteudo">

            <p class="primeiro">
                A globalização é um dos principais fenômenos estudados
                pela Geografia contemporânea. Ela está relacionada ao
                aumento das relações entre diferentes lugares do mundo,
                envolvendo economia, política, tecnologia, cultura,
                transportes, comunicação e circulação de pessoas,
                mercadorias e informações.
            </p>

            <p>
                Com a globalização, acontecimentos que ocorrem em uma
                determinada parte do planeta podem produzir efeitos
                rapidamente em outras regiões. Empresas podem produzir
                em diferentes países, consumidores podem comprar produtos
                fabricados em outros continentes e informações podem
                circular quase instantaneamente pela internet.
            </p>

            <div class="caixa">

                <strong>💡 Ideia principal:</strong>

                <p>
                    A globalização aumenta a interdependência entre
                    diferentes países e regiões, intensificando os
                    fluxos de mercadorias, capitais, informações,
                    pessoas e tecnologias.
                </p>

                <div class="formula">
                    tecnologia + transportes + comunicação = maior integração mundial
                </div>

            </div>

            <h2>O que é globalização?</h2>

            <p>
                Globalização é o processo de intensificação das relações
                e das conexões entre diferentes partes do mundo.
                Ela faz com que os espaços geográficos estejam cada vez
                mais conectados por redes de transporte, comunicação,
                comércio e circulação de capitais.
            </p>

            <p>
                Embora as relações entre diferentes sociedades existam
                há muitos séculos, a globalização ganhou grande força
                principalmente a partir da segunda metade do século XX,
                com o desenvolvimento dos meios de transporte,
                das telecomunicações e, posteriormente, da internet.
            </p>

            <div class="exemplo">

                <strong>Exemplo de globalização:</strong>

                <p>
                    Um smartphone pode ser projetado em um país,
                    utilizar componentes produzidos em vários outros,
                    ser montado em outro território e vendido para
                    consumidores espalhados pelo mundo.
                </p>

                <div class="passo">
                    <strong>Projeto:</strong> desenvolvimento tecnológico e pesquisa.
                </div>

                <div class="passo">
                    <strong>Produção:</strong> diferentes etapas podem ocorrer em vários países.
                </div>

                <div class="passo">
                    <strong>Transporte:</strong> utilização de redes internacionais de logística.
                </div>

                <div class="passo">
                    <strong>Consumo:</strong> venda do produto em diferentes mercados.
                </div>

            </div>

            <h2>Características da globalização</h2>

            <p>
                A globalização apresenta diversas características que
                ajudam a compreender as transformações ocorridas no
                espaço geográfico mundial.
            </p>

            <table class="tabela">

                <tr>
                    <th>Característica</th>
                    <th>Importância</th>
                </tr>

                <tr>
                    <td>Integração econômica</td>
                    <td>Aumenta as relações comerciais e financeiras entre países</td>
                </tr>

                <tr>
                    <td>Avanço tecnológico</td>
                    <td>Facilita a comunicação e a circulação de informações</td>
                </tr>

                <tr>
                    <td>Transportes modernos</td>
                    <td>Reduzem o tempo necessário para transportar pessoas e mercadorias</td>
                </tr>

                <tr>
                    <td>Circulação de capitais</td>
                    <td>Permite investimentos e operações financeiras em diferentes países</td>
                </tr>

                <tr>
                    <td>Empresas multinacionais</td>
                    <td>Atuam em diferentes territórios e organizam cadeias produtivas internacionais</td>
                </tr>

            </table>

            <h2>Globalização e tecnologia</h2>

            <p>
                O desenvolvimento tecnológico foi fundamental para
                acelerar a globalização. A internet, os computadores,
                os smartphones e os sistemas digitais permitem que
                informações sejam transmitidas rapidamente entre
                diferentes lugares.
            </p>

            <p>
                As tecnologias de comunicação também modificaram as
                relações de trabalho, educação, comércio e entretenimento.
                Atualmente, muitas atividades podem ser realizadas
                remotamente e conectadas a pessoas localizadas em
                diferentes países.
            </p>

            <div class="formula">
                informação rápida → comunicação global → maior conexão entre lugares
            </div>

            <h2>Transportes e globalização</h2>

            <p>
                Os avanços nos transportes também contribuíram para
                aproximar diferentes regiões do planeta. Navios,
                aviões, ferrovias e rodovias permitem transportar
                mercadorias e pessoas em grandes distâncias.
            </p>

            <p>
                O transporte marítimo possui papel fundamental no
                comércio internacional, especialmente no deslocamento
                de grandes quantidades de mercadorias entre continentes.
            </p>

            <h3>Redução do tempo de deslocamento</h3>

            <p>
                A evolução tecnológica dos meios de transporte tornou
                as viagens e o transporte de produtos mais rápidos.
                Isso favoreceu o crescimento das relações comerciais
                entre países.
            </p>

            <h2>Globalização econômica</h2>

            <p>
                A dimensão econômica é uma das partes mais importantes
                da globalização. Países estão conectados por relações
                comerciais, investimentos, produção industrial,
                circulação de capitais e mercados consumidores.
            </p>

            <p>
                Muitas empresas passaram a organizar suas atividades
                produtivas em diferentes países, buscando fatores como
                disponibilidade de matérias-primas, mão de obra,
                infraestrutura, tecnologia e acesso aos mercados.
            </p>

            <table class="tabela">

                <tr>
                    <th>Elemento</th>
                    <th>Exemplo</th>
                </tr>

                <tr>
                    <td>Comércio internacional</td>
                    <td>Compra e venda de produtos entre países</td>
                </tr>

                <tr>
                    <td>Investimentos</td>
                    <td>Aplicação de recursos financeiros em outros países</td>
                </tr>

                <tr>
                    <td>Produção internacional</td>
                    <td>Diferentes etapas da produção realizadas em países distintos</td>
                </tr>

                <tr>
                    <td>Mercado consumidor</td>
                    <td>Venda de produtos para consumidores de diferentes países</td>
                </tr>

            </table>

            <h2>Empresas multinacionais</h2>

            <p>
                Empresas multinacionais são companhias que possuem
                atividades ou unidades produtivas em diferentes países.
                Elas desempenham um papel importante na organização
                econômica do espaço mundial.
            </p>

            <p>
                Essas empresas podem distribuir suas etapas de produção
                pelo mundo. Uma empresa pode realizar pesquisa e
                desenvolvimento em um país, fabricar componentes em
                outros territórios e comercializar seus produtos em
                diversos mercados.
            </p>

            <div class="caixa">

                <strong>💡 Importante:</strong>

                <p>
                    As empresas multinacionais contribuem para aumentar
                    os fluxos econômicos entre países, mas também podem
                    gerar debates relacionados a condições de trabalho,
                    impactos ambientais, concentração econômica e
                    desigualdade.
                </p>

            </div>

            <h2>Divisão internacional do trabalho</h2>

            <p>
                A divisão internacional do trabalho corresponde à
                distribuição das diferentes atividades econômicas entre
                países e regiões do mundo.
            </p>

            <p>
                Com a globalização, uma mesma mercadoria pode passar por
                diversas etapas de produção em diferentes países.
                Essa organização permite que empresas aproveitem
                características específicas de cada território.
            </p>

            <div class="exemplo">

                <strong>Exemplo simplificado:</strong>

                <div class="passo">
                    <strong>País A:</strong> pesquisa e desenvolvimento do produto.
                </div>

                <div class="passo">
                    <strong>País B:</strong> fabricação de componentes.
                </div>

                <div class="passo">
                    <strong>País C:</strong> montagem do produto.
                </div>

                <div class="passo">
                    <strong>País D:</strong> distribuição e comercialização.
                </div>

            </div>

            <h2>Comércio internacional</h2>

            <p>
                O comércio internacional consiste na compra e venda de
                bens e serviços entre diferentes países.
                Ele é realizado por meio de redes de transporte,
                sistemas financeiros e acordos comerciais.
            </p>

            <p>
                Os países podem exportar produtos que produzem em grande
                quantidade e importar produtos ou recursos que não
                produzem suficientemente em seu próprio território.
            </p>

            <div class="formula">
                exportação + importação = comércio internacional
            </div>

            <h2>Globalização e cultura</h2>

            <p>
                A globalização também influencia os hábitos culturais.
                Filmes, músicas, séries, alimentos, roupas e tendências
                podem circular rapidamente entre diferentes países.
            </p>

            <p>
                A internet e as redes sociais intensificaram esse
                processo, permitindo que manifestações culturais locais
                alcancem públicos internacionais.
            </p>

            <p>
                Ao mesmo tempo, existe um debate sobre a possibilidade
                de culturas mais poderosas economicamente exercerem
                maior influência sobre outras sociedades.
            </p>

            <h2>Globalização e informação</h2>

            <p>
                A circulação de informações é uma das características
                mais marcantes da globalização contemporânea.
                Notícias, imagens, vídeos e mensagens podem ser
                compartilhados rapidamente entre pessoas localizadas
                em diferentes partes do mundo.
            </p>

            <p>
                Essa velocidade facilita o acesso ao conhecimento,
                mas também exige atenção à qualidade das informações,
                já que conteúdos falsos ou enganosos também podem
                circular rapidamente.
            </p>

            <h2>Globalização e desigualdade</h2>

            <p>
                A globalização não beneficia todos os países e grupos
                sociais da mesma maneira. Existem diferenças importantes
                relacionadas ao acesso à tecnologia, educação,
                infraestrutura, investimentos e oportunidades econômicas.
            </p>

            <p>
                Alguns territórios possuem maior capacidade de produzir
                tecnologia, controlar empresas e atrair investimentos,
                enquanto outros permanecem mais dependentes da
                exportação de matérias-primas ou de produtos de menor
                valor agregado.
            </p>

            <table class="tabela">

                <tr>
                    <th>Possíveis benefícios</th>
                    <th>Possíveis desafios</th>
                </tr>

                <tr>
                    <td>Maior circulação de informações</td>
                    <td>Desigualdade no acesso à tecnologia</td>
                </tr>

                <tr>
                    <td>Ampliação do comércio</td>
                    <td>Dependência econômica</td>
                </tr>

                <tr>
                    <td>Maior acesso a produtos e serviços</td>
                    <td>Concentração de riqueza</td>
                </tr>

                <tr>
                    <td>Difusão de tecnologias</td>
                    <td>Impactos sobre empregos e atividades locais</td>
                </tr>

                <tr>
                    <td>Maior contato entre culturas</td>
                    <td>Pressões sobre culturas e hábitos locais</td>
                </tr>

            </table>

            <h2>Globalização e meio ambiente</h2>

            <p>
                A intensificação da produção e do comércio mundial
                também pode aumentar a pressão sobre os recursos
                naturais.
            </p>

            <p>
                O crescimento das atividades industriais, da mineração,
                da agropecuária, dos transportes e do consumo pode
                provocar impactos ambientais quando não existe
                planejamento adequado.
            </p>

            <div class="caixa">

                <strong>🌎 Desafio ambiental:</strong>

                <p>
                    Um dos grandes desafios atuais é conciliar o
                    desenvolvimento econômico e a integração mundial
                    com a conservação dos recursos naturais e a redução
                    dos impactos ambientais.
                </p>

            </div>

            <h2>Globalização e trabalho</h2>

            <p>
                As transformações econômicas e tecnológicas provocadas
                pela globalização também modificaram o mundo do trabalho.
                Algumas atividades foram automatizadas, enquanto novas
                profissões relacionadas à tecnologia, comunicação e
                serviços digitais surgiram.
            </p>

            <p>
                Empresas podem contratar profissionais localizados em
                diferentes países, principalmente em atividades que
                podem ser realizadas pela internet.
            </p>

            <h2>Globalização e o Brasil</h2>

            <p>
                O Brasil participa da economia global por meio da
                exportação e importação de produtos, da atuação de
                empresas nacionais e estrangeiras e da participação
                em cadeias produtivas internacionais.
            </p>

            <p>
                O país possui grande importância na produção e
                exportação de produtos agropecuários e minerais,
                além de apresentar setores industriais e de serviços
                integrados ao mercado internacional.
            </p>

            <div class="exemplo">

                <strong>Participação brasileira na globalização:</strong>

                <div class="passo">
                    <strong>Agropecuária:</strong> produção e exportação de diversos produtos agrícolas.
                </div>

                <div class="passo">
                    <strong>Mineração:</strong> exploração e exportação de recursos minerais.
                </div>

                <div class="passo">
                    <strong>Indústria:</strong> participação em cadeias produtivas nacionais e internacionais.
                </div>

                <div class="passo">
                    <strong>Serviços:</strong> comércio, tecnologia, turismo, transporte e atividades financeiras.
                </div>

            </div>

            <h2>Blocos econômicos</h2>

            <p>
                Os blocos econômicos são associações entre países
                criadas para ampliar a cooperação e facilitar relações
                comerciais e econômicas entre seus integrantes.
            </p>

            <p>
                Dependendo do acordo estabelecido, os países podem
                reduzir tarifas comerciais, facilitar a circulação
                de mercadorias ou estabelecer políticas econômicas
                conjuntas.
            </p>

            <h3>Mercosul</h3>

            <p>
                O Mercosul é um importante processo de integração
                regional da América do Sul. A cooperação entre seus
                países-membros busca fortalecer relações econômicas,
                comerciais e políticas.
            </p>

            <h2>Redes e fluxos da globalização</h2>

            <p>
                A globalização pode ser compreendida por meio do
                conceito de redes. Redes são estruturas que conectam
                diferentes pontos do espaço por meio de fluxos.
            </p>

            <p>
                Esses fluxos podem envolver pessoas, mercadorias,
                capitais, informações, energia e conhecimentos.
                Grandes cidades, portos, aeroportos, centros financeiros
                e tecnológicos funcionam como importantes pontos dessas
                redes.
            </p>

            <div class="formula">
                redes + fluxos = conexão entre diferentes lugares
            </div>

            <h2>As cidades globais</h2>

            <p>
                Algumas cidades possuem grande influência econômica,
                política, cultural e tecnológica em escala internacional.
                Elas concentram sedes de empresas, instituições
                financeiras, centros de pesquisa e importantes redes
                de transporte e comunicação.
            </p>

            <p>
                Essas cidades funcionam como importantes nós das redes
                globais e possuem forte influência sobre outras regiões.
            </p>

            <h2>Vantagens e desvantagens da globalização</h2>

            <p>
                A globalização apresenta aspectos positivos e negativos.
                Seus efeitos dependem das características econômicas,
                sociais e políticas de cada território.
            </p>

            <table class="tabela">

                <tr>
                    <th>Vantagens</th>
                    <th>Desvantagens</th>
                </tr>

                <tr>
                    <td>Maior acesso à informação</td>
                    <td>Desigualdade econômica</td>
                </tr>

                <tr>
                    <td>Ampliação das relações comerciais</td>
                    <td>Dependência de mercados internacionais</td>
                </tr>

                <tr>
                    <td>Difusão de tecnologias</td>
                    <td>Exclusão digital</td>
                </tr>

                <tr>
                    <td>Maior circulação cultural</td>
                    <td>Homogeneização de determinados hábitos culturais</td>
                </tr>

                <tr>
                    <td>Maior integração entre países</td>
                    <td>Aumento de impactos ambientais em algumas atividades</td>
                </tr>

            </table>

            <h2>Globalização e desigualdade digital</h2>

            <p>
                Apesar do avanço da internet e das tecnologias digitais,
                nem todas as pessoas possuem o mesmo acesso a computadores,
                smartphones, conexão de qualidade e educação tecnológica.
            </p>

            <p>
                Essa diferença é conhecida como desigualdade ou
                exclusão digital e pode dificultar o acesso de parte
                da população à educação, ao trabalho e a serviços
                disponíveis pela internet.
            </p>

            <div class="dicas">

                <h3>💡 Pontos importantes para estudar Globalização</h3>

                <ul>

                    <li>
                        Entenda globalização como um processo de integração entre diferentes lugares.
                    </li>

                    <li>
                        Relacione globalização com tecnologia e comunicação.
                    </li>

                    <li>
                        Estude a importância dos transportes para o comércio mundial.
                    </li>

                    <li>
                        Conheça o papel das empresas multinacionais.
                    </li>

                    <li>
                        Entenda o conceito de divisão internacional do trabalho.
                    </li>

                    <li>
                        Estude os fluxos de mercadorias, pessoas, capitais e informações.
                    </li>

                    <li>
                        Relacione globalização com comércio internacional.
                    </li>

                    <li>
                        Observe os impactos positivos e negativos da globalização.
                    </li>

                    <li>
                        Estude a relação entre globalização e desigualdade social.
                    </li>

                    <li>
                        Relacione globalização com questões ambientais e culturais.
                    </li>

                </ul>

            </div>

            <h2>Resumo da Globalização</h2>

            <table class="tabela">

                <tr>
                    <th>Tema</th>
                    <th>Principal característica</th>
                </tr>

                <tr>
                    <td>Globalização</td>
                    <td>Integração crescente entre diferentes lugares do mundo</td>
                </tr>

                <tr>
                    <td>Tecnologia</td>
                    <td>Acelera a comunicação e a circulação de informações</td>
                </tr>

                <tr>
                    <td>Transportes</td>
                    <td>Facilitam a circulação de pessoas e mercadorias</td>
                </tr>

                <tr>
                    <td>Economia</td>
                    <td>Aumenta as relações comerciais e financeiras internacionais</td>
                </tr>

                <tr>
                    <td>Multinacionais</td>
                    <td>Organizam atividades econômicas em diferentes países</td>
                </tr>

                <tr>
                    <td>Cultura</td>
                    <td>Facilita a circulação de hábitos, produtos e manifestações culturais</td>
                </tr>

                <tr>
                    <td>Trabalho</td>
                    <td>Modifica profissões, formas de produção e relações trabalhistas</td>
                </tr>

                <tr>
                    <td>Meio ambiente</td>
                    <td>Pode aumentar a pressão sobre recursos naturais</td>
                </tr>

                <tr>
                    <td>Desigualdade</td>
                    <td>Os benefícios da globalização são distribuídos de forma desigual</td>
                </tr>

            </table>

            <h2>Exercícios</h2>

            <div class="exercicios">

                <ol>

                    <li>
                        O que é globalização?
                    </li>

                    <li>
                        Cite três características da globalização.
                    </li>

                    <li>
                        Qual é a importância da tecnologia para o processo de globalização?
                    </li>

                    <li>
                        Por que os transportes são importantes para a globalização?
                    </li>

                    <li>
                        O que são empresas multinacionais?
                    </li>

                    <li>
                        Explique o conceito de divisão internacional do trabalho.
                    </li>

                    <li>
                        O que é comércio internacional?
                    </li>

                    <li>
                        Como a globalização influencia a cultura?
                    </li>

                    <li>
                        Cite dois possíveis benefícios da globalização.
                    </li>

                    <li>
                        Cite dois possíveis problemas relacionados à globalização.
                    </li>

                    <li>
                        Como a globalização pode contribuir para desigualdades entre países e grupos sociais?
                    </li>

                    <li>
                        Qual é a relação entre globalização e meio ambiente?
                    </li>

                    <li>
                        O que são fluxos geográficos?
                    </li>

                    <li>
                        Explique o que é exclusão ou desigualdade digital.
                    </li>

                    <li>
                        Como o Brasil participa do processo de globalização?
                    </li>

                </ol>

            </div>

            <h2>Conclusão</h2>

            <p>
                A globalização transformou profundamente o espaço
                geográfico mundial. O avanço das tecnologias,
                dos transportes e das comunicações aumentou a
                conexão entre países, cidades, empresas e pessoas.
            </p>

            <p>
                Esse processo possui forte dimensão econômica, mas
                também influencia a cultura, o trabalho, a política,
                a circulação de informações e a relação da sociedade
                com o meio ambiente.
            </p>

            <p>
                Ao mesmo tempo em que a globalização proporciona
                novas oportunidades de comunicação, comércio,
                tecnologia e circulação de conhecimento, ela também
                apresenta desafios relacionados à desigualdade,
                à dependência econômica, à exclusão digital e aos
                impactos ambientais.
            </p>

            <p>
                Para compreender a globalização em Geografia, é
                importante observar que os lugares não estão isolados.
                Eles fazem parte de redes cada vez mais complexas,
                conectadas por <strong>mercadorias, pessoas, capitais,
                informações, tecnologias e conhecimentos</strong>.
            </p>

        </div>

    </article>

</main>

<footer>

    © 2026 Portal News • Educação, Geografia e conhecimento

</footer>

</body>

</html>