<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titulo do Post</title>

        <link rel="stylesheet" href="../../../public/css/post_individual.css">
        <link rel="stylesheet" href="../../../public/css/footer.css">
        <link rel="stylesheet" href="../../../public/css/navbar.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    </head>


    <body>
        <?php require './app/views/site/navbar.html' ?>

        <div class="individual-post">
            <div class="data-post">
                <div class="date-author">
                    <h4>16 de Abril</h4>
                    <h4>by Victoria Tiemi</h4>
                </div>

                <h1>Titulo Post</h1>

                <img src="../../../public/assets/img/bruno_mars.jpeg">
            </div>

            <div class="post-content">
                <div class="left-content">
                    <div class="veja-tambem">
                        <div class="cute-icon">
                            <ion-icon name="musical-notes-outline"></ion-icon>
                            <ion-icon name="headset-outline"></ion-icon>
                            <ion-icon name="heart"></ion-icon>
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                            <ion-icon name="ticket-outline"></ion-icon>
                            <hr>
                        </div>

                        <h2>VEJA TAMBÉM</h2>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=W-w3WfgpcGg">Bruno Mars - It Will Rain
                                <img src="../../../public/assets/img/bruno_mars_guitar.jpeg"></a></li>
                            <li><a href="https://www.youtube.com/watch?v=W-w3WfgpcGg">Bruno Mars - It Will Rain
                                <img src="../../../public/assets/img/bruno_mars_guitar.jpeg"></a></li>
                            <!-- <li><a href="https://www.youtube.com/watch?v=W-w3WfgpcGg">Bruno Mars - It Will Rain
                                <img src="../../../public/assets/img/bruno_mars_guitar.jpeg"></a></li> -->
                        </ul>
                    </div>                    
                </div>

                <div class="right-content">
                    <p>Em 2023 assinala-se o 50.º aniversário do álbum de estreia dos ABBA, “Ring Ring”. É um álbum importante na história incrível do grupo, uma vez que nos mostra o seu nascimento: o início deste trajeto fascinante, durante o qual foram descobrindo quem são e quais eram os seus pontos fortes.</p>
                    <p>“Ring Ring” chegou às lojas de discos na Suécia a 26 de março de 1973 e trouxe uma grande diversidade de ótimas canções pop. Houve, por exemplo, “People Need Love”, o primeiro single dos ABBA, e “He Is Your Brother”, um tema muito popular durante a digressão de 1977 dos ABBA pela Europa e Austrália.</p>
                    <p>Crucialmente, a sonoridade dos ABBA nasceu na canção que dá título ao disco, quando o grupo descobriu como cruzar várias vozes era algo cativante e como uma canção poderia ser emocionante se o grupo fizesse uso de todas as possibilidades do estúdio de gravação.</p>

                    <!-- <img src="../../../public/assets/img/bruno_mars_guitar.jpeg"> -->

                    <!-- <h2>Novo titulo</h2> -->
                    <p>O público respondeu bem a “Ring Ring” – à canção e ao álbum. Durante duas semanas consecutivas em abril de 1973, o single sueco “Ring Ring” ficou em primeiro lugar, a versão em inglês em segundo lugar e o álbum “Ring Ring” em terceiro lugar na tabela combinada de singles e álbuns em vigor na Suécia na época.</p>
                    <p>O grupo em si quase não existia, uma vez que Agnetha & Frida ainda seguiam carreiras solo, e Björn & Benny estavam ocupados com muitos projetos quando o álbum foi gravado. Mas o seu enorme sucesso selou o acordo: a partir de agora eles seriam os ABBA.
                    </p>
                    <p>Para celebrar este marco, o LP “Ring Ring” e os seus singles estarão disponíveis nos seguintes formatos no dia 19 de maio:
                    </p>
                    <!-- <ul>
                        <li>2LP 45 RPM remasterizados nos Abbey Road Studios</li>
                        <li>Picture discs individuais de 7″:</li>
                        <li>“He Is Your Brother” / “Santa Rosa”</li>
                        <li>“People Need Love” / “Merry-Go-Round”</li>
                        <li>“Ring Ring (English)” / “She’s My Kind of Girl”</li>
                        <li>“Ring Ring (Swedish)”, “Åh, vilka tider”</li>
                        <li>“Love Isn’t Easy (But It Sure Is Hard Enough” / “I Am Just A Girl”</li>
                    </ul> -->
                </div>

            </div>

            <!-- <div class="coments-post">
                <h2>COMENTÁRIOS</h2>

                <div class="individual-coment">
                    <h4>Maria A.</h4>
                    <h6>18 de abril</h6>
                    <h3>Adorei o post!</h3>
                </div>
                <div class="individual-coment">
                    <h4>Maria A.</h4>
                    <h6>18 de abril</h6>
                    <h3>Adorei o post!</h3>
                </div>
            </div> -->

            <div class="social-media-icon">
                <a href="./post_individual.html" target="_blank" alt="Link para Compartilhamento"><ion-icon name="share-social"></ion-icon></a>
                <a href="https://www.instagram.com/" target="_blank" alt="Link para Instagram"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="https://twitter.com/" target="_blank" alt="Link para Twitter"><ion-icon name="logo-twitter"></ion-icon></a>
                
            </div>

        </div>

        <?php require './app/views/site/footer.html' ?>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>