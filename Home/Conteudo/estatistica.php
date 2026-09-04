<?php
$categoria = "MATEMÁTICA";

$titulo = "Estatística em Matemática: aprendendo a interpretar e analisar dados";

$subtitulo = "Uma aula completa sobre Estatística, desde os conceitos básicos até média, mediana, moda, frequência, gráficos, variância e desvio padrão.";

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
            font-size: 18px;
            font-family: "Courier New", monospace;
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

        .lista {
            padding-left: 25px;
            margin-bottom: 25px;
        }

        .lista li {
            margin-bottom: 10px;
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

            .tabela {
                font-size: 13px;
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
                    ESTATÍSTICA<br>
                    <span>& MATEMÁTICA</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    A Estatística é uma área da Matemática responsável por
                    coletar, organizar, analisar e interpretar dados.
                    Ela está presente em pesquisas, escolas, empresas,
                    esportes, economia, ciência, saúde e em diversas
                    situações do nosso cotidiano.
                </p>

                <p>
                    Sempre que observamos números e tentamos encontrar
                    padrões ou tirar conclusões a partir deles, estamos
                    trabalhando com ideias relacionadas à Estatística.
                </p>

                <p>
                    Por exemplo, quando uma professora calcula a média das
                    notas de uma turma, quando uma empresa analisa suas
                    vendas ou quando uma pesquisa mostra a porcentagem de
                    pessoas que preferem determinado produto, existe um
                    processo estatístico por trás dessas informações.
                </p>

                <div class="caixa">

                    <strong>Ideia principal:</strong>

                    <p>
                        Estatística não é apenas fazer contas. É saber
                        organizar números e, principalmente, entender
                        o que esses números estão dizendo.
                    </p>

                </div>


                <h2>O que é Estatística?</h2>

                <p>
                    Estatística é o conjunto de métodos utilizados para
                    coletar, organizar, apresentar, analisar e interpretar
                    dados.
                </p>

                <p>
                    Os dados podem representar praticamente qualquer coisa:
                    idade de pessoas, notas de estudantes, preços de produtos,
                    quantidade de vendas, temperaturas, alturas, salários,
                    número de habitantes e muito mais.
                </p>

                <h2>População e amostra</h2>

                <p>
                    Antes de realizar uma pesquisa estatística, precisamos
                    saber exatamente quem ou o que estamos estudando.
                </p>

                <h3>População</h3>

                <p>
                    A população é o conjunto completo de elementos que fazem
                    parte da pesquisa.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Uma escola possui 1.000 alunos e queremos estudar
                        a idade dos estudantes. Nesse caso, os 1.000 alunos
                        formam a população.
                    </p>

                </div>

                <h3>Amostra</h3>

                <p>
                    A amostra é uma parte da população escolhida para
                    participar da pesquisa.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Em vez de analisar os 1.000 alunos, podemos escolher
                        100 estudantes para representar a escola. Esses
                        100 estudantes formam a amostra.
                    </p>

                </div>


                <h2>Tipos de dados</h2>

                <p>
                    Os dados podem ser classificados de diferentes maneiras.
                    Uma das classificações mais importantes separa os dados
                    em qualitativos e quantitativos.
                </p>

                <h3>Dados qualitativos</h3>

                <p>
                    São dados relacionados a características ou categorias.
                </p>

                <ul class="lista">

                    <li>Cor dos olhos;</li>
                    <li>Estado civil;</li>
                    <li>Marca de celular;</li>
                    <li>Tipo de música preferida;</li>
                    <li>Curso escolhido.</li>

                </ul>

                <h3>Dados quantitativos</h3>

                <p>
                    São dados representados por valores numéricos.
                </p>

                <ul class="lista">

                    <li>Idade;</li>
                    <li>Altura;</li>
                    <li>Peso;</li>
                    <li>Nota de uma prova;</li>
                    <li>Número de irmãos.</li>

                </ul>


                <h2>Média aritmética</h2>

                <p>
                    A média aritmética é uma das medidas mais conhecidas
                    da Estatística.
                </p>

                <p>
                    Para calcular a média, somamos todos os valores e
                    dividimos o resultado pela quantidade de valores.
                </p>

                <div class="formula">

                    MÉDIA = SOMA DOS VALORES ÷ QUANTIDADE DE VALORES

                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Um aluno tirou as seguintes notas:
                    </p>

                    <p>
                        6, 7, 8, 9 e 10
                    </p>

                    <p>
                        Primeiro somamos:
                    </p>

                    <p>
                        6 + 7 + 8 + 9 + 10 = 40
                    </p>

                    <p>
                        Agora dividimos pela quantidade de notas:
                    </p>

                    <p>
                        40 ÷ 5 = 8
                    </p>

                    <p>
                        Portanto, a média é:
                        <strong>8</strong>
                    </p>

                </div>


                <h2>Mediana</h2>

                <p>
                    A mediana é o valor que fica exatamente no meio de um
                    conjunto de dados quando eles estão organizados em
                    ordem crescente ou decrescente.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Considere os números:
                    </p>

                    <p>
                        2, 4, 6, 8, 10
                    </p>

                    <p>
                        O número central é 6.
                    </p>

                    <p>
                        Portanto:
                        <strong>Mediana = 6</strong>
                    </p>

                </div>

                <h3>Quando existe quantidade par?</h3>

                <p>
                    Quando existe uma quantidade par de valores, temos
                    dois números centrais. Nesse caso, calculamos a média
                    desses dois valores.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        2, 4, 6, 8
                    </p>

                    <p>
                        Os valores centrais são 4 e 6.
                    </p>

                    <p>
                        Mediana:
                    </p>

                    <p>
                        (4 + 6) ÷ 2 = 5
                    </p>

                    <p>
                        <strong>Mediana = 5</strong>
                    </p>

                </div>


                <h2>Moda</h2>

                <p>
                    A moda é o valor que aparece com maior frequência em
                    um conjunto de dados.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        2, 3, 3, 4, 5, 3, 7
                    </p>

                    <p>
                        O número 3 aparece três vezes.
                    </p>

                    <p>
                        Portanto:
                        <strong>Moda = 3</strong>
                    </p>

                </div>

                <p>
                    Um conjunto pode possuir uma moda, mais de uma moda
                    ou não possuir moda.
                </p>


                <h2>Média, mediana e moda</h2>

                <p>
                    Essas três medidas são chamadas de medidas de tendência
                    central. Elas ajudam a identificar um valor que represente
                    o centro ou comportamento típico de um conjunto de dados.
                </p>

                <table class="tabela">

                    <tr>

                        <th>Medida</th>

                        <th>Significado</th>

                    </tr>

                    <tr>

                        <td>Média</td>

                        <td>Soma dos valores dividida pela quantidade.</td>

                    </tr>

                    <tr>

                        <td>Mediana</td>

                        <td>Valor central dos dados organizados.</td>

                    </tr>

                    <tr>

                        <td>Moda</td>

                        <td>Valor que aparece mais vezes.</td>

                    </tr>

                </table>


                <h2>Amplitude</h2>

                <p>
                    A amplitude mostra a diferença entre o maior e o menor
                    valor de um conjunto de dados.
                </p>

                <div class="formula">

                    AMPLITUDE = MAIOR VALOR - MENOR VALOR

                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Dados:
                    </p>

                    <p>
                        5, 8, 10, 14, 20
                    </p>

                    <p>
                        Maior valor = 20
                    </p>

                    <p>
                        Menor valor = 5
                    </p>

                    <p>
                        Amplitude:
                    </p>

                    <p>
                        20 - 5 = <strong>15</strong>
                    </p>

                </div>


                <h2>Frequência absoluta</h2>

                <p>
                    A frequência absoluta representa quantas vezes um
                    determinado valor aparece.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Considere as notas:
                    </p>

                    <p>
                        5, 6, 6, 7, 7, 7, 8
                    </p>

                    <p>
                        A nota 7 aparece três vezes.
                    </p>

                    <p>
                        Portanto, a frequência absoluta da nota 7 é
                        <strong>3</strong>.
                    </p>

                </div>


                <h2>Frequência relativa</h2>

                <p>
                    A frequência relativa mostra a proporção de determinado
                    valor em relação ao total de dados.
                </p>

                <div class="formula">

                    FREQUÊNCIA RELATIVA =
                    FREQUÊNCIA ABSOLUTA ÷ TOTAL

                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Uma pesquisa possui 20 participantes.
                        Cinco escolheram determinada opção.
                    </p>

                    <p>
                        5 ÷ 20 = 0,25
                    </p>

                    <p>
                        Em porcentagem:
                    </p>

                    <p>
                        0,25 × 100 = <strong>25%</strong>
                    </p>

                </div>


                <h2>Tabelas de frequência</h2>

                <p>
                    Quando temos muitos dados, podemos organizá-los em
                    tabelas para facilitar a análise.
                </p>

                <table class="tabela">

                    <tr>

                        <th>Nota</th>

                        <th>Frequência</th>

                    </tr>

                    <tr>

                        <td>5</td>

                        <td>2</td>

                    </tr>

                    <tr>

                        <td>6</td>

                        <td>4</td>

                    </tr>

                    <tr>

                        <td>7</td>

                        <td>6</td>

                    </tr>

                    <tr>

                        <td>8</td>

                        <td>5</td>

                    </tr>

                    <tr>

                        <td>9</td>

                        <td>2</td>

                    </tr>

                </table>

                <p>
                    Observando a tabela, podemos perceber que a nota 7
                    foi a que apareceu mais vezes.
                </p>


                <h2>Gráficos estatísticos</h2>

                <p>
                    Os gráficos são uma das maneiras mais eficientes de
                    apresentar dados visualmente.
                </p>

                <h3>Gráfico de barras</h3>

                <p>
                    É utilizado principalmente para comparar diferentes
                    categorias ou quantidades.
                </p>

                <h3>Gráfico de setores</h3>

                <p>
                    Também conhecido como gráfico de pizza, é utilizado
                    para mostrar partes de um total, geralmente em
                    porcentagens.
                </p>

                <h3>Gráfico de linhas</h3>

                <p>
                    É bastante utilizado para representar mudanças ao
                    longo do tempo.
                </p>


                <h2>Variância</h2>

                <p>
                    A variância é uma medida de dispersão. Ela mostra
                    o quanto os valores de um conjunto estão afastados
                    da média.
                </p>

                <div class="formula">

                    VARIÂNCIA = Σ(x - MÉDIA)² ÷ n

                </div>

                <p>
                    Quanto maior for a dispersão dos dados em relação
                    à média, maior tende a ser a variância.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Considere os números:
                    </p>

                    <p>
                        2, 4 e 6
                    </p>

                    <p>
                        A média é:
                    </p>

                    <p>
                        (2 + 4 + 6) ÷ 3 = 4
                    </p>

                    <p>
                        Agora calculamos a diferença de cada valor para
                        a média:
                    </p>

                    <div class="passo">

                        <strong>2 - 4 = -2</strong>

                    </div>

                    <div class="passo">

                        <strong>4 - 4 = 0</strong>

                    </div>

                    <div class="passo">

                        <strong>6 - 4 = 2</strong>

                    </div>

                    <p>
                        Elevamos as diferenças ao quadrado:
                    </p>

                    <p>
                        (-2)² = 4
                    </p>

                    <p>
                        0² = 0
                    </p>

                    <p>
                        2² = 4
                    </p>

                    <p>
                        Agora:
                    </p>

                    <p>
                        (4 + 0 + 4) ÷ 3 = 8/3
                    </p>

                    <p>
                        Aproximadamente:
                        <strong>2,67</strong>
                    </p>

                </div>


                <h2>Desvio padrão</h2>

                <p>
                    O desvio padrão também é uma medida de dispersão.
                    Ele é calculado através da raiz quadrada da variância.
                </p>

                <div class="formula">

                    DESVIO PADRÃO = √VARIÂNCIA

                </div>

                <p>
                    Um desvio padrão pequeno indica que os valores estão
                    relativamente próximos da média.
                </p>

                <p>
                    Um desvio padrão grande indica que os valores estão
                    mais espalhados.
                </p>


                <h2>Um exemplo completo</h2>

                <p>
                    Agora vamos resolver um exemplo utilizando vários
                    conceitos estudados.
                </p>

                <div class="exemplo">

                    <strong>Problema:</strong>

                    <p>
                        As notas de cinco alunos foram:
                    </p>

                    <p>
                        6, 7, 7, 8 e 10
                    </p>

                    <p>
                        <strong>1º — Média</strong>
                    </p>

                    <p>
                        6 + 7 + 7 + 8 + 10 = 38
                    </p>

                    <p>
                        38 ÷ 5 = 7,6
                    </p>

                    <p>
                        Média = <strong>7,6</strong>
                    </p>

                    <p>
                        <strong>2º — Mediana</strong>
                    </p>

                    <p>
                        Os dados já estão organizados:
                        6, 7, 7, 8, 10
                    </p>

                    <p>
                        O valor central é 7.
                    </p>

                    <p>
                        Mediana = <strong>7</strong>
                    </p>

                    <p>
                        <strong>3º — Moda</strong>
                    </p>

                    <p>
                        O número 7 aparece duas vezes.
                    </p>

                    <p>
                        Moda = <strong>7</strong>
                    </p>

                    <p>
                        <strong>4º — Amplitude</strong>
                    </p>

                    <p>
                        10 - 6 = 4
                    </p>

                    <p>
                        Amplitude = <strong>4</strong>
                    </p>

                </div>


                <h2>Estatística no cotidiano</h2>

                <p>
                    A Estatística está presente em praticamente todas as
                    áreas da sociedade.
                </p>

                <ul class="lista">

                    <li>
                        Empresas analisam vendas e comportamento dos clientes.
                    </li>

                    <li>
                        Escolas analisam notas e desempenho dos alunos.
                    </li>

                    <li>
                        Hospitais analisam dados relacionados aos pacientes.
                    </li>

                    <li>
                        Pesquisadores analisam resultados de experimentos.
                    </li>

                    <li>
                        Times esportivos analisam o desempenho dos jogadores.
                    </li>

                    <li>
                        Governos utilizam dados para planejar políticas públicas.
                    </li>

                    <li>
                        Pesquisas de opinião utilizam estatísticas para
                        analisar tendências da população.
                    </li>

                </ul>


                <h2>Por que aprender Estatística?</h2>

                <p>
                    Aprender Estatística é importante porque vivemos em uma
                    sociedade cercada de informações.
                </p>

                <p>
                    Notícias, pesquisas, gráficos, porcentagens e tabelas
                    aparecem diariamente na televisão, na internet e nas
                    redes sociais.
                </p>

                <p>
                    Saber interpretar esses dados ajuda a evitar conclusões
                    erradas e permite tomar decisões com mais consciência.
                </p>

                <div class="caixa">

                    <strong>Não basta olhar para o número!</strong>

                    <p>
                        É necessário entender de onde os dados vieram,
                        quantas pessoas participaram da pesquisa, como os
                        dados foram coletados e o que realmente está sendo
                        representado.
                    </p>

                </div>


                <div class="dicas">

                    <h3>💡 Dicas para estudar Estatística</h3>

                    <ul>

                        <li>
                            Organize os dados antes de começar os cálculos.
                        </li>

                        <li>
                            Leia atentamente o enunciado.
                        </li>

                        <li>
                            Saiba diferenciar média, mediana e moda.
                        </li>

                        <li>
                            Observe os gráficos com atenção.
                        </li>

                        <li>
                            Não confunda frequência absoluta com frequência
                            relativa.
                        </li>

                        <li>
                            Sempre confira se o resultado faz sentido.
                        </li>

                    </ul>

                </div>


                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Calcule a média dos números:
                            5, 7, 8, 10 e 10.
                        </li>

                        <li>
                            Determine a mediana dos valores:
                            3, 5, 7, 9 e 12.
                        </li>

                        <li>
                            Determine a moda:
                            2, 4, 4, 5, 6, 4, 8.
                        </li>

                        <li>
                            Calcule a amplitude:
                            10, 15, 18, 20 e 30.
                        </li>

                        <li>
                            Uma pesquisa possui 40 pessoas e 10 escolheram
                            determinada opção. Qual é a frequência relativa
                            em porcentagem?
                        </li>

                        <li>
                            Explique com suas palavras a diferença entre
                            população e amostra.
                        </li>

                        <li>
                            Qual medida representa o valor que aparece
                            com maior frequência?
                        </li>

                        <li>
                            Qual medida é encontrada organizando os dados
                            e procurando o valor central?
                        </li>

                    </ol>

                </div>


                <h2>Resumo final</h2>

                <table class="tabela">

                    <tr>

                        <th>Conceito</th>

                        <th>Resumo</th>

                    </tr>

                    <tr>

                        <td>População</td>

                        <td>
                            Conjunto completo que está sendo estudado.
                        </td>

                    </tr>

                    <tr>

                        <td>Amostra</td>

                        <td>
                            Parte da população utilizada na pesquisa.
                        </td>

                    </tr>

                    <tr>

                        <td>Média</td>

                        <td>
                            Soma dos valores dividida pela quantidade.
                        </td>

                    </tr>

                    <tr>

                        <td>Mediana</td>

                        <td>
                            Valor central dos dados organizados.
                        </td>

                    </tr>

                    <tr>

                        <td>Moda</td>

                        <td>
                            Valor que aparece mais vezes.
                        </td>

                    </tr>

                    <tr>

                        <td>Amplitude</td>

                        <td>
                            Diferença entre maior e menor valor.
                        </td>

                    </tr>

                    <tr>

                        <td>Variância</td>

                        <td>
                            Mede a dispersão dos dados em relação à média.
                        </td>

                    </tr>

                    <tr>

                        <td>Desvio padrão</td>

                        <td>
                            Raiz quadrada da variância.
                        </td>

                    </tr>

                </table>


                <h2>Conclusão</h2>

                <p>
                    A Estatística é uma parte fundamental da Matemática
                    porque nos ajuda a transformar conjuntos de números
                    em informações que podem ser compreendidas e analisadas.
                </p>

                <p>
                    Ao aprender conceitos como média, mediana, moda,
                    amplitude, frequência, variância e desvio padrão,
                    conseguimos interpretar melhor pesquisas, gráficos
                    e situações do cotidiano.
                </p>

                <p>
                    O mais importante é lembrar que Estatística não significa
                    apenas realizar cálculos. É preciso compreender o contexto
                    dos dados e pensar criticamente sobre os resultados.
                </p>

                <p>
                    Quanto mais você pratica, mais fácil fica identificar
                    qual conceito deve ser utilizado em cada problema.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação, Matemática e conhecimento

    </footer>

</body>

</html>