<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Facebook-->
    <div id="fb-root"></div>
    <script src="https://kit.fontawesome.com/0ff2acba13.js" crossorigin="anonymous"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0&appId=1872945159539172&autoLogAppEvents=1" nonce="tjgm8iCz"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="style.css">
    <title><?= $title ?></title>
</head>

<script>
    AOS.init();
</script>

<body>

    <nav class="navbar  navbar-expand-lg navbar-light fixed-top bg-white shadow-sm">
        <a class="navbar-brand" href="#" style="font-family: roboto;">
            <img src="img/logopemda.jpg" width="70" height="90" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse text-center font-weight-bolder" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= base_url() ?>">BERANDA<span class="sr-only"></span></a>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        PROFIL
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('/visi_misi') ?>">Visi & Misi</a>
                        <a class="dropdown-item" href="<?= base_url('/motto') ?>">Motto</a>
                        <a class="dropdown-item" href="<?= base_url('/struktur_organisasi') ?>">Struktur Organisasi</a>
                        <a class="dropdown-item" href="<?= base_url('/tentang') ?>">Tentang DPMTSP</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        PPID
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('home/layanan_perizinan') ?>">Tentang PPID</a>
                        <a class="dropdown-item" href="<?= base_url('home/layanan_kesehatan') ?>">Informasi Berkala</a>
                        <a class="dropdown-item" href="<?= base_url('home/layanan_kesehatan') ?>">Informasi Setiap Saat</a>
                        <a class="dropdown-item" href="<?= base_url('home/layanan_kesehatan') ?>">Informasi Serta Merta</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        LAYANAN INFORMASI
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('home/layanan_perizinan') ?>">Formulir Informasi Publik dan Formulir Layanan Perizinan</a>
                        <a class="dropdown-item" href="<?= base_url('home/layanan_kesehatan') ?>">Formulir Izin dan Kesehatan </a>
                    </div>
                </li>
                <a class="nav-link active" href="<?= base_url('home/lapor') ?>">LAPOR<span class="sr-only">(current)</span></a>
            </div>
        </div>
        <a class="navbar-brand" href="#" style="font-family: roboto;">
            <img src="img/bkpm_ri.png" width="120" height="90" alt="">
        </a>
        
    </nav>