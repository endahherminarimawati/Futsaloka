<?php

use GuzzleHttp\Client;

class Pemesanan_model extends CI_Model {

    public function getpemesanan() {
        
        $client = new Client();

        $data = $client->request('GET', 'http://api.futsaloka.my.id/Pemesanan/getpemesanan');

        $result = json_decode($data->getBody()->getContents(), true);

        return $result['data'];
    }


    public function deletepemesanan($id) {
        $client = new Client();

        $data = $client->request('DELETE', 'http://api.futsaloka.my.idPemesanan/deletepemesanan', [
            'form_params' => [
                'id_pemesanan' => $id
            ]
        ]);

        var_dump($data);
        die;
    }
     
}

?>