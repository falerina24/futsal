<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;
use App\Models\PemesananModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pelanggan extends BaseController
{
    protected $plg;
    protected $pms; 
    public function __construct()
    {
        $this->plg = new PelangganModel();
        $this->pms = new PemesananModel(); 
      
    }

    public function index()
    {
        $data['pelanggan'] = $this->plg->findAll();
        return view('pelanggan/index', $data);
    }

    public function create()
    {
        $data['pemesanan'] = $this->pms->findAll();
        
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->plg->insert($item);
                return redirect()->to(base_url('pelanggan'));
            } catch (\Throwable $th) {
               
            }
        } else return view('pelanggan/create', $data);
        
    }

    public function edit($id = null)
{
    $data['pelanggan'] = $this->plg->find($id);
    $data['pemesanan'] = $this->pms->findAll();  
    $item = $this->request->getPost();

    if (isset($item['nama'])) {
        try {
            $this->plg->update($id, $item);
            return redirect()->to(base_url('pelanggan'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('pelanggan/edit', $data);
}
    public function delete($id = null)
    {
        try {
            $this->plg->delete($id);
            return redirect()->to(base_url('pelanggan'));
        } catch (\Throwable $th) {
           
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
