<?php

class Pemesanan_Model extends CI_Model
{
    public function CekJadwalPemesanan($date)
    {
        return $this->db->get_where('pemesanan', ['tanggal' => $date])->result_array();
    }

    public function InsertPesanan($datamasuk)
    {
        $this->db->insert('pemesanan', $datamasuk);
    }
}
