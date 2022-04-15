<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tableau des Reservations</h4>
                <!--  <span class="ml-1">Datatable</span> -->
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Reservation</a></li>
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
                                <tr>
                                    <th>Nom Client</th>
                                    <th>Numero du Client</th>
                                    <th>Type de Chambre</th>
                                    <th>Montant à payer</th>
                                    <th>Date de Debut</th>
                                    <th>Date de Fin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($reservations as $reservation) {
                                     ?>
                                        <tr>
                                            <td><?= $reservation->NomPersRerserv ?></td>
                                            <td><?= $reservation->NumeroPersRers ?></td>
                                            <td><?= $reservation->typeLocal ?></td>    
                                            <td><?= $reservation->prixLocal ?></td>    
                                            <td><?= $reservation->dateDebut ?></td>
                                            <td><?= $reservation->dateFin ?></td>                                        
                                            <td>
                                                <a href="<?= linkTo('Reservation','edit', $reservation->idReservation) ?>" class='btn btn-sm btn-warning mr-4'>Editer</a>
                                                <a href="#" class='btn btn-sm btn-danger'>Supprimer</a>
                                            </td>
                                        </tr>
                                <?php   
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nom Client</th>
                                    <th>Numero du Client</th>
                                    <th>Type de Chambre</th>
                                    <th>Montant à payer</th>
                                    <th>Date de Debut</th>
                                    <th>Date de Fin</th>
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