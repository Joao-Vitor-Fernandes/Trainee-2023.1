<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="../../../public/css/sidebar.css"/>
        <link rel="stylesheet" href="../../../public/css/navbar_admin.css">
        <link rel="stylesheet" href="../../../public/css/dashboard.css">
    </head>

    <body>
        <?php require './app/views/admin/sidebar.view.php' ; ?>
        <div class="dashboard">
            <div class="dashboard-nav">
                <div class="icon-name">
                    <a href="/admin/dashboard">
                        <ion-icon name="grid"></ion-icon>
                        <h3>DASHBOARD</h3>
                    </a>
                </div>
                <a href="/admin/logout">
                    <button class="icon-name-logout">
                        <h4>LOGOUT</h4>
                        <ion-icon name="log-out-outline"></ion-icon>
                    </button>
                </a>
            </div>

            <div class="dashboard-main">
                    <div class="card-page" >
                        <a class="card" href="./posts">
                            <ion-icon name="reader-outline"></ion-icon>
                            <h2>Lista de Posts</h2>
                        </a>
        
                        <a class="card" href="./usuarios">
                                <ion-icon name="person-outline"></ion-icon>
                                <h2>Lista de Usuários</h2>
                        </a>
                    </div>
        
                    <div class="lasted-posts">
                        <table>
                            <caption>Posts Recentes</caption>
                            <tr id="table-th">
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Data</th>
                                <th id="details-tam"></th>
                            </tr>
                            <?php foreach ($relatedPosts as $post) : ?>
                            <tr id="table-th">
                                <td><?=$post->id?></td>
                                <td><?=$post->title?></td>
                                <td><?=$post->author?></td>
                                <td><?=$post->created_at?></td>
                                <td id="details"><a href="/home/post_individual?id_pag=<?=$post->id?>" target="blank"><span>Detalhes</span> <ion-icon name="chevron-forward-circle-outline"></ion-icon></a></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    </div>

            </div>
        </div>
        
        <script src="../../../public/js/sidebar.js"></script>
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>