<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="buttonsForm">
        <div class="btnColor"></div>
        <button id="btnSignin">Login</button>
        <button id="btnSignup">Cadastro</button>
    </div>
    <?php
    // Iniciando a sessão
    session_start();

    // Verificando se o formulário de login foi enviado
    if(isset($_POST['btn-login'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Incluindo o arquivo de conexão com o banco de dados
        require_once 'MySql.php';

        // Preparando e executando a consulta SQL
        $sql = MySql::conectar()->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?');
        $sql->execute(array($email, $senha));

        // Verificando se o login foi bem sucedido
        if ($sql->rowCount() == 1) {
            // Recuperando o nome do usuário
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);
            $nomeUsuario = $usuario['nome'];
        
            // Definindo as variáveis de sessão
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['valida'] = true;
        
            // Redirecionando para a página educapro.php com o nome do usuário na URL
            header("Location: educapro.php?nome=$nomeUsuario");
            exit(); // Terminando o script
        } else {
            // Exibindo mensagem de erro
            echo 'Usuário ou senha incorreta';
        }
    }

    // Adicionando funcionalidade de cadastro
    if(isset($_POST['btn-signup'])){
        $nome = $_POST['nome']; // Adicionando o campo nome
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        require_once 'MySql.php';

        // Verificando se o email já está em uso
        $sql = MySql::conectar()->prepare('SELECT * FROM usuarios WHERE email = ?');
        $sql->execute(array($email));

        if ($sql->rowCount() > 0) {
            echo 'Este email já está em uso.';
        } else {
            // Inserindo novo usuário no banco de dados
            $sql = MySql::conectar()->prepare('INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)');
            $sql->execute(array($nome, $email, $senha));

            echo 'Cadastro realizado com sucesso.';
        }
    }
    ?>
    <form id="signin" method="POST" action="">
        <input type="text" name="email" placeholder="Email" required />
        <i class="fas fa-envelope iEmail"></i>
        <input type="password" name="senha" placeholder="Senha" required /> 
        <i class="fas fa-lock iPassword"></i>
        <div class="divCheck">
            <input type="checkbox" />
            <span>Lembrar senha</span>
        </div>
        <button type="submit" name="btn-login">Login</button> 
    </form>
    <form id="signup" method="POST" action="">
    <input type="text" name="nome" placeholder="Nome" required />
    <input type="text" name="email" placeholder="Email" required />
    <i class="fas fa-envelope iEmail"></i> <!-- Ícone de email -->
    <input type="password" name="senha" placeholder="Senha" required />
    <i class="fas fa-lock iPassword"></i> <!-- Ícone de cadeado -->
    <div class="divCheck">
        <input type="checkbox" required />
        <span>Termos</span>
    </div>
    <button type="submit" name="btn-signup">Cadastro</button>
</form>



</div>
<script src="index.js"></script>
</body>
</html>
