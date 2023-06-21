function open_sidebar(side, close, button, teste)
{   
    sidebar = document.getElementById(side);
    close = document.getElementById(close);
    button = document.getElementById(button);
    teste = document.getElementById(teste);

    console.log(teste);

    sidebar.style.display = "block";
    button.style.display = "none";
    teste.style.position = "fixed";

    close.onclick = function() {
        sidebar.style.display = "none";
        button.style.display = "block";
        teste.style.position = "static";
    }

    window.onclick = function(event) {
        if (event.target == teste) {
            sidebar.style.display = "none";
            button.style.display = "block";
            teste.style.position = "static";
        }
    }
}
