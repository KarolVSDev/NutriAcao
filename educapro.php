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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"
 />

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
    echo "<p class='welcome-message'>Bem-vindo(a), $nomeUsuario!</p>";
} else {
    // Se o parâmetro nome não estiver presente na URL, exibir uma mensagem padrão
    echo "<p class='welcome-message'>Bem-vindo(a)!</p>";
}
?>


            <!--título nutriação-->

<div style="display: flex;justify-content: end;align-items: end;">

            

            <div class="caixa-pesquisa" style="width:400px ;

    height: 50px;

    position: relative;

    box-shadow:0 0 10px rgba(0, 0, 0, 0.34);border-radius:25px">

                <input type="text" placeholder="Digite aqui..." style="height: 100%;

  width:100% ;

  border-radius: 25px;

  outline: none;

  border: none;

  padding-left: 20px;

  font-size: 18px;">

                <label for="check" class="iconp" style="position:absolute;right:0;top:0;height:100%;width:50px;background-color:#fff;font-size:18px;text-align:center;line-height:50px;background-color:#712584;border-radius:0 25px 25px;color:#fff">

                    <i class="fas fa-search"></i>

                </label>

            </div>

</div>

      

<br>

<br>

        <div class='col1'>




            




                <div class="card-body">




                    <img  src="assets/educapro.png" alt="" width=100%;>




                </div>




                </div>




           




            </div>

            <br>

            <br>

            




            <!--botões-->




        <div class='buttons'>




            <a class="btn btn-primary" href="educapro.php" role="button" style="background-color:#712584;color:#F2DAF8;"><ion-icon class="ion" name="earth-outline"></ion-icon>&nbsp&nbspNotícias</a>




            <a class="btn btn-primary" href="ecucaproreceitas.php" role="button"><ion-icon class="ion" name="restaurant-outline"></ion-icon> &nbsp&nbsp Receitas</a>




            <a class="btn btn-primary" href="educaprodicas.php" role="button"><ion-icon class="ion" name="receipt-outline" ></ion-icon> &nbsp&nbsp Dicas</a>




        </div>

        <div class="holder" style=" display: flex;justify-content: center;">

    <img class="imagemr" src="assets/zonarualmanaus.jpeg" alt="" style="width: 60%;border-radius: 5%;margin: 5px;margin-left: 5%;margin-top: 3%;position: relative;text-align: center;">

    <p style="margin-top:5%; margin-left:2%;"><b>Desafios de Segurança Alimentar na Zona Rural de Manaus:

    </b><br>Apesar de ser uma grande cidade, Manaus enfrenta desafios de segurança alimentar em suas áreas rurais devido à falta de infraestrutura, acesso limitado a alimentos frescos e pobreza generalizada. Isso resulta em comunidades vulneráveis lutando para
 obter alimentos nutritivos em quantidade suficiente.</p>

  </div>

  <div class="holder" style=" display: flex;justify-content: center;">

    <img class="imagemr" src="assets/reduzmanaus.jpeg" alt="" style="width: 60%;border-radius: 5%;margin: 5px;margin-left: 5%;margin-top: 3%;position: relative;text-align: center;">

    <p style="margin-top:5%; margin-left:2%;"><b>Iniciativas Locais para Reduzir o Desperdício de Alimentos em Manaus:</b><br>

    Para combater o desperdício de alimentos e abordar a insegurança alimentar, várias iniciativas locais foram implementadas em Manaus, incluindo programas de redistribuição de alimentos excedentes para comunidades carentes, incentivo ao reaproveitamento de
 alimentos e educação sobre práticas alimentares sustentáveis.

    </p></div>

<div class="holder" style=" display: flex;justify-content: center;">

    <img class="imagemr" src="assets/ongeduca.jpeg" alt="" style="width: 60%;border-radius: 5%;margin: 5px;margin-left: 5%;margin-top: 3%;position: relative;text-align: center;">

    <p style="margin-top:5%; margin-left:2%;"><b>Projetos de educação alimentar e nutricional: </b><br>Algumas ONGs focaram em projetos de educação alimentar e nutricional no Amazonas, oferecendo workshops, palestras e materiais educativos para ensinar práticas
 de alimentação saudável, aproveitamento integral dos alimentos e técnicas de cultivo sustentável. Essas iniciativas visam capacitar as comunidades locais para fazerem escolhas alimentares mais saudáveis e sustentáveis, contribuindo para a segurança alimentar
 a longo prazo.</p>

</div>




  <br><br><br>




        <footer>

<div class='rodape'><nav>

  <div class="div1">

      <p><strong>Nutri</strong>Ação</p>

    </div>

    <div class="div2">

            <a href="#">Termos de Serviço |</a>

            <a href="#">Política de Privacidade</a>    

  </div>

    <div class="div3"><p>

  <ion-icon name="logo-youtube"></ion-icon>

  <ion-icon name="logo-instagram"></ion-icon>

  <ion-icon name="logo-facebook"></ion-icon></p>

  </div>

  </nav>

</div>

<div class="rodape2">

    <P>Feito por <i>GPROGM</i></P>

  </div>

  </footer>

<script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"> </script>

<script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script>

</body>

</html>
