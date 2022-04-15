
<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Tableau des Utilisateurs</h4>
                            <!--  <span class="ml-1">Datatable</span> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateur</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Liste</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr align="center">
                                                <th>Matricule</th>
                                                <th>Civilité</th>
                                                <th>Prénom </th>
                                                <th>Nom</th>
                                                <th>Adresse</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($users as $user){ 
                                                if($user->idPersonne  !=  $_SESSION['connectedUser']->idPersonne ){ ?>
                                                 <tr>
                                                <td><?= $user->matricule ?></td>
                                                <td><?= $user->civilitePersonne ?></td>
                                                <td><?= $user->prenomPersonne ?></td>
                                                <td><?= $user->nomPersonne ?></td>
                                                <td><?= $user->adressePersonne ?></td>
                                                <td><?= $user->telephonePersonne ?></td>
                                                <td><?= $user->emailPersonne ?></td>
                                                <td>
                                                <a href="<?=linkTo('Personnel', 'edit',$user->idPersonne)?>" class='btn btn-sm btn-warning'>Editer</a>
                                                <a href="<?=linkTo('Personnel', 'activePersonne', $user->idUtilisateur)?>" class='btn btn-sm <?= ($user->etatUtilisateur == 0 ? "btn-success" : "btn-danger") ?>'><?= ($user->etatUtilisateur == 0 ? "Activer" : "Désactiver") ?></a>
                                                <a href="<?=linkTo('Utilisateur', '')?>" class='btn btn-sm btn-info'>Historique</a>
                                                </td>
                                            </tr>
                                        <?php   } }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                        <th>Matricule</th>
                                                <th>Civilité</th>
                                                <th>Prénom </th>
                                                <th>Nom</th>
                                                <th>Adresse</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 