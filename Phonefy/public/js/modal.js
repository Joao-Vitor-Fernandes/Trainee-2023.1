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

function modalEdit(m, id, titulo, autor, data, imagem, conteudo, users, $idUsuario) {
    if(m == 'view-modal'){ i = 0;}
    else if (m == 'edit-modal'){ i = 1;}
    else {console.log("Erro no indice");}

    document.getElementById(m).querySelector("[name='id']").value = id;
    document.getElementById(m).querySelector("[name='titulo']").value = titulo;
    document.getElementById(m).querySelector("[name='data']").value = data;
    document.getElementById(m).querySelector("[name='conteudo']").value = conteudo;

    if (i == 0) {
        var autorName = '';
        for (var j = 0; j < users.length; j++) {
            var user = users[j];
            if (user.id == autor) {
                autorName = user.name;
                break;
            }
        }
        document.getElementById(m).querySelector("[name='autor']").value = autorName;
    }
    
    else if(i ==1){
        var autorSelect = document.getElementById(m).querySelector("[name='autor']");
        autorSelect.innerHTML = '';

        for (var j = 0; j < users.length; j++) {
            var user = users[j];
            if (user.id == $idUsuario) {
                var option = document.createElement('option');
                option.value = user.id;
                option.textContent = user.name;
                option.selected = true;
                autorSelect.appendChild(option);
                break;
            }
        }
    }
    
    if(i ==0){
        var imagemContainer = document.getElementById(m).querySelector(".imagem-container");
        var link = imagemContainer.querySelector("a");
        var imagemPreview = imagemContainer.querySelector("img");

        link.href = "../../" + imagem;
        imagemPreview.src = "../../" + imagem;   
    }
    


    open_modal(m,i);
}

function modalDelete(m, id) {
    document.getElementById("delete-modal").querySelector("[name='id']").value = id;

    open_modal(m,2);
}

function modalAdd(m, users, $idUsuario) {

    var autorSelect = document.getElementById(m).querySelector("[name='autor']");
    autorSelect.innerHTML = '';

    for (var j = 0; j < users.length; j++) {
        var user = users[j];
        if (user.id == $idUsuario) {
            var option = document.createElement('option');
            option.value = user.id;
            option.textContent = user.name;
            option.selected = true;
            autorSelect.appendChild(option);
            break;
        }
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
