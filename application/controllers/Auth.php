<?php

use GuzzleHttp\Client;

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function cekSession() {
        $sess = $this->session->userdata();


        if(count($sess) > 1) {
            if($sess['level'] == 'user') {
                redirect('user/dashboard');
            } else if($sess['level'] == 'admin') {
                redirect('admin/dashboard');
            }
        }
    }

    public function index() {
        
        // check session
        $this->cekSession();

        $data['title'] = 'FUTALOKA | LOGIN';

        // set rule form validation
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('login/Login_index_v');
            $this->load->view('templates/footer');
        } else {
            // ketika login berhasil
            $this->_prosesLogin();
        }

    }

    private function _prosesLogin() {
        
        // ambil data user saat login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // get data from API
        $client = new Client();

        $this->load->model('auth/Auth_model');
        $query = $this->Auth_model->getAllUser();

        $loged = false;

        foreach($query as $qr) {
            if($username == $qr['username']) {
                if(password_verify($password, $qr['password'])) {
                    $loged = true;
                    // buat data untuk session
                    $userSession = [
                        'id_user' => $qr['id_user'],
                        'username' => $qr['username'],
                        'password' => $qr['password'],
                        'level' => $qr['level']
                    ];
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password! </div>');
                    redirect('auth');
                }
            }
        }

        if($loged == true) {
            // berhasil login
            // set session
            // check level user
            if($userSession['level'] == 'user') {
                $this->session->set_userdata($userSession);
                redirect('user/dashboard');
            } else if ($userSession['level'] == 'admin') {
                $this->session->set_userdata($userSession);
                redirect('admin/dashboard');
            }


        } else {
            // gagal login
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username not found! </div>');
            redirect('auth');
        }

    }


    public function logout() {

        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('login');

        redirect('auth');

    }    

}

?>