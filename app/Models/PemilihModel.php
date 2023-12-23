<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilihModel extends Model
{
    protected $table = 'pemilih';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nik', 'kecamatan_id', 'desa_id', 'tps'];

    // Relasi dengan kecamatan
    public function kecamatan()
    {
        return $this->belongsTo(KecamatanModel::class, 'kecamatan_id');
    }

    // Relasi dengan desa
    public function desa()
    {
        return $this->belongsTo(DesaModel::class, 'desa_id');
    }

    public function getAllData()
    {
        return $this->select('pemilih.*')
            ->select('kecamatan.nama as nama_kecamatan')
            ->select('desa.nama as nama_desa')
            ->join('kecamatan', 'kecamatan.id = pemilih.kecamatan_id')
            ->join('desa', 'desa.id = pemilih.desa_id')
            ->orderBy('id', 'DESC')
            ->findAll();
    }

    public function getPemilih($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function insertPemilih($data)
    {
        return $this->insert($data);
    }

    public function updatePemilih($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletePemilih($id)
    {
        return $this->delete($id);
    }
}
