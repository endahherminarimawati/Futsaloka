<?php

class Home extends CI_Controller
{
    public function index()
    {
        // load view
        $this->load->view('home/index');
    }
}
