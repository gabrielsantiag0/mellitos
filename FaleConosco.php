<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/FaleConosco.css"> 
    <title>Fale-Conosco</title>
</head>
<body class="fundo">
  <!-- cabeçario -->
  <?php 
    include 'menu.php';
  ?>
       <!-- formulario fale-conosco  -->
      <main>
       <div class="bg-danger">
        <h4 class="text-center text-white mt-5 m-3">
            FALE-CONOSCO
        </h4>
       </div>
      
       <div class="mt-5 d-flex justify-content-center">
        <img src="Img/faleConosco.JPG" class="rounded-3 img-thumbnail" alt="" width="760px">
       </div>
       <div>
        <h4 class="fs-5 text-center mx-3 mt-3">
            Utilize este espaço para enviar sugestões, dúvidas, elogios ou reclamações.
        </h4>
       </div>
       <div class="d-flex justify-content-center">
          <div class="col-6">
            <div class="bg-danger">
              <h1 class="text-center m-2 text-white">Contato</h1>
            </div>
          <div class="card mb-3">
            <div class="card-body">
            <form id="FaleConosco">
                <div class="form-group text-center my-3">
                  <label class="my-2" for="nome">Nome completo*</label>
                  <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o seu Nome...">
                </div>
                <div class="form-group text-center my-3">
                  <label class="my-2" for="email">Email*</label>
                  <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu Email...">
                </div>
                <div class="form-group text-center my-3">
                  <label class="my-2" for="assunto">Assunto*</label>
                  <select class="form-select" id="assunto" aria-label="Floating label select example">
                    <option selected></option>
                    <option value="1">Informações</option>
                    <option value="2">Duvidas</option>
                    <option value="3">Suguestões</option>
                    <option value="3">Elogios</option>
                    <option value="3">Agradecimentos</option>
                    <option value="3">Reclamações</option>
                    <option value="3">Outros</option>
                  </select>
                </div>
                  <div class="form-group text-center my-3">
                    <label class="my-2" for="mensagem">Mensagem*</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite a Mensagem..."></textarea>
                  </div>
                  <div class="form-group text-center mt-3 mb-4">
                    <button type="submit" class="text-white bg-danger p-3 rounded-3 border-0" id="enviar">Enviar</button>
                  </div>
                  <div class="alert alert-danger text-center d-none">
                    Prencha o campo XXXX
                  </div>
            </form>
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
                      <h6> <a class="nav-link" href="">Receitas</a></h6>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="Js/bootstrap.min.js"></script>
<script src="Js/FaleConosco.js"></script>
</html>