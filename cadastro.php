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
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    // Verifica se todos os campos estão preenchidos
                    if(!empty($nome) && !empty($email) && !empty($senha)) {
                        require_once 'MySql.php';

                        // Verifica se o email já está cadastrado
                        $sql_check = MySql::conectar()->prepare('SELECT * FROM usuarios WHERE email = ?');
                        $sql_check->execute(array($email));
                        
                        if ($sql_check->rowCount() == 0) {
                            // Email não existe, então pode prosseguir com o cadastro
                            $sql_insert = MySql::conectar()->prepare('INSERT INTO usuarios (nome,email, senha) VALUES (?,?, ?)');
                            $sql_insert->execute(array($nome, $email, $senha));

                            echo 'Cadastro realizado com sucesso!';
                            header('Location: educa.php');
                            exit();
                        } else {
                            echo 'Este email já está cadastrado. Por favor, escolha outro.';
                        }
                    } else {
                        echo 'Por favor, preencha todos os campos.';
                    }
                }
            ?>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" name="btn-cadastrar" value="Cadastrar">
        </form>
    </div>

    <div class='rodape'>
    <footer>
        <p>NutriAção</p>
        <nav>
            <a href="#">Termos de Serviço |</a>
            <a href="#">Política de Privacidade |</a>
            <a href="#">Contato</a>
        </nav>
    </footer>
</div>
</head>
</html>
  

  