<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="index.php">Home</a>
    <a href="#">News</a>
  </nav>
  <h1>Cadastre-se</h1>
 <div id="cad1">
  <div id="info"></div>
  <form action="#" >
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="email"> Email</label>
    <input type="email" name="email" id="email">

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" maxlength="8">

    <label for="telefone">Telefone</label>
    <input type="tel" name="telefone" maxlength="8" id="telefone">

    <button type="submit" value="enviar" class="btn" id="btn">Enviar</button>
  </form>
  </div>
    <footer>Aposta Chess</footer>
    <script src="../js/index.js">
  </script>
</body>
</html>