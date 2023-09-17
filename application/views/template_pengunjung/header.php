<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LP3MP</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel ="stylesheet" type="text/css" href="<?= base_url();?>assets_pengunjung/vendors/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets_pengunjung/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets_pengunjung/style.css" />
  </head>
  <body>
    <header
      class="navbar navbar-expand-lg main-header justify-content-center fixed-top"
      id="scrollNavbar"
    >
      <div class="container">
        <a class="navbar-brand" href="<?= base_url();?>pengunjung/index">
          <img src="<?= base_url();?>images/logo.png" class="main-logo"
        /></a>
        <h1 class="text-white">LP3MP UPR</h1>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url();?>pengunjung/index">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Profil
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url();?>pengunjung/sejarah">Sejarah LP3MP</a></li>
                <li>
                  <a class="dropdown-item" href="<?= base_url();?>pengunjung/visi_misi">Visi, Misi & Tujuan</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= base_url();?>pengunjung/pengelola"
                    >Struktur Organisasi</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url();?>pengunjung/pusat_studi">Pusat Studi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://spmi.upr.ac.id">SPMI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MBKM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url();?>pengunjung/peraturan_panduan"
                >Peraturan & Panduan</a
              >
            </li>
          </ul>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
      </div>
    </header>