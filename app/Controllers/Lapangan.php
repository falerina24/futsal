<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LapanganModel;
use App\Models\PemesananModel;
use CodeIgniter\HTTP\ResponseInterface;

class Lapangan extends BaseController
{
    protected $lpg;
    protected $pm; 
    public function __construct()
    {
        $this->lpg = new LapanganModel();
        $this->pm = new PemesananModel(); 
      
    }

    public function index()
    {
        $data['lapangan'] = $this->lpg->findAll();
        return view('lapangan/index', $data);
    }

    public function create()
    {
        $data['pemesanan'] = $this->pm->findAll();
        
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->lpg->insert($item);
                return redirect()->to(base_url('lapangan'));
            } catch (\Throwable $th) {
               
            }
        } else return view('lapangan/create', $data);
        
    }

    public function edit($id = null)
{
    $data['lapangan'] = $this->lpg->find($id);
    $data['pemesanan'] = $this->pm->findAll();  
    $item = $this->request->getPost();

    if (isset($item['nama'])) {
        try {
            $this->lpg->update($id, $item);
            return redirect()->to(base_url('lapangan'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('lapangan/edit', $data);
}
    public function delete($id = null)
    {
        try {
            $this->lpg->delete($id);
            return redirect()->to(base_url('lapangan'));
        } catch (\Throwable $th) {
           
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
