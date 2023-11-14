<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LP3MP | <?= $title ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_pengunjung/vendors/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_pengunjung/vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_pengunjung/styles/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <header class="navbar navbar-expand-lg main-header sticky-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('pengunjung') ?>">
        <img src="<?= base_url('uploads/' . $website->logo) ?>" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="<?= base_url(); ?>pengunjung/index"><i class="bi bi-house-door-fill"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang LP3MP
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url(); ?>pengunjung/sejarah">Sejarah LP3MP</a></li>
              <li>
                <a class="dropdown-item" href="<?= base_url(); ?>pengunjung/visi_misi">Visi, Misi & Tujuan</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url(); ?>pengunjung/pengelola">Struktur Organisasi</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>pengunjung/pusat_studi">Pusat Studi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>pengunjung/dokumen">Dokumen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>pengunjung/akreditas">Akreditas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Berita dan Pengumuman
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url(); ?>pengunjung/berita">Berita</a></li>
              <li>
                <a class="dropdown-item" href="<?= base_url(); ?>pengunjung/pengumuman">Pengumuman</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://spmi.upr.ac.id">SPMI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MBKM</a>
          </li>
        </ul>
      </div>
    </div>
  </header>