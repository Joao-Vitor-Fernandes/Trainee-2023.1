<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Phonefy</title>
    <link rel="stylesheet" href="../../../public/css/lista_de_posts.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/navbar.css">
    <link rel="stylesheet" href="../../../public/css/pagination.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">

</head>

<body>
    <?php require './app/views/site/navbar.html' ?>

    <div class="capsula">
        <div class="contorno">
            <div class="search-box">
                <input type="search" class="search-txt" placeholder="Pesquisar" id="pesquisar">
                <button onclick="searchData()" class="search-btn" id="searchButton">
                    <img src="../../../public/assets/lupa.svg" alt="Lupa" height="20px" width="20px">
                </button>
            </div>
        </div>

        <div id="posts">
            <div class="blog-container">
                
                <!-- Box000 -->
                <?php foreach ($posts as $post) : ?>
                <div class="blog-box">   
                    
                    <div class="blog-image">
                        
                        <a href="/home/post_individual?id_pag=<?=$post->id?>"><img
                                src="../../<?=$post->image?>" alt="Icone com imagem"></a>
                        
                        <div class="blog-text">
                            <span> <?=$post->created_at?> by <?=$post->author_name?></span>
                            <a href="/home/post_individual?id_pag=<?=$post->id?>"
                                class="blog-title"><?=$post->title?></a>
                            <p><?=nl2br($post->content)?></p>
                            <a href="/home/post_individual?id_pag=<?=$post->id?>"  class="leia-mais">Leia Mais</a>
                        
                        </div>
                    
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php require './app/views/includes/pagination.php' ?>
    </div>

    <?php require './app/views/site/footer.html' ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

<!-- Script da Barra de Pesquisa -->
<?php 
    // if (!empty($pesquisa) && empty($posts)):
    //     header('Location: /home/lista-posts');
    // endif;
?>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        var pesquisa = search.value;
        window.location = '/home/lista-posts/search?busca=' + pesquisa;
    }
</script>

</html>