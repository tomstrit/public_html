
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="../index.php">VianaConnect</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="../atletas.php">Atletas</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProvas" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Provas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownProvas">
                        <a class="dropdown-item" href="../calendario.php">Calendário</a>
                        <a class="dropdown-item" href="../galeria.php">Galeria</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="../LoRa.php">LoRa</a></li>
                <li class="nav-item"><a class="nav-link" href="../index.php#contactos">Contactos</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLogin" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Conta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownLogin">
                        <?php
                        if(isset($_SESSION["CodigoAtleta"])){
                         ?>
                            <a class="dropdown-item" href="perfil.php">Perfil</a>
                            <a class="dropdown-item" href="logout.php">Log out</a>
                        <?php
                            if($_SESSION["Tipo"]==1){
                                ?>
                                <a class="dropdown-item" href="/admin">Admin</a>
                                <?php
                            }
                            }else{
                            ?>
                                <a class="dropdown-item" href="login.php">Login</a>
                                <a class="dropdown-item" href="register.php">Criar Conta</a>
                            <?php
                                }
                            ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>