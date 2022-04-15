<?php

class DashboardCtrl extends Controller
{
    public function __construct(){
        //  $this->utilisateurModel = $this->model('Utilisateur');
        //  $this->parametresModel = $this->model('Parametres');
        //  $this->roleModel = $this->model('Roles');
        //  $this->historiqueModel = $this->model('Historique');
    }

    public function index(){
        $this->view("dashboard/journalier");
      
    }

    public function annuel(){
        $this->view('dashboard/annuel');
    }
    public function mensuel(){
        $this->view('dashboard/mensuel');
    }
    public function journalier(){
        $this->view('dashboard/journalier');
    }
    public function hebdomadaire(){
        $this->view('dashboard/hebdomadaire');
    }
}
