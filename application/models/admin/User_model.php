<?php

use GuzzleHttp\Client;

class User_model extends CI_Model {

    public function getuser() {
        
        $client = new Client();

        $data = $client->request('GET', 'http://api.futsaloka.my.id/User/getuser');

        $result = json_decode($data->getBody()->getContents(), true);

        return $result['data'];
    }
    
}

?>