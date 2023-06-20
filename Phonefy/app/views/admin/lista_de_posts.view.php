<!DOCTYPE html>

<html>

<head>
    <title>Lista de Posts</title>
    <!-- <meta name="viewport" content="width=devide" charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/css/lista_de_posts_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="../../../public/css/modal2.css">
    <link rel="stylesheet" href="../../../public/css/edit_modal.css">
    <link rel="stylesheet" href="../../../public/css/pagination.css">
    <link rel="stylesheet" href="../../../public/css/sidebar2.css"/>
</head>


<body>
<?php require './app/views/admin/sidebar2.html' ?>
<div class="load_modal"></div>
    <div class="lista">
        <h1 class="Titulo">Lista de Posts</h1>
        <div class="conteiner">
            <table>
                <caption>
                    <!--Caso queria colocar um caption: insere ele aqui-->
                    <button id="myBtn" class="add" onclick="modalAdd('add-modal', <?= htmlspecialchars(json_encode($users)) ?>)">
                        <a href="#"> <img src="../../../public/assets/icon_add.png" alt="Adicionar" height="50"
                                width="50"></a>
                        <p>Adicionar posts</p>
                    </button>
                </caption>

                <script src="../../../public/js/modal.js"></script>

                <tr class="cabecalho"> <!--Primeira linha-->
                    <!-- <th>#</th> -->
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Data</th>
                    <!-- <th>Opções</th> -->
                    <th colspan="2"></th>
                </tr>

                <tr class="corpo vazia">
                    <td colspan="6">Nenhum registro encontrado.</td>
                </tr>

                <?php foreach ($posts as $post) : ?>
                <tr class="corpo"> <!--Segunda linha-->
                    <!-- <td><?=$post->id ?></td>    -->
                    <td><?=$post->title?></td>
                    <td><?=$post->author_name?></td>
                    <td><?=$post->created_at?></td>

                    <td class="icon">
                    <button id="view" class="a" data-title="Visualizar" onclick="modalEdit('view-modal', <?=$post->id?>, '<?=$post->title?>', <?=$post->author?>, '<?=$post->created_at?>', '<?=$post->image?>', '<?=str_replace(["\\n", "\r\n", "\n", "\"", "'", "&", "<", ">"], ["\\n", "\\n", "\\n", "\\\"", "\\'", "&amp;", "&lt;", "&gt;"], $post->content)?>', <?= htmlspecialchars(json_encode($users)) ?>)">
                        <i class="fa fa-eye" alt="Visualizar"></i>
                    </button>
                    <button id="edit" class="a" data-title="Editar" onclick="modalEdit('edit-modal', <?=$post->id?>, '<?=$post->title?>', <?=$post->author?>, '<?=$post->created_at?>', '<?=$post->image?>', '<?=str_replace(["\\n", "\r\n", "\n", "\"", "'", "&", "<", ">"], ["\\n", "\\n", "\\n", "\\\"", "\\'", "&amp;", "&lt;", "&gt;"], $post->content)?>', <?= htmlspecialchars(json_encode($users)) ?>)">
                        <i class="fa fa-outdent" aria-hidden="true"></i>
                    </button>
                    <button id="Deleter" class="a" data-title="Apagar" onclick="modalDelete('delete-modal', <?=$post->id?>)">
                        <i class="fa fa-times" alt="Deletar"></i>
                    </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <?php require './app/views/includes/pagination.php' ?>

    <script src="../../../public/js/sidebar.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>