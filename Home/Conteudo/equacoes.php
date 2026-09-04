<?php
$categoria = "MATEMÁTICA";

$titulo = "Equações: aprenda a resolver do básico ao avançado";

$subtitulo = "Entenda o que são equações, como encontrar o valor da incógnita e aprenda a resolver diferentes tipos de problemas matemáticos passo a passo.";

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
                    EQUAÇÕES<br>
                    <span>& MATEMÁTICA</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    As equações são uma das partes mais importantes da
                    Matemática. Elas aparecem em diversos assuntos e servem
                    para descobrir valores que ainda não conhecemos.
                    Para representar uma quantidade desconhecida,
                    normalmente utilizamos uma letra, como x.
                </p>

                <p>
                    Resolver uma equação significa encontrar o valor da
                    incógnita que torna a igualdade verdadeira. Parece
                    complicado no começo, mas existe uma lógica simples:
                    precisamos realizar operações de maneira organizada
                    até deixar a incógnita sozinha.
                </p>

                <div class="caixa">

                    <strong>💡 Ideia principal:</strong>

                    <p>
                        Uma equação funciona como uma balança. Os dois lados
                        precisam permanecer em equilíbrio. Tudo o que fazemos
                        de um lado também precisa ser feito do outro.
                    </p>

                    <div class="formula">
                        lado esquerdo = lado direito
                    </div>

                </div>


                <h2>O que é uma equação?</h2>

                <p>
                    Uma equação é uma sentença matemática que possui uma
                    igualdade e uma ou mais incógnitas.
                </p>

                <p>
                    Veja um exemplo simples:
                </p>

                <div class="formula">
                    x + 5 = 12
                </div>

                <p>
                    Nesse caso, x é a incógnita. Nosso objetivo é descobrir
                    qual número deve ocupar o lugar de x para que a igualdade
                    seja verdadeira.
                </p>

                <div class="exemplo">

                    <strong>Testando:</strong>

                    <p>
                        Se x = 7:
                    </p>

                    <div class="formula">
                        7 + 5 = 12
                    </div>

                    <p>
                        Como 7 + 5 realmente é igual a 12, descobrimos que
                        a solução é:
                    </p>

                    <div class="passo">
                        <strong>x = 7</strong>
                    </div>

                </div>


                <h2>Partes de uma equação</h2>

                <p>
                    Observe a equação:
                </p>

                <div class="formula">
                    3x + 5 = 20
                </div>

                <p>
                    O número 3 é chamado de coeficiente de x. A letra x
                    representa a incógnita. O número 5 é um termo constante,
                    e 20 está do outro lado da igualdade.
                </p>

                <table class="tabela">

                    <tr>
                        <th>Elemento</th>
                        <th>Exemplo</th>
                        <th>Função</th>
                    </tr>

                    <tr>
                        <td>Incógnita</td>
                        <td>x</td>
                        <td>Valor desconhecido</td>
                    </tr>

                    <tr>
                        <td>Coeficiente</td>
                        <td>3</td>
                        <td>Multiplica a incógnita</td>
                    </tr>

                    <tr>
                        <td>Constante</td>
                        <td>5</td>
                        <td>Número sem incógnita</td>
                    </tr>

                    <tr>
                        <td>Igualdade</td>
                        <td>=</td>
                        <td>Indica que os dois lados possuem o mesmo valor</td>
                    </tr>

                </table>


                <h2>Equações de primeiro grau</h2>

                <p>
                    Uma equação de primeiro grau é aquela em que a incógnita
                    aparece elevada à potência 1.
                </p>

                <div class="formula">
                    ax + b = 0
                </div>

                <p>
                    Nessa expressão, a e b são números e x é a incógnita.
                    O objetivo é descobrir o valor de x.
                </p>


                <h3>Exemplo 1 — Equação simples</h3>

                <div class="exemplo">

                    <strong>Resolva:</strong>

                    <div class="formula">
                        x + 8 = 15
                    </div>

                    <div class="passo">
                        <strong>Passo 1:</strong>
                        Queremos deixar o x sozinho.
                    </div>

                    <div class="passo">
                        <strong>Passo 2:</strong>
                        O +8 passa para o outro lado como -8.
                    </div>

                    <div class="formula">
                        x = 15 - 8
                    </div>

                    <div class="passo">
                        <strong>Resposta: x = 7</strong>
                    </div>

                </div>


                <h3>Exemplo 2 — Subtração</h3>

                <div class="exemplo">

                    <strong>Resolva:</strong>

                    <div class="formula">
                        x - 6 = 14
                    </div>

                    <p>
                        Para eliminar o -6, fazemos a operação inversa:
                        somamos 6.
                    </p>

                    <div class="formula">
                        x = 14 + 6
                    </div>

                    <div class="passo">
                        <strong>x = 20</strong>
                    </div>

                </div>


                <h3>Exemplo 3 — Multiplicação</h3>

                <div class="exemplo">

                    <strong>Resolva:</strong>

                    <div class="formula">
                        5x = 35
                    </div>

                    <p>
                        O 5 está multiplicando x. Para desfazer a
                        multiplicação, dividimos por 5.
                    </p>

                    <div class="formula">
                        x = 35 ÷ 5
                    </div>

                    <div class="passo">
                        <strong>x = 7</strong>
                    </div>

                </div>


                <h3>Exemplo 4 — Divisão</h3>

                <div class="exemplo">

                    <strong>Resolva:</strong>

                    <div class="formula">
                        x / 4 = 9
                    </div>

                    <p>
                        Para eliminar a divisão por 4, multiplicamos
                        os dois lados por 4.
                    </p>

                    <div class="formula">
                        x = 9 × 4
                    </div>

                    <div class="passo">
                        <strong>x = 36</strong>
                    </div>

                </div>


                <h2>Operações inversas</h2>

                <p>
                    Um dos maiores segredos para resolver equações é conhecer
                    as operações inversas.
                </p>

                <table class="tabela">

                    <tr>
                        <th>Operação</th>
                        <th>Operação inversa</th>
                    </tr>

                    <tr>
                        <td>Adição (+)</td>
                        <td>Subtração (-)</td>
                    </tr>

                    <tr>
                        <td>Subtração (-)</td>
                        <td>Adição (+)</td>
                    </tr>

                    <tr>
                        <td>Multiplicação (×)</td>
                        <td>Divisão (÷)</td>
                    </tr>

                    <tr>
                        <td>Divisão (÷)</td>
                        <td>Multiplicação (×)</td>
                    </tr>

                    <tr>
                        <td>Potenciação</td>
                        <td>Radiciação</td>
                    </tr>

                </table>


                <h2>Equações com vários termos</h2>

                <p>
                    Agora vamos aumentar um pouco a dificuldade.
                </p>

                <div class="exemplo">

                    <strong>Resolva:</strong>

                    <div class="formula">
                        3x + 5 = 20
                    </div>

                    <div class="passo">
                        <strong>Passo 1:</strong>
                        Subtraímos 5 dos dois lados.
                    </div>

                    <div class="formula">
                        3x = 20 - 5
                    </div>

                    <div class="passo">
                        3x = 15
                    </div>

                    <div class="passo">
                        <strong>Passo 2:</strong>
                        Dividimos os dois lados por 3.
                    </div>

                    <div class="formula">
                        x = 15 ÷ 3
                    </div>

                    <div class="passo">
                        <strong>x = 5</strong>
                    </div>

                </div>


                <h2>Equações com parênteses</h2>

                <p>
                    Quando aparecem parênteses, normalmente precisamos
                    aplicar a propriedade distributiva.
                </p>

                <div class="formula">
                    a(b + c) = ab + ac
                </div>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <div class="formula">
                        2(x + 3) = 14
                    </div>

                    <p>
                        Primeiro podemos distribuir o 2:
                    </p>

                    <div class="formula">
                        2x + 6 = 14
                    </div>

                    <p>
                        Agora resolvemos normalmente:
                    </p>

                    <div class="passo">
                        2x = 14 - 6
                    </div>

                    <div class="passo">
                        2x = 8
                    </div>

                    <div class="passo">
                        x = 8 ÷ 2
                    </div>

                    <div class="passo">
                        <strong>x = 4</strong>
                    </div>

                </div>


                <h2>Equações com incógnita dos dois lados</h2>

                <p>
                    Algumas equações possuem x nos dois lados da igualdade.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <div class="formula">
                        5x + 2 = 2x + 14
                    </div>

                    <div class="passo">
                        Primeiro colocamos os termos com x de um lado.
                    </div>

                    <div class="formula">
                        5x - 2x = 14 - 2
                    </div>

                    <div class="passo">
                        3x = 12
                    </div>

                    <div class="passo">
                        x = 12 ÷ 3
                    </div>

                    <div class="passo">
                        <strong>x = 4</strong>
                    </div>

                </div>


                <h2>Equações com frações</h2>

                <p>
                    Também podemos encontrar incógnitas em frações.
                    Nesse caso, é importante trabalhar com cuidado para
                    eliminar os denominadores.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <div class="formula">
                        x / 3 = 8
                    </div>

                    <p>
                        Multiplicamos os dois lados por 3:
                    </p>

                    <div class="formula">
                        x = 8 × 3
                    </div>

                    <div class="passo">
                        <strong>x = 24</strong>
                    </div>

                </div>


                <h2>Equações do segundo grau</h2>

                <p>
                    Nas equações do segundo grau, a incógnita aparece
                    elevada ao quadrado.
                </p>

                <div class="formula">
                    ax² + bx + c = 0
                </div>

                <p>
                    Um dos métodos mais conhecidos para resolver esse tipo
                    de equação é a fórmula de Bhaskara.
                </p>

                <div class="formula">
                    x = (-b ± √Δ) / 2a
                </div>

                <p>
                    Antes de utilizar a fórmula, calculamos o discriminante,
                    representado pela letra grega delta.
                </p>

                <div class="formula">
                    Δ = b² - 4ac
                </div>


                <h3>Exemplo de equação do segundo grau</h3>

                <div class="exemplo">

                    <strong>Resolva:</strong>

                    <div class="formula">
                        x² - 5x + 6 = 0
                    </div>

                    <p>
                        Temos:
                    </p>

                    <div class="passo">
                        a = 1
                    </div>

                    <div class="passo">
                        b = -5
                    </div>

                    <div class="passo">
                        c = 6
                    </div>

                    <p>
                        Calculando o delta:
                    </p>

                    <div class="formula">
                        Δ = (-5)² - 4(1)(6)
                    </div>

                    <div class="formula">
                        Δ = 25 - 24
                    </div>

                    <div class="formula">
                        Δ = 1
                    </div>

                    <p>
                        Agora utilizamos Bhaskara:
                    </p>

                    <div class="formula">
                        x = (5 ± √1) / 2
                    </div>

                    <p>
                        Assim temos duas soluções:
                    </p>

                    <div class="passo">
                        <strong>x₁ = 3</strong>
                    </div>

                    <div class="passo">
                        <strong>x₂ = 2</strong>
                    </div>

                </div>


                <h2>Problemas do cotidiano com equações</h2>

                <p>
                    As equações não aparecem apenas em exercícios de
                    Matemática. Elas também podem representar situações
                    do cotidiano.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <p>
                        João possui R$ 20 e recebe mais uma quantidade x.
                        Depois disso, ele fica com R$ 50. Quanto ele recebeu?
                    </p>

                    <div class="formula">
                        20 + x = 50
                    </div>

                    <div class="passo">
                        x = 50 - 20
                    </div>

                    <div class="passo">
                        <strong>x = 30</strong>
                    </div>

                    <p>
                        João recebeu R$ 30.
                    </p>

                </div>


                <h2>Como montar uma equação a partir de um problema</h2>

                <p>
                    Essa é uma das habilidades mais importantes. Muitas
                    vezes o problema não apresenta a equação pronta.
                    Você precisa transformar o texto em Matemática.
                </p>

                <div class="caixa">

                    <strong>Passo a passo:</strong>

                    <p>
                        1. Leia o problema com atenção.
                    </p>

                    <p>
                        2. Descubra qual é o valor desconhecido.
                    </p>

                    <p>
                        3. Represente o valor desconhecido por x.
                    </p>

                    <p>
                        4. Transforme as informações do texto em uma
                        expressão matemática.
                    </p>

                    <p>
                        5. Monte a igualdade.
                    </p>

                    <p>
                        6. Resolva a equação.
                    </p>

                    <p>
                        7. Confira a resposta.
                    </p>

                </div>


                <h2>Exemplo completo de problema</h2>

                <div class="exemplo">

                    <strong>Problema:</strong>

                    <p>
                        Pensei em um número. Multipliquei esse número por 4
                        e depois somei 8. O resultado foi 32. Qual era o número?
                    </p>

                    <p>
                        Primeiro chamamos o número desconhecido de x.
                    </p>

                    <div class="formula">
                        4x + 8 = 32
                    </div>

                    <p>
                        Agora retiramos 8:
                    </p>

                    <div class="passo">
                        4x = 32 - 8
                    </div>

                    <div class="passo">
                        4x = 24
                    </div>

                    <p>
                        Agora dividimos por 4:
                    </p>

                    <div class="passo">
                        x = 24 ÷ 4
                    </div>

                    <div class="passo">
                        <strong>x = 6</strong>
                    </div>

                    <p>
                        Portanto, o número pensado era 6.
                    </p>

                </div>


                <h2>Como conferir uma equação</h2>

                <p>
                    Depois de encontrar o valor de x, podemos substituir
                    esse valor na equação original.
                </p>

                <div class="exemplo">

                    <strong>Exemplo:</strong>

                    <div class="formula">
                        3x + 2 = 17
                    </div>

                    <p>
                        Encontramos:
                    </p>

                    <div class="passo">
                        x = 5
                    </div>

                    <p>
                        Agora substituímos:
                    </p>

                    <div class="formula">
                        3(5) + 2 = 17
                    </div>

                    <div class="formula">
                        15 + 2 = 17
                    </div>

                    <div class="passo">
                        <strong>17 = 17 ✓</strong>
                    </div>

                    <p>
                        Como os dois lados são iguais, nossa resposta
                        está correta.
                    </p>

                </div>


                <div class="dicas">

                    <h3>💡 Dicas para resolver equações</h3>

                    <ul>

                        <li>
                            Identifique primeiro qual é a incógnita.
                        </li>

                        <li>
                            Organize os cálculos em etapas.
                        </li>

                        <li>
                            Use operações inversas para isolar o x.
                        </li>

                        <li>
                            Tome cuidado com sinais positivos e negativos.
                        </li>

                        <li>
                            Ao passar um termo para o outro lado,
                            lembre-se de alterar a operação.
                        </li>

                        <li>
                            Resolva primeiro os parênteses quando necessário.
                        </li>

                        <li>
                            Não pule muitas etapas, principalmente em
                            exercícios mais difíceis.
                        </li>

                        <li>
                            Sempre confira a resposta substituindo o valor
                            encontrado na equação original.
                        </li>

                    </ul>

                </div>


                <h2>Resumo das principais ideias</h2>

                <table class="tabela">

                    <tr>
                        <th>Tipo</th>
                        <th>Exemplo</th>
                    </tr>

                    <tr>
                        <td>Adição</td>
                        <td>x + 5 = 10</td>
                    </tr>

                    <tr>
                        <td>Subtração</td>
                        <td>x - 5 = 10</td>
                    </tr>

                    <tr>
                        <td>Multiplicação</td>
                        <td>5x = 25</td>
                    </tr>

                    <tr>
                        <td>Divisão</td>
                        <td>x / 5 = 5</td>
                    </tr>

                    <tr>
                        <td>Primeiro grau</td>
                        <td>2x + 5 = 15</td>
                    </tr>

                    <tr>
                        <td>Com parênteses</td>
                        <td>2(x + 3) = 14</td>
                    </tr>

                    <tr>
                        <td>Segundo grau</td>
                        <td>x² - 5x + 6 = 0</td>
                    </tr>

                </table>


                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Resolva: x + 9 = 20.
                        </li>

                        <li>
                            Resolva: x - 7 = 15.
                        </li>

                        <li>
                            Resolva: 4x = 32.
                        </li>

                        <li>
                            Resolva: x / 6 = 5.
                        </li>

                        <li>
                            Resolva: 3x + 7 = 22.
                        </li>

                        <li>
                            Resolva: 5x - 10 = 25.
                        </li>

                        <li>
                            Resolva: 2(x + 4) = 20.
                        </li>

                        <li>
                            Resolva: 4x + 3 = 2x + 15.
                        </li>

                        <li>
                            Resolva: 7x - 5 = 3x + 15.
                        </li>

                        <li>
                            Resolva: x² - 7x + 12 = 0.
                        </li>

                        <li>
                            Pensei em um número, multipliquei por 5 e
                            somei 10. O resultado foi 35. Qual era o número?
                        </li>

                        <li>
                            O dobro de um número mais 6 é igual a 24.
                            Qual é esse número?
                        </li>

                    </ol>

                </div>


                <h2>Conclusão</h2>

                <p>
                    Aprender equações é aprender a encontrar valores
                    desconhecidos utilizando uma sequência lógica de
                    operações matemáticas.
                </p>

                <p>
                    O mais importante é entender que uma equação representa
                    uma igualdade. Por isso, qualquer operação realizada
                    em um lado precisa preservar o equilíbrio da igualdade.
                </p>

                <p>
                    Comece pelas equações simples e pratique bastante.
                    Depois avance para parênteses, incógnitas dos dois lados,
                    frações e equações do segundo grau.
                </p>

                <p>
                    Com prática, você perceberá que a maioria das equações
                    segue a mesma ideia:
                    <strong>organizar, simplificar, isolar a incógnita
                    e conferir.</strong>
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação, Matemática e conhecimento

    </footer>

</body>

</html>