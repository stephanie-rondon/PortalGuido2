
function logar() {
    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;
    if(login == 'admin' && senha == "123"){
        alert('sucesso');
        location.href= "../home/index.html";
    } else {
        alert('usuário ou senha incorreto')
    }
}