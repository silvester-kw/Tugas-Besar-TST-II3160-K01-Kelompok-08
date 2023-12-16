<?php

namespace App\Controllers;

class ReservasiController extends BaseController
{
    protected $modelName = 'App\Models\TransactionModel';
    protected $format = 'json';
    protected $TransactionModel;
    protected $User;

    public function __construct()
    {
        // Load the TransactionModel in the constructor
        $this->TransactionModel = new \App\Models\TransactionModel();
        $this->User = new \App\Models\User();
    }

    public function history()
    {
        $isLoggedIn = session('isLoggedIn');

        if ($isLoggedIn) {
            $id_user = session('id');
            $email = session('email');
        } else {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Daftar Reservasi',
            'daftar_reservasi' => $this->ReservasiModel->where('id_user', $id_user)->orderBy('id_reservasi', 'DESC')->findAll(),
        ];
        return view('menu').view('list_reservasi', $data);
    }
    public function reserve()
    {
        $isLoggedIn = session('isLoggedIn');

        if ($isLoggedIn) {
            $id_user = session('id');
            $email = session('email');
        } else {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Reservasi',
            'validation' => \Config\Services::validation()
        ];
        return view('menu').view('reserve_form', $data);
    }

    public function create_reservation()
    {
        $isLoggedIn = session('isLoggedIn');

        if ($isLoggedIn) {
            $id_user = session('id');
            $email = session('email');
        } else {
            return redirect()->to(base_url('login'));
        }

        $this->ReservasiModel->insert([
            'id_user' => $id_user,
            'jenis_tiket' => $this->request->getPost('jenis_tiket'),
            'nama_wahana' => $this->request->getPost('nama_wahana'),
            'nama_pengunjung' => $this->request->getPost('nama_pengunjung'),
            'asal_kota_pengunjung' => $this->request->getPost('asal_kota_pengunjung'),
        ]);

        $this->TransactionModel->insert([
            'id_user' => $id_user,
        ]);

        return redirect()->to(base_url('reserve'))->with('success', 'Reservasi berhasil');
    }

    // API
    public function index()
    {
        $data = [
            'message' => 'success',
            'data_reservasi' => $this->ReservasiModel->findAll()
        ];
        return $this->respond($data, 200);
    }

}