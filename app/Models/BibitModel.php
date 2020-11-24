<?php namespace App\Models;

use CodeIgniter\Model;

class BibitModel extends Model
{
    protected $table = "bibit";

    public function getBibit($id = false)
    {
        if($id === false){
            return $this->table('bibit')
                        ->get()
                        ->getResultArray();
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
}