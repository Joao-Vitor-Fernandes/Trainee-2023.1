<div id="teste">
    <button class="sidebar-icon" id="sidebar-icon" onclick="open_sidebar('sidebar', 'sidebar-close', 'sidebar-icon', 'teste')">
        <ion-icon name="chevron-forward-outline"></ion-icon>
    </button>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-title">
            <h2><?php echo $usuarioAdmin->name; ?></h2>
            <button class="sidebar-close" id="sidebar-close"><ion-icon name="close-outline"></ion-icon></button>
        </div>
        <div class="sidebar-links">
            <!-- <ul> -->
            <a href="./dashboard">
                <button class="side-options">
                    <ion-icon class="icon5" name="construct-outline"></ion-icon>
                    <h3>Dashboard</h3>
                </button>
            </a>
    
            <a href="./posts">
                <button class="side-options">
                    <ion-icon class="icon5" name="construct-outline"></ion-icon>
                    <h3>Posts</h3>
                </button>
            </a>
    
            <a href="./usuarios">
                <button class="side-options">
                    <ion-icon class="icon5" name="construct-outline"></ion-icon>
                    <h3>Usuários</h3>
                </button>
            </a>
            <!-- </ul> -->
        </div>
    
    </div>
</div>