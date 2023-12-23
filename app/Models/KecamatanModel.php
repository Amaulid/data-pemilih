<?php

// app/Models/KecamatanModel.php

namespace App\Models;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
    protected $table = 'kecamatan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama'];

    // ... (tambahkan metode lainnya jika diperlukan)
}
