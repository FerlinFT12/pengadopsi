<?php 
 
namespace App\Controllers\Pembibit;

use App\Controllers\BaseController;

use App\Models\BibitModel;

class Bibit extends BaseController
{
    public function menubibit()
  {
    $data = array(
        'title' => 'Halaman Pembibit',
        'isi' => 'pembibit/bibit/v_menubibit',
        'bibit' => $this->bibit->getBibit()
    );
    return view('layout/v_wrapper', $data);
  }

    public function __construct() {
        // Mendeklarasikan class BibitModel menggunakan $this->bibit
        $this->bibit = new BibitModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Bibit 
        */
    }

    //Tambah Bibit
  public function tambahbibit()
  {
    $data = array(
      'title' => 'Tambah Bibit',
      'isi' => 'pembibit/bibit/v_tambahbibit'
    );
    return view('layout/v_wrapper', $data);
  }

  public function prosestambahbibit()
  {
    $id_pembibit = session()->get('id_user');
    // Mengambil value dari form dengan method POST
    $namabibit = $this->request->getPost('namabibit');
    $hargasatuan = $this->request->getPost('hargasatuan');
    $satuan = $this->request->getPost('satuan');

    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'namabibit' => $namabibit,
        'harga' => $hargasatuan,
        'satuan' => $satuan,
        'id_pembibit' => $id_pembibit,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'deleted_at' => date('Y-m-d H:i:s'),
    ];

    //echo json_encode($data);
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_bibit dan membawa parameter data 
    */
    $simpan = $this->bibit->insert_bibit($data);

    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Berhasil tambah data bibit');
        // Redirect halaman ke bibit
        return redirect()->route('pembibitmenubibit'); 
    }
  }

  //Tambah Bibit
  public function editbibit($id)
  {
    // Memanggil function getBibit($id) dengan parameter $id di dalam BibitModel dan menampungnya di variabel array bibit
    $data = array(
      'title' => 'Edit Bibit',
      'isi' => 'pembibit/bibit/v_editbibit',
      'bibit' => $this->bibit->getBibit($id)
    );

    //echo json_encode($data);
    return view('layout/v_wrapper', $data);
  }

  public function updatebibit($id)
  {
      $id_pembibit = session()->get('id_user');
      // Mengambil value dari form dengan method POST
      $namabibit = $this->request->getPost('namabibit');
      $hargasatuan = $this->request->getPost('hargasatuan');
      $satuan = $this->request->getPost('satuan');

      // Membuat array collection yang disiapkan untuk insert ke table
      $data = [
        'namabibit' => $namabibit,
        'harga' => $hargasatuan,
        'satuan' => $satuan,
        'updated_at' => date('Y-m-d H:i:s'),
    ];
      /* 
      Membuat variabel ubah yang isinya merupakan memanggil function 
      update_product dan membawa parameter data beserta id
      */
      $ubah = $this->bibit->update_bibit($data, $id);
      // Jika berhasil melakukan ubah
      if($ubah)
      {
          // Deklarasikan session flashdata dengan tipe info
          session()->setFlashdata('info', 'Updated product successfully');
          // Redirect ke halaman product
          return redirect()->route("pembibitmenubibit");
      }
  }
}