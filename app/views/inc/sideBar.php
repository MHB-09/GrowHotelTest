<?php
$hidden = ($_SESSION['connectedUser']->libelleTypePersonne == "Gérant") ? "hidden" : "";
?>
<!--**********************************
            Sidebar start
        ***********************************-->
<div class="nav-header">
    <a href="<?= linkTo("Home", "index") ?>" class="brand-logo">
        <!-- <img class="logo-abbr" src="<?= URLROOT ?>/images/LogoGrow.png" alt=""> -->
        <!-- <img class="logo-compact" src="<?= URLROOT ?>/images/LogoGrow.png" alt=""> -->
        <img class="brand-title" src="<?= URLROOT ?>/images/LogoGrow.png" alt="">
    </a>

</div>
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Opérations</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class=""><img class="logo-compact" src="<?= URLROOT ?>/images/icon/depense.png" width="20" alt=""></i><span class="nav-text">Gestion des reservations</span></a>
                <ul aria-expanded="false">
                    <li><a href="<?= linkto("Reservation", "ajout") ?>">Ajouter une réservation</a></li>

                    <li><a href="<?= linkto("Reservation", "liste") ?>">Liste des réservations</a></li>
                </ul>
            </li>
            <li class="nav-label" <?= $hidden ?>>Gestion Personnel</li>
            <li <?= $hidden ?>><a class="" href="<?= linkto("Personnel", "ajout") ?>" aria-expanded="false"><i class=""><img class="logo-compact" src="<?= URLROOT ?>/images/icon/ajoutuser.png" width="20" alt=""></i><span class="nav-text">Ajouter</span></a>

            </li>
            <li <?= $hidden ?>><a class="" href="<?= linkto("Personnel", "liste") ?>" aria-expanded="false"><i class=""><img class="logo-compact" src="<?= URLROOT ?>/images/icon/list.png" width="20" alt=""></i><span class="nav-text">Liste</span></a>

            </li>

            <li class="nav-label" <?= $hidden ?>>Configuration</li>
            <li <?= $hidden ?>><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class=""><img class="logo-compact" src="<?= URLROOT ?>/images/icon/taxe.png" width="20" alt=""></i><span class="nav-text">Local</span></a>
                <ul aria-expanded="false">
                    <li><a href="<?= linkto("Local", "ajout") ?>">Ajouter</a></li>

                    <li><a href="<?= linkto("Local", "liste") ?>">Liste</a></li>
                </ul>
            </li>          
            <li class="nav-label">Historique</li>
            <li><a class="" href="<?= linkto("Historique", "monHistorique") ?>" aria-expanded="false"><i class=""><img class="logo-compact" src="<?= URLROOT ?>/images/icon/history.png" width="20" alt=""></i><span class="nav-text">Mon Historique</span></a>
            </li>
        </ul>
    </div>


</div>
<!--**********************************
            Sidebar end
        ***********************************-->