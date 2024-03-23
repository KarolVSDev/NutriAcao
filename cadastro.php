<?php include('config.php'); ?>
<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NutriAcao</title>
  <link rel="stylesheet" href="style/style.css">

<div class="navbar">
    <div class="logo-container">
      <img src="assets/logo.jpeg" alt="Logo" class="logo-img">
      <span class="company-name">NutriAção</span>
      
    </div>
    <ul class="nav-links">
      <li><a href="home.php">Home</a></li>
      <li><a href="quem-somos.php">Quem Somos</a></li>
      <li><a href="educa.php">Educa</a></li>
      <li><a href="junte-se.php">Junte-se a Nós</a></li>
    </ul>
  </div>
  <div class="box-login">
        <form method='post'>
            <h2>CADASTRE-SE</h2>
            <?php
                if(isset($_POST['btn-cadastrar'])){
                    $nome = $_POST['nome'];
                    $senha = $_POST['senha'];

                    require_once 'MySql.php';

                    $sql = MySql::conectar()->prepare('INSERT INTO usuarios (nome, senha) VALUES (?, ?)');
                    $sql->execute(array($nome, $senha));
                    
                    echo 'Cadastro realizado com sucesso!';
                }
            ?>
            <input type="text" name="nome" placeholder="Nome">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" name="btn-cadastrar" value="Cadastrar">
        </form>
    </div>
</head>
</html>
  

  