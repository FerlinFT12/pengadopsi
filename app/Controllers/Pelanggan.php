<?php

namespace App\Controllers;

class Pelanggan extends BaseController
{
  public function index()
  {
    $data = array(
      'title' => 'Halaman Pelanggan',
      'isi' => 'v_halaman'
    );
    return view('layout/v_wrapper', $data);
  }

  //--------------------------------------------------------------------
}
