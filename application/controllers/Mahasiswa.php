<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $mhs = $this->Mahasiswa_model->gettAllMahasiswa();
        } else {
            $mhs = $this->Mahasiswa_model->getMahasiswa($id);
        }

        if ($mhs === null) {
            // gagal req
            $this->response([
                'status' => false,
                'message' => 'Data not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        } else {
            // sukses req
            $this->response([
                'status' => true,
                'data' => $mhs
            ], REST_Controller::HTTP_OK);
        }
    }

    public function index_post() {
        
    }
}
