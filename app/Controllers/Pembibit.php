<?php

namespace App\Controllers;

class Pembibit extends BaseController
{
  public function index()
  {
    $data = array(
      'title' => 'Halaman Pembibit',
      'isi' => 'v_mitra'
    );
    return view('layout/v_wrapper', $data);
  }

  public function menubibit()
  {
    $data = array(
      'title' => 'Halaman Pembibit',
      'isi' => 'pembibit/v_menubibit'
    );
    return view('layout/v_wrapper', $data);
  }

  public function permintaanpesanan()
  {
    $data = array(
      'title' => 'Halaman Pemesanan',
      'isi' => 'pembibit/v_permintaanpesanan'
    );
    return view('layout/v_wrapper', $data);
  }

  public function setujuipermintaan()
  {
    $data = array(
      'title' => 'Halaman Pemesanan',
      'isi' => 'pembibit/v_setujuipermintaan'
    );
    return view('layout/v_wrapper', $data);
  }

  public function ubahpermintaan()
  {
    $data = array(
      'title' => 'Halaman Pemesanan',
      'isi' => 'pembibit/v_ubahpermintaan'
    );
    return view('layout/v_wrapper', $data);
  }

  public function transaksipemesanan()
  {
    $data = array(
      'title' => 'Halaman Pemesanan',
      'isi' => 'pembibit/v_transaksipemesanan'
    );
    return view('layout/v_wrapper', $data);
  }

  public function persediaanbibit()
  {
    $data = array(
      'title' => 'Halaman Persediaan Bibit',
      'isi' => 'pembibit/v_persediaanbibit'
    );
    return view('layout/v_wrapper', $data);
  }

  //Tambah Bibit
  public function tambahbibit()
  {
    $data = array(
      'title' => 'Tambah Bibit',
      'isi' => 'pembibit/v_tambahbibit'
    );
    return view('layout/v_wrapper', $data);
  }

  //Tambah Bibit
  public function editbibit()
  {
    $data = array(
      'title' => 'Edit Bibit',
      'isi' => 'pembibit/v_editbibit'
    );
    return view('layout/v_wrapper', $data);
  }

  //--------------------------------------------------------------------
}
