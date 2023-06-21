<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="login.css"/> -->
    <link rel="stylesheet" href="../../../public/css/login.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/navbar.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>
<body class="bodyLogin">
    <?php require './app/views/site/navbar.html' ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500,
            speed: 0.5,
        });
    </script>
    <div class="divlo1">
        <div class="logolo" data-aos="fade-up">
            <img src="../../../public/assets/logo_circular.png" alt="some text" width="150" height="120">
        </div>
    <form action="logar" method="POST">
        <div class="divlo2" data-aos="fade-up">
        
             <h1 class="login">Login</h1>
               <br>
               
               <label for="email">Email:</label>
               <div c>
              <input class="inplo" type="text" name="email" placeholder="E-mail" required>
            </div>
              <!-- <input type="text" id="email" placeholder="E-mail"> -->
              <br>
              <label for="senha">Senha:</label>
              <div>
                <input class="inplo" type="password" name="senha" placeholder="Senha" required>
                <br>
                <button class="recuperar"><a>Esqueci a minha senha</a></button>
                </div>
              <!-- <input type="password" id="senha" placeholder="Senha"> -->
              
              <br>
              <div class="cad">
              <button class="entrarlo" type="submit">Entrar</button>
              <!-- <button class="cadastrolo"><a>Novo Cadastro</a></button> -->
              </div>
    </form>
            <?php session_start(); ?>

            <?php if(isset($_SESSION['error_message'])) { ?>
                <div>
                    <?php $_SESSION['error_message'] ?>
                </div>

                <?php 
            } ?>
        </div> 
    </div>

    <?php require './app/views/site/footer.html' ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>