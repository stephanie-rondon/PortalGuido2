<?php
session_start();

$tipoAcesso = $_GET['tipo'] ?? 'aluno';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?= ucfirst($tipoAcesso) ?></title>
    <link rel="stylesheet" href="styles.css"/>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>

    <form id="form-login">
        <h3>Login do <?= ucfirst($tipoAcesso) ?></h3>

        <div id="mensagem-erro" style="display: none; color: #d9534f; background-color: #fdf7f7; padding: 10px; border-radius: 8px; text-align: center; font-size: 13px;"></div>

        <!-- Botão Oficial do Google (sem trava de domínio para testes) -->
        <div id="g_id_onload"
             data-client_id="864725011103-ev555lgu6k0igllrb1g5ba2tveeejnji.apps.googleusercontent.com"
             data-callback="handleCredentialResponse">
        </div>
        <div class="g_id_signin" data-type="standard" data-size="large" data-width="100%"></div>

        <div class="divisor">
            <span>ou entre com senha</span>
        </div>

        <div class="campo-input">
            <input type="email" id="email" placeholder="e-mail (@gmail.com ou @escola.pr.gov.br)" required>
        </div>
        <div class="campo-input">
            <input type="password" id="senha" placeholder="senha" required>
        </div>
        <div class="campo">
            <input type="submit" value="Entrar">
        </div>
    </form>

    <script src="script.js"></script>
</body>
</html>