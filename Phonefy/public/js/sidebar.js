function open_sidebar(side, close, button)
{   
    sidebar = document.getElementById(side);
    close = document.getElementById(close);
    button = document.getElementById(button);

    sidebar.style.display = "block";
    button.style.display = "none";

    close.onclick = function() {
        sidebar.style.display = "none";
        button.style.display = "block";
    }

    window.onclick = function(event) {
        if (event.target == sidebar) {
            sidebar.style.display = "none";
            button.style.display = "block";
        }
    }
}