<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarModel extends Model
{
    protected $table            = 'gambar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
        protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'deskripsi', 'file_path'];

}
