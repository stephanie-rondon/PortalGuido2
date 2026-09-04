<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Sistema</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="main-card">
        <main class="container">
            <div class="card-acesso">
                <h2>Como deseja acessar?</h2>

                <!-- Botão aluno -->
                <a href="../../Login/login.php?tipo=aluno" class="btn btn-principal">Sou aluno</a>

                <!-- Botão prof-->
                <a href="../../Login/login.php?tipo=professor" class="btn btn-secundario">Sou professor</a>

                <!-- Link visitante -->
                <a href="../home.php" class="link-visitante">Sou visitante</a>
            </div>
        </main>
    </div>
</body>

</html>