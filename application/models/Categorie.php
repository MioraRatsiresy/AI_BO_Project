<?php

/**
 * 
 */
class Categorie extends CI_Model
{

	public function liste()
	{
		$sql = $this->db->query("select * from categorie where etat=0");
		return $sql->result_array();
	}
	public function inserercategorie($categorie)
	{
		$sql = "INSERT INTO categorie(categorie) values (default," . $this->db->escape($categorie) . ")";
		$this->db->query($sql);
	}
	public function dropcategorie($id)
	{
		$sql = "update categorie set etat=4 where idcategorie=".$this->db->escape($id);
		$this->db->query($sql);
	}
	public function updatecategorie($id,$categorie)
	{
		$sql = "update categorie set categorie=".$this->db->escape($categorie)." where idcategorie=".$this->db->escape($id);
		$this->db->query($sql);
	}
}

?>