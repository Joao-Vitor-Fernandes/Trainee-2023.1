<div id="view-modal" class="modal">
    <form class="modal-content">
        <input type="hidden" name="id" value="" >
        <div class="modal-header">
            <h1>Meu Post</h1>
        </div>
        <div class="modal-body">
            <div class="caixa-titulo">
                <div class="caixa-selecao">
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" value="The National lança belo álbum com participações de Taylor Swift e Phoebe Bridgers" readonly disabled>
                </div>
                
            </div> 

            <div class="caixa-autor_data">
                
                <div class="caixa-selecao">
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" id="autor" value="vagalume.com" readonly disabled>
                </div>
                
                <div class="caixa-selecao">
                    <label for="data">Data:</label>
                    <input type="date" name="data" id="data" value="2023-05-01" readonly disabled>
                </div>
    
            </div>
    
            <fieldset class="fieldset-conteudo">
    
                <div class="caixa-conteudo">
                    <div class="imagem-container">
                        <a href="" target="_blank">
                            <img id="imagem-preview" src="" alt="Imagem" readonly disabled>
                        </a>
                    </div>
                </div>
        
                <div class="caixa-conteudo">
                    <label for="conteudo">Conteúdo:</label>
                    <textarea rows="6" id="conteudo" name="conteudo" readonly disabled>O aguardado nono álbum do The National acaba de ser lançado e, boa notícia para os fãs, mostra o quinteto em ótima forma. "Firts Two Pages Of Frankenstein" não chega com a banda tentando se reinventar. A música continua melancólica, bela e climática, com a voz de barítiono de Matt Berninger sempre como um destaque. </textarea>
                </div>
    
            </fieldset>
        </div>
        <div class="modal-view-footer">
            <button class="close" type="button" onsubmit="">Concluido</button> 
        </div>
    </form>
</div>