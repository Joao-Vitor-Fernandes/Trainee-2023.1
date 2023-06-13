<div id="add-modal" class="modal">
    <form class="modal-content" enctype="multipart/form-data" action="posts/adicionar" method="POST">
        <div class="modal-header">
            <h1>Adicionar Post</h1>
        </div>
        <div class="modal-body">
            <div class="caixa-titulo">
                <div class="caixa-selecao">
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" required>
                </div>
                
            </div> 
        
            <div class="caixa-autor_data">
                
                <div class="caixa-selecao">
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" id="autor" required>
                </div>
                
                <div class="caixa-selecao">
                    <label for="data">Data:</label>
                    <input type="date" name="data" id="data" required>
                </div>
    
            </div>
    
            <!-- Conteúdo -->
            <fieldset class="fieldset-conteudo">
    
                <div class="caixa-conteudo">
                    <label for="imagem">Imagem:</label>
                    <input type="file" class="custom-file-input" id="imagem" name="imagem" accept=".jpg, .jpeg, .png, .gif">
                </div>
        
                <div class="caixa-conteudo">
                    <label for="conteudo">Conteudo:</label>
                    <textarea rows="6" id="conteudo" name="conteudo"></textarea>
                </div>
    
            </fieldset>
        </div>
        <div class="modal-footer">
                <button class="close" type="button" onsubmit="">Cancelar</button> 
                <button type="submit" onsubmit="">Salvar</button> 
        </div>
    </form>
</div>