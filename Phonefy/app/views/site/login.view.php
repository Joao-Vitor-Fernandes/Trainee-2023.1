<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/navbar.css">
    <link rel="stylesheet" href="../../../public/css/login.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="conteudo-login">
        <?php require './app/views/site/navbar.html' ?>
        <div class="div1">
            <form action="logar" method="POST">
                <div class="div2" data-aos="fade-up">
                    <h1 class="login">Login</h1>
                    <div class="div3">
                        <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="E-mail" required>

                        <label for="senha">Senha:</label>
                            <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <button class="entrar" type="submit">Entrar</button>           
                        <?php if(isset($_SESSION['error_message'])) { ?>
                        <div class="session">
                            <?= $_SESSION['error_message'] ?>
                        </div>
                        <?php unset($_SESSION['error_message']);
                    } ?>
                </div>
            </form>
        </div> 
        <?php require './app/views/site/footer.html' ?>
    </div>




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500,
            speed: 0.5,
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>