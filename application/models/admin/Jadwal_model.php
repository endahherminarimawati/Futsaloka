<?php

use GuzzleHttp\Client;

class Jadwal_model extends CI_Model {

    public function getJadwal() {
        
        $client = new Client();

        $data = $client->request('GET', 'http://api.futsaloka.my.id/Jadwal/getjadwal');

        $request = json_decode($data->getBody()->getContents(), true);

        return $request['data'];
    }
    
}

?>