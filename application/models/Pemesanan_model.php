<?php

class Pemesanan_model extends CI_Model
{
    public function getAllPemesanan()
    {
        return $this->db->get('pemesanan')->result_array();
    }

    public function getPemesananById($id)
    {
        return $this->db->get_where('pemesanan', ['id_pemesanan' => $id])->row_array();
    }

    public function getPemesananByWaktu($date)
    {
        return $this->db->get_where('pemesanan', ['tanggal' => $date])->result_array();
    }

    public function getPemesananByTahun($year)
    {
        return $this->db->query('SELECT * FROM pendapatan WHERE tanggal LIKE ');
    }
}
