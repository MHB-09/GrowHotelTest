
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">

                </div>
                
                <h2 class="text ml-0">GROW HOTEL</h2> 

                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <?= Role::nomComplet() ?> <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= linkto("Home", "profil") ?>" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">Profil </span>
                            </a>
                            <a href="<?= linkto("Home", "connexion") ?>" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Gestion Hotel</span>
                            </a>
                            <a href="<?= linkto("Home", "deconnexion") ?>" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Déconnexion </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>