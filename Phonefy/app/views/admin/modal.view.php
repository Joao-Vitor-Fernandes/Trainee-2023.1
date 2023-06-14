<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Modal</title>

    <link rel="stylesheet" href="../../../public/css/modal2.css">
    <link rel="stylesheet" href="../../../public/css/edit_modal.css">

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #2b4c63;
        }

        button{
            margin-top: 3%;
            /* margin-left: 3%; */
            font-size: 14px;
            height: 38px;
            width: 140px;
            border-radius: 15px;
            background-color: #41B6E6;
            color: #EEF0F2;
        }
    </style>
</head>
<body>
<button id="myBtn" class="add" onclick="modalAdd('add-modal')">Criar Post</button>
    
    <div class="load_modal"></div>

    <script src="../../../public/js/modal.js"></script>


    <!-- TABELA  -->
    <?php // require 'add_modal.view.php' ?>
    <style>
    table {
        border-collapse: collapse;
        border: 1px solid #000;
        background-color: #fff;
    }
    
    th, td {
        padding: 10px;
        border: 1px solid #000;
    }
    
    .cabecalho {
        background-color: #ccc;
    }
</style>
<br>
<table style="width: auto;">
    <thead>
        <tr class="cabecalho">
            <th>#</th>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php // require 'add_modal.view.php' ?>

        <?php foreach ($posts as $post) : ?>
        <tr class="corpo">
            <th><?=$post->id?></th>
            <td><?=$post->title?></td>
            <td class="icon">
            <button id="view" class="a" onclick="modalEdit('view-modal', <?=$post->id?>, '<?=$post->title?>', <?=$post->author?>, '<?=$post->created_at?>', '<?=$post->image?>', '<?=$post->content?>')">Visualizar Post</button>
                <button id="edit" class="a" onclick="modalEdit('edit-modal', <?=$post->id?>, '<?=$post->title?>', <?=$post->author?>, '<?=$post->created_at?>', '<?=$post->image?>', '<?=$post->content?>')">Editar Post</button>
                <button id="Deleter" class="a" onclick="modalDelete('delete-modal', <?=$post->id?>)">Excluir Post</button>
                <br> <!-- Quebra de linha adicionada -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>