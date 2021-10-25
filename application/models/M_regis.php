<?php
class M_regis extends CI_model
{
    function create_regis($nama, $alamat, $jenis_kelamin, $umur, $tanggal_lahir, $tempat_lahir)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO regis(nama, alamat,jenis_kelamin, umur, tanggal_lahir, tempat_lahir )
        VALUES ('$nama', '$alamat' ,'$jenis_kelamin', '$umur', '$tanggal_lahir','$tempat_lahir')");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function read_regis()
    {
        $hasil = $this->db->query("SELECT * FROM regis");
        return $hasil;
    }
    function read_data_by_id($id)
    {
        $hasil = $this->db->query("SELECT * FROM regis where id_pendaftaran ='$id' ");
        return $hasil;
    }
    function delete_user($id)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM regis WHERE id_pendaftaran='$id'");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }

    function update_registrasi($id, $nama, $alamat, $jenis_kelamin, $umur, $tanggal_lahir, $tempat_lahir)
    {
        $hsl = $this->db->query("UPDATE regis SET nama = '$nama', alamat= '$alamat', jenis_kelamin= '$jenis_kelamin', umur= '$umur' ,tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir' WHERE id_pendaftaran='$id'");
        return $hsl;
    }
}
