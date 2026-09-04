<?php
$categoria = "HISTÓRIA";

$titulo = "História do Brasil: dos povos indígenas à formação da República";

$subtitulo = "Conhecer a história brasileira é compreender os acontecimentos, conflitos, transformações e personagens que contribuíram para a formação do país ao longo dos séculos.";

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
            position: fixed;
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
                    HISTÓRIA<br>
                    <span>& BRASIL</span>
                </div>

            </div>

            <div class="conteudo">

                <p class="primeiro">
                    A história do Brasil é marcada por diferentes povos,
                    culturas, conflitos e transformações sociais e políticas.
                    Desde as sociedades indígenas que já habitavam o território
                    antes da chegada dos portugueses até a formação da República,
                    diversos acontecimentos contribuíram para construir o país
                    que conhecemos atualmente.
                </p>

                <p>
                    Estudar esse processo permite compreender como as relações
                    sociais, econômicas e políticas foram se modificando ao
                    longo do tempo e como acontecimentos do passado continuam
                    influenciando a sociedade brasileira.
                </p>

                <h2>Os povos indígenas</h2>

                <p>
                    Antes da chegada dos portugueses, o território que hoje
                    corresponde ao Brasil era habitado por diversos povos
                    indígenas. Essas sociedades apresentavam diferentes línguas,
                    culturas, formas de organização e modos de vida.
                </p>

                <p>
                    Os povos indígenas utilizavam os recursos naturais de
                    diferentes maneiras e possuíam conhecimentos próprios
                    sobre agricultura, caça, pesca, plantas e território.
                </p>

                <div class="caixa">

                    <strong>Importante:</strong>

                    <p>
                        A história do Brasil não começa com a chegada dos
                        portugueses. Diversos povos indígenas já viviam
                        nesse território há milhares de anos.
                    </p>

                </div>

                <h2>A chegada dos portugueses</h2>

                <p>
                    Em 1500, uma expedição portuguesa liderada por Pedro Álvares
                    Cabral chegou ao território que posteriormente seria chamado
                    de Brasil.
                </p>

                <p>
                    A chegada dos portugueses iniciou um processo de ocupação
                    e exploração do território. Ao longo dos anos, foram
                    estabelecidas relações entre portugueses e diferentes
                    povos indígenas, marcadas por trocas, conflitos e também
                    pela violência.
                </p>

                <h2>O período colonial</h2>

                <p>
                    Durante o período colonial, Portugal organizou a exploração
                    econômica do território. Entre as atividades desenvolvidas
                    estiveram a extração do pau-brasil, a produção de açúcar
                    e, posteriormente, a mineração.
                </p>

                <p>
                    A mão de obra escravizada foi utilizada em larga escala,
                    inicialmente com indígenas e posteriormente principalmente
                    com africanos trazidos à força para a América.
                </p>

                <h3>A escravidão</h3>

                <p>
                    A escravidão foi uma das características mais marcantes
                    da sociedade colonial e permaneceu durante grande parte
                    do período imperial. Milhões de africanos foram
                    escravizados e transportados para o Brasil.
                </p>

                <p>
                    A população escravizada resistiu de diferentes maneiras,
                    formando comunidades, organizando fugas, realizando
                    revoltas e preservando elementos culturais e religiosos.
                </p>

                <h2>A Independência do Brasil</h2>

                <p>
                    Em 7 de setembro de 1822, Pedro de Alcântara, que ficou
                    conhecido como Dom Pedro I, declarou a independência do
                    Brasil em relação a Portugal.
                </p>

                <p>
                    A independência não significou uma transformação imediata
                    de toda a sociedade. A escravidão continuou existindo,
                    e diversas estruturas sociais e econômicas permaneceram.
                </p>

                <div class="exemplo">

                    <strong>Você sabia?</strong>

                    <p>
                        A independência foi um processo político complexo
                        e envolveu diferentes grupos e interesses. A data
                        de 7 de setembro tornou-se um dos principais símbolos
                        da independência brasileira.
                    </p>

                </div>

                <h2>O Brasil Império</h2>

                <p>
                    Após a independência, o Brasil passou a ser uma monarquia.
                    O período imperial foi dividido em Primeiro Reinado,
                    Período Regencial e Segundo Reinado.
                </p>

                <p>
                    Durante o século XIX, ocorreram importantes transformações
                    políticas e econômicas. A produção de café ganhou grande
                    importância, principalmente nas regiões do Sudeste.
                </p>

                <h2>A abolição da escravidão</h2>

                <p>
                    A escravidão foi oficialmente abolida no Brasil em
                    13 de maio de 1888, com a assinatura da Lei Áurea pela
                    princesa Isabel.
                </p>

                <p>
                    A abolição foi resultado de um longo processo que contou
                    com a resistência dos próprios escravizados, movimentos
                    abolicionistas e mudanças políticas e econômicas.
                </p>

                <h2>A Proclamação da República</h2>

                <p>
                    Em 15 de novembro de 1889, a monarquia foi derrubada
                    e a República foi proclamada. O Brasil passou então
                    por uma nova organização política.
                </p>

                <div class="linha-tempo">

                    <div class="evento">
                        <strong>1500</strong>
                        <p>Chegada da expedição portuguesa.</p>
                    </div>

                    <div class="evento">
                        <strong>1822</strong>
                        <p>Independência do Brasil.</p>
                    </div>

                    <div class="evento">
                        <strong>1888</strong>
                        <p>Abolição da escravidão.</p>
                    </div>

                    <div class="evento">
                        <strong>1889</strong>
                        <p>Proclamação da República.</p>
                    </div>

                </div>

                <div class="dicas">

                    <h3>💡 Como estudar História</h3>

                    <ul>

                        <li>
                            Organize os acontecimentos em ordem cronológica.
                        </li>

                        <li>
                            Procure entender as causas e consequências.
                        </li>

                        <li>
                            Relacione acontecimentos políticos e sociais.
                        </li>

                        <li>
                            Observe diferentes pontos de vista históricos.
                        </li>

                        <li>
                            Utilize linhas do tempo para revisar os conteúdos.
                        </li>

                    </ul>

                </div>

                <h2>Exercícios</h2>

                <div class="exercicios">

                    <ol>

                        <li>
                            Quais povos já habitavam o território brasileiro
                            antes da chegada dos portugueses?
                        </li>

                        <li>
                            Qual acontecimento ocorreu em 7 de setembro de 1822?
                        </li>

                        <li>
                            Qual foi a importância da produção de café durante
                            o período imperial?
                        </li>

                        <li>
                            Em que ano a escravidão foi oficialmente abolida
                            no Brasil?
                        </li>

                        <li>
                            O que aconteceu em 15 de novembro de 1889?
                        </li>

                        <li>
                            Por que é importante estudar diferentes pontos
                            de vista ao analisar acontecimentos históricos?
                        </li>

                    </ol>

                </div>

                <h2>Conclusão</h2>

                <p>
                    A história brasileira foi construída por diferentes povos
                    e marcada por processos de colonização, exploração,
                    resistência, conflitos e transformações políticas.
                </p>

                <p>
                    Conhecer esses acontecimentos ajuda a compreender melhor
                    a sociedade brasileira atual e permite analisar o passado
                    de maneira crítica e contextualizada.
                </p>

            </div>

        </article>

    </main>

    <footer>

        © 2026 Portal News • Educação e conhecimento

    </footer>

</body>

</html>