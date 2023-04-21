// Seleciona o botão de voltar ao topo
var btnVoltarAoTopo = document.querySelector('.voltar-ao-topo');

// Função que exibe ou oculta o botão de voltar ao topo dependendo da posição da página
function mostrarBotaoVoltarTopo() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.querySelector(".voltar-ao-topo").style.display = "block";
    } else {
        document.querySelector(".voltar-ao-topo").style.display = "d-none";
    }
}

// Função que rola a página de volta para o topo
function voltarAoTopo() {
    document.body.scrollTop = 0; // Para browsers Safari
    document.documentElement.scrollTop = 0; // Para browsers Chrome, Firefox, IE e Opera
}

// Adiciona um ouvinte de eventos ao clicar no botão
btnVoltarAoTopo.addEventListener('click', function() {
  // Rola a página suavemente até o topo
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

  