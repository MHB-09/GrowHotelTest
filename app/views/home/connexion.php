<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-7">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-3 mt-5 text-primary "  >Bienvenue sur votre plateforme de Gestion d'hotelerie </h4>
                                <h4 class="text-center mb-4 mt-1 text-primary "  >Veuillez Saisir Vos Informations </h4>
                                <form method="POST" action="<?= linkTo('Home', 'connexion', 'login') ?>">
                                    <?php if ($message != "") { ?>
                                        <div class="card mt-0 bg-danger p-0 col-md-12 text-center text-white">
                                            <h3> <?= $message ?> </h3>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group">
                                        <label><strong>Login</strong></label>
                                        <input type="text" class="form-control" name="login">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Mot de passe</strong></label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2" hidden>

                                        <div class="form-group">
                                            <a href="page-forgot-password.html">Mot de Passe oublié?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>