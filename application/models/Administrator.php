<?php

class Administrator extends CI_Model {
    public function traitementLogin($log,$mdp) {
        $requete = "SELECT * FROM administrator WHERE email = '%s' AND motdepasse = crypt('%s',motdepasse)";
        $requete = sprintf($requete,$log,$mdp);
        echo $requete;
        $requete = $this->db->query($requete);
        $requete = $requete->result_array();
        $verif = 0;
        foreach ($requete as $key) {
            $verif = $key['idadministrator'];
        }
        if($verif==0){
            return null;
        }
        return $verif;
    }
    public function insertionAdmin($email,$nom,     $prenom,$motdepasse)
    {
        $sql = "INSERT INTO Administrator values (default,".$this->db->escape($email).",".$this->db->escape($nom).",".$this->db->escape($prenom).",crypt(".$this->db->escape($motdepasse).", gen_salt('bf')))";
        echo $sql;
        $this->db->query($sql);
    }
}

?>