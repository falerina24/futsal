<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use CodeIgniter\HTTP\ResponseInterface;

class Jadwal extends BaseController
{
    protected $jdl;

    public function __construct()
    {
        $this->jdl = new JadwalModel();
    }

    public function index()
    {
        $data['jadwal'] = $this->jdl->findAll();
        return view('jadwal/index', $data);
    }

    public function create()
    {
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->jdl->insert($item);
                return redirect()->to(base_url('jadwal'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('jadwal/create');
    }

    public function edit($id = null)
    {
        

        $item = $this->request->getPost();
        if (isset($item['hari'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "hari" => $item['hari'], 
                        "jam_buka" => $item['jam_buka'],
                        "jam_tutup" => $item['jam_tutup'],
                    ];
                    $this->jdl->update($id, $value);
                    return redirect()->to(base_url('jadwal'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        } else {
            $item['item'] = $this->jdl->where('id', $id)->first();
            return view('jadwal/edit', $item);
        }

        
    }

    public function delete($id = null)
    {
        try {
            $this->jdl->delete($id);
            return redirect()->to(base_url('jadwal'));
        } catch (\Throwable $th) {
           
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
