<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Phonefy</title>
    <link rel="stylesheet" href="../../../public/css/navbar.css" >
    <link rel="stylesheet" href="../../../public/css/footer.css">
</head>

<body>
    <?php require './app/views/site/navbar.html' ?>
    <div class="Phone"> <img src="../../../public/assets/phone5r.png"></div>
    <div class="Som"> <img src="../../../public/assets/Somr.png"></div>

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

    </div>    
    <div class="button">
       <a href="/home/lista-posts">
         <img src="../../../public/assets/VerMais.png" alt="Botão ver mais"></a>
    </div>

    <?php require './app/views/site/footer.html' ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>         

</body>

</html>