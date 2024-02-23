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
        <p>Info Obat</p>
        <p style="font-size: 15px;"><a style="text-decoration: none;" href="index.php">Home</a> > Info Obat</p>
    </div>
    <div class="srcobat">
        <form class="example" action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
    </div>
    <script src="js/script.js"></script>

  </body>
</html>