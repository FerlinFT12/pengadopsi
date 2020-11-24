<?php
namespace App\Models;
use CodeIgniter\Model;
class SatuanModel extends Model
{
    protected $table = 'satuan';
    public function getSatuan()
    {
        return $this->findAll();
    }
}