<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('img/fav.png')?>" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Bank Sampah</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="<?php echo base_url('css/linearicons.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/nice-select.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-datepicker.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/themify-icons.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/main.css')?>" />
  </head>

  <body>
    <!--================ Start Header Area =================-->
    <header class="header-area">
      <div class="container">
        <div class="header-wrap">
          <div
            class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
          >
            <div class="col menu-left">
              <a class="active" href="<?= base_url('home');?>">Home</a>
              <a href="<?= base_url('home/berita');?>">Berita</a>
              </div>
            <div class="col-5 text-lg-center mt-2 mt-lg-0">
              <span class="logo-outer">
                <span class="logo-inner">
                  <a href="index.html"
                    ><img class="mx-auto" src="<?php echo base_url('img/logo.png')?>" alt=""
                  /></a>
                </span>
              </span>
            </div>
            <div class="col navbar navbar-expand-lg justify-content-end">
              <!-- Toggler/collapsibe Button -->
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavbar"
              >
                <span class="lnr lnr-menu"></span>
              </button>

              <!-- Navbar links -->
              <div
                class="collapse navbar-collapse menu-right"
                id="collapsibleNavbar"
              >
                <ul class="navbar-nav justify-content-center w-100">
                  <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('login/login');?>">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/sampah');?>">Sampah Anorganik</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!--================ End Header Area =================-->