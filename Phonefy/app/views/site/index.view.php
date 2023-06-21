<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Landing Page</title>
    <link rel="stylesheet" href="../../../public/css/navbar.css" >
    <link rel="stylesheet" href="../../../public/css/footer.css">
</head>

<body>
    <?php require './app/views/site/navbar.html' ?>
    <div class="Phone"> <img src="../../../public/assets/phone4r.png"></div>

    <div class="home">

    <?php $index = 1;?>
    <?php foreach ($relatedPosts as $post) : ?>
        <!-- <?= $index?> -->
        <div class="Post<?= $index?>">
            <div class="postimg"><a href="/home/post_individual?id_pag=<?=$post->id?>"> <img src="../../<?=$post->image?>"></a> </div>
            <div class="text">
            <a href="/home/post_individual?id_pag=<?=$post->id?>" style="color: #232323;">
                <p><?=$post->title?></p>
            </a>
            </div>
        </div>
        <?php $index += 1; ?>
    <?php endforeach; ?>

        <!-- <div class="Post1">

            <div class="postimg"> <img src="../../../public/assets/coachella.jpg"> </div>
            <div class="text">
                <p> A carreira de Queen, documentário completo</p>
            </div>


        </div>

        <div class="Post2">

            <div class="postimg"> <img src="../../../public/assets/lolla.jpg"> </div>
            <div class="text">
                <p> A carreira de Queen, documentário completo</p>
            </div>


        </div>

        <div class="Post3">

            <div class="postimg"> <img src="../../../public/assets/tomorrow.jpg"> </div>
            <div class="text">
                <p> A carreira de Queen, documentário completo</p>
            </div>


        </div>

        <div class="Post4">

            <div class="postimg"> <img src="../../../public/assets/rir.png"> </div>
            <div class="text">
                <p> A carreira de Queen, documentário completo</p>
            </div>


        </div>

        <div class="Post5">

            <div class="postimg"> <img src="../../../public/assets/glaston.jpg"> </div>
            <div class="text">
                <p> A carreira de Queen, documentário completo</p>
            </div>


        </div> -->
    </div>    
    <div class="button">
       <a href="/home/lista-posts">
         <img src="../../../public/assets/VerMais.png" alt="Botão ver mais"></a>
    </div>

    <?php require './app/views/site/footer.html' ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>         
            <!-- <div class="Som1"> <img src="../../../public/assets/SomPhonefy.png"> </div>
                 <div class="Som2"> <img src="../../../public/assets/SomPhonefy2.png"> </div> -->

</body>

</html>