<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/receita.css">
    <title>Receitas</title>
</head>
<body>
    <!-- cabeçario -->
  <?php 
    include 'menu.php';
  ?>
   
    <!-- receita -->
    <main class="container mt-5 border border-1 border-black bg-white rounded-2">
      <!-- receita crianças  -->
      <section>
        <div class="row m-4">
            <h1>
                Receitas
            </h1>
        </div>
        <div class="row d-flex justify-content-evenly">
            <div class="col d-flex">
              <img src="Img/children.png" alt="icone de crianças" width="80px">
              <h1 class="ms-3">
                Criança
              </h1>
            </div>
            <div class="col d-none">2</div>
            <div class="col text-end">
              <a class="nav-link" href="ReceitasCriancas.html">VER MAIS RECEITAS PARA CRIANÇAS &rarr; </a>
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col">
          <a href="./ReceitasCriancas/CroissantDeChuchu.html">
            <img src="Img/crossntDeChuChu.jpg" alt="Croissant de chuchu" width="250px">
          </a>
          <h4 class="m-3">Croissant de chuchu</h4>
            </div>
            <div class="col">
              <a href="./ReceitasCriancas/GrissiniIntegral.html">
                <img src="Img/GrissiniIntegral.jpg" alt="Grissini integral" width="250px">
              </a>
              <h4 class="m-3">Grissini integral</h4>
            </div>
            <div class="col">
             <a href="./ReceitasCriancas/DelíciaDeAbobrinha.html">
               <img src="Img/deliciaDeAbobrinha.jpg" alt="Delícia de abobrinha" width="250px">
             </a>
              <h4 class="m-3">Delícia de abobrinha</h4>
            </div>
        </div>
      </section>
      <hr>
     <!-- receita lanches  -->
     <section>
      <div class="row d-flex justify-content-evenly mt-5">
          <div class="col d-flex">
            <img src="Img/food.png" alt="icone de lanches" width="80px">
            <h1 class="ms-3">
              Lanches
            </h1>
          </div>
          <div class="col d-none">2</div>
          <div class="col text-end">
            <a class="nav-link" href="ReceitasLanches.html">VER MAIS RECEITAS DE LANCHES &rarr; </a>
          </div>
      </div>
      <div class="row mt-3 text-center">
          <div class="col">
         <a href="./ReceitasLanches/SaladaFrutaComPêssego.html">
           <img src="Img/SaladaDeFrutasAoFornoComCremeDePêssego.jpg" alt="Salada de frutas ao forno com creme de pêssego" width="250px">
         </a>
            <h4 class="m-3">Salada de frutas ao forno <br> com creme de pêssego</h4>
          </div>
          <div class="col">
            <a href="./ReceitasLanches/SaladaDeCevadinha.html">
              <img src="Img/SaladaDeCevadinha.jpg" alt="Salada de Cevadinha" width="250px" >
            </a>
            <h4 class="m-3">Salada de Cevadinha</h4>
          </div>
          <div class="col">
            <a href="./ReceitasLanches/SopaDeCebolaEspecial.html">
              <img src="Img/SopaDeCebolaEspecial.jpg" alt="Sopa de cebola especial" width="250px">
            </a>
            <h4 class="m-3">Sopa de cebola especial</h4>
          </div>
      </div>
    </section>
    <hr>
    <!-- receitas doces  -->
    <section>
      <div class="row d-flex justify-content-evenly mt-5">
          <div class="col d-flex">
            <img src="Img/piece-of-cake.png" alt="icone de lanches" width="80px">
            <h1 class="ms-3">
              Doces
            </h1>
          </div>
          <div class="col d-none">2</div>
          <div class="col text-end">
            <a class="nav-link" href="ReceitasDoce.html">VER MAIS RECEITAS DE DOCES &rarr; </a>
          </div>
      </div>
      <div class="row mt-3 text-center">
          <div class="col">
          <a href="./ReceitaDoce/BoloDeAbacaxiECastanha.html">
            <img src="Img/BoloDeAbacaxiECCastanhaDeCaju.jpg" alt="Bolo de abacaxi e castanha-de-caju" width="250px">
          </a>
            <h4 class="m-3">Bolo de abacaxi e castanha-de-caju</h4>
          </div>
          <div class="col">
            <a href="./ReceitaDoce/TortaDeMousseDeMaracujá.html">
              <img src="Img/TortaDeMousseDeMaracujá.JPG" alt="Torta de mousse de maracujá" width="250px" >
            </a>
            <h4 class="m-3">Torta de mousse de maracujá</h4>
          </div>
          <div class="col">
            <a href="./ReceitaDoce/BoloDeBrigadeiro.html">
              <img src="Img/Bolo de brigadeiro.jpg" alt="Bolo de brigadeiro" width="250px">
            </a>
            <h4 class="m-3">Bolo de brigadeiro</h4>
          </div>
      </div>
    </section>
    <hr>
    <!-- receitas refeições -->
     <section>
      <div class="row d-flex justify-content-evenly mt-5">
          <div class="col d-flex">
            <img src="Img/refeicoes.png" alt="icone de refeições" width="80px">
            <h1 class="ms-3">
              REFEIÇÕES
            </h1>
          </div>
          <div class="col d-none">2</div>
          <div class="col text-end">
            <a class="nav-link" href="ReceitasRefeicoes.html">VER MAIS RECEITAS DE REFEIÇÕES &rarr; </a>
          </div>
      </div>
      <div class="row mt-3 text-center">
          <div class="col">
            <a href="./ReceitasRefeicoes/MaminhaAoMolhodeErvas.html">
              <img src="Img/MaminhaAoMolhoDeErvas.png" alt="Maminha ao molho de ervas" width="250px">
            </a>
            <h4 class="m-3">Maminha ao molho de ervas</h4>
          </div>
          <div class="col">
            <a href="./ReceitasRefeicoes/RisotoDoMar.html">
              <img src="Img/RisotoDoMar.jpg" alt="Risoto do mar" width="250px" >
            </a>
            <h4 class="m-3">Risoto do mar</h4>
          </div>
          <div class="col">
            <a href="./ReceitasRefeicoes/NhoqueAoMolho.html">
              <img src="Img/NhoqueAoMolhoMediterrâneo.jpg" alt="Nhoque ao molho mediterrâneo" width="250px">
            </a>
            <h4 class="m-3">Nhoque ao molho mediterrâneo</h4>
          </div>
      </div>
    </section>
    <hr>
    <!-- receitas pascoa  -->
    <section>
      <div class="row d-flex justify-content-evenly mt-5">
          <div class="col d-flex">
            <img src="Img/coelhinho-da-pascoa.png" alt="icone da pascoa" width="80px">
            <h1 class="ms-3">
             PÁSCOA
            </h1>
          </div>
          <div class="col d-none">2</div>
          <div class="col text-end">
            <a class="nav-link" href="ReceitasPascoa.html">VER MAIS RECEITAS DE PÁSCOA &rarr; </a>
          </div>
      </div>
      <div class="row mt-3 text-center">
          <div class="col">
            <a href="./RefeicoesPascoa/Brigadeirão.html">
              <img src="Img/brigadeirao.jpg" alt="Brigadeirão" width="250px">
            </a>
            <h4 class="m-3">Brigadeirão</h4>
          </div>
          <div class="col">
            <a href="./RefeicoesPascoa/CassataSiciliana.html">
              <img src="Img/CassataSiciliana.jpg" alt="Cassata Siciliana" width="250px" >
            </a>
            <h4 class="m-3">Cassata Siciliana</h4>
          </div>
          <div class="col">
            <a href="./RefeicoesPascoa/EnroladoDeChocolate.html">
              <img src="Img/EnroladoDeChocolate.jpg" alt="Enrolado de chocolate" width="250px">
            </a>
            <h4 class="m-3">Enrolado de chocolate</h4>
          </div>
      </div>
    </section>
    <hr>
    <!-- receitas festa junina -->
    <section>
      <div class="row d-flex justify-content-evenly mt-5">
          <div class="col d-flex">
            <img src="Img/festa-junina.png" alt="icone da festa junina " width="80px">
            <h1 class="ms-3">
            FESTA JUNINA
            </h1>
          </div>
          <div class="col d-none">2</div>
          <div class="col text-end">
            <a class="nav-link" href="ReceitasJunina.html">VER MAIS RECEITAS DE  FESTA DE FIM DE ANO &rarr; </a>
          </div>
      </div>
      <div class="row mt-3 text-center">
          <div class="col">
            <a href="./Receitasjuninas/QuentãoDeFrutas.html">
              <img src="Img/QuentãoDeFrutas.jpg" alt="Pavê de Sorvete com Brownie" width="250px">
            </a>
            <h4 class="m-3">Pavê de Sorvete com Brownie</h4>
          </div>
          <div class="col">
            <a href="./Receitasjuninas/PaçocaSalgadaDePinhão.html">
              <img src="Img/PaçocaSalgadaDePinhãoEAmendoim.jpg" alt="Christmas Cake" width="250px" >
            </a>
            <h4 class="m-3">Christmas Cake</h4>
          </div>
          <div class="col">
            <a href="./Receitasjuninas/CurauDeCenouraEMilho.html">
              <img src="Img/CurauDeCenouraEMilho.jpg" alt="Curau de cenoura e milho" width="250px">
            </a>
            <h4 class="m-3">Curau de cenoura e milho</h4>
          </div>
      </div>
    </section>
    <hr>
    <section>
      <div class="row d-flex justify-content-evenly mt-5">
          <div class="col d-flex">
            <img src="Img/champanhe.png" alt="icone da festa junina " width="80px">
            <h1 class="ms-3">
            FESTA DE FIM DE ANO
            </h1>
          </div>
          <div class="col d-none">2</div>
          <div class="col text-end">
            <a class="nav-link" href="ReceitasFimDeAno.html">VER MAIS RECEITAS DE  FESTA DE FIM DE ANO &rarr; </a>
          </div>
      </div>
      <div class="row mt-3 text-center">
          <div class="col">
            <a href="./ReceitaFimDeAno/PavêDeSorveteComBrownie.html">
              <img src="Img/PavêDeSorveteComBrownie.jpg" alt="Pavê de Sorvete com Brownie" width="250px">
            </a>
            <h4 class="m-3">Pavê de Sorvete com Brownie</h4>
          </div>
          <div class="col">
            <a href="./ReceitaFimDeAno/ChristmasCake.html">
              <img src="Img/ChristmasCake.jpg" alt="Christmas Cake" width="250px" >
            </a>
            <h4 class="m-3">Christmas Cake</h4>
          </div>
          <div class="col">
            <a href="./ReceitaFimDeAno/BavaroiseDeLimão.html">
              <img src="Img/BavaroiseDeLimão.jpg" alt="Bavaroise de Limão" width="250px">
            </a>
            <h4 class="m-3">Bavaroise de Limão</h4>
          </div>
      </div>
    </section>
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