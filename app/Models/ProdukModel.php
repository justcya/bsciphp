<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama_makanan', 'harga_makanan', 'deskripsi_makanan', 'foto_makanan'];

    public function getProduk()
    {
        return $this->findAll();
    }
}
