<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    <form>
        <h3>Faça o seu login</h3>
        <div class="campo-input">
            <input type="e-mail" placeholder="e-mail" id="e-mail">
        </div>
        <div class="campo-input">
            <input type="password" placeholder="senha" id="senha">
        </div>
        <div class="campo">
            <input type="submit" onclick="logar(); return false">
        </div>
    </form>
    <script src="script.js"></script>
</body>
</html>