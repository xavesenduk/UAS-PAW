<?php

namespace App\Controllers;

use App\Models\InventarisModel;
use App\Models\PinjamModel;
use App\Models\RuangModel;
use App\Models\UserModel;

class Studio extends BaseController
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

    public function index()
    {
        $nav = 'index';
        $pinjam = $this->pinjamModel->where('status', 'Meminjam')->findAll();
        $ruang = $this->ruangModel->where('status', 'Menggunakan')->findAll();
        $barang = $this->inventarisModel->findAll();
        $uid = user_id();
        $curuser = $this->userModel->find($uid);
        if ($pinjam == null) {
            $pinjam = '';
        }
        if ($ruang == null) {
            $ruang = '';
        }
        if ($barang == null) {
            $barang = '';
        }

        $data = [
            'main' => 'dashboard_view',
            'nav' => $nav,
            'pinjam' => $pinjam,
            'ruang' => $ruang,
            'barang' => $barang,
            'curuser' => $curuser
        ];
        echo view('layouts/main_view', $data);
    }

    public function pinjam()
    {
        $nav = 'pinjam';
        $pinjam = $this->pinjamModel->findAll();
        $uid = user_id();
        $curuser = $this->userModel->find($uid);

        $data = [
            'main' => 'peminjaman_view',
            'nav' => $nav,
            'pinjam' => $pinjam,
            'curuser' => $curuser
        ];
        echo view('layouts/main_view', $data);
    }

    public function ruang()
    {
        $nav = 'ruang';
        $ruang = $this->ruangModel->findAll();
        $uid = user_id();
        $curuser = $this->userModel->find($uid);

        $data = [
            'main' => 'ruang_view',
            'nav' => $nav,
            'ruang' => $ruang,
            'curuser' => $curuser
        ];
        echo view('layouts/main_view', $data);
    }

    public function inventaris()
    {
        $nav = 'inventaris';
        $barang = $this->inventarisModel->findAll();
        $uid = user_id();
        $curuser = $this->userModel->find($uid);

        $data = [
            'main' => 'inventaris_view',
            'nav' => $nav,
            'barang' => $barang,
            'curuser' => $curuser
        ];
        echo view('layouts/main_view', $data);
    }

    public function kelolapinjam($id = '')
    {
        $nav = 'kelolapinjam';
        $pinjam = '';
        if ($id != '') {
            $pinjam = $this->pinjamModel->find($id);
        }
        $uid = user_id();
        $curuser = $this->userModel->find($uid);

        $data = [
            'main' => 'kelolapinjam_view',
            'nav' => $nav,
            'idref' => $id,
            'pinjam' => $pinjam,
            'curuser' => $curuser
        ];
        echo view('layouts/main_view', $data);
    }

    public function kelolaruang($id = '')
    {
        $nav = 'kelolaruang';
        $ruang = '';
        if ($id != '') {
            $ruang = $this->ruangModel->find($id);
        }
        $uid = user_id();
        $curuser = $this->userModel->find($uid);

        $data = [
            'main' => 'kelolaruang_view',
            'nav' => $nav,
            'idref' => $id,
            'ruang' => $ruang,
            'curuser' => $curuser
        ];
        echo view('layouts/main_view', $data);
    }

    public function kelolainventaris()
    {
        $nav = 'kelolainventaris';
        $uid = user_id();
        $curuser = $this->userModel->find($uid);

        $data = [
            'main' => 'kelolainventaris_view',
            'nav' => $nav,
            'curuser' => $curuser
        ];
        echo view('layouts/main_view', $data);
    }
}
