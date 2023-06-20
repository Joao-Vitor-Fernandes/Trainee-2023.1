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
    
    
    
</head>
<body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500,
            speed: 0.5,
        });
    </script>
    <div class="div1">
        <div class="logo" data-aos="fade-up">
            <img src="../../../public/assets/logo_circular.png" alt="some text" width="140" height="120">
        </div>
    <form action="logar" method="POST">
        <div class="div2" data-aos="fade-up">
        <!--    <ul>
                <img src="logo_circular.png" alt="some text" width="100" height="80">
            </ul> -->
             <h1 class="login">Login</h1>
               <br>
               <label for="email">Email:</label>
                <input type="text" name="email" placeholder="E-mail" required>
              <!-- <input type="text" id="email" placeholder="E-mail"> -->
              <br><br>
              <label for="senha">Senha:</label>
                <input type="password" name="senha" placeholder="Senha" required>
              <!-- <input type="password" id="senha" placeholder="Senha"> -->
              <br>
              <button class="recuperar"><a>Esqueci a minha senha</a></button>
              <br><br>
              <button class="entrar" type="submit">Entrar</button>
              
              <button class="cadastro"><a>Novo Cadastro</a></button>
    </form>
              
        </div> 
    </div>

   
</body>
</html>