load('../../../app/views/admin/view_modal.view.php', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/edit_modal.view.php', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/delete_modal.view.php', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/add_modal.view.php', document.getElementsByClassName('load_modal')[0]);

function load(url, element)
{
    req = new XMLHttpRequest();
    req.open("GET", url, false);
    req.send(null);
    
    element.innerHTML += req.responseText;
}

// Indices baseados na sequencia que é chamado as funcoes 'load'
function modalEdit(m, id, titulo, autor, data, imagem, conteudo, users) {
    if(m == 'view-modal'){ i = 0;}
    else if (m == 'edit-modal'){ i = 1;}
    else {console.log("Erro no indice");}

    //----Preenchendo os valores no modal
    document.getElementById(m).querySelector("[name='id']").value = id;
    document.getElementById(m).querySelector("[name='titulo']").value = titulo;
    document.getElementById(m).querySelector("[name='data']").value = data;
    //  document.getElementById("edit-modal").querySelector("[name='imagem']").value = imagem;
    document.getElementById(m).querySelector("[name='conteudo']").value = conteudo;

    //----Preenchendo os autores no modal
    //Se for o modal visualizar
    if (i == 0) {
        // Encontrar o nome do autor com base no ID
        var autorName = '';
        for (var j = 0; j < users.length; j++) {
            var user = users[j];
            if (user.id == autor) {
                autorName = user.name;
                break;
            }
        }
        // Atribuir o nome do autor ao campo no modal
        document.getElementById(m).querySelector("[name='autor']").value = autorName;
    }
    
    //Se for o modal editar
    else if(i ==1){
        var autorSelect = document.getElementById(m).querySelector("[name='autor']");
        autorSelect.innerHTML = ''; // Limpa as opções existentes

        for (var j = 0; j < users.length; j++) {
            var user = users[j];
            var option = document.createElement('option');
            option.value = user.id;
            option.textContent = user.name;
            if (user.id == autor) {
                option.selected = true; // Define a opção selecionada
            }
            autorSelect.appendChild(option);
        }
    }
    


    open_modal(m,i);
}

function modalDelete(m, id) {
    document.getElementById("delete-modal").querySelector("[name='id']").value = id;

    open_modal(m,2);
}

function modalAdd(m, users) {

    //Preenchendo os autores no modal
    var autorSelect = document.getElementById(m).querySelector("[name='autor']");
    autorSelect.innerHTML = ''; // Limpa as opções existentes

    for (var j = 0; j < users.length; j++) {
        var user = users[j];
        var option = document.createElement('option');
        option.value = user.id;
        option.textContent = user.name;
        if (user.id == autor) {
            option.selected = true; // Define a opção selecionada
        }
        autorSelect.appendChild(option);
    }

    open_modal(m,3);
}


function open_modal(m, i)
{   
    modal = document.getElementById(m);
    span = document.getElementsByClassName('close')[i];

    modal.style.display = "block";

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}
