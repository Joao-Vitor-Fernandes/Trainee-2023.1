function load(url, element)
{
    req = new XMLHttpRequest();
    req.open("GET", url, false);
    req.send(null);
    
    element.innerHTML += req.responseText;
}

function open_modal(b, m, s, i)
{
    btn = document.getElementById(b);
    modal = document.getElementById(m);
    span = document.getElementsByClassName(s)[i];

    modal.style.display = "block";
    console.log('clicou');

    span.onclick = function() {
        modal.style.display = "none";
        console.log('saiu');
        console.log(span);
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

load('../../../app/views/admin/form_visualizar_usuarios.view.php', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/form_add_usuarios.view.php', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/form_edt_usuarios.view.php', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/form_excluir_usuarios.view.php', document.getElementsByClassName('load_modal')[0]);

