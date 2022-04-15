<div class="card">
    <div class="card-header">
        <h4 class="card-title">Ajouter Une Chambre</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="<?= linkTo('Local', 'save') ?>">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Code Chambre</label>
                        <input type="text" class="form-control" name="codeLocal">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Type Chambre</label>
                        <input type="text" class="form-control" name="typeLocal">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Prix Location</label>
                        <input type="text" class="form-control" name="prixLocal">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>