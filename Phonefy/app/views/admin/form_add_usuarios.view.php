<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/css/form_add_usuarios.css">
</head>
<body>
        <div id="modal-add-user" class="modal-add-user">

            <form class="container-l" action="create" method="POST">
                <div class="titulo-l"><h2>Adicionar Usuário</h2></div>
                <div class="caixa-selecao-l">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="caixa-selecao-l">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="caixa-selecao-l">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                </div>

                <div class="caixa-botao-l">
                    <button class="close" type="button" onsubmit="">Cancelar</button> 
                    <button class="botao-l" type="submit" onsubmit="">Concluído</button> 
                </div>
            </form>

    </div>
</body>
</html>

