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
        $isLoggedIn = session('isLoggedIn');

        if ($isLoggedIn) {
            $id_user = session('id');
            $email = session('email');
        } else {
            return redirect()->to(base_url('login'));
        }
        $url = getenv('API_URL') . 'api/analytics/?username=Lala&password=lala';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);
        
        $data_wahana = $response;
        if (!empty($response)) {
            $data_wahana = $response['data']['Analytics'];
        }
        //dd($data_wahana);
        $data = [
            'title' => 'API Wahana',
            'wahana' => $data_wahana,
        ];
        //echo $response;

        return view('menu').view('wahana_api', $data);
    }
}
