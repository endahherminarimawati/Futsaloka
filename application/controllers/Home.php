<?php

class Home extends CI_Controller
{
    public function index()
    {
        // load view
        $this->load->view('home/index');
    }

    public function JamMain()
    {
        // load model
        $this->load->model('Jam_Main_Model');
        $data['waktu_main'] = $this->Jam_Main_Model->getAllWaktuMain();

        // load view
        $this->load->view('jam/index', $data);
    }

    public function cek()
    {
        $this->load->view('pemesanan/cek');
    }

    public function CekJadwal()
    {
        $data['date'] = $this->input->post('date');
        // load model
        $this->load->model('Pemesanan_Model');
        $this->load->model('Jam_Main_Model');
        $data['jadwal_pemesanan'] = $this->Pemesanan_Model->CekJadwalPemesanan($data['date']);
        $data['jadwal'] = $this->Jam_Main_Model->getAllWaktuMain();
        $this->load->view('pemesanan/jadwal', $data);
    }

    public function Pemesanan($id_waktu_main, $date)
    {
        // load model
        $this->load->model('Jam_Main_Model');
        $data['jam_detil'] = $this->Jam_Main_Model->getWaktuMainById($id_waktu_main);
        $data['date'] = $date;
        $this->load->view('pemesanan/index', $data);
    }

    public function booking()
    {
        $datamasuk = [
            'id_waktu_main' => $this->input->post('id_waktu_main'),
            'tanggal' => $this->input->post('tanggal'),
            'nama_pemesan' => $this->input->post('nama'),
            'hp_pemesan' => $this->input->post('hp'),
            'tarif' => $this->input->post('tarif')
        ];

        // load model
        $this->load->model('Pemesanan_Model');
        $this->Pemesanan_Model->InsertPesanan($datamasuk);
        redirect('Home/index');
    }
}
