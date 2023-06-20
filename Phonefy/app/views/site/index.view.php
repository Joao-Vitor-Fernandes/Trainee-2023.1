<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>

<body>
    <!-- require da navbar -->
    <div class="Phone"> <img src="../../../public/assets/phone4r.png"></div>

    <div class="home">

    <?php $index = 1;?>
    <?php foreach ($relatedPosts as $post) : ?>
        <!-- <?= $index?> -->
        <div class="Post<?= $index?>">
            <div class="postimg"> <img src="../../<?=$post->image?>"> </div>
            <div class="text">
                <p><?=$post->title?></p>
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

            <!-- require do footer -->
            
            <!-- <div class="Som1"> <img src="../../../public/assets/SomPhonefy.png"> </div>
                 <div class="Som2"> <img src="../../../public/assets/SomPhonefy2.png"> </div> -->

</body>

</html>