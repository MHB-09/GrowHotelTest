<div class="card">
    <div class="card-header">
        <h4 class="card-title">Modifier Un Taux</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="<?= linkTo('Taxe', 'update') ?>">
                <div class="form-row">
                <input hidden type="text" class="form-control" placeholder="" name="idTaxe" value="<?= $taxes->idTaxe ?>">
                    <div class="form-group col-md-4">
                        <label>Nom de Taxe</label>
                        <input type="text" class="form-control" name="nomTaxe" value="<?= $taxes->nomTaxe ?>">
                    </div>
                </div>
                <div class="form-row mt-0 mb-0">
                <div class="form-group col-md-2">
                        <label>Montant</label>
                        <div class="basic-form">
                            <div class="card">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="montantTaxe" value="<?= $taxes->montantTaxe ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row mt-0">
                    <div class="form-group col-md-2">
                        <label>Type de Taxe</label>
                        <select id="inputState" class="form-control" name="typeTaxe">
                            <option selected value="<?= $taxes->typeTaxe ?>"><?= $taxes->typeTaxe ?></option>
                            <option value="<?= ($taxes->typeTaxe =='Achat'? "Vente" : "Achat" )?>"><?= ($taxes->typeTaxe =='Achat'? "Vente" : "Achat" )?></option>
                        </select>
                    </div>          
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>