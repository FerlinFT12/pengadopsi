<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
  public function index()
  {
    $data = array(
      'title' => 'Halaman Transaksi',
      'isi' => 'v_halamantransaksi'
    );
    return view('layout/v_wrapper', $data);
  }

  //--------------------------------------------------------------------
}
