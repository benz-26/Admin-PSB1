<?php
Class M_print extends CI_Model{
	
	function getDatabyId($id_pendaftaran)
	{
        $hasil = $this->db->query("SELECT * FROM regis where id_pendaftaran ='$id_pendaftaran' ");
        return $hasil;
	}
	function read_regis()
    {
        $hasil = $this->db->query("SELECT * FROM regis");
        return $hasil;
    }
    
}
?>