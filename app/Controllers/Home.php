<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() : string {
        $data = [
            'title' => 'Daftar Reservasi',
            'daftar_reservasi' => $this->ReservasiModel->orderBy('id_reservasi', 'DESC')->findAll(),
        ];
        return view('menu').view('list_core_dufan', $data);
    }

    }