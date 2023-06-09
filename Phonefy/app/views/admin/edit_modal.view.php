<div id="edit-modal" class="modal">
    <form class="modal-content" action="posts/editar" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="id" value="" >
        <div class="modal-header">
            <h1>Editar Post</h1>
        </div>
        <div class="modal-body">
            <div class="caixa-titulo">
                <div class="caixa-selecao">
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" value="The National lança belo álbum com participações de Taylor Swift e Phoebe Bridgers" required>
                </div>
            </div> 
        
            <div class="caixa-autor_data">
                <div class="caixa-selecao">
                    <label for="autor">Autor:</label>
                    <select name="autor" id="autor" required>
                        <option value="valor1" selected>Autor 1</option>
                        <option value="valor2">Autor 2</option>
                        <option value="valor3">Autor 3</option>
                    </select>
                </div>
                
                <div class="caixa-selecao">
                    <label for="data">Data:</label>
                    <input type="date" name="data" id="data" value="2023-05-01" required>
                </div>
            </div>

            <fieldset class="fieldset-conteudo">
            <div class="caixa-conteudo">
                <label for="imagem">Imagem:</label>
                <input type="file" class="custom-file-input" id="imagem" name="imagem" accept=".jpg, .jpeg, .png, .gif">
            </div>
        
                <div class="caixa-conteudo">
                    <label for="conteudo">Conteúdo:</label>
                    <textarea rows="6" id="conteudo" name="conteudo">O aguardado nono álbum do The National acaba de ser lançado e, boa notícia para os fãs, mostra o quinteto em ótima forma. "Firts Two Pages Of Frankenstein" não chega com a banda tentando se reinventar. A música continua melancólica, bela e climática, com a voz de barítiono de Matt Berninger sempre como um destaque.</textarea>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button class="close" type="button" onsubmit="">Cancelar</button> 
            <button type="submit" onsubmit="">Salvar</button> 
        </div>
    </form>
</div>