<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pendapatan extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model');
    }

    public function index_get()
    {
        $year = $this->input->get('year');
        $month = $this->input->get('month');

        if ($year) {
        }

        if ($month) {
        }

        if ($month === null && $year === null) {
            $pendapatan = $this->Pemesanan_model->getAllPemesanan();
            $total = 0;
            foreach ($pendapatan as $pd) {
                $total += intval($pd['tarif']);
            }

            $this->response([
                'status' => true,
                'data' => (object) [
                    'waktu' => 'Semua',
                    'pendapatan' => $total
                ]
            ]);
        }
    }
}
