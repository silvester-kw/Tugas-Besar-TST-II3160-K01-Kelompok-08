<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    public function getAllUser() {
        return $this->findAll();
    }

    public function getUserById(int $id_user) {
        return $this->find($id_user);
    }

    public function createUser(string $email, string $password) {
        return $this->insert([
            'email' => $email,
            'password' => $password,
        ]);
    }
    
}