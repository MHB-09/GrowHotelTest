<div class="card">
    <div class="card-header">
        <h4 class="card-title">Modifier Une dépense</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="<?= linkTo('Depense','edit') ?>">
                <input hidden type="text" class="form-control" placeholder="" name="idDepense" value="<?= $depenses->idDepense ?>">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Libellé</label>
                        <input type="text" class="form-control" placeholder="" name="libelle" value="<?= $depenses->libelleDepense ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Montant</label>
                        <input type="TEXT" class="form-control" placeholder="" name="montant" value="<?= $depenses->montantDepense ?>"> 
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Opération</label>
                        <div class="basic-form">
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="operation" value="Credit" <?= ($depenses->operationDepense == "Credit") ? "checked" : "" ?>> Crédit</label>
                                <label class="radio-inline">
                                    <input type="radio" name="operation" value="Debit" <?= ($depenses->operationDepense == "Debit") ? "checked" : "" ?>> Débit</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>Compte</label>
                        <select id="inputState" class="form-control" name="compte">
                            <option selected value="<?= $depenses->idCompte ?>" ><?= $depenses->idCompte . "-" . $depenses->idCompte ?></option>
                            <?php
                            foreach ($comptes as $c) {
                            ?>
                                <option value="<?= $c->idCompte ?>"><?= $c->numeroCompte . "-" . $c->libelleCompte ?></option>
                            <?php
                            }

                            ?>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>Taxe</label>
                        <select id="inputState" class="form-control" name="taxe">
                            <option selected value="<?= $depenses->idTaxe ?>"><?= $depenses->idTaxe . "-" . $depenses->idTaxe ?></option>
                            <?php
                            foreach ($taxes as $t) {
                            ?>
                                <option value="<?= $t->idTaxe ?>"><?= $t->montantTaxe . "% -" . $t->nomTaxe ?></option>
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
                                <label>Date</label>
                                <input type="text" class="form-control"value="<?= $depenses->dateDepense ?>" name="date" placeholder="<?= $depenses->dateDepense ?>" id="mdate">
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