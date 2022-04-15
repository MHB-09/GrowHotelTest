<?php

class DocumentCtrl extends Controller
{
    public function __construct()
    {
        $this->compteModel = $this->model('Compte');
        $this->taxeModel = $this->model('Taxe');
        $this->personnelModel = $this->model('Personnel');
        $this->utilisateurModel = $this->model('Utilisateur');
        $this->depenseModel = $this->model('Depense');
    }

    public function index()
    {
        $this->view('operation/depense/liste');
        // if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
        //     $data = [
        //         "historiques" => $this->historiqueModel->getHistoriqueByUser( $_SESSION['connectedUser']->idUtilisateur)
        //     ];
        //     $this->view('home/'.__FUNCTION__,$data);
        // }else{
        //     $this->redirectToMethod('home','connexion');
        // }
    }

   
    public function document()
    {
        $depenses = $this->depenseModel->getDepense();
        $data = [
            "comptes" => $this->compteModel->getCompte(),
            "taxes" => $this->taxeModel->getTaxe(),
            "depenses" => $depenses
        ];
        $this->view('document/document', $data);
    }
 
}
