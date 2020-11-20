<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function index()
  {
    $data = array(
      'title' => 'Halaman Admin',
      'isi' => 'v_admin'
    );
    return view('layout/v_wrapper', $data);
  }

  //--------------------------------------------------------------------
}
