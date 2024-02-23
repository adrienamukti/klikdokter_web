<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
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
          <a href="index.php"><img src="images/Logo_KlikDokter.png" /></a>
        </div>
        <form class="search" action=" " method="post">
          <span class="search-icon material-symbols-outlined"><img src="images/search.png" alt=""> </span>
          <input class="search-input" type="search" placeholder="Search.." />
        </form>
        <div class="menu-icon">
          <ul>
            <li style="position:relative;left:20px;">
              <a href="form_login.php"><button class="masuk">Masuk atau Daftar</button></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="menu">
      <ul>
        <li><a style="text-decoration: none; text-align: center; color: black;" href="tanya-dokter.php"><img src="images/Tanya+Dokter.svg" class="tanya-dokter"><p>Tanya <br> Dokter</p></a></li>
        <li><a style="text-decoration: none; text-align: center; color: black;" href="#"><img src="images/system-cell.svg" class="stem-cell"><p>Info <br> Stem Cell</p></a></li>
        <li><a style="text-decoration: none; text-align: center; color: black;" href="#"><img src="images/Layanan+dan+Lab.svg" class="layanan-lab"><p>layanan <br> Medis & Lab</p></a></li>
        <li><a style="text-decoration: none; text-align: center; color: black;" href="info-obat.php"><img src="images/Info+Obat.svg" class="info-obat"><p>Info <br>Obat</p></a></li>
        <li><a style="text-decoration: none; text-align: center; color: black;" href="#"><img src="images/Temu+Dokter.svg" class="temu-dokter"><p>Temu <br>Dokter</p></a></li>
      </ul>
    </div>
    <div class="event">
      <p id="ev-1">Semua</p>
      <p id="ev-2">promo</p>
      <br> <br>
    <img src="images/ev-1.jpg" alt="">
    <img src="images/ev-2.jpg" alt="">
    <img src="images/ev-3.jpg" alt="">
    </div>
    <script src="script.js"></script>
  </body>
</html>
