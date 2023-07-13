<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="#!">Los reyes de Internet</a>
        <img src="./templates/media/anim/nyancat.gif" alt="Niancat" height="30px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">El "porqué"</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Gatos ilustres</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="tithe.php">Diezmo!</a></li>
                <?php 
                echo '<li class="nav-item bg-primary rounded"><a class="nav-link" href="';
                if(Session::get('login')){
                    echo 'logout.php">Logout</a></li>';
                } else {
                    echo 'login.php">Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>