<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/download.css">
    <title>Download</title>
</head>
<!-- cabeçario -->
<body class="bg-white">
  <?php 
    include 'menu.php';
  ?>
<!-- botao download -->
  <main>
    <div class="">
      <div class="d-flex justify-content-center bg-secondary">
      <p class="text-white text-decoration-underline m-2 text-center">Primeira versão</p><p class="text-white m-2">está disponivel agora! e correções de Maio.</p>
      </div>
      <div class="container-fluid text-center">
        <div class="row m-4">
          <div class="col text-black mt-5">
            <h3>
             Faça seu Download
            </h3>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-primary">Download</button>            
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Desk top</a></li>
                  <li><a class="dropdown-item" href="#">Mobile</a></li>
                </ul>
              </div>
            </div>
          <div class="d-flex justify-content-center">
            <h5 class="text-primary">Desktop</h5>&nbsp;&&nbsp; <h5 class="text-primary">Mobile</h5>
          </div>
          </div>
          <div class="col">
            <div id="carouselExampleSlidesOnly" class="carousel slide border border-2 rounded-2" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/carrosselmeio.png" class="d-block w-100 my-4 rounded-2" alt="...">
                </div>
                <!-- <div class="carousel-item">
                  <img src="img/carrocel.png" class="d-block w-100 my-4 rounded-2" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/carrocel.png" class="d-block w-100 my-4 rounded-2" alt="...">
                </div> -->
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
  </main>
    <!-- rodapé -->
    <?php 
    include 'footer.php';
  ?>
</body>
<script src="Js/estilo.js"></script>
</html>