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
// fundo branco e preto
let scene = new THREE.Scene();
let camera = new THREE.PerspectiveCamera(75,
    window.innerWidth / window.innerHeight, 0.1, 50);
camera.position.z = 13;
const SPEDD = 0.01;

let renderer = new THREE.webGLRenderer({antialias: true});
renderer.SetPixelRatio( window.devicePixelRatio );
renderer.SetSize( window.innerWidth,
    window.innerHeight );
    renderer.SetClearColor( 0x000000, 1);
document.body.appendChild( renderer.documentElement );

let lights = [];
lights[ 0 ] = new THREE.PointLight( 0xffffff, 1.25, 0, 100 );
lights[ 1 ] = new THREE.PointLight( 0xffffff, 1.5, 0, 100 );
lights[ 2 ] = new THREE.PointLight( 0xffffff, 1.35, 0, 100);