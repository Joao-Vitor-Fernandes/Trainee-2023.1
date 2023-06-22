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

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

load('../../../app/views/admin/form_add_usuarios.html', document.getElementsByClassName('load_modal')[0]);