<?php

class Mahasiswa_model extends CI_Model
{
    public function gettAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function getMahasiswa($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function addMahasiswa($data)
    {
        $this->db->insert('mahasiswa', $data);
    }
}
