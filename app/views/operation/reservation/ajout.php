<div class="card">
    <div class="card-header">
        <h4 class="card-title">Ajouter Une Reservation</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="<?= linkTo('Reservation', 'save') ?>">

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Nom Client</label>
                        <input type="text" class="form-control" placeholder="" name="nomClient">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Numéro du Client</label>
                        <input type="TEXT" class="form-control" placeholder="" name="numeroClient">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>Type de Chambre</label>
                        <select id="inputState" class="form-control" name="idLocal">
                            <option selected>Choisir...</option>
                            <?php
                            foreach ($locaux as $l) {
                            ?>
                                <option value="<?= $l->idLocal ?>"><?= $l->codeLocal . " - " . $l->typeLocal . " - " . $l->prixLocal ?>Fr</option>
                            <?php
                            }

                            ?>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="card-body">
                        <div class="row form-material">
                            <div class="col-xl-3 col-xxl-6 col-md-2">
                                <label>Date de Debut</label>
                                <div class="card-body">
                                    <input name="dateDebut" placeholder="2017-06-04" value="2017-06-18" class="datepicker-default form-control" id="datepicker">
                                </div>
                            </div>
                            <div class="col-xl-3 col-xxl-6 col-md-2">
                                <label>Date de Fin</label>
                                <div class="card-body">
                                    <input name="dateFin" placeholder="2017-06-04" value="2017-06-19"class="datepicker-default form-control" id="datepicker">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
</div>