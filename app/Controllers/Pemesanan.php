<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use App\Models\PembayaranModel;
use App\Models\PemesananModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pemesanan extends BaseController
{
    protected $pms;
    protected $pb; // Jika ada relasi dengan pemesanan
    protected $jwl;
    public function __construct()
    {
        $this->pms = new PemesananModel();
        $this->pb = new PembayaranModel(); 
        $this->jwl = new JadwalModel();// Jika ada relasi dengan pemesanan
    }

    public function index()
    {
        $data['pemesanan'] = $this->pms->findAll();
        return view('pemesanan/index', $data);
    }

    public function create()
    {
        $data['pembayaran'] = $this->pb->findAll();
        $data['jadwal'] = $this->jwl->findAll(); // Ambil data pemesanan dari model
        // Jika ada relasi dengan pemesanan, ambil data pemesanan

        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->pms->insert($item);
                return redirect()->to(base_url('pemesanan'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('pemesanan/create', $data);
        
    }

    public function edit($id = null)
{
    $data['pemesanan'] = $this->pms->find($id); // Ambil data pesanan berdasarkan ID

    // Fetch details related to the pesanan using the correct foreign key
    $data['pembayaran'] = $this->pb->findAll(); // Make sure 'pesanan_id' is the correct column name

    $data['jadwal'] = $this->jwl->findAll();  

    $item = $this->request->getPost();

    if (isset($item['nama'])) {
        try {
            $this->pms->update($id, $item);
            return redirect()->to(base_url('pemesanan'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('pemesanan/edit', $data);
}
    public function delete($id = null)
    {
        try {
            $this->pms->delete($id);
            return redirect()->to(base_url('pemesanan'));
        } catch (\Throwable $th) {
            // Handle error, misalnya jika data terkait dengan data lain
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }
}
