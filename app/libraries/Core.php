<?php

/**
 * App Core class
 * Créer les URL et charger le controller
 * Format des URL : /controller/method/params
 */
class Core
{
    private $controllerName = '';
    protected $currentController = 'HomeCtrl';
    protected $currentMethod = 'index';
    protected $params = [];
    //
    public function __construct()
    {
        //print_r($this->getUrl());
        $url = $this->getUrl();
        
        if ($url != "" ) {
            //  Tester si le nom du controller existe(le premier param de l'url)
            if (file_exists('../app/controllers/' . ucwords($url[0]) . 'Ctrl.php')) {
                $this->currentController = ucwords($url[0] . 'Ctrl');
                $this->controllerName = $url[0];
                //
                unset($url[0]);
            }
            //Appeler le controller
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;
            //Tester le nom de la méthde(le deuxieme param de l'url)
            if (isset($url[1])) {
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    //
                    unset($url[1]);
                }
            }
            // Les params (prendre les valeurs restantes du tableau)
            $this->params = $url ? array_values($url) : [];

            $lien = ucfirst($this->controllerName) . '/' . $this->currentMethod;
            
            $t = ['Home/index', "Home/logout", "Home/connexion", "Home/erreurRole"];
            if (true) {
                //Callback avec un tableau de params
                call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
            } else {
                if (Role::isLogged()) {

                    redirectToPage('Home', 'erreurRole');
                } else {
                    redirectToPage('Home', 'connexion');
                }
            }
        } else {
            if (Role::isLogged() && Role::isVerified()) {
                redirectToPage('Home');
            } else{
                redirectToPage('Home', 'connexion');

            }
        }
    }
    //
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //Supprimer les dernier slash à droite
            $url = filter_var($url, FILTER_SANITIZE_URL); //Supprimer les caracteres non supportés par les url
            $url = explode('/', $url);
            return $url;
        }
    }
}
