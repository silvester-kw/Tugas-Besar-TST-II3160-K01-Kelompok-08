<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        $isLoggedIn = session('isLoggedIn');

        if ($isLoggedIn) {
            $id_user = session('id');
            $email = session('email');
        } else {
            return redirect()->to(base_url('login'));
        }

        $curl = curl_init('http://localhost:8080/api/analytics/?username=skwpp12&password=18221049');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = [
            'title' => 'API Wahana',
            'wahana' => $response,
        ];
        return view('menu').view('wahana_api', $data);
    }

    }