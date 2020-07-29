<?php

use GuzzleHttp\Client;

class Auth_model extends CI_Model {

    public function getAllUser() {

        $client = new Client();

        $response = $client->request('GET', 'http://api.futsaloka.my.id/User/getuser/');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];

    }

    public function getUsername($username) {

        $client = new Client();

        $response = $client->request('GET', 'http://api.futsaloka.my.id/User/getusername', [
            'query' => [
                'username' => $username
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function addUser($dataUser) {
        
        $client = new Client();

        $response = $client->request('POST', 'http://api.futsaloka.my.id/User/adduser', [
            'form_params' => $dataUser
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;

    } 

}

?>