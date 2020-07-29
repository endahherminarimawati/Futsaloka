<?php

class Dashboard extends CI_Controller {


    public function index() {
        $sess = $this->session->userdata();

        if($sess['level'] == 'admin') {
            $this->load->model('auth/Auth_model');
            $data['user'] = $this->Auth_model->getUsername($sess['username']);

            $data['title'] = 'Dashboard Admin | Futsaloka';
            $this->load->view('admin/Dashboard_v', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Anda tidak berhak mengakses! </div>');
            redirect('auth');
        }

    }


    public function tarif() {
        $sess = $this->session->userdata();

        if($sess['level'] == 'admin') {
            $this->load->model('auth/Auth_model');
            $data['user'] = $this->Auth_model->getUsername($sess['username']);
            $this->load->model('admin/Jadwal_model');
            $data['jadwal'] = $this->Jadwal_model->getJadwal();
            $data['title'] = 'Tarif | Futsaloka';
            $this->load->view('admin/Tarif_v', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Anda tidak berhak mengakses! </div>');
            redirect('auth');
        }

    }



    public function pesan() {
        $sess = $this->session->userdata();

        if($sess['level'] == 'admin') {

            $data['title'] = 'Pemesanan | Futsaloka';
            
            $this->load->model('admin/Pemesanan_model');
            $data['pemesanan'] = $this->Pemesanan_model->getpemesanan();

            $this->load->model('admin/User_model');
            $data['user'] = $this->User_model->getuser();

            $this->load->model('admin/Jadwal_model');
            $data['jadwal'] = $this->Jadwal_model->getJadwal();

            $this->load->model('auth/Auth_model');
            $data['user'] = $this->Auth_model->getUsername($sess['username']);

            $this->load->view('admin/Pemesanan_v', $data);

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Anda tidak berhak mengakses! </div>');
            redirect('auth');

        }
    }


    public function datauser() {
        $sess = $this->session->userdata();

        if($sess['level'] == 'admin') {

            $data['title'] = 'Data User | Futsaloka';

            $this->load->model('admin/User_model');
            $data['userdata'] = $this->User_model->getuser();

            $this->load->model('auth/Auth_model');
            $data['user'] = $this->Auth_model->getUsername($sess['username']);
            
            $this->load->view('admin/DataUser_v', $data);


        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Anda tidak berhak mengakses! </div>');
            redirect('auth');
        }
    }

    public function pendapatan() {
        $sess = $this->session->userdata();

        if($sess['level'] == 'admin') {

            $data['title'] = 'Pendapatan | Futsaloka';

            $this->load->model('admin/Pemesanan_model');
            $data['pemesanan'] = $this->Pemesanan_model->getpemesanan();

            $this->load->model('admin/Jadwal_model');
            $data['jadwal'] = $this->Jadwal_model->getJadwal();
            
            $this->load->model('auth/Auth_model');
            $data['user'] = $this->Auth_model->getUsername($sess['username']);
            
            $this->load->view('admin/Pendapatan_v', $data);


        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Anda tidak berhak mengakses! </div>');
            redirect('auth');
        }
    }

}

?>