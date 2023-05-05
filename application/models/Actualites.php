<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Actualites extends CI_Model
{
    public function getActualites()
    {
        $sql = $this->db->query("select * from actualites ");
        return $sql->result_array();
    }
    public function getActualitesDetail($id)
    {
        $sql = $this->db->query("select * from actualites where idactualite =".$id);
        return $sql->result_array();
    }
    public function getEvenements()
    {
        $sql = $this->db->query("select * from actualites where idtypeactualite=2");
        return $sql->result_array();
    }
    public function getTypeActualite()
    {
        $sql = $this->db->query("select * from TypeActualite");
        return $sql->result_array();
    }
    public function insertionActualite($idtypeactualite, $photoillustration, $grandtitre, $descriptionactualite, $datedebut, $datefin, $lieuevenement)
    {
        if ($datedebut == "") {
            $sql = "INSERT INTO Actualites VALUES(default," . $this->db->escape($idtypeactualite) . "," . $this->db->escape($photoillustration) . "," . $this->db->escape($grandtitre) . "," . $this->db->escape($descriptionactualite) . ",default,default,default,default)";
        } else {
            $sql = "INSERT INTO Actualites VALUES(default," . $this->db->escape($idtypeactualite) . "," . $this->db->escape($photoillustration) . "," . $this->db->escape($grandtitre) . "," . $this->db->escape($descriptionactualite) . ",default," . $this->db->escape($datedebut) . "," . $this->db->escape($datefin) . "," . $this->db->escape($lieuevenement) . ")";
        }
        echo $sql;
        $this->db->query($sql);
    }
}