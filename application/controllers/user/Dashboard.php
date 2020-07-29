<?php



class Dashboard extends CI_Controller {


    public function index() {

        $sess = $this->session->userdata();

        if(count($sess) < 2) {
            redirect('auth');
        }

        if($sess['level'] == 'user') {
            $this->load->model('auth/Auth_model');
            $data['user'] = $this->Auth_model->getUsername($sess['username']);
    
            // load model pemesanan
            $this->load->model('user/Pemesanan_model');
            $data['pemesanan'] = $this->Pemesanan_model->getPemesanan();
    
            $data['title'] = 'Dashboard | Futsaloka';
            $this->load->view('user/Dashboard_v', $data);
        } else {
            redirect('auth');
        }


    }

    public function pesan() {
        $sess = $this->session->userdata();

        $this->load->model('auth/Auth_model');
        $data['user'] = $this->Auth_model->getUsername($sess['username']);

        $this->load->library('form_validation');


        // set rule form validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('tanggal_main', 'Tanggal Main', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');

        // load model pemesanan
        $this->load->model('user/Pemesanan_model');
        $data['pemesanan'] = $this->Pemesanan_model->getPemesanan();

        // load model Jadwal
        $this->load->model('user/Jadwal_model');
        $data['jadwal'] = $this->Jadwal_model->getJadwal();

        $data['title'] = 'Pesan Sekarang | Futsaloka';
    
        if($this->form_validation->run() == false) {
            $this->load->view('user/Pesan_v', $data);
        } else {
            
            // tangkap data
            $nama = $this->input->post('nama', true);
            $no_hp = $this->input->post('no_hp', true);
            $tanggal_main = $this->input->post('tanggal_main', true);
            $jadwal = $this->input->post('jadwal', true);
            $pembayaran = $this->input->post('pembayaran', true);
            

            $date_now = date('Y-m-d');

            $dataPemesanan = [
                "id_pemesanan" => '',
                "id_jadwal" => $jadwal,
                "id_user" => $sess['id_user'],
                "nama_pemesan" => $nama,
                "hp_pemesan" => $no_hp,
                "tanggal_main" => $tanggal_main,
                "tanggal_pesan" =>  $date_now
            ];

         
            if($tanggal_main < $date_now) {
                // jika tanggal main di hari kemarin
                $this->session->set_flashdata('pemesanan', '<div class="mx-4"> <div class="mt-2"> <div class="alert alert-danger" role="alert"> Pilih Tanggal Main di Hari Mendatang </div> </div> </div>');
                redirect('user/dashboard/pesan');
            } else {
                $bentrok = false;
                foreach($data['pemesanan'] as $dp) {
                    if($dp['tanggal_main'] == $tanggal_main && $dp['id_jadwal'] == $jadwal) {
                        $bentrok = true;
                    }
                }

                if($bentrok == true) {
                    // bentrok jadwal
                    $this->session->set_flashdata('pemesanan', '<div class="mx-4"> <div class="mt-2"> <div class="alert alert-danger" role="alert"> Tanggal Main dan Waktu Main sudah dipesan. Silahkan pilih waktu main yang lain! </div> </div> </div>');
                    redirect('user/dashboard/pesan');
                } else {
                    // post to API
                    // send session
                    $this->Pemesanan_model->addPemesanan($dataPemesanan);
                    $this->session->set_flashdata('pemesanan', '<div class="mx-4"> <div class="mt-2"> <div class="alert alert-success" role="alert"> Pemesanan Berhasil </div> </div> </div>');
                    redirect('user/dashboard/pesan');
                }
            }

            
        }
    }

    public function riwayat() {
        $sess = $this->session->userdata();

        $this->load->model('auth/Auth_model');
        $data['user'] = $this->Auth_model->getUsername($sess['username']);

        // load model pemesanan
        $this->load->model('user/Pemesanan_model');
        $data['pemesanan'] = $this->Pemesanan_model->getPemesanan();

        // load model transaksi
        $this->load->model('user/Transaksi_model');
        $data['transaksi'] = $this->Transaksi_model->getAllTransaksi();

        $data['title'] = 'Riwayat Pemesanan | Futsaloka';
        $this->load->view('user/Riwayat_v', $data);
    }

    public function tarif() {
        $sess = $this->session->userdata();

        $this->load->model('auth/Auth_model');
        $data['user'] = $this->Auth_model->getUsername($sess['username']);

        // load model pemesanan
        $this->load->model('user/Pemesanan_model');
        $data['pemesanan'] = $this->Pemesanan_model->getPemesanan();

        // load model Jadwal
        $this->load->model('user/Jadwal_model');
        $data['jadwal'] = $this->Jadwal_model->getJadwal();

        $data['title'] = 'Tarif Lapangan | Futsaloka';
        $this->load->view('user/Tarif_v', $data);
    }



    // proses pemesanan lapangan
    public function pesanlapangan() {
        $sess = $this->session->userdata();

        $this->load->model('auth/Auth_model');
        $data['user'] = $this->Auth_model->getUsername($sess['username']);
        

        $this->load->library('form_validation');
        // set rule form validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('tanggal_main', 'Tanggal Main', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');

        $this->load->model('auth/Auth_model');
        $data['user'] = $this->Auth_model->getUsername($sess['username']);


        if($this->form_validation->run() == false) {
            $this->load->view('user/Pesan_v');
        } else {
            echo "Berhasil";
        }
    }


    public function hapus($id) {
        $sess = $this->session->userdata();

        $this->load->model('user/Pemesanan_model');
        $this->Pemesanan_model->hapusPemesanan($id);

        $this->session->set_flashdata('riwayat', '<div class="mx-4"> <div class="mt-2"> <div class="alert alert-success" role="alert"> Pemesanan Berhasil dihapus!</div> </div> </div>');
        redirect('user/dashboard/riwayat');
    }


}



?>