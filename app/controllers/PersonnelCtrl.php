<?php

class PersonnelCtrl extends Controller
{
    
    public function __construct(){
         $this->personnelModel = $this->model('Personnel');
         $this->utilisateurModel = $this->model('Utilisateur');
    }

    public function index(){
        $this->view('personnel/liste');
        // if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
        //     $data = [
        //         "historiques" => $this->historiqueModel->getHistoriqueByUser( $_SESSION['connectedUser']->idUtilisateur)
        //     ];
        //     $this->view('home/'.__FUNCTION__,$data);
        // }else{
        //     $this->redirectToMethod('home','connexion');
        // }
    }

    public function ajout(){
        $this->view('personnel/ajout');
    }
    public function liste(){
        $users =$this->personnelModel->getPersonnel();
        $data = [
            "users" => $users
        ];
        $this->view('personnel/liste',$data);
    }
    public function edit($id){
        $pers = $this->personnelModel->findBy("idPersonne",$id);
       
        if($pers){
            $data = [
                "personne" => $pers
            ];
            $this->view('personnel/edit', $data);
        }else{
            $this->redirectToMethod("Personnel","liste");
        }
       
    }

    public function updateProfil(){
        $form = getForm($_POST);
        extract($form);
        $user = $this->personnelModel->updateProfil($idPersonne, $nom, $prenom, $civilite, $email, $telephone, $adresse);
        $_SESSION['connectedUser'] = $user;
        $this->redirectToMethod('Home','profil');
    }

    public function update(){
        $form = getForm($_POST);
        extract($form);
        $pers = $this->personnelModel->updateProfil($idPersonne, $nom, $prenom, $civilite, $email, $telephone, $adresse);
      
        $this->redirectToMethod('Personnel','liste');
    }

    public function activePersonne($idUser){
        $pers = $this->personnelModel->findBy("idUtilisateur",$idUser);
        $etat = ($pers->etatUtilisateur == 0 ? 1 : 0);
        $this->utilisateurModel->activePersonne($idUser,$etat);
      
        $this->redirectToMethod('Personnel','liste');
    }
    
    public function save(){
        $form = getForm($_POST);
        extract($form);

        $pers = $this->personnelModel->addPersonnel($matricule, $nom, $prenom, $civilite, $email, $telephone, $adresse);
      
        $this->redirectToMethod('Personnel','liste');
    }
}