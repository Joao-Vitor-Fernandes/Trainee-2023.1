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
function modalEdit(m, id, userName, email, password) {
    if(m == 'modal-view-user'){ i = 0;}
    else if (m == 'modal-edit-user'){ i = 1;}
    else {console.log("Erro no indice");}

    document.getElementsByName("id")[i].value = id;
    document.getElementsByName("nome")[i].value = userName;
    document.getElementsByName("email")[i].value = email;
    document.getElementsByName("senha")[i].value = password;

    open_modal(m,i);
}

function modalDelete(m, id) {
    document.getElementsByName("id")[2].value = id;

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
