<?php
$categoria = "MATEMÁTICA";

$titulo = "Equações em Geometria: aprendendo a resolver problemas passo a passo";

$subtitulo = "Aprenda como utilizar equações para descobrir medidas desconhecidas em figuras geométricas, calculando lados, perímetros, áreas, ângulos e outras grandezas.";

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

        .figura {
            background: #eef6ff;
            border: 2px solid #1769aa;
            padding: 25px;
            margin: 25px 0;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
            color: #0b1f3a;
        }

        .quadrado {
            width: 150px;
            height: 150px;
            border: 4px solid #1769aa;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1769aa;
        }

        .retangulo {
            width: 240px;
            height: 130px;
            border: 4px solid #1769aa;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1769aa;
        }

        .triangulo {
            width: 0;
            height: 0;
            border-left: 100px solid transparent;
            border-right: 100px solid transparent;
            border-bottom: 160px solid #1769aa;
            margin: 20px auto;
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
                    EQUAÇÕES<br>
                    <span>& GEOMETRIA</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    A geometria é a área da Matemática responsável pelo estudo
                    das formas, tamanhos, posições e propriedades das figuras.
                    Quando uma medida é desconhecida, podemos utilizar
                    equações para descobrir seu valor.
                </p>

                <p>
                    Por exemplo, imagine um retângulo cujo comprimento seja
                    representado por x. Se soubermos o perímetro ou a área
                    dessa figura, podemos montar uma equação e descobrir
                    exatamente quanto vale x.
                </p>

                <div class="caixa">

                    <strong>Ideia principal:</strong>

                    <p>
                        Em problemas de geometria, muitas vezes existe uma
                        medida desconhecida. Representamos essa medida por
                        uma letra, normalmente x, e usamos as informações
                        fornecidas para montar uma equação.
                    </p>

                    <div class="formula">
                        informação da figura → equação → resolução → resposta
                    </div>

                </div>


                <h2>O que é uma equação?</h2>

                <p>
                    Uma equação é uma igualdade que possui uma ou mais
                    incógnitas. A incógnita é um valor que ainda não conhecemos.
                </p>

                <p>
                    Normalmente utilizamos letras como x, y ou z para
                    representar esses valores.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <div class="formula">
                        x + 5 = 12
                    </div>

                    <p>
                        Para descobrir x, precisamos deixar a incógnita
                        sozinha.
                    </p>

                    <div class="passo">
                        x + 5 = 12
                    </div>

                    <div class="passo">
                        x = 12 - 5
                    </div>

                    <div class="passo">
                        <strong>x = 7</strong>
                    </div>

                </div>


                <h2>Equações aplicadas à geometria</h2>

                <p>
                    Na geometria, as equações aparecem quando precisamos
                    descobrir uma medida desconhecida de uma figura.
                </p>

                <p>
                    Podemos encontrar lados, alturas, bases, perímetros,
                    áreas, diagonais e ângulos utilizando esse método.
                </p>

                <div class="formula">
                    MEDIDAS CONHECIDAS + INCÓGNITA = EQUAÇÃO
                </div>


                <h2>Perímetro</h2>

                <p>
                    O perímetro corresponde à soma de todos os lados de uma
                    figura.
                </p>

                <div class="formula">
                    Perímetro = soma dos lados
                </div>

                <p>
                    Quando existe uma medida desconhecida, podemos utilizar
                    o perímetro para criar uma equação.
                </p>


                <h3>Exemplo com um quadrado</h3>

                <div class="figura">

                    <div class="quadrado">
                        x
                    </div>

                    <p>
                        Todos os lados possuem medida x.
                    </p>

                </div>

                <p>
                    Como um quadrado possui quatro lados iguais:
                </p>

                <div class="formula">
                    P = x + x + x + x
                </div>

                <p>
                    Podemos simplificar:
                </p>

                <div class="formula">
                    P = 4x
                </div>

                <p>
                    Se o perímetro for 28 cm:
                </p>

                <div class="passo">
                    4x = 28
                </div>

                <div class="passo">
                    x = 28 ÷ 4
                </div>

                <div class="passo">
                    <strong>x = 7 cm</strong>
                </div>


                <h2>Área do quadrado</h2>

                <p>
                    A área do quadrado é calculada multiplicando o lado
                    pelo próprio lado.
                </p>

                <div class="formula">
                    A = lado × lado
                </div>

                <div class="formula">
                    A = x²
                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Um quadrado possui área igual a 64 cm².
                        Qual é o tamanho do lado?
                    </p>

                    <div class="passo">
                        x² = 64
                    </div>

                    <div class="passo">
                        x = √64
                    </div>

                    <div class="passo">
                        <strong>x = 8 cm</strong>
                    </div>

                </div>


                <h2>Retângulos</h2>

                <p>
                    Um retângulo possui dois lados maiores, chamados de
                    comprimento, e dois lados menores, chamados de largura.
                </p>

                <div class="figura">

                    <div class="retangulo">
                        comprimento = x
                    </div>

                </div>

                <h3>Perímetro do retângulo</h3>

                <div class="formula">
                    P = 2 × comprimento + 2 × largura
                </div>

                <p>
                    Imagine um retângulo com comprimento x e largura 5 cm.
                    Se o perímetro for 26 cm:
                </p>

                <div class="formula">
                    2x + 2(5) = 26
                </div>

                <div class="passo">
                    2x + 10 = 26
                </div>

                <div class="passo">
                    2x = 26 - 10
                </div>

                <div class="passo">
                    2x = 16
                </div>

                <div class="passo">
                    x = 16 ÷ 2
                </div>

                <div class="passo">
                    <strong>x = 8 cm</strong>
                </div>


                <h3>Área do retângulo</h3>

                <div class="formula">
                    A = comprimento × largura
                </div>

                <p>
                    Se o comprimento for x e a largura for 4 cm,
                    podemos escrever:
                </p>

                <div class="formula">
                    A = 4x
                </div>

                <p>
                    Se a área for 36 cm²:
                </p>

                <div class="passo">
                    4x = 36
                </div>

                <div class="passo">
                    x = 36 ÷ 4
                </div>

                <div class="passo">
                    <strong>x = 9 cm</strong>
                </div>


                <h2>Triângulos</h2>

                <p>
                    Um triângulo possui três lados e três ângulos.
                    As equações podem ser utilizadas para encontrar
                    lados ou ângulos desconhecidos.
                </p>

                <div class="figura">

                    <div class="triangulo"></div>

                    <p>
                        Um triângulo possui 3 lados.
                    </p>

                </div>

                <h3>Perímetro do triângulo</h3>

                <p>
                    Para encontrar o perímetro, somamos os três lados.
                </p>

                <div class="formula">
                    P = a + b + c
                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Um triângulo possui lados x, 7 cm e 9 cm.
                        Seu perímetro é 30 cm.
                    </p>

                    <div class="formula">
                        x + 7 + 9 = 30
                    </div>

                    <div class="passo">
                        x + 16 = 30
                    </div>

                    <div class="passo">
                        x = 30 - 16
                    </div>

                    <div class="passo">
                        <strong>x = 14 cm</strong>
                    </div>

                </div>


                <h2>Área do triângulo</h2>

                <p>
                    A área de um triângulo é calculada multiplicando
                    a base pela altura e dividindo o resultado por 2.
                </p>

                <div class="formula">
                    A = (base × altura) ÷ 2
                </div>

                <p>
                    Se a base for x e a altura for 8 cm:
                </p>

                <div class="formula">
                    A = (x × 8) ÷ 2
                </div>

                <div class="formula">
                    A = 4x
                </div>

                <p>
                    Se a área for 40 cm²:
                </p>

                <div class="passo">
                    4x = 40
                </div>

                <div class="passo">
                    x = 10
                </div>

                <div class="passo">
                    <strong>A base mede 10 cm.</strong>
                </div>


                <h2>Soma dos ângulos internos</h2>

                <p>
                    A soma dos ângulos internos de qualquer triângulo
                    é sempre igual a 180°.
                </p>

                <div class="formula">
                    A + B + C = 180°
                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Um triângulo possui ângulos x, 60° e 40°.
                    </p>

                    <div class="formula">
                        x + 60 + 40 = 180
                    </div>

                    <div class="passo">
                        x + 100 = 180
                    </div>

                    <div class="passo">
                        x = 80°
                    </div>

                    <div class="passo">
                        <strong>O ângulo desconhecido mede 80°.</strong>
                    </div>

                </div>


                <h2>Ângulos em quadriláteros</h2>

                <p>
                    A soma dos ângulos internos de um quadrilátero
                    é igual a 360°.
                </p>

                <div class="formula">
                    A + B + C + D = 360°
                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Um quadrilátero possui ângulos de 90°, 80°,
                        100° e x.
                    </p>

                    <div class="formula">
                        90 + 80 + 100 + x = 360
                    </div>

                    <div class="passo">
                        270 + x = 360
                    </div>

                    <div class="passo">
                        x = 90°
                    </div>

                </div>


                <h2>Teorema de Pitágoras</h2>

                <p>
                    O Teorema de Pitágoras é utilizado em triângulos
                    retângulos, ou seja, triângulos que possuem um
                    ângulo de 90°.
                </p>

                <div class="formula">
                    a² = b² + c²
                </div>

                <p>
                    A letra a normalmente representa a hipotenusa,
                    que é o maior lado do triângulo e fica oposto ao
                    ângulo de 90°.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Um triângulo retângulo possui catetos de 6 cm
                        e 8 cm. Qual é a hipotenusa?
                    </p>

                    <div class="passo">
                        a² = 6² + 8²
                    </div>

                    <div class="passo">
                        a² = 36 + 64
                    </div>

                    <div class="passo">
                        a² = 100
                    </div>

                    <div class="passo">
                        a = √100
                    </div>

                    <div class="passo">
                        <strong>a = 10 cm</strong>
                    </div>

                </div>


                <h2>Circunferência</h2>

                <p>
                    Em uma circunferência, o raio é a distância do centro
                    até qualquer ponto da borda.
                </p>

                <p>
                    O diâmetro corresponde a duas vezes o raio.
                </p>

                <div class="formula">
                    d = 2r
                </div>

                <h3>Comprimento da circunferência</h3>

                <div class="formula">
                    C = 2πr
                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Uma circunferência possui raio x e comprimento
                        20π cm.
                    </p>

                    <div class="formula">
                        2πx = 20π
                    </div>

                    <div class="passo">
                        x = 20π ÷ 2π
                    </div>

                    <div class="passo">
                        <strong>x = 10 cm</strong>
                    </div>

                </div>


                <h2>Área do círculo</h2>

                <p>
                    A área de um círculo pode ser calculada utilizando
                    a fórmula:
                </p>

                <div class="formula">
                    A = πr²
                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        Um círculo possui área igual a 25π cm².
                        Qual é o raio?
                    </p>

                    <div class="passo">
                        πr² = 25π
                    </div>

                    <div class="passo">
                        r² = 25
                    </div>

                    <div class="passo">
                        r = √25
                    </div>

                    <div class="passo">
                        <strong>r = 5 cm</strong>
                    </div>

                </div>


                <h2>Equações com duas etapas</h2>

                <p>
                    Alguns problemas de geometria apresentam equações
                    que precisam de mais de uma etapa para serem resolvidas.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        O comprimento de um retângulo é representado por
                        2x + 3 e a largura é 5 cm. O perímetro é 36 cm.
                        Descubra x.
                    </p>

                    <div class="formula">
                        2(2x + 3) + 2(5) = 36
                    </div>

                    <div class="passo">
                        4x + 6 + 10 = 36
                    </div>

                    <div class="passo">
                        4x + 16 = 36
                    </div>

                    <div class="passo">
                        4x = 20
                    </div>

                    <div class="passo">
                        x = 5
                    </div>

                    <div class="passo">
                        <strong>Resposta: x = 5</strong>
                    </div>

                </div>


                <h2>Como resolver problemas de geometria com equações</h2>

                <p>
                    Existe uma estratégia que pode ser utilizada praticamente
                    em qualquer problema desse tipo.
                </p>

                <div class="passo">

                    <strong>1º passo — Identifique a incógnita.</strong>

                    <p>
                        Procure descobrir qual medida o problema está
                        pedindo. Represente essa medida por x.
                    </p>

                </div>

                <div class="passo">

                    <strong>2º passo — Encontre a fórmula.</strong>

                    <p>
                        Veja se o problema envolve perímetro, área,
                        ângulo, Pitágoras ou outra relação geométrica.
                    </p>

                </div>

                <div class="passo">

                    <strong>3º passo — Monte a equação.</strong>

                    <p>
                        Substitua na fórmula as informações fornecidas
                        pelo problema.
                    </p>

                </div>

                <div class="passo">

                    <strong>4º passo — Resolva a equação.</strong>

                    <p>
                        Faça as operações necessárias para descobrir
                        o valor de x.
                    </p>

                </div>

                <div class="passo">

                    <strong>5º passo — Confira a resposta.</strong>

                    <p>
                        Substitua o valor encontrado na fórmula original
                        para verificar se está correto.
                    </p>

                </div>


                <h2>Principais fórmulas</h2>

                <table class="tabela">

                    <tr>
                        <th>Figura / conceito</th>
                        <th>Fórmula</th>
                    </tr>

                    <tr>
                        <td>Perímetro</td>
                        <td>P = soma dos lados</td>
                    </tr>

                    <tr>
                        <td>Quadrado — área</td>
                        <td>A = l²</td>
                    </tr>

                    <tr>
                        <td>Retângulo — área</td>
                        <td>A = b × h</td>
                    </tr>

                    <tr>
                        <td>Triângulo — área</td>
                        <td>A = (b × h) ÷ 2</td>
                    </tr>

                    <tr>
                        <td>Triângulo — ângulos</td>
                        <td>A + B + C = 180°</td>
                    </tr>

                    <tr>
                        <td>Quadrilátero — ângulos</td>
                        <td>A + B + C + D = 360°</td>
                    </tr>

                    <tr>
                        <td>Pitágoras</td>
                        <td>a² = b² + c²</td>
                    </tr>

                    <tr>
                        <td>Circunferência</td>
                        <td>C = 2πr</td>
                    </tr>

                    <tr>
                        <td>Círculo — área</td>
                        <td>A = πr²</td>
                    </tr>

                </table>


                <div class="dicas">

                    <h3>💡 Dicas para não errar</h3>

                    <ul>

                        <li>
                            Leia o problema com atenção antes de fazer contas.
                        </li>

                        <li>
                            Descubra primeiro qual é a medida desconhecida.
                        </li>

                        <li>
                            Use x para representar a incógnita.
                        </li>

                        <li>
                            Não confunda perímetro com área.
                        </li>

                        <li>
                            Perímetro é medido em unidades como cm e m.
                        </li>

                        <li>
                            Área é medida em unidades quadradas, como cm² e m².
                        </li>

                        <li>
                            Em triângulos, lembre-se de que a soma dos
                            ângulos internos é 180°.
                        </li>

                        <li>
                            Em quadriláteros, a soma dos ângulos internos
                            é 360°.
                        </li>

                        <li>
                            No Teorema de Pitágoras, a hipotenusa é o
                            maior lado do triângulo retângulo.
                        </li>

                        <li>
                            Depois de encontrar x, confira se a resposta
                            faz sentido para a figura.
                        </li>

                    </ul>

                </div>


                <h2>Exemplo final completo</h2>

                <div class="exemplo">

                    <strong>Problema:</strong>

                    <p>
                        Um terreno retangular possui largura de 6 metros
                        e comprimento igual a x metros. Sabendo que o
                        perímetro do terreno é 32 metros, descubra o
                        comprimento.
                    </p>

                    <div class="passo">

                        <strong>Passo 1:</strong>

                        Fórmula do perímetro:

                        <br>

                        P = 2c + 2l

                    </div>

                    <div class="passo">

                        <strong>Passo 2:</strong>

                        Substituímos os valores:

                        <br>

                        32 = 2x + 2(6)

                    </div>

                    <div class="passo">

                        <strong>Passo 3:</strong>

                        32 = 2x + 12

                    </div>

                    <div class="passo">

                        <strong>Passo 4:</strong>

                        32 - 12 = 2x

                    </div>

                    <div class="passo">

                        <strong>Passo 5:</strong>

                        20 = 2x

                    </div>

                    <div class="passo">

                        <strong>Passo 6:</strong>

                        x = 20 ÷ 2

                    </div>

                    <div class="passo">

                        <strong>Resposta: x = 10 metros.</strong>

                    </div>

                    <p>
                        Portanto, o comprimento do terreno é de
                        <strong>10 metros</strong>.
                    </p>

                </div>


                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Um quadrado possui perímetro de 36 cm.
                            Qual é a medida de cada lado?
                        </li>

                        <li>
                            Um quadrado possui área de 81 cm².
                            Qual é a medida do lado?
                        </li>

                        <li>
                            Um retângulo possui largura de 5 cm e
                            perímetro de 30 cm. Qual é o comprimento?
                        </li>

                        <li>
                            Um retângulo possui comprimento x e largura
                            4 cm. Sabendo que sua área é 32 cm²,
                            determine x.
                        </li>

                        <li>
                            Um triângulo possui lados x, 8 cm e 10 cm.
                            Seu perímetro é 30 cm. Determine x.
                        </li>

                        <li>
                            Um triângulo possui ângulos de 50°, 70° e x.
                            Qual é o valor de x?
                        </li>

                        <li>
                            Um quadrilátero possui ângulos de 80°, 90°,
                            100° e x. Determine x.
                        </li>

                        <li>
                            Um triângulo retângulo possui catetos de
                            5 cm e 12 cm. Qual é a hipotenusa?
                        </li>

                        <li>
                            Uma circunferência possui comprimento
                            14π cm. Qual é o raio?
                        </li>

                        <li>
                            Um círculo possui área igual a 49π cm².
                            Qual é o raio?
                        </li>

                        <li>
                            Um retângulo possui comprimento 2x + 1,
                            largura 5 cm e perímetro 32 cm.
                            Determine x.
                        </li>

                        <li>
                            Um terreno retangular possui comprimento x
                            e largura 8 m. Seu perímetro é 40 m.
                            Qual é o comprimento?
                        </li>

                    </ol>

                </div>


                <h2>Conclusão</h2>

                <p>
                    As equações são uma ferramenta extremamente importante
                    para resolver problemas de geometria. Elas permitem
                    transformar informações sobre uma figura em uma
                    expressão matemática que pode ser resolvida.
                </p>

                <p>
                    O segredo é identificar a medida desconhecida, escolher
                    a fórmula correta, substituir os valores e resolver
                    a equação passo a passo.
                </p>

                <p>
                    Com prática, problemas que inicialmente parecem difíceis
                    podem ser resolvidos seguindo uma sequência simples:
                    <strong>identificar, montar, calcular e conferir.</strong>
                </p>

                <p>
                    Quanto mais exercícios você resolver, mais fácil será
                    reconhecer qual fórmula e qual estratégia devem ser
                    utilizadas em cada situação.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação, Matemática e conhecimento

    </footer>

</body>

</html>