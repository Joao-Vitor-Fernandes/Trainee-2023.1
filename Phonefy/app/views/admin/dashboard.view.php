<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="../../../public/css/dashboard.css">

        <link rel="stylesheet" href="../../../public/css/sidebar2.css"/>
    </head>

    <body>
        <?php require './app/views/admin/sidebar2.html' ?>
        <div class="dashboard">
            
            <!-- <button class="sidebar-icon"><ion-icon name="chevron-forward-outline"></ion-icon></button> -->

            <div class="dashboard-nav">
                <div class="icon-name">
                    <ion-icon name="grid"></ion-icon>
                    <h3>DASHBOARD</h3>
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
                            <tr>
                                <td>3</td>
                                <td>Post 3</td>
                                <td>Maria</td>
                                <td>25 de abril</td>
                                <td  id="details"><span>Detalhes</span> <ion-icon name="chevron-forward-circle-outline"></ion-icon></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Post 2</td>
                                <td>Maria</td>
                                <td>25 de abril</td>
                                <td  id="details"><span>Detalhes</span> <ion-icon name="chevron-forward-circle-outline"></ion-icon></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Post 1</td>
                                <td>Maria</td>
                                <td>25 de abril</td>
                                <td  id="details"><span>Detalhes</span> <ion-icon name="chevron-forward-circle-outline"></ion-icon></td>
                            </tr>
                        </table>
                    </div>

            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->

    </body>
</html>