<?php
	
	/**
	 * 
	 */
	class Categorie extends CI_Model
	{
		
		public function liste(){
            $sql = $this->db->query("select * from categorie");
            return $sql->result_array();
        }
	}

?>