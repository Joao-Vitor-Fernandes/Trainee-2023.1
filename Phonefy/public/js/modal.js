load('../../../app/views/admin/view_modal.html', document.getElementsByClassName('load_modal')[0]);
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
function modalEdit(m, id, titulo, autor, data, imagem, conteudo) {
    if(m == 'view-modal'){ i = 0;}
    else if (m == 'edit-modal'){ i = 1;}
    else {console.log("Erro no indice");}

    console.log(i);

    document.getElementById("edit-modal").querySelector("[name='id']").value = id;
    document.getElementById("edit-modal").querySelector("[name='titulo']").value = titulo;
    document.getElementById("edit-modal").querySelector("[name='autor']").value = autor;
    document.getElementById("edit-modal").querySelector("[name='data']").value = data;
    //document.getElementById("edit-modal").querySelector("[name='imagem']").value = imagem;
    document.getElementById("edit-modal").querySelector("[name='conteudo']").value = conteudo;


    open_modal(m,i);
}

function modalDelete(m, id) {
    console.log(id);
    document.getElementById("delete-modal").querySelector("[name='id']").value = id;

    open_modal(m,2);
}

function modalAdd(m) {
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
