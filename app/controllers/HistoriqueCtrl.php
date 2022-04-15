<?php

class HistoriqueCtrl extends Controller
{
    
    public function __construct(){
        //  $this->utilisateurModel = $this->model('Utilisateur');
        //  $this->parametresModel = $this->model('Parametres');
        //  $this->roleModel = $this->model('Roles');
        //  $this->historiqueModel = $this->model('Historique');
    }

    public function index(){
        $this->view('historique/monHistorique');
        // if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
        //     $data = [
        //         "historiques" => $this->historiqueModel->getHistoriqueByUser( $_SESSION['connectedUser']->idUtilisateur)
        //     ];
        //     $this->view('home/'.__FUNCTION__,$data);
        // }else{
        //     $this->redirectToMethod('home','connexion');
        // }
    }

    public function monHistorique(){
        $this->view('historique/monHistorique');
    }

}