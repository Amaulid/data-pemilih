<?php

namespace App\Controllers;

use App\Models\PemilihModel;
use App\Models\KecamatanModel;
use App\Models\DesaModel;
use CodeIgniter\Controller;


class PemilihController extends Controller
{
    public function index()
    {
        $pemilihModel = new PemilihModel();

        // Ambil data pemilih beserta relasinya dengan kecamatan dan desa
        $data['pemilih'] = $pemilihModel->getAllData();

        return view('pemilih/index', $data);
    }

    public function create()
    {
        // Tampilkan formulir pembuatan pemilih
        return view('pemilih/create');
    }

    public function store()
    {
        // Validasi form dan aturan lainnya (jika diperlukan)

        $pemilihModel = new PemilihModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'kecamatan_id' => $this->request->getPost('kecamatan_id'),
            'desa_id' => $this->request->getPost('desa_id'),
            'tps' => $this->request->getPost('tps'),
        ];

        if ($pemilihModel->insertPemilih($data)) {
            session()->setFlashdata('success', 'Data pemilih berhasil disimpan.');
        } else {
            session()->setFlashdata('error', 'Gagal menyimpan data pemilih.');
        }

        return redirect()->to('/pemilih');
    }

    public function edit($id)
    {
        helper(['form']); // Memuat helper form
        $pemilihModel = new PemilihModel();
        $data['pemilih'] = $pemilihModel->getPemilih($id);
        
        // Ambil data kecamatan dan desa untuk dropdown
        $kecamatanModel = new KecamatanModel();
        $data['kecamatan'] = $kecamatanModel->findAll();

        // Ambil data desa untuk dropdown
        $desaModel = new DesaModel();
        $data['desa'] = $desaModel->where('kecamatan_id', $data['pemilih']['kecamatan_id'])->findAll();

        return view('pemilih/edit', $data);
    }


    public function update($id)
    {
        $pemilihModel = new PemilihModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'kecamatan_id' => $this->request->getPost('kecamatan_id'),
            'desa_id' => $this->request->getPost('desa_id'),
            'tps' => $this->request->getPost('tps'),
        ];

        if ($pemilihModel->updatePemilih($id, $data)) {
            session()->setFlashdata('success', 'Data pemilih berhasil diperbarui.');
        } else {
            session()->setFlashdata('error', 'Gagal memperbarui data pemilih.');
        }

        return redirect()->to('/pemilih');
    }

    public function delete($id)
    {
        $pemilihModel = new PemilihModel();

        if ($pemilihModel->deletePemilih($id)) {
            session()->setFlashdata('success', 'Data pemilih berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus data pemilih.');
        }

        return redirect()->to('/pemilih');
    }


    public function get_kecamatan()
    {
        $kecamatanModel = new KecamatanModel();
        $kecamatan = $kecamatanModel->findAll();

        return $this->response->setJSON($kecamatan);
    }

    public function get_desa($kecamatanId)
    {
        $desaModel = new DesaModel();
        $desa = $desaModel->where('kecamatan_id', $kecamatanId)->findAll();

        return $this->response->setJSON($desa);
    }
}
