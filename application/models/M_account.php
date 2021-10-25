<?php
class M_account extends CI_model
{
    function create_useracc($nik,$nama, $asal_sekolah, $status_pendaftaran)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO useracc(nik,nama,asal_sekolah, status_pendaftaran )
        VALUES ('$nik','$nama','$asal_sekolah', '$status_pendaftaran')");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function read_useracc()
    {
        $hasil = $this->db->query("SELECT * FROM useracc");
        return $hasil;
    }
    function read_data_by_id($id)
    {
        $hasil = $this->db->query("SELECT * FROM useracc where id_account ='$id' ");
        return $hasil;
    }


    function delete_useracc($id)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM useracc WHERE id_account ='$id'");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function update_useracc($id, $asal_sekolah, $status_pendaftaran)
    {
        $hsl = $this->db->query("UPDATE useracc SET asal_sekolah = '$asal_sekolah', status_pendaftaran= '$status_pendaftaran'  WHERE id_account ='$id'");
        return $hsl;
    }
}
