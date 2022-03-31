<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'admin/dashboard',
            'title' => 'Admin| DPMPTSP'
        ];
        echo view('layout_admin/template', $data);
    }
    public function laporan_masyarakat()
    {
        $data = [
            'isi' => 'admin/dashboard',
            'title' => 'Laporan Masyarakat | DPMPTSP'
        ];
        echo view('layout_admin/template', $data);
    }
    public function informasi_masyarakat()
    {
        $data = [
            'isi' => 'admin/informasi_publik',
            'title' => 'Informasi Masyarakat | DPMPTSP'
        ];
        echo view('layout_admin/template', $data);
    }
}
