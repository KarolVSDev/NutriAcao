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
  <div  class="box-login">
    <form method='post'>
      <h2>FAÇA LOGIN OU CADASTRE-SE PARA ACESSAR O CONTEÚDO</h2>
      <?php
        if(isset($_POST['btn-login'])){
          $email =$_POST['email'];
          $senha =$_POST['senha'];

          require_once 'MySql.php';

          $sql = MySql::conectar()->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?');
          $sql->execute(array($email,$senha));
          if ($sql->rowCount() ==1){
            //login com sucesso
            $_SESSION['email'] = $email; 
            $_SESSION['senha'] = $senha; 

            $_SESSION['valida'] = true;
            header('location: educapro.php');
            die();
          } else{
            echo 'usuario ou senha incorretos';
          }

        }
      
      ?>

      <input type="text" name="email" placeholder="Email">
      <input type="password" name="senha" placeholder="Senha">
      <input type="submit" name="btn-login">
      <li><a href="cadastro.php">Não tem uma conta? Cadastre-se.</a></li> 
    </form>
  </div>
</head>
</html>

  