<?php

// app/Models/DesaModel.php

namespace App\Models;

use CodeIgniter\Model;

class DesaModel extends Model
{
    protected $table = 'desa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'kecamatan_id'];

    // ... (tambahkan metode lainnya jika diperlukan)
}
