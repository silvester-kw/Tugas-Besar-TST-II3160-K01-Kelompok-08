<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIController extends ResourceController
{
    protected $modelName = 'App\Models\ReservasiModel';
    protected $format = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'message' => 'success',
            'data_reservasi' => $this->model->findAll(),
        ];
        return $this->respond($data, 200);
    }

    public function asal_kota_terbanyak()
    {
        $data = [
            'message' => 'success',
            'data_reservasi' => $this->model->select('asal_kota_pengunjung, COUNT(*) as total')
            ->groupBy('asal_kota_pengunjung')
            ->orderBy('total', 'DESC') // Menyusun hasil berdasarkan count secara menurun (DESC)
            ->limit(5) // Mengembalikan hanya 5 baris pertama
            ->findAll(),
        ];
        return $this->respond($data, 200);
    }
    
    public function asal_kota_tersedikit()
    {
        $data = [
            'message' => 'success',
            'data_reservasi' => $this->model->select('asal_kota_pengunjung, COUNT(*) as total')
            ->groupBy('asal_kota_pengunjung')
            ->orderBy('total', 'ASC') // Menyusun hasil berdasarkan count secara menurun (DESC)
            ->limit(5) // Mengembalikan hanya 5 baris pertama
            ->findAll(),
        ];
        return $this->respond($data, 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
