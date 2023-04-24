<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/estilo.css">    
    <title>Acesso Dm Mellitus</title>
</head>
<body class="bg-white">
  <!-- cabecario -->
  <?php 
    include 'menu.php';
  ?>
   
    <!-- conteudo  -->
    <!-- carousel  -->
    
      <?php   
        include 'carousel.php';
      ?>

    <!-- Curiosidades -->
    <section class="container-fluid">
      <div class="d-flex justify-content-center mt-3">
        <h3 class="border-bottom border-danger border-opacity-50" id="Curiosidades">Curiosidades</h3>
      </div>
      <!-- modal tipo 1  -->
      <div class="mt-3">
        <div class="d-flex justify-content-center">
          <div class="d-flex justify-content-evenly">
          <div class="mx-5">
            <img class="me-5"  onclick="document.getElementById('id01').style.display='block'" class="w3-img w3-black" src="Img/curiosidades.jpg" alt="" width="100px">
            <p class="text-center text-danger fs-3 me-5 textoTipo">
              TIPO 1
            </p>
          </div>
          <!-- modal -->
          <section>
            <div id="id01" class="w3-modal rounded-1">
              <div class="w3-modal-content w3-modal-dialog w3-modal-dialog-scrollable">
                <header class="container bg-white"> 
                    <span onclick="document.getElementById('id01').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                  <h2 class="text-primary text-start pt-3 ms-3 textoTipo fs-2">DIABETES TIPO 1</h2>
                </header>
                <div class="container">
                    <p class="fs-4 modalfont">
                    &nbsp; &nbsp;    Em algumas pessoas, o sistema imunológico ataca equivocadamente as
                        células beta. Logo, pouca ou nenhuma insulina é liberada para o corpo. 
                        Como resultado, a glicose fica no sangue, em vez de ser usada como 
                        energia. Esse é o processo que caracteriza o Tipo 1 de diabetes, que 
                        concentra entre 5 e 10% do total de pessoas com a doença. O Tipo 1 
                        aparece geralmente na infância ou adolescência, mas pode ser
                        diagnosticado em adultos também. Essa variedade é sempre tratada com
                        insulina, medicamentos, planejamento alimentar e atividades físicas, para
                        ajudar a controlar o nível de glicose no sangue.
                        <br>
                    </p>
                    <p class="text-start mt-3 textoTipo fs-3 ms-3 d-flex"><b>
                      Saiba mais sobre a diabete:
                  </b>&nbsp;
                  <a class="text-primary" id="links" href="https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/d/diabetes">diabetes.gov</a>
              </p>
                </div>
                <footer class="w3-container d-flex">
                  <button type="button" class="w3-button bg-primary justify-content-End mb-3" data-dismiss="w3-modal"  onclick="document.getElementById('id01').style.display='none'" >Fechar</button>
                </footer>
              </div>
            </div>
          </section>
          <!-- modal  -->
          <div class="mx-5">
            <img src="Img/curiosidades.jpg" onclick="document.getElementById('id012').style.display='block'" class="w3-img w3-black" alt="" width="100px">
            <p class="text-center text-danger fs-3 textoTipo">
              TIPO 2
            </p>
          </div>
          <!-- modal  -->
          <section>
            <div id="id012" class="w3-modal">
              <div class="w3-modal-content w3-modal-dialog w3-modal-dialog-scrollable">
                <header class="container bg-white"> 
                    <span onclick="document.getElementById('id012').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                  <h2 class="text-primary text-start pt-3 ms-3 textoTipo fs-2">DIABETES TIPO 2</h2>
                </header>
                <div class="container">
                      <p class="f-4 modalfont">
                      O tipo 2 aparece quando o organismo não consegue usar adquadamente a insulina que produzir;
                      ou não produz insulina suficiente para controla a taxa de glicemia. Cerca de 90% 
                      das pessoas com diabetes têm o Tipo 2. Ele se manifesta mais frequentemente em adultos,
                      mas crianças também podem apresentar. Dependendo da gravidade, ele pode ser controlado com atividade física 
                       e planejamento alimentar. Em outros casos, exige o uso de insulina e/ou outros medicamentos para controlar a glicose.

                      </p>
                </div>
                <footer class="w3-container d-flex">
                  <button type="button" class="w3-button bg-primary justify-content-End mb-3" data-dismiss="w3-modal"  onclick="document.getElementById('id012').style.display='none'" >Fechar</button>
                </footer>
              </div>
            </div>
          </section>
          <div class="mx-5">
            <img class="ms-5" onclick="document.getElementById('id013').style.display='block'" class="w3-img w3-black" src="Img/mae.png" alt="" width="100px">
            <p class="text-center text-danger fs-3 textoTipo">
                GESTACIONAL
            </p>
          </div>
          <!-- modal  -->
          <section>
            <div id="id013" class="w3-modal">
              <div class="w3-modal-content w3-modal-dialog w3-modal-dialog-scrollable">
                <header class="container bg-white"> 
                    <span onclick="document.getElementById('id013').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                  <h2 class="text-primary text-start pt-3 ms-3 textoTipo fs-2">GESTACIONAL</h2>
                </header>
                <div class="container">
                    <p class="fs-5 text-start modalfont">
                 &nbsp; &nbsp;  A diabetes gestacional é um problema que surge durante a gravidez. A mulher fica com uma 
                     quantidade maior que o normal de açúcar no sangue. 
                      É uma condição que quase sempre se normaliza sozinha depois que o bebê nasce. 
                      A diabete aparece quando o corpo não consegue fabricar a insulina em quantidade suficiente. 
                      A insulina controla a quantidade de açúcar disponível no sangue, para ser usado como fonte  
                      de energia, e permite que o excesso de açúcar seja armazenado. Seu corpo precisa produzir 
                       insulina extra para atender às necessidades do bebê. Se seu corpo não conseguir fazer isso, 
                        você pode ficar com diabete gestacional. Seu nível de açúcar no sangue também pode subir devido às mudanças hormonais da gravidez, que interferem na ação da insulina.
                        <br>
                        <p class="text-start mt-3 textoTipo fs-4">
                          <b>Como perceber que estou com diabetes gestacional?</b>
                        </p>
                        <p class="fs-5 text-start modalfont">
                          &nbsp; &nbsp;   O diabetes gestacional pode ocorrer em qualquer mulher e nem sempre os sintomas são identificáveis.
                           Por isso, recomenda-se que todas as gestantes pesquisem, a partir da 24ª semana de gravidez (início do 6º mês), como está a glicose em jejum e,
                            mais importante ainda, a glicemia após estímulo da ingestão de glicose, o chamado teste oral de tolerância a glicose.
                        </p>
                        <p class="text-start mt-3 textoTipo fs-4">
                          <b>Quais são os fatores de risco?</b>
                        </p>
                          <ol>
                            <li class="text-start fs-5">
                              <p>Idade materna mais avançada;</p>
                            </li>
                            <li class="text-start fs-5">
                              <p>
                                Ganho de peso excessivo durante a gestação;
                              </p>
                            </li>
                            <li class="text-start fs-5">
                              <p>Sobrepeso ou obesidade;</p>
                            </li>
                            <li class="text-start fs-5">
                              <p>Síndrome dos ovários policísticos;</p>
                            </li>
                            <li class="text-start fs-5">
                              <p>História prévia de bebês grandes (mais de 4 kg) ou de diabetes gestacional;</p>
                            </li>
                            <li class="text-start fs-5">
                              <p>História familiar de diabetes em parentes de 1º grau (pais e irmãos);</p>
                            </li>
                            <li class="text-start fs-5">
                              <p>História de diabetes gestacional na mãe da gestante;</p>
                            </li>
                            <li class="text-start fs-5">
                              <p>Hipertensão arterial na gestação;</p>
                            </li>
                            <li class="text-start fs-5">
                              <p>Gestação múltipla (gravidez de gêmeos).</p>
                            </li>
                          </ol>
                          <p class="text-start mt-3 textoTipo fs-4">
                            <b> É possível controlar?</b>
                          </p>
                          <p class="fs-5 text-start modalfont">
                            &nbsp; &nbsp; O controle do diabetes gestacional é feito, na maioria das vezes, com a orientação nutricional adequada.
                             Para cada período da gravidez, uma quantidade certa de nutrientes. A prática de atividade física é outra medida de grande 
                             eficácia para redução dos níveis glicêmicos. A atividade deve ser feita somente depois de avaliada se existe alguma contraindicação, como por exemplo, risco de trabalho de parto prematuro.
                             <p class="fs-5 text-start modalfont">
                              &nbsp; &nbsp;   Aquelas gestantes que não chegam a um controle adequado com dieta e atividade física têm indicação de associar uso de insulinoterapia. O uso da insulina é seguro durante a gestação.
                              É importante destacar que a maioria das gestações complicadas pelo diabetes, quando tratadas de maneira adequada, terão excelente desfecho e os bebês nascerão saudáveis.
                             </p>
                          </p>
                          <p class="text-start mt-3 textoTipo fs-4 modalfont">
                            <b>Cuidados</b>
                          </p>
                          <p class="fs-5 text-start modalfont">
                            &nbsp; &nbsp;   O histórico de diabetes gestacional é um importante fator de risco para desenvolvimento de Diabetes Tipo 2. 
                            Aproximadamente seis semanas após o parto, a mãe deve realizar um novo teste oral de tolerância a glicose, 
                            sem estar em uso de medicamentos antidiabéticos.
                          </p>
                          <p class="fs-5 text-start modalfont">
                            &nbsp; &nbsp;   Uma ótima notícia é que o aleitamento materno pode reduzir o risco de desenvolvimento de diabetes após o parto.
                             A alimentação balanceada e a prática regular de atividades físicas completam essa 'fórmula infalível'.
                          </p>
                        <p class="text-start mt-3 textoTipo fs-3 ms-3 d-flex"><b>
                            Saiba mais sobre a diabete:
                        </b>&nbsp;
                        <a class="text-primary" id="links" href="https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/d/diabetes">diabetes.gov</a>
                    </p>
                    </p>
                </div>
                <footer class="w3-container d-flex">
                  <button type="button" class="w3-button bg-primary mb-3" data-dismiss="w3-modal"  onclick="document.getElementById('id013').style.display='none'" >Fechar</button>
                </footer>
              </div>
            </div>
          </section>
          <div class="mx-5">
            <img class="ms-5" onclick="document.getElementById('id014').style.display='block'" class="w3-img w3-black" src="Img/teste-de-diabetes.png" alt="" width="90px">
            <p class="text-center text-danger fs-3 textoTipo">
                COMPLICAÇÕES <br> DA DIABETE
            </p>
          </div>
          <!-- modal  -->
          <section>
            <div id="id014" class="w3-modal">
              <div class="w3-modal-content w3-modal-dialog w3-modal-dialog-scrollable">
                <header class="container bg-white"> 
                    <span onclick="document.getElementById('id014').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                  <h2 class="text-primary text-start pt-3 ms-3 textoTipo fs-2">COMPLICAÇÕES DO DIABETES 
                  </h2>
                </header>
                <div class="container">
                    <p class="fs-5 text-start modalfont">
                 &nbsp; &nbsp;  A diabetes é uma doença cercada de mitos, mas, na verdade, quem tem o problema pode levar uma vida mais do que normal: ativa,
                  saudável e feliz. Entretanto, se não houver acompanhamento, as altas taxas de glicose no sangue podem favorecer algumas complicações. <br>
                        <p class="text-start mt-3 textoTipo fs-4">
                          <b>
                            Saiba mais sobre elas e aprenda a identificar os sintomas:</b>
                        </p>
                        <ol>
                          <li class="text-start text-primary fs-4">
                            <a href="https://diabetes.org.br/diagnostico-e-tratamento/">Diagnóstico e Tratamento</a>
                          </li>
                          <li class="text-start text-primary fs-4">
                            <a href="https://diabetes.org.br/cetoacidose-diabetica/">Cetoacidose</a>
                          </li>
                          <li class="text-start text-primary fs-4">
                            <a href="https://diabetes.org.br/neuropatia-diabetica/">Neuropatia diabética</a>
                          </li>
                        </ol>
                        <p class="text-start mt-3 textoTipo fs-4">
                          <b>
                            Saiba mais sobre a diabete:</b>
                        </p>
                        <p class="fs-5 text-start modalfont">
                      &nbsp; &nbsp;Em algumas pessoas, o sistema imunológico ataca equivocadamente as células beta. Logo,
                       pouca ou nenhuma insulina é liberada para o corpo. Como resultado, a glicose fica no sangue, em vez de ser 
                       usada como energia. Esse é o processo que caracteriza o Tipo 1 de diabetes, que concentra entre 5 e 10% do total
                        de pessoas com a doença. O Tipo 1 aparece geralmente na infância ou adolescência, mas pode ser diagnosticado em
                         adultos também. Essa variedade é sempre tratada com insulina, medicamentos, planejamento alimentar e atividades
                          físicas, para ajudar a controlar o nível de glicose no sangue.
                        </p>
                        <p class="text-start mt-3 textoTipo fs-3 ms-3 d-flex"><b>
                            Saiba mais sobre a diabete:
                        </b>&nbsp;
                        <a class="text-primary" id="links" href="https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/d/diabetes">diabetes.gov</a>
                    </p>
                    </p>
                </div>
              </div>
            </div>
          </section>
        </div>
        </div>
      </div>
    </section>
    <!-- rodapé  -->
    <?php 
    include 'footer.php';
  ?>
  <?php 
  include 'BotaoTop.php';
  ?>
</body>
</html>