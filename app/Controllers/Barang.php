<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }
    public function index()
    {
        $brg = $this->barangModel->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'barang' => $brg
        ];

        // $komikModel = new \App\Models\KomikModel();

        //$barangModel = new BarangModel();


        return view('barang/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Barang'
        ];

        return view('barang/create', $data);
    }

    public function save()
    {
        $this->barangModel->save([
            'tanggalp' => $this->request->getVar('tanggalp'),
            'nama' => $this->request->getVar('nama'),
            'merek' => $this->request->getVar('merek'),
            'jumlah' => $this->request->getVar('jumlah'),
            'pengembalian' => $this->request->getVar('pengembalian')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Ditambahkan');
        return redirect()->to('/barang');
    }
}
