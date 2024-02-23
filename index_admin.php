<?php

session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first  !');window.location.replace('form_login_admin.php');</script>";
}

include "connection.php"; 
$query = "SELECT * FROM admn WHERE userid = " . $_SESSION['userid']; 
$user = mysqli_query($db_connection, $query); 

$data = mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="images/klikdokter-logo.png">
    <title>Klikdokter</title>
</head>

<body>
    <header>
        <a href="index_admin.php"><img src="images/klikdokter-white.svg" class="logoadm" /></a>
        <img src="uploads/admin/<?= $data['photo']; ?>" alt="Profile Picture" class="user-pic" onclick="toggleMenu()">
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                <h2><?=$_SESSION['username']; ?></h2>
                </div>
                <hr style="width: 80%; position:relative; bottom:30px;">

                <a href="" class="sub-menu-link">
                    <img src="images/changepoto.png" alt="">
                    <p>Change Photo</p>
                    <span></span>
                </a>

                <a href="" class="sub-menu-link">
                    <img src="images/changepw.png" alt="">
                    <p>Change Password</p>
                    <span></span>
                </a>

                <a href="logout_admin.php" class="sub-menu-link">
                    <img src="images/logout1.png" alt="">
                    <p>logout</p>
                    <span></span>
                </a>
            </div>
    </header>
    <nav class="sidebar">
        <ul>
            <li><a href="read_user.php">Users List</a></li>
            <li><a href="read_doctor.php">Dokter List</a></li>
            <li><a href="">Obat List</a></li>
            <li><a href="read_admin.php">Admin List</a></li>
            <li><a href="">Monthly Report</a></li>
        </ul>
    </nav>
    <div class="main-content">
        <h1>Klikdokter data service</h1>
    </div>

    <script src="script.js"></script>
</body>

</html>