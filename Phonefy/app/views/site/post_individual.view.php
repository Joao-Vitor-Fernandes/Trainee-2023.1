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
                    <h4><?=$selectedPost->created_at?></h4>
                    <h4>by <?=$selectedPost->author_name?></h4>
                </div>

                <h1><?=$selectedPost->title?></h1>

                <img src="../../<?=$selectedPost->image?>">
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
                            <?php foreach ($relatedPosts as $post) : ?>
                                <li><a href="/home/post_individual?id_pag=<?=$post->id?>"><?=$post->title?>
                                <img src="../../<?=$post->image?>"></a></li>
                            <?php endforeach; ?>

                            <!-- <li><a href="https://www.youtube.com/watch?v=W-w3WfgpcGg">Bruno Mars - It Will Rain
                                <img src="../../../public/assets/img/bruno_mars_guitar.jpeg"></a></li>
                            <li><a href="https://www.youtube.com/watch?v=W-w3WfgpcGg">Bruno Mars - It Will Rain
                                <img src="../../../public/assets/img/bruno_mars_guitar.jpeg"></a></li>
                            <li><a href="https://www.youtube.com/watch?v=W-w3WfgpcGg">Bruno Mars - It Will Rain
                                <img src="../../../public/assets/img/bruno_mars_guitar.jpeg"></a></li> -->
                        </ul>
                    </div>                    
                </div>

                <div class="right-content">
                <?php
                    $lines = explode(PHP_EOL, $selectedPost->content);
                    foreach ($lines as $line) {
                        if (trim($line) === '') {
                            echo "<br>"; // Pula uma linha
                        } else {
                            echo "<p>$line</p>"; // <p>Linha<\p>
                        }
                    }
                ?>

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