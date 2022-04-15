<div class="card">
    <div class="card-header">
        <h4 class="card-title">Ajouter Un Nouveau Gerant</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="<?= linkTo('Personnel', 'save') ?>">
                <div class="form-row">
                    <div class="form-group col-md-6" hidden>
                        <label>Matricule</label>
                        <input type="text" class="form-control" name="matricule" value="Emp0005">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Civilité</label>
                        <div class="basic-form">
                            
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" name="civilite" value="M"> M.</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="civilite" value="Mme"> Mme</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="civilite" value="Mlle"> Mlle </label>
                                </div>
                           
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="" name="nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Prenom</label>
                        <input type="TEXT" class="form-control" placeholder="" name="prenom">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telephone</label>
                        <input type="text" class="form-control" placeholder="" name="telephone">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Adresse</label>
                        <input type="text" class="form-control" placeholder="" name="adresse">
                    </div>


                </div>


                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>