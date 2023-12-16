<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index() : string {
        $isLoggedIn = session('isLoggedIn');

        if ($isLoggedIn) {
            $id_user = session('id');
            $email = session('email');
        } else {
            return redirect()->to(base_url('login'));
        }
        return view('header').view('menu').view('blog').view('footer');
        }
    }
