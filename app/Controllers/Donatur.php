<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DonaturModel;

class Donatur extends BaseController
{
  protected $DonaturModel;
  public function __construct()
  {
    $this->DonaturModel = new DonaturModel();
  }
  public function index()
  {
    $data = [
      'title' => 'List Data Donatur',
      'donatur' => $this->DonaturModel->get_donatur(),
      'isi' => 'donatur/v_list',
    ];
    echo view('layout/v_wrapper', $data);
  }
  public function tambah()
  {
    $data = [
      'title' => 'Tambah Data Donatur',
      'isi' => 'donatur/v_tambah',
    ];
    echo view('layout/v_wrapper', $data);
  }
  public function save()
  {
    $data = [
      'nama_user' => $this->request->getPost('nama_user'),
      'email' => $this->request->getPost('email'),
      'institusi' => $this->request->getPost('institusi'),
      'total' => $this->request->getPost('total'),
    ];
    $this->DonaturModel->insert_donatur($data);
    session()->setflashdata('success', 'Data Berhasil Ditambahkan!');
    return redirect()->to(base_url('donatur'));
  }
  public function edit($id_donatur)
  {
    $data = [
      'title' => 'Edit Data Donatur',
      'Donatur' => $this->DonaturModel->edit_donatur($id_donatur),
      'isi' => 'donatur/v_edit',
    ];
    echo view('layout/v_wrapper', $data);
  }
  public function update($id_donatur)
  {
    $data = [
      'nama_user' => $this->request->getPost('nama_user'),
      'email' => $this->request->getPost('email'),
      'institusi' => $this->request->getPost('institusi'),
      'total' => $this->request->getPost('total'),
    ];
    $this->DonaturModel->update_donatur($data, $id_donatur);
    session()->setflashdata('success' . 'Data Berhasil DiUpdate!');
    return redirect()->to(base_url('donatur'));
  }
  public function delete($id_donatur)
  {
    $this->DonaturModel->delete_donatur($id_donatur);
    session()->setflashdata('success' . 'Data Berhasil DiHapus!');
    return redirect()->to(base_url('donatur'));
  }
}
