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
      'isi' => 'v_menubibit'
    );
    return view('layout/v_wrapper', $data);
  }

  //--------------------------------------------------------------------
}
