document.addEventListener('DOMContentLoaded', () => {
    const formLogin = document.getElementById('form-login');

    if (formLogin) {
        formLogin.addEventListener('submit', async function(event) {
            event.preventDefault();

            const email = document.getElementById('email').value.trim();
            const senha = document.getElementById('senha').value;
            const divErro = document.getElementById('mensagem-erro');

            const urlParams = new URLSearchParams(window.location.search);
            const tipo = urlParams.get('tipo') || 'aluno';

            divErro.style.display = 'none';

            // Ajuste para permitir tanto @escola.pr.gov.br quanto @gmail.com nos testes
            if (!email.endsWith('@escola.pr.gov.br') && !email.endsWith('@gmail.com')) {
                divErro.innerText = 'Use um e-mail @gmail.com ou @escola.pr.gov.br.';
                divErro.style.display = 'block';
                return;
            }

            try {
                const formData = new FormData();
                formData.append('email', email);
                formData.append('senha', senha);
                formData.append('tipo', tipo);

                const resposta = await fetch('processaLogin.php', {
                    method: 'POST',
                    body: formData
                });

                const dados = await resposta.json();

                if (dados.sucesso) {
                    window.location.href = dados.redirecionar;
                } else {
                    divErro.innerText = dados.mensagem;
                    divErro.style.display = 'block';
                }
            } catch (error) {
                divErro.innerText = 'Erro ao conectar com o servidor.';
                divErro.style.display = 'block';
            }
        });
    }
});

// Callback do Google Sign-In
function handleCredentialResponse(response) {
    const urlParams = new URLSearchParams(window.location.search);
    const tipo = urlParams.get('tipo') || 'aluno';

    const formData = new FormData();
    formData.append('google_token', response.credential);
    formData.append('tipo', tipo);

    fetch('processaLogin.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(dados => {
        if (dados.sucesso) {
            window.location.href = dados.redirecionar;
        } else {
            const divErro = document.getElementById('mensagem-erro');
            divErro.innerText = dados.mensagem;
            divErro.style.display = 'block';
        }
    })
    .catch(() => {
        const divErro = document.getElementById('mensagem-erro');
        divErro.innerText = 'Erro ao autenticar com o Google.';
        divErro.style.display = 'block';
    });
}