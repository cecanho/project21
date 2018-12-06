<?php
session_start();

require 'rb.php';
R::setup('mysql:host=localhost;dbname=projectsv21','root','123456');

//R::getAll( 'select * from gamers ORDER BY score DESC;' );

$sql ="select * from gamers ORDER BY score DESC";
$rows=R::getAll($sql);

 

?>
<!DOCTYPE html>
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
      <h1>Ranking   </h1>
    <table class="table">
      
    <th>Nome</th><th>Score</th><th></th>
      <?php
      $i = 0;
      foreach($rows as $row){
        echo '<tr><td>' . $row['nickname'] . '</td><td>' . $row['score'] . '</td><td>';
        
        if($i == 0){

          echo "<img src='p1.jpg'>";
        }else if($i == 1) {
          echo "<img src='p2.jpg'>";
        }else if($i == 2) {
          echo "<img src='p3.jpg'>";
        }else{
          echo "<img width='30px' height='30px' src='ops.png'>";
        }
        echo '</td></tr>';
        $i++;
      }
    ?>  
    </table>
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