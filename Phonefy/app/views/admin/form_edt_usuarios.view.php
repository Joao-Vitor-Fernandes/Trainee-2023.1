<div id="modal-edit-user" class="modal-edit-user">

    <form id='coisa' class="container" action="update" method="POST">
        <input type="hidden" name="id" value="" >
        <div class="campo-titulo"><h2>Alterar Dados do Usuário</h2></div>

        <div class="caixa-selecao">
            <label for="nome"><strong>Nome:</strong></label>
            <input type="text" placeholder="Novo Nome" value="" name="nome" required>
        </div>

        <div class="caixa-selecao">
            <label for="email"><strong>Email:</strong></label>
            <input type="text"  value="" name="email" required>
        </div>

        <div class="caixa-selecao">
            <label for="senha"><strong>Senha:</strong></label>
            <input type="password" placeholder="Nova Senha" value="" name="senha" required>
        </div>

        <div class="campo-botoes">
            <button class="close" type="button" onsubmit="">Cancelar</button> 
            <button class="botao" type="submit" onsubmit="">Concluído</button> 
        </div>
    </form>

</div>