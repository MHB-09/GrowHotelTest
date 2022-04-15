<?php


class Local extends Model
{
    public function getLocal()
    {
        $this->db->query(" SELECT * FROM local ");
        return $this->db->resultSet();
    }
    public function addLocal($codeLocal, $typeLocal, $prixLocal) {
        $this->db->query("INSERT INTO Local(codeLocal, typeLocal, prixLocal) VALUES ('$codeLocal', '$typeLocal', '$prixLocal')");
        return $this->db->execute();
    }
    public function delete($idLocal)
    {
        $this->db->query("DELETE FROM Local WHERE idLocal = $idLocal");
        if ($this->db->execute()) {
            return "1";
        }
        return "0";
    }
    public function updateLocal($idLocal, $nomLocal, $montantLocal, $typeLocal){
        $this->db->query("
            UPDATE Local SET nomLocal='$nomLocal', montantLocal='$montantLocal', typeLocal='$typeLocal' WHERE idLocal = $idLocal");
        if ($this->db->execute()) {
            return $this->db->single();;
        }
        return 0;
    }
    public function findBy($col, $value)
    {
        $this->db->query("
        SELECT * FROM Local
            WHERE 
            $col = $value");
        return $this->db->single();
    }
}


?>