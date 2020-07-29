<?php

use GuzzleHttp\Client;

class Pemesanan_model extends CI_Model {

    public function getPemesanan() {
        // ambil data pemesanan berdasarkan id

        $client = new Client();

        $data = $client->request('GET', 'http://api.futsaloka.my.id/pemesanan/getpemesanan');

        $result = json_decode($data->getBody()->getContents(), true);

        return $result['data'];
    }

    public function addPemesanan($datapemesanan) {
        // post data pemesanan ke API

        $client = new Client();

        $data = $client->request('POST', 'http://api.futsaloka.my.id/Pemesanan/addpemesanan', [
            'form_params' => $datapemesanan
        ]);

        $result = json_decode($data->getBody()->getContents(), true);

        return $result;
    }

    public function hapusPemesanan($id) {
        $client = new Client();

        $data = $client->request('DELETE', 'http://api.futsaloka.my.id/Pemesanan/deletepemesanan', [
            'form_params' => [
                'id_pemesanan' => $id
            ]
        ]);

        $result = json_decode($data->getBody()->getContents(), true);

        return $result;
    }


}


?>