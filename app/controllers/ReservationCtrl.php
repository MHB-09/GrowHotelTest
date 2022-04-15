<?php

class ReservationCtrl extends Controller
{
    public function __construct()
    {
        $this->localModel = $this->model('local');
        $this->personnelModel = $this->model('Personnel');
        $this->utilisateurModel = $this->model('Utilisateur');
        $this->reservationModel = $this->model('Reservation');
    }

    public function index()
    {
        $this->view('operation/reservation/liste');
        // if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
        //     $data = [
        //         "historiques" => $this->historiqueModel->getHistoriqueByUser( $_SESSION['connectedUser']->idUtilisateur)
        //     ];
        //     $this->view('home/'.__FUNCTION__,$data);
        // }else{
        //     $this->redirectToMethod('home','connexion');
        // }
    }

    public function ajout()
    {
        $data = [
            "locaux" => $this->localModel->getLocal()
        ];
        $this->view('operation/reservation/ajout', $data);
    }
    public function liste()
    {
        $reservations = $this->reservationModel->getReservation();
        $data = [
            "reservations" => $reservations
        ];
        $this->view('operation/reservation/liste', $data);
    }
    public function save()
    {
        $form = getForm($_POST);
        extract($form);

        $dep = $this->reservationModel->addReservation($nomClient, $numeroClient, $idLocal, $dateDebut, $dateFin);
        $this->redirectToMethod('Reservation', 'liste');
    }
    public function edit($id)
    {
        $reservations = $this->reservationModel->findBy("idReservation", $id);

        if ($reservations) {
            $data = [
                "comptes" => $this->compteModel->getCompte(),
                "taxes" => $this->taxeModel->getTaxe(),
                "reservations" => $reservations
            ];
            $this->view('operation/reservation/edit', $data);
        } else {
            $this->redirectToMethod("Reservation", "liste");
        }
    }
    public function update()
    {
        $form = getForm($_POST);
        extract($form);
        $this->reservationModel->updateReservation($idReservation, $libelle, $montant, $operation, $date, $compte, $taxe);

        $this->redirectToMethod('Reservation', 'liste');
    }
}
