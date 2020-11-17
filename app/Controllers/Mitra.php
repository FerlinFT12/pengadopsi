<?php

namespace App\Controllers;

class Mitra extends BaseController
{
  public function index()
  {
    $data = array(
      'title' => 'Halaman Mitra',
      'isi' => 'v_halaman'
    );
    return view('layout/v_wrapper', $data);
  }

  //--------------------------------------------------------------------
}
