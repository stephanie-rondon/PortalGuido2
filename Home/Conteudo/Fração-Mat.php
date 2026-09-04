<?php
$categoria = "MATEMÁTICA";

$titulo = "Frações em Matemática: aprendendo do básico ao avançado";

$subtitulo = "Uma aula completa sobre frações, com conceitos, tipos, simplificação, frações equivalentes, comparação, operações e exercícios para praticar.";

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

        .fracao-grande {
            text-align: center;
            font-size: 34px;
            font-weight: bold;
            color: #0b1f3a;
            margin: 20px 0;
        }

        .linha {
            border-top: 3px solid #1769aa;
            width: 80px;
            margin: 5px auto;
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
                    FRAÇÕES<br>
                    <span>& MATEMÁTICA</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    Frações são uma forma de representar partes de um todo.
                    Elas aparecem constantemente na Matemática e também
                    em situações do nosso cotidiano, como dividir uma pizza,
                    calcular descontos, medir ingredientes de uma receita
                    ou descobrir quanto de um determinado produto foi utilizado.
                </p>

                <p>
                    Aprender frações pode parecer complicado no começo,
                    mas quando entendemos o significado do numerador,
                    do denominador e das operações, o assunto fica muito
                    mais simples.
                </p>

                <div class="caixa">

                    <strong>Ideia principal:</strong>

                    <p>
                        Uma fração representa uma divisão ou uma parte
                        de um inteiro.
                    </p>

                    <div class="fracao-grande">
                        3
                        <div class="linha"></div>
                        4
                    </div>

                    <p>
                        A fração 3/4 significa três partes de um total
                        dividido em quatro partes iguais.
                    </p>

                </div>


                <h2>O que é uma fração?</h2>

                <p>
                    Uma fração é formada por dois números separados por
                    uma linha horizontal.
                </p>

                <div class="fracao-grande">
                    5
                    <div class="linha"></div>
                    8
                </div>

                <p>
                    O número de cima é chamado de <strong>numerador</strong>.
                </p>

                <p>
                    O número de baixo é chamado de <strong>denominador</strong>.
                </p>

                <table class="tabela">

                    <tr>
                        <th>Parte</th>
                        <th>Nome</th>
                        <th>Função</th>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Numerador</td>
                        <td>Indica quantas partes estamos considerando.</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Denominador</td>
                        <td>Indica em quantas partes iguais o todo foi dividido.</td>
                    </tr>

                </table>


                <h2>Entendendo uma fração na prática</h2>

                <p>
                    Imagine uma pizza dividida em 8 pedaços iguais.
                    Se você comer 3 desses pedaços, podemos representar
                    a quantidade comida pela fração 3/8.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Pizza inteira = 8 pedaços
                    </p>

                    <p>
                        Pedaços comidos = 3
                    </p>

                    <p>
                        Fração comida = <strong>3/8</strong>
                    </p>

                    <p>
                        Pedaços restantes = 5
                    </p>

                    <p>
                        Fração restante = <strong>5/8</strong>
                    </p>

                </div>


                <h2>Tipos de frações</h2>

                <h3>Fração própria</h3>

                <p>
                    Uma fração própria possui o numerador menor que o
                    denominador.
                </p>

                <div class="fracao-grande">
                    3
                    <div class="linha"></div>
                    7
                </div>

                <p>
                    Nesse caso, a fração representa uma quantidade
                    menor que 1.
                </p>


                <h3>Fração imprópria</h3>

                <p>
                    Uma fração imprópria possui o numerador maior ou igual
                    ao denominador.
                </p>

                <div class="fracao-grande">
                    9
                    <div class="linha"></div>
                    4
                </div>

                <p>
                    Como 9 é maior que 4, essa fração representa uma
                    quantidade maior que 1.
                </p>


                <h3>Fração aparente</h3>

                <p>
                    É uma fração em que o numerador é divisível pelo
                    denominador e o resultado é um número inteiro.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        12/4 = 3
                    </p>

                    <p>
                        Portanto, 12/4 é uma fração aparente.
                    </p>

                </div>


                <h2>Frações equivalentes</h2>

                <p>
                    Frações equivalentes são frações diferentes na aparência,
                    mas que representam exatamente a mesma quantidade.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        1/2 = 2/4 = 3/6 = 4/8
                    </p>

                    <p>
                        Todas essas frações representam metade de um inteiro.
                    </p>

                </div>

                <p>
                    Para encontrar uma fração equivalente, podemos multiplicar
                    o numerador e o denominador pelo mesmo número.
                </p>

                <div class="passo">

                    <strong>1/2 × 2/2 = 2/4</strong>

                </div>

                <div class="passo">

                    <strong>1/2 × 3/3 = 3/6</strong>

                </div>

                <div class="passo">

                    <strong>1/2 × 4/4 = 4/8</strong>

                </div>


                <h2>Simplificação de frações</h2>

                <p>
                    Simplificar uma fração significa encontrar uma fração
                    equivalente com números menores.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Vamos simplificar 12/18.
                    </p>

                    <p>
                        Podemos dividir o numerador e o denominador por 6:
                    </p>

                    <p>
                        12 ÷ 6 = 2
                    </p>

                    <p>
                        18 ÷ 6 = 3
                    </p>

                    <p>
                        Portanto:
                    </p>

                    <div class="fracao-grande">
                        12/18 = 2/3
                    </div>

                </div>

                <div class="caixa">

                    <strong>Dica:</strong>

                    <p>
                        Para simplificar uma fração, procure um número que
                        consiga dividir tanto o numerador quanto o denominador.
                    </p>

                </div>


                <h2>Máximo Divisor Comum — MDC</h2>

                <p>
                    O MDC é muito útil para simplificar frações.
                    Ele representa o maior número que divide dois ou
                    mais números ao mesmo tempo.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Vamos encontrar o MDC de 12 e 18.
                    </p>

                    <p>
                        Divisores de 12:
                        1, 2, 3, 4, 6 e 12.
                    </p>

                    <p>
                        Divisores de 18:
                        1, 2, 3, 6, 9 e 18.
                    </p>

                    <p>
                        O maior divisor comum é 6.
                    </p>

                    <p>
                        Portanto:
                        <strong>MDC(12,18) = 6</strong>
                    </p>

                </div>


                <h2>Comparação de frações</h2>

                <p>
                    Comparar frações significa descobrir qual delas é
                    maior, menor ou se elas são iguais.
                </p>

                <h3>Mesmo denominador</h3>

                <p>
                    Quando as frações possuem o mesmo denominador,
                    basta comparar os numeradores.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        3/8 e 5/8
                    </p>

                    <p>
                        Como os denominadores são iguais, comparamos
                        3 e 5.
                    </p>

                    <p>
                        Portanto:
                        <strong>5/8 &gt; 3/8</strong>
                    </p>

                </div>


                <h3>Mesmo numerador</h3>

                <p>
                    Quando duas frações possuem o mesmo numerador,
                    a fração com o menor denominador é maior.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        3/4 e 3/8
                    </p>

                    <p>
                        Dividir um inteiro em 4 partes gera partes maiores
                        do que dividir o mesmo inteiro em 8 partes.
                    </p>

                    <p>
                        Portanto:
                        <strong>3/4 &gt; 3/8</strong>
                    </p>

                </div>


                <h2>Adição de frações</h2>

                <h3>Denominadores iguais</h3>

                <p>
                    Quando os denominadores são iguais, somamos apenas
                    os numeradores e mantemos o denominador.
                </p>

                <div class="formula">

                    2/7 + 3/7 = 5/7

                </div>

                <div class="exemplo">

                    <strong>Passo a passo:</strong>

                    <div class="passo">
                        2 + 3 = 5
                    </div>

                    <div class="passo">
                        O denominador continua sendo 7.
                    </div>

                    <div class="passo">
                        Resultado = <strong>5/7</strong>
                    </div>

                </div>


                <h3>Denominadores diferentes</h3>

                <p>
                    Quando os denominadores são diferentes, precisamos
                    encontrar um denominador comum.
                </p>

                <p>
                    Uma das maneiras mais utilizadas é encontrar o
                    <strong>MMC — Mínimo Múltiplo Comum</strong>.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        1/2 + 1/3
                    </p>

                    <p>
                        O MMC de 2 e 3 é 6.
                    </p>

                    <p>
                        Transformamos as frações:
                    </p>

                    <p>
                        1/2 = 3/6
                    </p>

                    <p>
                        1/3 = 2/6
                    </p>

                    <p>
                        Agora podemos somar:
                    </p>

                    <div class="formula">

                        3/6 + 2/6 = 5/6

                    </div>

                </div>


                <h2>Subtração de frações</h2>

                <p>
                    A subtração funciona de maneira parecida com a adição.
                </p>

                <p>
                    Se os denominadores forem iguais, subtraímos os
                    numeradores e mantemos o denominador.
                </p>

                <div class="formula">

                    6/9 - 2/9 = 4/9

                </div>

                <p>
                    Quando os denominadores forem diferentes, devemos
                    encontrar um denominador comum.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        3/4 - 1/2
                    </p>

                    <p>
                        O MMC de 4 e 2 é 4.
                    </p>

                    <p>
                        1/2 = 2/4
                    </p>

                    <p>
                        Então:
                    </p>

                    <div class="formula">

                        3/4 - 2/4 = 1/4

                    </div>

                </div>


                <h2>Multiplicação de frações</h2>

                <p>
                    Na multiplicação de frações, multiplicamos numerador
                    por numerador e denominador por denominador.
                </p>

                <div class="formula">

                    2/3 × 4/5 = 8/15

                </div>

                <div class="exemplo">

                    <strong>Passo a passo:</strong>

                    <p>
                        Numeradores:
                    </p>

                    <p>
                        2 × 4 = 8
                    </p>

                    <p>
                        Denominadores:
                    </p>

                    <p>
                        3 × 5 = 15
                    </p>

                    <p>
                        Resultado:
                        <strong>8/15</strong>
                    </p>

                </div>


                <h2>Divisão de frações</h2>

                <p>
                    Para dividir duas frações, mantemos a primeira fração
                    e multiplicamos pelo inverso da segunda.
                </p>

                <div class="formula">

                    2/3 ÷ 4/5
                    =
                    2/3 × 5/4
                    =
                    10/12
                    =
                    5/6

                </div>

                <div class="caixa">

                    <strong>Regra importante:</strong>

                    <p>
                        Na divisão de frações, podemos pensar:
                        mantém a primeira, troca a divisão por multiplicação
                        e inverte a segunda fração.
                    </p>

                </div>


                <h2>Frações e números inteiros</h2>

                <p>
                    Todo número inteiro pode ser representado como uma fração.
                </p>

                <div class="exemplo">

                    <p>
                        5 = 5/1
                    </p>

                    <p>
                        8 = 8/1
                    </p>

                    <p>
                        20 = 20/1
                    </p>

                </div>

                <p>
                    Isso é muito útil quando precisamos realizar operações
                    envolvendo números inteiros e frações.
                </p>

                <div class="formula">

                    3 + 1/2
                    =
                    3/1 + 1/2
                    =
                    6/2 + 1/2
                    =
                    7/2

                </div>


                <h2>Número misto</h2>

                <p>
                    Um número misto é formado por uma parte inteira e
                    uma parte fracionária.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        2 1/3
                    </p>

                    <p>
                        Isso significa:
                    </p>

                    <p>
                        2 inteiros + 1/3
                    </p>

                </div>


                <h2>Transformando número misto em fração imprópria</h2>

                <p>
                    Para transformar um número misto em fração imprópria,
                    multiplicamos o número inteiro pelo denominador,
                    somamos o numerador e mantemos o denominador.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        2 1/3
                    </p>

                    <div class="passo">
                        2 × 3 = 6
                    </div>

                    <div class="passo">
                        6 + 1 = 7
                    </div>

                    <div class="passo">
                        Resultado = <strong>7/3</strong>
                    </div>

                </div>


                <h2>Transformando fração imprópria em número misto</h2>

                <p>
                    Para fazer o contrário, dividimos o numerador pelo
                    denominador.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        11/4
                    </p>

                    <p>
                        11 ÷ 4 = 2, com resto 3.
                    </p>

                    <p>
                        Portanto:
                    </p>

                    <div class="formula">

                        11/4 = 2 3/4

                    </div>

                </div>


                <h2>Frações decimais</h2>

                <p>
                    Frações com denominadores 10, 100, 1.000 e assim por
                    diante podem ser facilmente transformadas em números
                    decimais.
                </p>

                <table class="tabela">

                    <tr>
                        <th>Fração</th>
                        <th>Número decimal</th>
                    </tr>

                    <tr>
                        <td>1/10</td>
                        <td>0,1</td>
                    </tr>

                    <tr>
                        <td>25/100</td>
                        <td>0,25</td>
                    </tr>

                    <tr>
                        <td>75/100</td>
                        <td>0,75</td>
                    </tr>

                    <tr>
                        <td>125/1000</td>
                        <td>0,125</td>
                    </tr>

                </table>


                <h2>Frações e porcentagens</h2>

                <p>
                    Frações também podem ser representadas em porcentagem.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        1/2 representa metade de um inteiro.
                    </p>

                    <p>
                        Em porcentagem:
                    </p>

                    <div class="formula">

                        1/2 = 0,5 = 50%

                    </div>

                </div>

                <table class="tabela">

                    <tr>
                        <th>Fração</th>
                        <th>Decimal</th>
                        <th>Porcentagem</th>
                    </tr>

                    <tr>
                        <td>1/2</td>
                        <td>0,5</td>
                        <td>50%</td>
                    </tr>

                    <tr>
                        <td>1/4</td>
                        <td>0,25</td>
                        <td>25%</td>
                    </tr>

                    <tr>
                        <td>3/4</td>
                        <td>0,75</td>
                        <td>75%</td>
                    </tr>

                    <tr>
                        <td>1/10</td>
                        <td>0,1</td>
                        <td>10%</td>
                    </tr>

                </table>


                <h2>Frações no cotidiano</h2>

                <p>
                    Frações não aparecem apenas nas aulas de Matemática.
                    Elas são utilizadas em diversas situações reais.
                </p>

                <ul class="lista">

                    <li>
                        Receitas culinárias usam 1/2 xícara, 1/4 de colher etc.
                    </li>

                    <li>
                        Horários podem ser expressos em frações de uma hora.
                    </li>

                    <li>
                        Descontos e porcentagens podem ser representados
                        por frações.
                    </li>

                    <li>
                        Distâncias podem ser expressas em partes de uma unidade.
                    </li>

                    <li>
                        Divisões de objetos ou quantidades utilizam frações.
                    </li>

                </ul>


                <h2>Exemplo completo</h2>

                <div class="exemplo">

                    <strong>Problema:</strong>

                    <p>
                        João tinha uma barra de chocolate dividida em
                        12 pedaços. Ele comeu 5 pedaços e depois seu irmão
                        comeu 3 pedaços. Qual fração da barra foi comida?
                    </p>

                    <div class="passo">

                        <strong>Passo 1:</strong>

                        João comeu 5/12.

                    </div>

                    <div class="passo">

                        <strong>Passo 2:</strong>

                        O irmão comeu 3/12.

                    </div>

                    <div class="passo">

                        <strong>Passo 3:</strong>

                        Somamos:

                        5/12 + 3/12 = 8/12

                    </div>

                    <div class="passo">

                        <strong>Passo 4:</strong>

                        Simplificamos:

                        8/12 = 2/3

                    </div>

                    <p>
                        Portanto, juntos eles comeram
                        <strong>2/3 da barra de chocolate</strong>.
                    </p>

                </div>


                <h2>Erros comuns com frações</h2>

                <p>
                    Existem alguns erros que aparecem bastante quando
                    estamos aprendendo frações.
                </p>

                <div class="caixa">

                    <strong>Erro 1 — Somar os denominadores</strong>

                    <p>
                        Não devemos fazer:
                    </p>

                    <p>
                        1/3 + 1/3 = 2/6
                    </p>

                    <p>
                        O correto é:
                    </p>

                    <p>
                        1/3 + 1/3 = 2/3
                    </p>

                </div>

                <div class="caixa">

                    <strong>Erro 2 — Multiplicar errado</strong>

                    <p>
                        Na multiplicação, multiplicamos numerador com
                        numerador e denominador com denominador.
                    </p>

                    <p>
                        2/3 × 4/5 = 8/15
                    </p>

                </div>

                <div class="caixa">

                    <strong>Erro 3 — Esquecer de simplificar</strong>

                    <p>
                        Sempre verifique se o resultado pode ser simplificado.
                    </p>

                    <p>
                        6/12 pode ser simplificado para 1/2.
                    </p>

                </div>


                <div class="dicas">

                    <h3>💡 Dicas para aprender frações</h3>

                    <ul>

                        <li>
                            Decore o significado de numerador e denominador.
                        </li>

                        <li>
                            Sempre observe se os denominadores são iguais
                            ou diferentes.
                        </li>

                        <li>
                            Em adição e subtração, procure um denominador comum
                            quando necessário.
                        </li>

                        <li>
                            Na multiplicação, multiplique diretamente.
                        </li>

                        <li>
                            Na divisão, inverta a segunda fração e multiplique.
                        </li>

                        <li>
                            Sempre veja se é possível simplificar o resultado.
                        </li>

                        <li>
                            Faça desenhos ou imagine objetos divididos
                            em partes para entender melhor.
                        </li>

                    </ul>

                </div>


                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Na fração 7/9, qual é o numerador e qual é
                            o denominador?
                        </li>

                        <li>
                            Classifique a fração 3/8 como própria,
                            imprópria ou aparente.
                        </li>

                        <li>
                            Encontre uma fração equivalente a 2/5.
                        </li>

                        <li>
                            Simplifique a fração 18/24.
                        </li>

                        <li>
                            Compare as frações 3/7 e 5/7.
                            Qual é maior?
                        </li>

                        <li>
                            Resolva:
                            2/5 + 1/5.
                        </li>

                        <li>
                            Resolva:
                            7/8 - 3/8.
                        </li>

                        <li>
                            Resolva:
                            2/3 + 1/4.
                        </li>

                        <li>
                            Resolva:
                            3/5 × 2/7.
                        </li>

                        <li>
                            Resolva:
                            4/5 ÷ 2/3.
                        </li>

                        <li>
                            Transforme 2 3/4 em uma fração imprópria.
                        </li>

                        <li>
                            Transforme 13/5 em número misto.
                        </li>

                        <li>
                            Transforme 3/4 em porcentagem.
                        </li>

                        <li>
                            Uma pizza foi dividida em 8 partes iguais.
                            Uma pessoa comeu 3 pedaços. Qual fração da pizza
                            foi consumida?
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
                        <td>Numerador</td>
                        <td>Indica quantas partes estão sendo consideradas.</td>
                    </tr>

                    <tr>
                        <td>Denominador</td>
                        <td>Indica em quantas partes iguais o inteiro foi dividido.</td>
                    </tr>

                    <tr>
                        <td>Fração própria</td>
                        <td>Numerador menor que o denominador.</td>
                    </tr>

                    <tr>
                        <td>Fração imprópria</td>
                        <td>Numerador maior ou igual ao denominador.</td>
                    </tr>

                    <tr>
                        <td>Fração equivalente</td>
                        <td>Representa a mesma quantidade.</td>
                    </tr>

                    <tr>
                        <td>Simplificação</td>
                        <td>Reduz a fração para uma forma equivalente mais simples.</td>
                    </tr>

                    <tr>
                        <td>Adição</td>
                        <td>Em denominadores diferentes, encontre um denominador comum.</td>
                    </tr>

                    <tr>
                        <td>Subtração</td>
                        <td>Segue a mesma lógica da adição.</td>
                    </tr>

                    <tr>
                        <td>Multiplicação</td>
                        <td>Multiplique numerador com numerador e denominador com denominador.</td>
                    </tr>

                    <tr>
                        <td>Divisão</td>
                        <td>Inverta a segunda fração e multiplique.</td>
                    </tr>

                </table>


                <h2>Conclusão</h2>

                <p>
                    As frações são fundamentais para o estudo da Matemática.
                    Elas permitem representar partes de um inteiro, realizar
                    divisões e trabalhar com quantidades que não são números
                    inteiros.
                </p>

                <p>
                    Para dominar o assunto, é importante entender primeiro
                    o significado do numerador e do denominador. Depois,
                    podemos avançar para frações equivalentes, simplificação,
                    comparação e operações.
                </p>

                <p>
                    Lembre-se: em adições e subtrações, precisamos prestar
                    atenção aos denominadores. Já nas multiplicações,
                    multiplicamos diretamente, e nas divisões utilizamos
                    o inverso da segunda fração.
                </p>

                <p>
                    Com bastante prática e atenção aos passos, frações
                    deixam de parecer difíceis e passam a ser apenas mais
                    uma ferramenta importante da Matemática.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação, Matemática e conhecimento

    </footer>

</body>

</html>