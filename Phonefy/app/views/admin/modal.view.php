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
    <button id="b" onclick="open_modal('b', 'add-modal', 'close', 1, 'admin/adicionar')">Criar Post</button>
    
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
                <button id="a" onclick="open_modal('a', 'view-modal', 'close', 0, 'admin/visualizar')">Visualizar Post</button>
                <button id="c" onclick="open_modal('c', 'edit-modal', 'close', 2, 'admin/editar')">Editar Post</button>
                <button id="d" onclick="open_modal('d', 'delete-modal', 'close', 3, 'admin/excluir')">Excluir Post</button>
                <br> <!-- Quebra de linha adicionada -->
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>