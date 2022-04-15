<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tableau des Chambres</h4>
                <!--  <span class="ml-1">Datatable</span> -->
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Local</a></li>
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
                                    <th>Numero de Chambre</th>
                                    <th>Type de Chambre </th>
                                    <th>Prix Chambre </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($locaux as $local) {
                                     ?>
                                        <tr>
                                            <td><?= $local->codeLocal ?></td>
                                            <td><?= $local->typeLocal ?></td>   
                                            <td><?= $local->prixLocal ?></td>                                      
                                            <td>
                                            <a href="#" class='btn btn-sm btn-warning mr-4'>Editer</a>

                                                <!-- <a href="<?= linkTo('Local', 'edit', $local->idLocal) ?>" class='btn btn-sm btn-warning mr-4'>Editer</a> -->
                                                <a href="#" class='btn btn-sm btn-danger'>Supprimer</a>
                                            </td>
                                        </tr>
                                <?php   
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Numero de Chambre</th>
                                    <th>Type de Chambre </th>
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