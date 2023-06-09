<!DOCTYPE html>
<html lang="pt-br"></html>
<head>
    <title>Lista de Usuários</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <link rel="stylesheet" href="../../../public/css/form_add_usuarios.css">
    <link rel="stylesheet" href="../../../public/css/form_visualizar_usuarios.css">
    <link rel="stylesheet" href="../../../public/css/form_edt_usuarios.css">
    <link rel="stylesheet" href="../../../public/css/form_excluir_usuarios.css">
    <link rel="stylesheet" href="../../../public/css/pagination.css">
    <link rel="stylesheet" href="../../../public/css/sidebar.css"/>
    <link rel="stylesheet" href="../../../public/css/navbar_admin.css">
    <link rel="stylesheet" href="../../../public/css/lista_usuarios.css">
</head>


<body>
  <?php require './app/views/admin/sidebar.view.php' ?>
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
    <div class="load_modal"></div>

    <h1 class="Titulo">Lista de Usuários</h1>
    <div id="conteiner">
        <table>
            <caption>
                <button id="myBtn" class="add" onclick="modalAdd('modal-add-user')">
                    <a href="#"> <img src="../../../public/assets/icon_add.png" alt="Adicionar" height="50"
                            width="50"></a>
                    <p>Adicionar Usuário</p>
                </button>
            </caption>
            <tr class="cabecalho">
                <th>#</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>

            <?php 
                foreach ($users as $user) : ?>
            <tr class="corpo">
                <th><?=$user->id?></th>
                <td><?=$user->name?></td>
                <td class="icon">
                    <button id="view" class="a" data-title="Visualizar" onclick="modalEdit('modal-view-user', <?=$user->id?>, '<?=$user->name?>', '<?=$user->email?>', '<?=$user->password?>')"> <i class="fa fa-eye" alt="Visualiar"></i> </button>
                    <button id="edit" class="a" data-title="Editar" onclick="modalEdit('modal-edit-user', <?=$user->id?>, '<?=$user->name?>', '<?=$user->email?>', '<?=$user->password?>')"><i class="fa fa-outdent" aria-hidden="true"></i></button>
                    <button id="Deleter" class="a" data-title="Apagar" onclick="modalDelete('delete-user-modal', <?=$user->id?>)"><i class="fa fa-times" alt="Deletar"></i></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php require './app/views/includes/pagination.php' ?>
    </div>


    <script src="../../../public/js/modais_usuario.js"></script>
    <script src="../../../public/js/sidebar.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>