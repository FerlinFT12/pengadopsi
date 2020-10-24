<?php

namespace App\Controllers;

class Web extends BaseController
{
  public function index()
  {
    $data = array(
      'title' => 'Home',
    );
    return view('v_web', $data);
  }

  //--------------------------------------------------------------------
}
