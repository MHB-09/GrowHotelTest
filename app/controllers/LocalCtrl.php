<?php

class LocalCtrl extends Controller
{
    public function __construct(){
        $this->personnelModel = $this->model('Personnel');
        $this->utilisateurModel = $this->model('Utilisateur');
        $this->localModel = $this->model('Local');
    }

    public function index(){
        $this->view("configuration/local/liste");
      
    }

    public function ajout(){
        
        $this->view('Configuration/local/ajout');
    }

    public function liste(){
        $locaux =$this->localModel->getLocal();
        $data = [
            "locaux" => $locaux
        ];
        $this->view('Configuration/local/liste',$data);
    }
    public function save()
    {
        $form = getForm($_POST);
        extract($form);

        $dep = $this->localModel->addLocal($codeLocal, $typeLocal, $prixLocal);
        $this->redirectToMethod('Local', 'liste');
    }

}