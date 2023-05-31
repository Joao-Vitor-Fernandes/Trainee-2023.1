function load(url, element)
{
    req = new XMLHttpRequest();
    req.open("GET", url, false);
    req.send(null);
    
    element.innerHTML += req.responseText;
}

function open_modal(b, m, s, i, route)
{
    btn = document.getElementById(b);
    modal = document.getElementById(m);
    span = document.getElementsByClassName(s)[i];

    modal.style.display = "block";
    console.log('clicou');

    var previousURL = window.location.href; // Armazena a URL atual
    history.pushState({}, '', route); //Modifica a url

    span.onclick = function() {
        modal.style.display = "none";
        console.log('saiu');
        console.log(span);
        history.replaceState({}, '', previousURL); // Restaura a URL anterior
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            history.replaceState({}, '', previousURL); // Restaura a URL anterior
        }
    }
}

load('../../../app/views/admin/view_modal.html', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/add_modal.view.php', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/edit_modal.html', document.getElementsByClassName('load_modal')[0]);
load('../../../app/views/admin/delete_modal.html', document.getElementsByClassName('load_modal')[0]);
