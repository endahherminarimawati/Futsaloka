<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Waktumain extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('WaktuMain_model');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $waktumain = $this->WaktuMain_model->getAllWaktuMain();
        } else {
            $waktumain = $this->WaktuMain_model->getWaktuMain($id);
        }

        if ($waktumain) {
            $this->response([
                'status' => true,
                'data' => $waktumain,
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data failed to load!'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
