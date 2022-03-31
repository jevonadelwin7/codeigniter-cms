<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'home',
            'title' => 'DPMPTSP Kabupaten Kepulauan Mentawai'
        ];
        echo view('layout/template', $data);
    }
    public function lapor()
    {
        $data = [
            'isi' => 'lapor_page',
            'title' => 'DPMPTSP | Lapor'
        ];
        echo view('layout/template', $data);
    }
    public function layanan_perizinan()
    {
        $data = [
            'isi' => 'layanan_perizinan',
            'title' => 'DPMPTSP | Formulir Informasi Publik dan Formulir Layanan Perizinan'
        ];
        echo view('layout/template', $data);
    }
    public function layanan_kesehatan()
    {
        $data = [
            'isi' => 'layanan_kesehatan',
            'title' => 'DPMPTSP | Formulir Izin dan Kesehatan'
        ];
        echo view('layout/template', $data);
    }

    public function tentang()
    {
        $data = [
            'isi' => 'tentang',
            'title' => 'DPMPTSP | Tentang DPMPTSP'
        ];
        echo view('layout/template', $data);
    }
}
