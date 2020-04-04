<?php

class Jam_Main_Model extends CI_Model
{
    public function getAllWaktuMain()
    {
        return $this->db->get('waktu_main')->result_array();
    }

    public function getWaktuMainById($id)
    {
        return $this->db->get_where('waktu_main', ['id_waktu_main' => $id])->row_array();
    }
}
