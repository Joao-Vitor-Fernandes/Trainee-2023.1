<div id="modal-add-user" class="modal-add-user">

    <form class="container-l" action="create" method="POST">
        <div class="titulo-l"><h2>Adicionar Usuário</h2></div>
        <div class="caixa-selecao-l">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
        </div>

        <div class="caixa-selecao-l">
            <label for="email">Email:</label>
            <input type="text" name="email" required>
        </div>

        <div class="caixa-selecao-l">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
        </div>

        <div class="caixa-botao-l">
            <button class="close" type="button" onsubmit="">Cancelar</button> 
            <button class="botao-l" type="submit" onsubmit="">Concluído</button> 
        </div>
    </form>

</div>

