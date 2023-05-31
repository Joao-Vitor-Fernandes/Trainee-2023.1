<!DOCTYPE html>

<html lang="pt-br"></html>

<head>
    <title>Lista de Usuários</title>
    <meta name="viewport" content="width=devide" charset="utf-8">
    <link rel="stylesheet" href="../../../public/css/lista_usuarios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>


<body>

    <div class="load_modal"></div>

    <h1 class="Titulo">Lista de Usuários</h1>
    <div id="conteiner">
        <table>
            <caption>
                <!--Caso queria colocar um caption: insere ele aqui-->
                <button id="myBtn" class="add" onclick="open_modal('myBtn', 'modal-add-user', 'close', 0)">
                    <a href="#"> <img src="../../../public/assets/icon_add.png" alt="Adicionar" height="50"
                            width="50"></a>
                    <p>Adicionar Usuário</p>
                </button>
            </caption>
            <tr class="cabecalho"> <!--Primeira linha-->
                <th>#</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>

            <?php require 'form_add_usuarios.view.php' ?>
            <?php require 'form_visualizar_usuarios.view.php' ?>
            <?php require 'form_excluir_usuarios.view.php' ?>
            <?php require 'form_edt_usuarios.view.php' ?>
            <?php foreach ($users as $user) : ?>
            <tr class="corpo">
                <th><?=$user->id?></th>
                <td><?=$user->name?></td>
                <td class="icon">
                    <button id="Visualiar" class="a" onclick="open_modal('Visualiar', 'modal-view-user', 'close', 1)"> <i class="fa fa-eye" alt="Visualiar"></i> </button>
                    <button id="Editar" class="a" onclick="open_modal('Editar', 'modal-edit-user', 'close', 2)"><i class="fa fa-outdent" aria-hidden="true"></i></button>
                    <button id="Deleter" class="a" onclick="open_modal('Excluir', 'delete-user-modal', 'close', 3)"><i class="fa fa-times" alt="Deletar"></i></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>


    <!-- Link para o script -->
    <!-- <script src="../../../public/js/add_user_modal.js"></script> -->
    <script src="../../../public/js/modais_usuario.js"></script>

</body>

</html>