<div class="card">
    <div class="card-header">
        <h4 class="card-title">Modifier Utilisateur</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="<?= linkTo('Personnel', 'update') ?>">
                <input hidden type="text" class="form-control" placeholder="" name="idPersonne" value="<?= $personne->idPersonne ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Matricule</label>
                        <input readonly type="text" class="form-control" placeholder="" value="<?= $personne->matricule ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Civilité</label>
                        <div class="basic-form">

                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" value="M" name="civilite" <?= ($personne->civilitePersonne == "M") ? "checked" : "" ?>> M.</label>
                                <label class="radio-inline">
                                    <input type="radio" value="Mme" name="civilite" <?= ($personne->civilitePersonne == "Mme") ? "checked" : "" ?>> Mme</label>
                                <label class="radio-inline">
                                    <input type="radio" value="Mlle" name="civilite" <?= ($personne->civilitePersonne == "Mlle") ? "checked" : "" ?>> Mlle </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="" name="nom" value="<?= $personne->nomPersonne ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Prenom</label>
                        <input type="TEXT" class="form-control" placeholder="" name="prenom" value="<?= $personne->prenomPersonne ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="" name="email" value="<?= $personne->emailPersonne ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telephone</label>
                        <input type="text" class="form-control" placeholder="" name="telephone" value="<?= $personne->telephonePersonne ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Adresse</label>
                        <input type="text" class="form-control" placeholder="" name="adresse" value="<?= $personne->adressePersonne ?>">
                    </div>


                </div>


                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>