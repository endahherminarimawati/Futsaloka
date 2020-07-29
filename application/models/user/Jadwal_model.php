<?php

use GuzzleHttp\Client;

class Jadwal_model extends CI_Model {

    public function getJadwal() {
        // ambil data pemesanan berdasarkan id

        $client = new Client();

        $data = $client->request('GET', 'http://api.futsaloka.my.id/Jadwal/getjadwal');

        $result = json_decode($data->getBody()->getContents(), true);

        return $result['data'];
    }


}


?>