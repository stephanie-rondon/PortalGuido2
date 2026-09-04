<?php
session_start();
header('Content-Type: application/json');

// Desativa exibição de avisos do PHP para não corromper o retorno JSON
error_reporting(0);

$tipo = $_POST['tipo'] ?? 'aluno';

// Define a página de destino com base no perfil do usuário
if ($tipo === 'professor') {
    $destino = '../Home/HomeAdministrador/homeAministrador.php';
} else {
    $destino = '../Home/home.php';
}

// --- 1. PROCESSAMENTO DO LOGIN COM GOOGLE ---
if (isset($_POST['google_token'])) {
    $token = $_POST['google_token'];
    
    // Consulta a API do Google para validar a chave enviada
    $googleUrl = "https://oauth2.googleapis.com/tokeninfo?id_token=" . urlencode($token);

    // Permite conexões HTTPS no localhost liberando a validação de certificado SSL
    $contextoSSL = stream_context_create([
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
        ]
    ]);
    
    $resposta = @file_get_contents($googleUrl, false, $contextoSSL);
    
    if ($resposta) {
        $dados = json_decode($resposta, true);
        $email = $dados['email'] ?? '';

        // Aceita tanto o e-mail institucional quanto o @gmail.com pessoal nos testes
        if (str_ends_with($email, '@escola.pr.gov.br') || str_ends_with($email, '@gmail.com')) {
            $_SESSION['usuario_email'] = $email;
            $_SESSION['tipo_usuario']  = $tipo;

            echo json_encode([
                'sucesso' => true,
                'redirecionar' => $destino
            ]);
            exit();
        }
    }

    echo json_encode(['sucesso' => false, 'mensagem' => 'A conta Google precisa ser um e-mail @gmail.com ou @escola.pr.gov.br.']);
    exit();
}

// --- 2. PROCESSAMENTO DO LOGIN TRADICIONAL (E-MAIL E SENHA) ---
$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

// Validação permitindo e-mail pessoal nos testes
if (!str_ends_with($email, '@escola.pr.gov.br') && !str_ends_with($email, '@gmail.com')) {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Use um e-mail @gmail.com ou @escola.pr.gov.br.']);
    exit();
}

// Liberado para qualquer e-mail permitido usando a senha de teste '123'
if ($senha === '123') {
    $_SESSION['usuario_email'] = $email;
    $_SESSION['tipo_usuario']  = $tipo;

    echo json_encode([
        'sucesso' => true,
        'redirecionar' => $destino
    ]);
    exit();
}

echo json_encode(['sucesso' => false, 'mensagem' => 'Senha incorreta (use a senha 123 para testes).']);
exit();
?>