<?php

class Reservation extends Model
{

    public function getReservation()
    {
        $this->db->query(" SELECT * FROM reservation r, local l
        WHERE 
         r.idLocal = l.idLocal");
        return $this->db->resultSet();
    }
    public function addReservation($nomClient, $numeroClient, $idLocal, $dateDebut, $dateFin) {
        $this->db->query("INSERT INTO reservation(NomPersRerserv, NumeroPersRers, idLocal , dateDebut, dateFin) VALUES ('$nomClient', '$numeroClient', '$idLocal', '$dateDebut', '$dateFin')");
        return $this->db->execute(); 
    }

    public function updateReservation($idReservation, $libelle, $montant, $operation, $date, $compte, $taxe){
        $this->db->query("
            UPDATE reservation SET libelleReservation='$libelle', montantReservation='$montant', operationReservation='$operation', dateReservation='$date', idCompte='$compte', idTaxe='$taxe' WHERE idReservation = $idReservation");
        if ($this->db->execute()) {
            return $this->db->single();;
        }
        return 0;
    }
    public function findBy($col, $value)
    {
        $this->db->query("
        SELECT * FROM reservation
            WHERE 
            $col = $value");
        return $this->db->single();
    }
}

