<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class WahanaAPIController extends BaseController
{
    public function index()
    {
        //
    }

    public function wahana_api()
    {
        $curl = curl_init('http://localhost:8080/api/analytics/?username=skwpp12&password=18221049');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = [
            'title' => 'Daftar Reservasi',
            'daftar_reservasi' => $response,
        ];
        return view('wahana_api', $data);
    }
}
