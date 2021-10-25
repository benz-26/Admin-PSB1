<?php
class M_user extends CI_model
{
    function create_user($nama, $email, $password)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO user(nama, email, password)
        VALUES ('$nama', '$email','$password')");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function read_user()
    {
        $hasil = $this->db->query("SELECT * FROM user");
        return $hasil;
    }
    function read_user_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT * FROM user where id ='$id_user ' ");
        return $hasil;
    }
    function read_user_by_email_password($email, $password)
    {
        $hasil = $this->db->query("SELECT * FROM user where email ='$email' and password = '$password'");
        return $hasil;
    }

    function delete_user($id_user)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM user WHERE id='$id_user'");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function update_user($id_user, $nama, $email, $password)
    {
        $hsl = $this->db->query("UPDATE user SET nama='nama',email = '$email',password= '$password' WHERE id='$id_user'");
        return $hsl;
    }
}
