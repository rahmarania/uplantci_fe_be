<?php

namespace App\Controllers;

class Userroles extends BaseController
{
    public function __construct()
    {
        // $this->session = session();
                //meload session
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        // if(!$this->session->has('isLogin')){
        //     return redirect()->to('auth/login');
        // }

        return view('beranda/index');
    }
    
}