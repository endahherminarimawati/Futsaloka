<?php

class Dashboard extends CI_Controller {

    public function index() {
        $sess = $this->session->userdata();
        
        if(count($sess) < 2) {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"> Please Login First! </div>');
            redirect('auth');
        } else {
            redirect('auth');
        }

    }

}

?>