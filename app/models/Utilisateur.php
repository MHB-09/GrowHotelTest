<?php

class Utilisateur extends Model{
    public function findUser($username, $pass){
        $pass = sha1($pass);
        $this->db->query("
            SELECT * FROM utilisateur u, typePersonne t, personne p
            WHERE u.login='$username' 
            AND u.mdp='$pass'
            AND t.idTypePersonne = p.idTypePersonneF
            AND u.idPersonneF=p.idPersonne
            LIMIT 1
        ");
        return $this->db->single();
    }
//   -----------------------<|>
    public function getAll($orderBy = ''){
        $this->db->query("
        SELECT * FROM utilisateur u, typePersonne t, personne p
        WHERE 
         t.idTypePersonne = p.idTypePersonneF
        AND u.idPersonneF=p.idPersonne
        ");
        return $this->db->resultSet();
    }
//   -----------------------<|>
    public function findUserByIdEmp($idEmp){
        $this->db->query("
            SELECT * FROM  eic_employe e, eic_utilisateur u
            WHERE e.idEmp = u.idEmployeF
            AND e.idEmp = $idEmp
        ");
        return $this->db->single();
    }
//   -----------------------<|>
    public function activePersonne($idUser,$oldState){
        $this->db->query("
            UPDATE utilisateur
            SET etatUtilisateur = $oldState
            WHERE idUtilisateur = $idUser
        ");
        return $this->db->execute();
    }
//   -----------------------<|>
    public function addUser($idEmp,$newUsername,$newRole,$email){
        $pass = sha1('passer');
        //die("INSERT INTO utilisateur(login,mdp,role,etatUser,idEmployeF) VALUES ('$newUsername','passer','$newRole',0,$idEmp)");
        $this->db->query("INSERT INTO eic_utilisateur(login,mdp,role,etatUser,email,idEmployeF) VALUES ('$newUsername','$pass','$newRole',1,'$email',$idEmp)");
        return $this->db->execute();
    }
//   -----------------------<|>
    public function changeRole($idUser, $newRole){
        $this->db->query("
            UPDATE eic_utilisateur
            SET role = '$newRole'
            WHERE idEmployeF = $idUser
        ");
        return $this->db->execute();
    }
//   -----------------------<|>
    public function changePass($idEmp,$oldPass, $pass){
        $oldPass = sha1($oldPass);
        $pass = sha1($pass);
        $this->db->query("
            SELECT * FROM eic_utilisateur WHERE idUtilisateur=$idEmp AND mdp='$oldPass'
        ");
        $this->db->execute();
        if ($this->db->rowCount()>0){
            $this->db->query("
            UPDATE eic_utilisateur SET mdp='$pass', firstConnection=1 WHERE idUtilisateur=$idEmp
        ");
            $this->db->execute();
            return 1;
        }else{
            return -1;
        }
    }
}