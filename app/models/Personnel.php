<?php

class Personnel extends Model
{

    public function getPersonnel()
    {
        $this->db->query(" SELECT * FROM utilisateur u, typePersonne t, personne p
        WHERE 
         t.idTypePersonne = p.idTypePersonneF
        AND u.idPersonneF=p.idPersonne ");
        return $this->db->resultSet();
    }

    public function getEmployesByRole($role){
       
        $this->db->query("SELECT * FROM eic_employe,eic_utilisateur,eic_roles WHERE idEmployeF = idEmp AND role = idRole AND libelleRole = '$role'");
        return $this->db->resultSet();
    }


    public function addPersonnel($matricule, $nom, $prenom, $civilite, $email, $telephone, $adresse) {
        $this->db->query("
          INSERT INTO personne(matricule, nomPersonne, prenomPersonne, civilitePersonne,emailPersonne, telephonePersonne, adressePersonne, idTypePersonneF) VALUES ('$matricule', '$nom', '$prenom', '$civilite', '$email', '$telephone', '$adresse',2)");
        if ($this->db->execute()) {
            $pers =  $this->findByNumero($matricule);
            $mdp = sha1("passer");
            $this->db->query("
            INSERT INTO utilisateur(login, mdp, idPersonneF) VALUES ('$matricule', '$mdp', $pers->idPersonne)");
            if ($this->db->execute()) {
                return 1;
            }
        }
        return 0;
    }
    
    public function updateProfil($idEmp, $nomEmp, $prenomEmp, $sexeEmp, $emailEmp, $telephoneEmp,$adresse){
        $this->db->query("
            UPDATE personne SET nomPersonne='$nomEmp', prenomPersonne='$prenomEmp', civilitePersonne='$sexeEmp', telephonePersonne='$telephoneEmp', adressePersonne='$adresse', emailPersonne='$emailEmp' WHERE idPersonne = $idEmp");
        if ($this->db->execute()) {
            $this->db->query("
            SELECT * FROM utilisateur u, typePersonne t, personne p
                WHERE 
                t.idTypePersonne = p.idTypePersonneF
                AND u.idPersonneF = p.idPersonne
                AND p.idPersonne = $idEmp");
            return $this->db->single();;
        }
        return 0;
    }

    public function findBy($col, $value)
    {
        $this->db->query("
        SELECT * FROM utilisateur u, typePersonne t, personne p
            WHERE 
            t.idTypePersonne = p.idTypePersonneF
            AND u.idPersonneF = p.idPersonne
            AND $col = $value");
        return $this->db->single();
    }

    public function findByNumero($numero)
    {
        $this->db->query("SELECT * FROM personne WHERE matricule = '$numero'");
        return $this->db->single();
    }
}
