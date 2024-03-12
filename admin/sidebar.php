<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img src="../imagens/logopequeno.png">
        </div>
        <div class="sidebar-brand-text mx-3">VianaConnect</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="geriratletas.php">
            <i class="fas fa-fw fa-running"></i>
            <span>Atletas</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Provas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="gerirprovas.php">Adicionar Provas</a>
                <a class="collapse-item" href="gerirtipolocal.php">Adicionar tipo de local</a>
                <a class="collapse-item" href="gerirtipoprova.php">Adicionar tipo de prova</a>
                <a class="collapse-item" href="gerirdorsal.php">Adicionar dorsal</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesLoRa" aria-expanded="true" aria-controls="collapsePagesLoRa">
            <i class="fas fa-solid fa-map"></i>
            <span>LoRa</span>
        </a>
        <div id="collapsePagesLoRa" class="collapse" aria-labelledby="headingPagesLoRa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="gerirlora.php">Gerir LoRa</a>
                <a class="collapse-item" href="gerirpercurso.php">Gerir percursos</a>
                <a class="collapse-item" href="gerirposicao.php">Gerir posição</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesSite" aria-expanded="true" aria-controls="collapsePagesSite">
            <i class="fas fa-solid fa-window-maximize"></i>
            <span>Site</span>
        </a>
        <div id="collapsePagesSite" class="collapse" aria-labelledby="headingPagesSite" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="gerirdesportos.php">Gerir desportos</a>
                <a class="collapse-item" href="gerirfotos.php">Gerir fotos</a>
                <a class="collapse-item" href="/index.php">Ir para o site</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>