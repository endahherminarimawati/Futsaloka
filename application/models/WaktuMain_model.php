<?php

class WaktuMain_model extends CI_Model
{
    public function getAllWaktuMain()
    {
        return $this->db->get('waktu_main')->result_array();
    }

    public function getWaktuMain($id)
    {
        return $this->db->get_where('waktu_main', ['id_waktu_main' => $id])->row_array();
    }
}
