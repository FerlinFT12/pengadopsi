<?php namespace App\Models;

use CodeIgniter\Model;

class BibitModel extends Model
{
    protected $table = "bibit";

    public function getBibit($id = false)
    {
        if($id === false){
            $query = $this->db->query('SELECT bibit.*, satuan.nama FROM bibit, satuan WHERE bibit.satuan=satuan.id');
            return $query->getResultArray();
        } else {
            return $this->table('bibit')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }
    }

    public function insert_bibit($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_bibit($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_bibit($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

    public function getSatuan() {
        $query = $this->db->query('SELECT * FROM satuan');
        return $query;
    }
}