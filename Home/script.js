// ================================
// ELEMENTOS
// ================================

const carousel = document.getElementById("carousel");
const cards = document.querySelectorAll(".card");
const inputPesquisa = document.getElementById("pesquisa");
const mensagemNenhum = document.getElementById("none");
const botaoAnterior = document.getElementById("prev");
const botaoProximo = document.getElementById("next");
const materias = document.querySelectorAll(".subject");

let materiaAtual = "Todas";

// ================================
// CARROSSEL
// ================================

function atualizarSetas() {
    if (!carousel) return;
    botaoAnterior.disabled = carousel.scrollLeft <= 0;
    botaoProximo.disabled =
        carousel.scrollLeft + carousel.clientWidth >=
        carousel.scrollWidth - 1;
}

if (botaoAnterior && botaoProximo) {
    botaoAnterior.addEventListener("click", function () {
        carousel.scrollBy({ left: -200, behavior: "smooth" });
    });

    botaoProximo.addEventListener("click", function () {
        carousel.scrollBy({ left: 200, behavior: "smooth" });
    });

    carousel.addEventListener("scroll", atualizarSetas);
    window.addEventListener("resize", atualizarSetas);
    atualizarSetas();
}

// ================================
// PESQUISA
// ================================

function pesquisar() {
    const textoPesquisa = inputPesquisa.value.toLowerCase().trim();
    let quantidadeEncontrada = 0;

    cards.forEach(function (card) {
        const materia = card.dataset.materia;
        const texto = card.dataset.search.toLowerCase();

        const correspondeMateria =
            materiaAtual === "Todas" || materia === materiaAtual;
        const correspondePesquisa = texto.includes(textoPesquisa);

        if (correspondeMateria && correspondePesquisa) {
            card.style.display = "block";
            quantidadeEncontrada++;
        } else {
            card.style.display = "none";
        }
    });

    mensagemNenhum.style.display =
        quantidadeEncontrada === 0 ? "block" : "none";
}

if (inputPesquisa) {
    inputPesquisa.addEventListener("input", pesquisar);
    inputPesquisa.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            pesquisar();
        }
    });
}

// ================================
// FILTRO POR MATÉRIA
// ================================

function filtrar(materia, elemento) {
    materiaAtual = materia;

    materias.forEach(function (item) {
        item.classList.remove("active");
    });

    elemento.classList.add("active");
    inputPesquisa.value = "";
    pesquisar();
}

// ================================
// BOTÃO "ACESSAR CONTEÚDO"
// ================================

function abrirConteudo(link) {
    if (link) {
        window.location.href = link;
    } else {
        alert("Página em construção!");
    }
}

// ================================
// INICIALIZAÇÃO
// ================================

if (cards.length > 0) {
    pesquisar();
}