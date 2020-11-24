<?php namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = "pesanan";

    public function PermintaanPesanan()
    {
        $query = $this->db->query('SELECT * FROM pesanan');
        return $query->getResultArray();
    }

    public function detailpermintaan($id)
    {
        $query = $this->db->query("SELECT * FROM pesanan WHERE id='$id'");
        return $query->getRowArray();
    }
}