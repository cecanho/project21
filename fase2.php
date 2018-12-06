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

         <div class="text-center">
            <img width="5%" height="5%" src="arv2.png"><h1>Fase 2</h1>         
         </div>

        <form name="frmqst" method="post" action="fase3.php">
    <div class="row">
        <div class="text-justify">
            <div id="q1">
                <p>Questão 1: Ao mascar um chiclete, tomar um refrigerante, comer um salgado, ou bolachas, o que você faz com o resto de material a sua mão?</p>
                <input type="radio" name="rq1" value="1"> Lixo no lixo.<br />
                <input type="radio" name="rq1" value="1"> Lixo no lixo correto.<br />
                <input type="radio" name="rq1" value="0"> Jogo no chão, depois o servente pega<br />
                <input type="radio" name="rq1" value="0"> Guardo até encontrar um lugar qualquer para descartar.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q2">
                <p>Questão 2: Ao redigir tarefas escolares qual acomodação você procura?</p>
                <input type="radio" name="rq2" value="0"> Me isolo no quarto, longe da janela e acendo a luz para estudar.<br />
                <input type="radio" name="rq2" value="0"> Ligo a TV, ou o aparelho de som e começo a estudar.<br />
                <input type="radio" name="rq2" value="0"> Não faço nada, só estudo e pronto.<br />
                <input type="radio" name="rq2" value="1"> Procuro o lugar mais iluminado com luz natural e tranquilo para realizar as tarefas.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q3">
                <p>Questão 3: Ao sair de um ambiente iluminado, você é o último, o que você faz?</p>
                <input type="radio" name="rq3" value="1"> Apago as luzes.<br />
                <input type="radio" name="rq3" value="0"> Vejo se não tem sujeira no chão.<br />
                <input type="radio" name="rq3" value="0"> Simplesmente saio com todos.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q4">
                <p>Questão 4: Qual o tempo de seu banho diário?</p>
                <input type="radio" name="rq4" value="1"> 5 minutos.<br />
                <input type="radio" name="rq4" value="1"> 7 minutos..<br />
                <input type="radio" name="rq4" value="0"> 10 minutos.<br />
                <input type="radio" name="rq4" value="0"> Mais de 10 minutos.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q5">
                <p>Questão 5: Ao escovar os dentes você:</p>
                <input type="radio" name="rq5" value="0"> Abro a torneira, escovo os dentes, enxaguo a boca, lavo a escova e fecho a torneira.<br />
                <input type="radio" name="rq5" value="0"> Escovo os dentes, abro a torneira, enxaguo a boca, lavo a escova e fecho a torneira.<br />
                <input type="radio" name="rq5" value="1"> Pego um copo com água, escovo os dentes, enxaguo a boca, lavo a escova.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q6">
                <p>Questão 6: Você estuda em colégio, ou faculdade, o transporte utilizado é:</p>
                <input type="radio" name="rq6" value="0"> Individual.<br />
                <input type="radio" name="rq6" value="1"> Coletivo, ônibus, van, revezamento entre amigos.<br />
                <input type="radio" name="rq6" value="0"> Vou de Uber, ou taxi.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q7">
                <p>Questão 7: Você participa de palestras sobre meio ambiente e sociedade?</p>
                <input type="radio" name="rq7" value="1"> Sim.<br />
                <input type="radio" name="rq7" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q8">
                <p>Questão 8: As cores dos coletores recicláveis para papel, vidro, orgânico e plástico são respectivamente:</p>
                <input type="radio" name="rq8" value="1"> Azul, verde, marrom e vermelho.<br />
                <input type="radio" name="rq8" value="0"> Amarelo, verde, azul e vermelho.<br />
                <input type="radio" name="rq8" value="0"> Amarelo, azul, vermelho e verde.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q9">
                <p>Questão 9: Você já realizou o plantio de mudas, seja em seu quintal, seja em ambientes com risco de erosão, ou em locais de preservação?</p>
                <input type="radio" name="rq9" value="1"> Sim.<br />
                <input type="radio" name="rq9" value="0"> Não.<br />
            </div>
        </div>
    </div>
    <br />

    <div class="row">
        <div>
            <div id="q10">
                <p>Questão 10: Compostagem é o nome dado ao processo de:</p>
                <input type="radio" name="rq10" value="0"> Coleta de lixo nas ruas para processamento e reciclagem.<br />
                <input type="radio" name="rq10" value="0"> Coleta de lixo doméstico para processamento e reciclagem.<br />
                <input type="radio" name="rq10" value="1"> Coleta de material orgânico para o preparo de adubo orgânico.<br />
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