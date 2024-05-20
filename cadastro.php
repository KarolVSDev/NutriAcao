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
                            header('Location: login.php');
                            exit();
                        } else {
                            echo 'Este email já está cadastrado. Por favor, escolha outro.';
                        }
                    } else {
                        echo 'Por favor, preencha todos os campos.';
                    } 
                    // abaixo são os campos para serem preenchidos durante o cadastro
                }
            ?>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input type="password" name="senha" placeholder="Confirmar Senha">
            <input type="submit" name="btn-cadastrar" value="Cadastrar">
        </form>
    </div>

</head>
</html>
  

  