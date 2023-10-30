<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
     <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<!-- custom css file link  -->
<link rel="stylesheet" href="<?= base_url(); ?>/landingpage/css/style.css" />
</head>
<body>
    <!-- header -->
    <!-- db Struktur -->
    <?php 
    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM poli, dokter WHERE poli.id_poli = dokter.id_poli ORDER by id_dokter DESC LIMIT 3");
    $fasilitas = $db->query("SELECT * FROM fasilitas")->getResult();
    $review = $db->query("SELECT * FROM user,review WHERE user.id_user = review.id_user")->getResult();
    $berita = $db->query("SELECT * FROM berita");
  
    $data = $query->getResult();
    $dberita = $berita->getResult();
    ?>
    <!-- endDb -->
    <!-- endHeader -->
    
    <!--navbrand  -->
  <header class="header">
    <a href="#">
    <img src="<?= base_url(); ?>/landingpage/image/LOGO WEB.png" width="200px" alt="logo" /></a>
    <nav class="navbar">
  <!-- endNavbrand -->

      <?php if (session()->get('log_in') == true) { ?>
        <a href="<?php base_url(); ?>/Chat">Dashboard</a>
      <?php } ?>
      </div> 
      <!-- <a href="#doctors">Jadwal Dokter</a> -->
      <?php if (session()->get('log_in') == true) { ?>
        <a href="<?= base_url(); ?>/Chat">Konsultasi</a>
      <?php } else { ?>
        <a href="<?= base_url(); ?>/login" onclick="return confirm('Anda harus login terlebih dahulu')">Konsultasi</a>
      <?php } ?>
      <!-- <a href="<?= base_url(); ?>/Daftar">No Antrian</a> -->
      <!-- <a href="#doctors">Konsultasi</a> -->
      <?php if(session()->get('log_in') == true){ ?>
      <a href="<?= base_url() ?>/daftar/dpoli">Daftar</a>
      <?php }else{ ?>
        <a href="<?= base_url() ?>/login" onclick="return confirm('Anda harus login terlebih dahulu')">Daftar</a>
        <?php } ?>

        <?php if (session()->get('level') == 'Pasien') { ?>
        <a href="<?= base_url(); ?>/Review">review</a>
      <?php } ?>

      <?php if (session()->get('log_in') == true) { ?>
        <span class="login"> <a href="<?= base_url(); ?>/login/logout"> Keluar</a></span>
      <?php } else { ?>
        <span class="login"> <a href="<?= base_url(); ?>/login"> Masuk</a></span>
      <?php } ?>

    </nav>
      </header>
    <!-- endNav -->

    <!-- jumbotron -->
    <section class="home" id="home">
    <div class="image">
      <img src="<?= base_url(); ?>/landingpage/image/home-img.svg" alt="" />
    </div>

    <div class="content">
      <h3>Sehat itu berharga.</h3>
      <p>Kalo bukan kita siapa lagi, kalo bukan sekarang kapan lagi</p>
      <?php if (session()->get('log_in') == true) { ?>
        <a href="<?= base_url(); ?>/Chat" class="btn"> Konsultasi Sekarang <span class="fas fa-chevron-right"></span> </a>
      <?php } else { ?>
        <a href="<?= base_url(); ?>/Chat" onclick="return confirm('Anda harus login terlebih dahulu')" class="btn"> Konsultasi Sekarang <span class="fas fa-chevron-right"></span> </a>
        <?php } ?>
        <?php if (session()->get('log_in') == true) { ?>
        <a href="<?= base_url() ?>/daftar/dpoli" class="btn"> Daftar <span class="fas fa-chevron-right"></span> </a>
        <?php } else { ?>
          <a href="<?= base_url(); ?>/daftar/dpoli" onclick="return confirm('Anda harus login terlebih dahulu')" class="btn">Daftar<span class="fas fa-chevron-right"></span> </a>
          <?php } ?>
        </div>
  </section>

    <!-- endJumbotron -->
</body>
</html>