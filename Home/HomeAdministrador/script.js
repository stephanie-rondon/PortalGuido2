document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("formConteudo");

    const titulo = document.getElementById("titulo");
    const descricao = document.getElementById("descricao");

    const contadorTitulo = document.getElementById("contadorTitulo");
    const contadorDescricao = document.getElementById("contadorDescricao");


    // CONTADOR DE CARACTERES

    function atualizarContadores() {

        contadorTitulo.textContent = titulo.value.length;

        contadorDescricao.textContent = descricao.value.length;

    }


    titulo.addEventListener("input", atualizarContadores);

    descricao.addEventListener("input", atualizarContadores);


    // CONFIRMAÇÃO ANTES DE PUBLICAR

    form.addEventListener("submit", function (event) {

        const confirmar = confirm(
            "Deseja realmente publicar este conteúdo?"
        );

        if (!confirmar) {

            event.preventDefault();

        }

    });


    // CONFIRMAÇÃO ANTES DE EXCLUIR

    const botoesExcluir = document.querySelectorAll(".excluir");

    botoesExcluir.forEach(function (botao) {

        botao.addEventListener("click", function (event) {

            const confirmar = confirm(
                "Tem certeza que deseja excluir este conteúdo?"
            );

            if (!confirmar) {

                event.preventDefault();

            }

        });

    });


    // INICIA OS CONTADORES

    atualizarContadores();

});