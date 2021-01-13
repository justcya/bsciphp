<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new \App\Models\ProdukModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda | CIPONDOHMAKMUR',
            'produk' => $this->produkModel->getProduk()
        ];

        return view('pages/index', $data);
    }

    public function katering()
    {
        $data = [
            'title' => 'Katering | CIPONDOHMAKMUR',
            'produk' => $this->produkModel->getProduk()
        ];

        return view('pages/katering', $data);
    }

    public function tentangkami()
    {
        $data = [
            'title' => 'Tentang Kami | CIPONDOHMAKMUR'
        ];

        return view('pages/tentangkami', $data);
    }

    public function tambahdata()
    {
        $data = [
            'title' => 'Tambah Data | CIPONDOHMAKMUR',
            'validation' => \Config\Services::validation(),
            'produk' => $this->produkModel->getProduk()
        ];

        return view('pages/tambahdata', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Tambah Data | CIPONDOHMAKMUR',
            'produk' => $this->produkModel->getProduk()
        ];

        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        return view('pages/tambahdata', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'nama_makanan' => 'required',
            'harga_makanan' => 'required',
            'deskripsi_makanan' => 'required',
            'foto_makanan' => 'uploaded[foto_makanan]|is_image[foto_makanan]|mime_in[foto_makanan,image/jpg,image/jpeg]'
        ])) {
            return redirect()->to('/tambahdata')->withInput();
        }

        $fileFoto = $this->request->getFile('foto_makanan');

        $fileFoto->move('img');

        $namaFoto = $fileFoto->getName();



        $this->produkModel->save([
            'nama_makanan' => $this->request->getVar('nama_makanan'),
            'harga_makanan' => $this->request->getVar('harga_makanan'),
            'deskripsi_makanan' => $this->request->getVar('deskripsi_makanan'),
            'foto_makanan' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Berhasil menyimpan!');

        return redirect()->to('/tambahdata');
    }
}
