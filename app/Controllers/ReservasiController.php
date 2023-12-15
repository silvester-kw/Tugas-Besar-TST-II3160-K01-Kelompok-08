<?php

namespace App\Controllers;

class ReservasiController extends BaseController
{
    protected $modelName = 'App\Models\ReservasiModel';
    protected $format = 'json';

    public function list()
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

        // jika valid
        $this->ReservasiModel->insert([
            'nama_wahana' => $this->request->getPost('nama_wahana'),
            'email_pengunjung' => $this->request->getPost('email_pengunjung'),
            'nama_pengunjung' => $this->request->getPost('nama_pengunjung'),
            'asal_kota_pengunjung' => $this->request->getPost('asal_kota_pengunjung'),
        ]);
        return redirect()->to(base_url('reserve'))->with('success', 'Reservasi berhasil');
    }

    // API
    public function index()
    {
        $data = [
            'message' => 'success',
            'data_pegawai' => $this->ReservasiModel->findAll()
        ];
        return $this->respond($data, 200);
    }

}