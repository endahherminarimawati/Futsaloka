<?php

use GuzzleHttp\Client;

class Transaksi_model extends CI_Model {

    public function getAllTransaksi() {

        $client = new Client();

        $data = $client->request('GET', 'http://api.futsaloka.my.id/Transaksi/gettransaksi');

        $result = json_decode($data->getBody()->getContents(), true);

        return $result['data'];

    }

}

?>