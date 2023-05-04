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
}

?>