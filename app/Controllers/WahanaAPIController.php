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
        $curl = curl_init('http://localhost:8080/api/analytics/?username=Lala&password=lala');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);

        $data_wahana = $response['data']['Analytics'];

        $data['respon'] = $response['data']['Analytics'];

        $data = [
            'title' => 'API Wahana',
            'wahana' => $response['data']['Analytics'],
        ];
        return view('wahana_api', $data);
    }
}
