<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Livro de Visitas | Evamar</title>
</head>
<body>
<div class="background-branco">

<header>

    <div class="container">
<nav>
    <div class="logo">
        
        <a href="C:\xampp\htdocs\cursophp\website\index.html">Evamar Caetano</a>
    </div>
  <ul class="ul">

</li>
<li><a href="home.html"> Projetos</a></li>
<li><a href="home.html"> Contato</a></li>
<li><a href="./php/index.php"> <button class="btn-gradiente"> Livro de Visitas</button></a></li>
  </ul>     

</nav>
     </div>


</header>     





<h1 class="h1">Bem-vindo! 😄</h1>
    
    
    
   

    <h2 class="h2">Deixe seu comentário:</h2>
    <form class="formulario" salvar_comentario.php method="post">
        Nome ✍️: <input type="text" name="nome"><br>
        Data 📅: <input type="date" name="data"><br>
        Comentário ✍️: <textarea name="comentario"></textarea><br>
        ☑️<input class="btn" type="submit" value="Enviar">
    </form>
<hr>
    <h2 class="h2">Comentários anteriores:</h2>
  
    <?php include 'exibir_comentarios.php'; ?>
<hr>
    <p>
    <?php include 'contador.php'; ?>
    </p>

    <p class="paragrafo">Obrigado por visitar nosso site. 👍</p>
</body>
</html>