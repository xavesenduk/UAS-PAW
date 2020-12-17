<?php

namespace App\Controllers;

use App\Models\InventarisModel;
use App\Models\PinjamModel;
use App\Models\RuangModel;
use App\Models\UserModel;

class Kelola extends BaseController
{
    protected $pinjamModel;
    protected $ruangModel;
    protected $inventarisModel;
    protected $userModel;

    public function __construct()
    {
        $this->pinjamModel = new PinjamModel();
        $this->ruangModel = new RuangModel();
        $this->inventarisModel = new InventarisModel();
        $this->userModel = new UserModel();
    }

    public function pinjambaru()
    {
        $this->pinjamModel->save([
            'nama' => $this->request->getVar('nama'),
            'nimnip' => $this->request->getVar('nimnip'),
            'barangdanjumlah' => $this->request->getVar('barangdanjumlah'),
            'kontak' => $this->request->getVar('kontak'),
            'tujuan' => $this->request->getVar('tujuan'),
            'tanggalm' => $this->request->getVar('tanggalm'),
            'tanggals' => $this->request->getVar('tanggals'),
            'waktum' => $this->request->getVar('waktum'),
            'waktus' => $this->request->getVar('waktus'),
            'status' => 'Meminjam'
        ]);

        session()->setFlashdata('pesan', 'Peminjaman barang berhasil ditambahkan');
        return redirect()->to('/studio/pinjam');
    }

    public function pinjamselesai($id)
    {
        $data = [
            'status' => 'Selesai'
        ];
        $this->pinjamModel->update($id, $data);

        session()->setFlashdata('pesan', 'Peminjaman barang telah selesai');
        return redirect()->to('/studio/pinjam');
    }

    public function ruangbaru()
    {
        $curuser = $this->userModel->find(user_id());
        $getpic = $curuser['name'];
        $this->ruangModel->save([
            'nama' => $this->request->getVar('nama'),
            'nimnip' => $this->request->getVar('nimnip'),
            'tujuan' => $this->request->getVar('tujuan'),
            'pic' => $getpic,
            'tanggalp' => $this->request->getVar('tanggalp'),
            'waktum' => $this->request->getVar('waktum'),
            'waktus' => $this->request->getVar('waktus'),
            'status' => 'Menggunakan'
        ]);

        session()->setFlashdata('pesan', 'Penggunaan ruang berhasil ditambahkan');
        return redirect()->to('/studio/ruang');
    }

    public function ruangselesai($id)
    {
        $data = [
            'status' => 'Selesai'
        ];
        $this->ruangModel->update($id, $data);

        session()->setFlashdata('pesan', 'Penggunaan ruang telah selesai');
        return redirect()->to('/studio/ruang');
    }

    public function inventarisbaru()
    {
        $keterangan = $this->request->getVar('keterangan');
        if ($keterangan == '') {
            $keterangan = '-';
        }

        $this->inventarisModel->save([
            'nimnip' => $this->request->getVar('nimnip'),
            'jumlah' => $this->request->getVar('jumlah'),
            'keterangan' => $keterangan
        ]);

        session()->setFlashdata('pesan', 'Inventaris berhasil ditambahkan');
        return redirect()->to('/studio/inventaris');
    }
}
