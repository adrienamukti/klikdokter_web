<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first  !');window.location.replace('form_login.php');</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" href="images/klikdokter-logo.png">
  <title>KlikDokter</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <nav>
      <span style="font-size:30px;cursor:pointer" class="opennav" onclick="openNav()">&#9776;</span>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>
      <div class="logo">
        <a href="index_login.php"><img src="images/Logo_KlikDokter.png" /></a>
      </div>
      <form class="search" action=" " method="post">
        <span class="search-icon material-symbols-outlined"><img src="images/search.png" alt=""> </span>
        <input class="search-input" type="search" placeholder="Search.." />
      </form>
      <div class="menu-icon">
        <ul>
          <li>
            <a href="#"><img src="images/trolly.png" class="icon-shop" /></a>
          </li>
          <li>
            <a href="#"><img src="images/mail.jpg" class="icon-mail" /></a>
          </li>
          <li>
            <a href="#"><img src="images/notif.png" class="icon-notif" /></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="ttl">
    <p>Tanya Dokter</p>
    <p style="font-size: 15px;"><a style="text-decoration: none;" href="index_login.php">Home</a> > Tanya Dokter</p>
  </div>
  <div class="container">
  <h2>Dokter Rekomendasi</h2>
    <div class="card">
      <img src="images/doctormale.jpg" alt="Gambar Dokter 1" class="card-image">
      <div class="card-content">
        <p>dr. Beny Gunawan, Sp. OG</p>
        <p>Spesialis Kebidanan dan Kandungan</p>
        <p>Mulai dari Rp25.000</p>
        <a href="#" class="button">Mulai Konsultasi</a>
      </div>
    </div>
    <div class="card">
      <img src="images/doctorfemale.jpg" alt="Gambar Dokter 2" class="card-image">
      <div class="card-content">
        <p>dr. Melinda Febiani, M. Biomed, Sp. OG</p>
        <p>Spesialis Kebidanan dan Kandungan</p>
        <p>Mulai dari Rp 25.000 Rp 50.000</p>
        <a href="#" class="button">Mulai Konsultasi</a>
      </div>
    </div>
    <div class="card">
      <h2>Lihat Semua Dokter</h2>
      <a href="#" class="button">Lihat Semua</a>
    </div>
  </div>

  <script src="js/script.js"></script>

</body>

</html>