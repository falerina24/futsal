<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GambarModel;
use CodeIgniter\HTTP\ResponseInterface;

class Gambar extends BaseController
{
    protected $gmb;
       public function __construct()
    {
       
        $this->gmb = new GambarModel(); 
      
    }

    public function index()
    {
        $data['gambar'] = $this->gmb->findAll();
        return view('gambar/index', $data);
    }

    public function create()
    {
        
        
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->gmb->insert($item);
                return redirect()->to(base_url('gambar'));
            } catch (\Throwable $th) {
               
            }
        } else return view('gambar/create');
        
    }

    public function edit($id = null)
{

    $item = $this->request->getPost();

    if (isset($item['judul'])) {
        try {
            $this->gmb->update($id, $item);
            return redirect()->to(base_url('pelanggan'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('gambar/edit');
}
    public function delete($id = null)
    {
        try {
            $this->gmb->delete($id);
            return redirect()->to(base_url('gambar'));
        } catch (\Throwable $th) {
           
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
