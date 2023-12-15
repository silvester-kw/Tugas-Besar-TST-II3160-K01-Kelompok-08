<?php

namespace App\Controllers;

class ReservasiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Reservasi',
            'daftar_reservasi' => $this->ReservasiModel->orderBy('id_reservasi', 'DESC')->findAll(),
        ];
        return view('list_reservasi', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'Daftar Reservasi',
            'daftar_reservasi' => $this->ReservasiModel->orderBy('id_reservasi', 'DESC')->findAll(),
        ];
        return view('menu').view('list_reservasi', $data);
    }
    public function reserve()
    {
        $data = [
            'title' => 'Reservasi',
            'validation' => \Config\Services::validation()
        ];
        return view('menu').view('reserve_form', $data);
    }

    public function create_reservation()
    {
        $rules = $this->validate([
            'nama_wahana' =>'required',
            'email_pengunjung' =>'required',
            'nama_pengunjung' =>'required',
            'asal_kota_pengunjung' =>'required',
        ]);

        if (!$rules) {
            session()->setFlashdata('failed', 'Reservasi gagal');
            return redirect()->back()->withInput();
        }
    }
}