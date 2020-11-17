<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
  public function __construct()
  {
    helper('form');
    $this->ModelAuth = new ModelAuth();
  }
  public function register()
  {
    $data = array(
      'title' => 'Register',
    );
    return view('v_register', $data);
  }
  public function save_register()
  {
    if ($this->validate([
      'nm_dpn' => [
        'label' => 'Nama Depan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field}  Wajib untuk diisi!'
        ]
      ],
      'nm_blkg' => [
        'label' => 'Nama Belakang',
        'rules' => 'required',
        'errors' => [
          'required' => '{field}  Wajib untuk diisi!'
        ]
      ],
      'email' => [
        'label' => 'Alamat Email',
        'rules' => 'required',
        'errors' => [
          'required' => '{field}  Wajib untuk diisi!'
        ]
      ],
      'institusi' => [
        'label' => 'Institusi / Perorang',
        'rules' => 'required',
        'errors' => [
          'required' => '{field}  Wajib untuk diisi!'
        ]
      ],
      'no_hp' => [
        'label' => 'No Handphone',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'no_wa' => [
        'label' => 'No Whatsapp',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'tempat_lahir' => [
        'label' => 'Tempat Lahir',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'tgl_lahir' => [
        'label' => 'tgl_lahir',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'provinsi' => [
        'label' => 'Provinsi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'kab_kota' => [
        'label' => 'Kabupaten Kota',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'kec' => [
        'label' => 'Kecamatan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'kel' => [
        'label' => 'Kelurahan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'nm_jl' => [
        'label' => 'Nama Jalan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'nama_user' => [
        'label' => 'Username',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
      'password' => [
        'label' => 'Password',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ]
    ])) {
      // jika valid
      $data = array(
        'nm_dpn' => $this->request->getPost('nm_dpn'),
        'nm_blkg' => $this->request->getPost('nm_blkg'),
        'email' => $this->request->getPost('email'),
        'institusi' => $this->request->getPost('institusi'),
        'no_hp' => $this->request->getPost('no_hp'),
        'no_wa' => $this->request->getPost('no_wa'),
        'tempat_lahir' => $this->request->getPost('tempat_lahir'),
        'tgl_lahir' => $this->request->getPost('tgl_lahir'),
        'provinsi' => $this->request->getPost('provinsi'),
        'kab_kota' => $this->request->getPost('kab_kota'),
        'kec' => $this->request->getPost('kec'),
        'kel' => $this->request->getPost('kel'),
        'nm_jl' => $this->request->getPost('nm_jl'),
        'level' => $this->request->getPost('level'),
        'bantuan' => $this->request->getPost('bantuan'),
        'paket' => $this->request->getPost('paket'),
        'harga' => $this->request->getPost('harga'),
        'jml' => $this->request->getPost('jml'),
        'total' => $this->request->getPost('total'),
        'bukti' => $this->request->getPost('bukti'),
        'catatan' => $this->request->getPost('catatan'),
        'nama_user' => $this->request->getPost('nama_user'),
        'password' => $this->request->getPost('password'),
      );
      $this->ModelAuth->save_register($data);
      session()->setFlashdata('pesan', 'Registrasi Berhasil!');
      return redirect()->to(base_url('Auth/register'));
    } else {
      // jika tidak valid
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('Auth/register'));
    }
  }

  public function login()
  {
    $data = array(
      'title' => 'Login',
    );
    return view('v_login', $data);
  }

  public function cek_login()
  {
    if ($this->validate([
      'email' => [
        'label' => 'Email',
        'rules' => 'required',
        'errors' => [
          'required' => '{field}  Wajib untuk diisi!'
        ]
      ],
      'password' => [
        'label' => 'Password',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib untuk diisi!'
        ]
      ],
    ])) {
      // jika valid
      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');
      $cek = $this->ModelAuth->login($email, $password);
      if ($cek) {
        // jika data benar
        session()->set('log', true);
        session()->set('nama_user', $cek['nama_user']);
        session()->set('email',  $cek['email']);
        session()->set('level', $cek['level']);
        session()->set('foto_user', $cek['foto_user']);
        // Login
        return redirect()->to(base_url('home'));
      } else {
        // jika data salah
        session()->setFlashdata('pesan', 'Login Gagal! , Email dan Password Tidak Terdaftar!');
        return redirect()->to(base_url('auth/login'));
      }
    } else {
      // jika tidak valid
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to(base_url('auth/login'));
    }
  }
  public function logout()
  {
    session()->remove('log');
    session()->remove('nama_user');
    session()->remove('level');
    session()->remove('foto_user');
    session()->setFlashdata('pesan', 'Anda telah berhasil Logout!');
    return redirect()->to(base_url('auth/login'));
  }
}
