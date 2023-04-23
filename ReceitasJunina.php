<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/ReceitasCriancas.css">
    <title>RECEITAS DE LANCHES</title>
</head>
<body>
     <!-- cabeçario -->
     <?php 
    include 'menu.php';
  ?>
    <!-- receitas  -->
    <main class="container mt-5 border border-1 border-black">
        <div class="m-4">
          <a class="text-black" href="receita.html">&Larr; Voltar</a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 m-4">
            <div class="col">
              <div class="card">
                <img src="Img/QuentãoDeFrutas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Quentão de frutas</h5>
                  <p class="card-text">Rendimento: 6 porções Ingredientes2 canelas em pau2 laranjas cortadas em rodelas1 xícara (chá) de morango4 fatias de abacaxi4 cravos-da-índia1 pedaço...</p>
                  <a href="" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="Img/PaçocaSalgadaDePinhãoEAmendoim.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Paçoca salgada de pinhão e amendoim</h5>
                  <p class="card-text">Rendimento: 10 porções Ingredientes1 cebola picada1 colher (sopa) de azeite de oliva2 xícaras (chá) de pinhão cozido1 xícara (chá) de…</p>
                  <a href="" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="Img/CurauDeCenouraEMilho.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Curau de cenoura e milho</h5>
                  <p class="card-text">Rendimento: 8 porções Ingredientes1 cenoura média cozida1 lata de milho verde em conserva escorrido3 xícaras (chá) de leite desnatado½ xícara…</p>
                  <a href="" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
          </div>
    </main>
    <!-- rodapé -->
     <footer class="bg-danger mt-5">
      <div class="row text-center">    
        <div class="col-4">
          <div class="row">
              <div class="col">
                <div class="col d-block p-5">
                <ul>
                  <h6 class="pt-3 text-white text-decoration-underline">
                    LINKS
                  </h6>
                  <li class="text-white text-center">
                    <h6> <a class="nav-link" href="FaleConosco.html">Contato</a></h6>
                    <h6> <a class="nav-link" href="download.html">Download</a></h6>
                    <h6> <a class="nav-link" href="receita.html">Receitas</a></h6>
                    <h6> <a class="nav-link" href="https://diabetesplay.com.br/">Videos</a></h6>
                    <h6> <a class="nav-link" href="index.html">Home</a></h6>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col">
                <div class="col d-block">
                  <div class="mt-5">
                  <h6 class="p-3"><a href="FaleConosco.html" class="text-white">FALE-CONOSCO</a></h6>
                </div>
                <div class="text-white">
                  Telefone: (11) 2185-9200
                </div> <br>
                <div>
                  <p class="text-white fs-5">Nossos Canais:</p>
                  <div class="row d-flex justify-content-center">
                      <div class="d-flex justify-content-evenly">
                        <a class="img-fluid" href="https://www.instagram.com/"><img src="Img/instagramIcone.png" alt="" width="40px"></a>
                        <a class="img-fluid" href="https://pt-br.facebook.com/"><img src="Img/facebook.png" alt="" width="40px"></a>
                        <a class="img-fluid" href="https://twitter.com/i/flow/login"><img src="Img/twitter.png" alt="" width="40px"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
            <div class="col-8">
        <div class="d-block">
         <a href="index.html">
          <img src="Img/logoPequena2.jpg" alt="" class="mt-3 border border-white border-1 rounded rounded-3 mb-3">
         </a>
          <div class="text-white">
              <h5>
                “Acesso aos Cuidados - se não agora, quando?”: 14/11 - <br> Dia Mundial e Nacional do Diabetes
              </h5>
          </div>
          <div>
            <p class="text-white">
              O acesso à educação sobre diabetes é o foco do mês de conscientização <br> sobre o diabetes e do Dia Mundial do Diabetes em novembro.
  
             Todos os anos, a campanha <br> do Dia Mundial do Diabetes se concentra em um tema dedicado que dura um ou mais anos. <br>
              O tema do Dia Mundial do Diabetes 2021-23 é Acesso aos Cuidados com o Diabetes .
            </p>
          </div>
        </div>
      </div>
      </div>
      <div class="row text-center me-5">
        <h6 class="text-white ms-5">Desenvolvido por Equipe Acesso Dm Mellitus&trade; 2023</h6>
        </div>
        <button class="voltar-ao-topo btn bg-black m-5 fs-3">&uarr;</button>
     </footer>  
</body>
<script src="Js/estilo.js"></script>
</html>