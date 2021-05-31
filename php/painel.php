<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title> Mobile XP - Melhor site de Comparação</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="../imagens/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
   
 <!-- Bootstrap core CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


 <link href="css/comparacao.css" rel="stylesheet">
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark"> 
              <div class="container-fluid">
                <a class="navbar-brand" href="/php/home.html">MOBILE XP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    
                    <li class="nav-item">
                      <a class="nav-link" href="../php/home.html">Novidades</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="../comparaçoes">Comparações</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="fichatecnica.html">Ficha Tecnica</a>
                    </li>
          
                    <li class="nav-item ">
                      <a class="nav-link" href="login.html">Login</a>
                    </li>

                    <li class="nav-item ">
                      <a class="nav-link" href="php/cadastro.php">cadastre-se</a>
                    </li>
          
          
                  </ul>
                 
                </div>
              </div>
            </nav>
          </header>




<div class="container">
<?php


include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>



<h2><a href="logout.php">Sair</a></h2>


</div>



