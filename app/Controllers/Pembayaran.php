<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pembayaran extends BaseController
{
    protected $pmb;

    public function __construct()
    {
        $this->pmb = new PembayaranModel();
    }

    public function index()
    {
        $data['pembayaran'] = $this->pmb->findAll();
        return view('pembayaran/index', $data);
    }

    public function create()
    {
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->pmb->insert($item);
                return redirect()->to(base_url('pembayaran'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('pembayaran/create');
    }

    public function edit($id = null)
    {
        

        $item = $this->request->getPost();
        if (isset($item['jumlah'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "jumlah" => $item['jumlah'],
                        "metode" => $item['metode'],
                    ];
                    $this->pmb->update($id, $value);
                    return redirect()->to(base_url('pembayaran'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        } else {
            $item['item'] = $this->pmb->where('id', $id)->first();
            return view('pembayaran/edit', $item);
        }

        
    }

    public function delete($id = null)
    {
        try {
            $this->pmb->delete($id);
            return redirect()->to(base_url('pembayaran'));
        } catch (\Throwable $th) {
           
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
