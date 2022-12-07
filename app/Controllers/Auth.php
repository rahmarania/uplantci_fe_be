<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        if (session('id_user')) {
            return redirect()->to(site_url('beranda/index'));
        } else {
            return view('auth/login', $data);
        }
    }
    public function loginUser()
    {
        $rules = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!$rules) {
            session()->setFlashdata('error', 'Gagal Login');
            return redirect()->back()->withInput();
        }
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['email' => $post['email']]);
        $user = $query->getRow();
        if ($user) {
            if (password_verify($post['password'], $user->password)) {
                $params = [
                    'id_user' => $user->id_user, 
                    'username'=>$user->username, 
                    'email' => $user->email, 
                    'password' => $user->password,
                ];
                session()->set($params);
                return redirect()->to(site_url('auth/index'));
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Email salah!');
        }
    }

    public function register()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/register', $data);
    }

    public function registerStores()
    {
        $rules = $this->validate([
            'username' => 'required|is_unique[users.username]',
            'email' => 'required|is_unique[users.email]',
            'password' => 'required',
        ]);
        if (!$rules) {
            session()->setFlashdata('error', 'Gagal Register');
            return redirect()->back()->withInput();
        }
        $pass = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        $this->db->table('users')->insert([
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $pass,
        ]);
        session()->setFlashdata('success', 'Akun berhasil terdaftar');

        return redirect()->to(site_url('auth/index'));
    }

    public function logoutUser()
    {
        session()->remove('id_user');
        return redirect()->to(site_url('/'));
    }

    // Admin
    public function loginAdmin()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        if (session('id_admin')) {
            return redirect()->to(site_url('home'));
        } else {
            return view('auth/login2', $data);
        }
    }
    public function loginAdminStores()
    {
        $rules = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!$rules) {
            session()->setFlashdata('error', 'Gagal Login');
            return redirect()->back()->withInput();
        }
        $post = $this->request->getPost();
        $query = $this->db->table('admin')->getWhere(['email' => $post['email']]);
        $admin = $query->getRow();
        if ($admin) {
            if (password_verify($post['password'], $admin->password)) {
                $params = [
                    'id_admin' => $admin->id_admin, 
                    'admin_name' => $admin->admin_name, 
                    'email' => $admin->email, 
                    'password' => $admin->password,
                ];
                session()->set($params);
                return redirect()->to(site_url('auth/loginAdmin'));
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Email salah!');
        }
    }
    public function logoutAdmin()
    {
        session()->remove('id_admin');
        return redirect()->to(site_url('auth/loginAdmin'));
    }
}
