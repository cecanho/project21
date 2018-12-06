<?php

 session_start();
    $_SESSION['nickname'] = addslashes($_POST['nickname']);
    $_SESSION['dd-mm-yyyy'] = date('Y-m-d');

    echo '<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project VS21 - Vida Sustentável</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
         
            

         <div class="text-center"><img width="5%" height="5%" src="arv1.png"><h1>Fase 1</h1>
         
         </div>

        <form name="frmqst" method="post" action="fase2.php">
    <div class="row">
        <div class="text-justify">
            <div id="q\">
                <p>Questão 1: Em seu período escolar você teve aulas que tratava sobre conscientização do uso de recursos naturais?</p>
                <input type="radio" name="rq1" value="1"> Sim.<br />
                <input type="radio" name="rq1" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q2">
                <p>Questão 2: Você já participou de algum grupo de pesquisa, ou individualmente, elaborou um trabalho sobre conteúdos relacionados à natureza?</p>
                <input type="radio" name="rq2" value="1"> Sim.<br />
                <input type="radio" name="rq2" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q3">
                <p>Questão 3: Você conhece a história da formação dos rios e lagoas de sua cidade?</p>
                <input type="radio" name="rq3" value="1"> Sim.<br />
                <input type="radio" name="rq3" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q4">
                <p>Questão 4: Qual a aparência dos rios e lagoas de sua cidade:</p>
                <input type="radio" name="rq4" value="0"> Aca, muita sujeira.<br />
                <input type="radio" name="rq4" value="1"> Os rios e lagoas são limpos.<br />
                <input type="radio" name="rq4" value="0"> Earhn, cheira mal.<br />
                <input type="radio" name="rq4" value="0"> Não sei responder, não visito.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q5">
                <p>Questão 5: A sua cidade possui parques ecológicos, ou reservas ambientais?</p>
                <input type="radio" name="rq5" value="1"> Sim.<br />
                <input type="radio" name="rq5" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q6">
                <p>Questão 6: Você já visitou estes parques ecológicos, ou reservas ambientais?</p>
                <input type="radio" name="rq6" value="1"> Sim.<br />
                <input type="radio" name="rq6" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q7">
                <p>Questão 7: Qual a aparência destes parques e reservas:</p>
                <input type="radio" name="rq7" value="0"> Muito sujos, poluição humana: restos plásticos, materiais de construção, animais mortos e lixo caseiro.<br />
                <input type="radio" name="rq7" value="1"> Uma ou outra sujeira que não atrapalha o passeio.<br />
                <input type="radio" name="rq7" value="1"> Muito limpos.<br />
                <input type="radio" name="rq7" value="0"> Não sei responder, não visito.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q8">
                <p>Questão 8: A sua cidade possui unidade de tratamento que trata 100% do esgoto da cidade?</p>
                <input type="radio" name="rq8" value="1"> Sim.<br />
                <input type="radio" name="rq8" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q9">
                <p>Questão 9: Você conhece o setor industrial de sua cidade?</p>
                <input type="radio" name="rq9" value="1"> Sim.<br />
                <input type="radio" name="rq9" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q10">
                <p>Questão 10: As empresas de sua cidade tratam o descarte de lixo, ou tratam a água antes de devolver ao meio ambiente?</p>
                <input type="radio" name="rq10" value="1"> Sim.<br />
                <input type="radio" name="rq10" value="0"> Não.<br />
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