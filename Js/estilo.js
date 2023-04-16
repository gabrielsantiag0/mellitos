// Exibe o botão de voltar ao topo quando a página é rolada
window.onscroll = function() {
    mostrarBotaoVoltarTopo()
};

// Função que exibe ou oculta o botão de voltar ao topo dependendo da posição da página
function mostrarBotaoVoltarTopo() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btn-voltar-topo").style.display = "block";
    } else {
        document.getElementById("btn-voltar-topo").style.display = "none";
    }
}

// Função que rola a página de volta para o topo
function voltarAoTopo() {
    document.body.scrollTop = 0; // Para browsers Safari
    document.documentElement.scrollTop = 0; // Para browsers Chrome, Firefox, IE e Opera
}