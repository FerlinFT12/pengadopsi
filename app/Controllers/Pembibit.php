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

  public function transaksi()
  {
    $data = array(
      'title' => 'Halaman Transaksi',
      'isi' => 'pembibit/v_menutransaksi'
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

  //--------------------------------------------------------------------
}
