<!DOCTYPE html>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NutriAcao</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" href="style.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style_noticias.css">
<link rel="stylesheet" href="style_educapro.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!--cabeçalho-->
<div class="navbar">
    <div class="logo-container">
        <img src="assets/logo.jpeg" alt="Logo" class="logo-img">
        <span class="company-name"><strong>Nutri</strong>Ação</span>
    </div>
    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="quem-somos.php">Quem Somos</a></li>
        <li><a href="educa_noticias.php">Educa</a></li>
        <li><a href="junte-se.php">Junte-se a Nós</a></li>
    </ul>
</div>

<?php
// Verificar se o parâmetro nome está presente na URL
if(isset($_GET['nome'])) {
    $nomeUsuario = $_GET['nome'];
    echo "<p class='welcome-message'>Bem-vindo, $nomeUsuario!</p>";
} else {
    // Se o parâmetro nome não estiver presente na URL, exibir uma mensagem padrão
    echo "<p class='welcome-message'>Bem-vindo(a)!</p>";
}
?>

<!--título nutriação-->
<div style="display: flex;justify-content: end;align-items: end;">
    <div class="caixa-pesquisa" style="width:400px ; height: 50px; position: relative; box-shadow:0 0 10px rgba(0, 0, 0, 0.34);border-radius:25px">
        <input type="text" placeholder="Digite aqui..." style="height: 100%; width:100% ; border-radius: 25px; outline: none; border: none; padding-left: 20px; font-size: 18px;">
        <label for="check" class="iconp" style="position:absolute;right:0;top:0;height:100%;width:50px;background-color:#fff;font-size:18px;text-align:center;line-height:50px;background-color:#712584;border-radius:0 25px 25px;color:#fff">
            <i class="fas fa-search"></i>
        </label>
    </div>
</div>
<div class="title">
    <h1 class="nutrititulo"><strong>Nutri</strong>Ação educa</h1>
</div>
<div class='col1'>
    <a href="https://radioriomarfm.com.br/acoes-tentam-evitar-desperdico-de-alimentos-em-feiras-de-manaus/#:~:text=De%20acordo%20com%20a%20Secretaria,a%20import%C3%A2ncia%20de%20evitar%20desperd%C3%ADcio.">
        <div class="card-body">
            <img  src="assets/noticiaprincipa.png" alt="" width=100%;>
        </div>
    </a>
</div>
<br>
<br>
<!--botões-->
<div class='buttons'>
    <a class="btn btn-primary" href="educapro.php" role="button"><ion-icon class="ion" name="earth-outline"></ion-icon>&nbsp&nbspNotícias</a>
    <a class="btn btn-primary" href="ecucaproreceitas.php" role="button"><ion-icon class="ion" name="restaurant-outline"></ion-icon> &nbsp&nbsp Receitas</a>
    <a class="btn btn-primary" href="educaprodicas.php" role="button"><ion-icon class="ion" name="receipt-outline" ></ion-icon> &nbsp&nbsp Dicas</a>
</div>
<div class="holder">
    <a href="https://www.doctoralia.com.br/perguntas-respostas/desenvolvi-uma-aversao-a-qualquer-tipo-de-comida-ou-bebida-ate-as-que-eu-mais-gostava-so-de-olhar" class="card-link">
        <img class="imagem" src="assets/noticia1.png" alt="" style="width: 80%; border-radius: 5%;">
    </a>
    <a href="https://www.udop.com.br/noticia/2023/06/22/sugarcrete-conheca-o-concreto-inovador-feito-a-partir-do-bagaco-de-cana-de-acucar.html" class="card-link">
        <img class="imagem" src="assets/noticia2.png" alt="" style="width: 80%; border-radius: 5%;">
    </a>
</div>
<br>
<br>
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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
