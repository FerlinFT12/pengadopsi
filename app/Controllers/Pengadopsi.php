<?php

namespace App\Controllers;

class Pengadopsi extends BaseController
{
  public function index()
  {
    $data = array(
      'title' => 'Halaman Pengadopsi',
      'isi' => 'v_halaman'
    );
    return view('layout/v_wrapper', $data);
  }

  //--------------------------------------------------------------------
}
