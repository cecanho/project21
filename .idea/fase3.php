<?php
    session_start();

    $_SESSION['score'] = $_POST['rq1'] + $_POST['rq2'] + $_POST['rq3'] + $_POST['rq4'] + $_POST['rq5'] + $_POST['rq6'] + $_POST['rq7'] + $_POST['rq8'] + $_POST['rq9'] + $_POST['rq10'];

    echo '<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project VS21 - Vida Sustentável</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="ranking.php">Ranking
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ajuda</a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4 bg-light">
        
       <div class="quadro">

         <div class="text-center">
            <img width="5%" height="5%" src="arv3.png"><h1>Fase 3</h1>         
         </div>

        <form name="frmqst" method="post" action="final_score.php">
    <div class="row">
        <div class="text-justify">
            <div id="q1">
                <p>Questão 1: Quanto a proteção das áreas sob risco de erosão com o plantio de mudas nativas e conservação de solo com curvas de nível:</p>
                <input type="radio" name="rq1" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq1" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q2">
                <p>Questão 2: Adequação das instalações físicas (acesso à prefeitura, ruas e calçadas), que permita o acesso de deficientes em todas as áreas.</p>
                <input type="radio" name="rq2" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq2" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q3">
                <p>Questão 3: Reciclagem e comercialização de todo o lixo.</p>
                <input type="radio" name="rq3" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq3" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q4\">
                <p>Questão 4: Treinamento de agentes multiplicadores para outras organizações.</p>
                <input type="radio" name="rq4" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq4" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q5">
                <p>Questão 5: Conscientização da população para a redução de desperdícios por meios de comunicação.</p>
                <input type="radio" name="rq5" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq5" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q6">
                <p>Questão 6: Proteção das nascentes.</p>
                <input type="radio" name="rq6" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq6" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q7">
                <p>Questão 7: Produção e reprodução de mudas e espécies nativas.</p>
                <input type="radio" name="rq7" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq7" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q8">
                <p>Questão 8: Manutenção dos canteiros centrais e praças, promovendo os cuidados regulares com os arbustos e plantas ornamentais, parceria com indústrias.</p>
                <input type="radio" name="rq8" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq8" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q9">
                <p>Questão 9: Manutenção dos pontos de coleta seletiva.</p>
                <input type="radio" name="rq9" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq9" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q10">
                <p>Questão 10: Fiscalização das empresas da cidade quanto ao tratamento de descarte do lixo, ou tratamento da água antes de devolver ao meio ambiente.</p>
                <input type="radio" name="rq10" value="1"> Sim faz parte.<br />
                <input type="radio" name="rq10" value="0"> Não faz parte.<br />
            </div>
        </div>
    </div>
    <br />

    <button class="btn-success">Enviar</button>

</form>
    </div>
      </header>

     
    </div>
    <!-- /.container -->

    <br>

    <!-- Footer -->
    <footer class="py-5 bg-success">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Project VS21 2018.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
';