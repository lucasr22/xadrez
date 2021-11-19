<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>apostachess!</title>
  </head>
  <body>
   <div class="conteiner-fluid">
   	<nav class="navbar navbar-collapse-xl bg-dark">
   		<a href="index.php" class="navbar-brand ms-2">apostachess</a>
   		<a href="dash.php" class="navbar-link me-auto">panel</a>
   		<form class="d-flex">
   			<input type="text" name="search" placeholder="pesquisa" class="form-control me-5 w-75">
   			<button type="submit" class="btn btn-primary me-1 float-none me-auto">enviar</button>
   		</form>
   	</nav>
    </div>
    <h1 class="text-center">bem-vindo a casa da aposta de xadrez</h1>
    <hr>
  
    <div style="margin: auto;
    ">
    	<form action="../php/login.php" class="border border-light w-75 mt-5 d-block " style="height:300px;margin: auto;text-align: center;">
    			<img src="../img/peao.jpg" style="width:10%">
    			<h1>log in:</h1>
    		<input type="text" name="email" class="form-control w-75 border-dark" placeholder="Email" style="margin:auto;padding:2%">
    		<input type="password" name="senha" class="form-control w-75 border-dark" placeholder="Senha" style="margin:auto;margin-top: 1%;padding:2%">
    		<button class="btn btn-primary w-75" style="padding: 2%;margin-top: 2%;">enviar</button>
    	</form>	
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>