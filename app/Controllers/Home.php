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

        $data = [
            'title' => 'Daftar Reservasi',
            'daftar_reservasi' => $this->ReservasiModel->orderBy('id_reservasi', 'DESC')->findAll(),
        ];
        return view('menu').view('list_core_dufan', $data);
    }

    }