<?php

class Register extends CI_Controller
{

    public function index()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');


        $data['title'] = 'Register | Futsaloka';

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('login/Register_v', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->_prosesRegister();
        }
    }
    
    private function _prosesRegister() {
        $this->load->model('auth/Auth_model');
        $data = $this->Auth_model->getAllUser();
        
        // cek ada kesamaan user dan password
        
        $name = htmlspecialchars($this->input->post('name'));
        $email = htmlspecialchars($this->input->post('email'));
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        
    
        // cek kesamaan user
        $userSama = false;
        foreach($data as $dt) {
            if($dt['username'] == $username) {
                $userSama = true;
            }
        }
    
        // cek kesamaan email
        $emailSama = false;
        foreach($data as $dt) {
            if($dt['email'] == $email) {
                $emailSama = true;
            }
        }
    
        if($userSama == true && $emailSama == true) {
            $this->session->set_flashdata('ue', '<div class="alert alert-danger" role="alert"> Username dan Email telah digunakan! </div>');
            redirect('register');
        } else if($userSama == true) {
            $this->session->set_flashdata('username', '<div class="alert alert-danger" role="alert"> Username telah digunakan! </div>');
            redirect('register');
        } else if($emailSama == true) {
            $this->session->set_flashdata('email', '<div class="alert alert-danger" role="alert"> Email telah digunakan! </div>');
            redirect('register');
        } else {
            // berhasil
            // create data
            $tambahUser = [
                'id_user' => '',
                'username' => $username,
                'name' => $name,
                'password' => $password,
                'email' => $email,
                'level' => '',
                'user_created' => date('Y-m-d')
            ];

            $this->Auth_model->addUser($tambahUser);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Terdafar, Silahkan Login! </div>');
            redirect('auth');
        }
    }
}
