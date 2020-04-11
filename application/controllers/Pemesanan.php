<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pemesanan extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model');
    }

    public function index_get()
    {
        $id = $this->input->get('id');
        $date = $this->input->get('date');

        if ($id) {
            if ($id === "all") {
                $pemesanan = $this->Pemesanan_model->getAllPemesanan();
            } else if (is_numeric($id)) {
                $pemesanan = $this->Pemesanan_model->getPemesananById($id);
            } else {
                $pemesanan = null;
            }

            if ($pemesanan) {
                $this->response([
                    'status' => true,
                    'data' => $pemesanan
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data Not Found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }

        if ($date) {
            $pemesanan = $this->Pemesanan_model->getPemesananByWaktu($date);

            if ($pemesanan) {
                $this->response([
                    'status' => true,
                    'data' => $pemesanan
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data Not Found!'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
}
