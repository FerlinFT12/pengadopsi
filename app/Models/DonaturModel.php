<?php

namespace App\Models;

use CodeIgniter\Model;

class DonaturModel extends Model
{
  public function get_donatur()
  {
    return $this->db->table('tbl_donatur')->get()->getResultArray();
  }
  public function insert_donatur($data)
  {
    return $this->db->table('tbl_donatur')->insert($data);
  }
  public function edit_donatur($id_donatur)
  {
    return $this->db->table('tbl_donatur')->where('id_donatur', $id_donatur)->get()->getRowArray();
  }
  public function update_donatur($data, $id_donatur)
  {
    return $this->db->table('tbl_donatur')->update($data, array('id_donatur' => $id_donatur));
  }
  public function delete_donatur($id_donatur)
  {
    return $this->db->table('tbl_donatur')->delete(array('id_donatur' => $id_donatur));
  }
}
