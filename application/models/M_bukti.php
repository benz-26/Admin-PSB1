<?php
Class M_bukti extends CI_Model{
	
	function getDatabyId($id_account)
	{
        $hasil = $this->db->query("SELECT * FROM useracc where id_account ='$id_account' ");
        return $hasil;
	}
    function read_useracc()
    {
        $hasil = $this->db->query("SELECT * FROM useracc");
        return $hasil;
    }
    
}
?>