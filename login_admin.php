<?php
session_start();
if (isset($_POST['login'])) {
    include "connection.php";

    $query = "SELECT * FROM admn WHERE username='$_POST[username]'";

    $login1 = mysqli_query($db_connection, $query);

    if (mysqli_num_rows($login1) > 0) {
        $admn = mysqli_fetch_assoc($login1);
        if (password_verify($_POST['password'], $admn['password'])) {
            $_SESSION['login'] = TRUE;
            $_SESSION['userid'] = $admn['userid'];
            $_SESSION['username'] = $admn['username'];
            $_SESSION['password'] = $admn['password'];
            $_SESSION['usertype'] = $admn['usertype'];
            $_SESSION['fullname'] = $admn['fullname'];

            echo "<script>alert('Login sukses!');window.location.replace('index_admin.php');</script>";
        } else {
            echo "<script>alert('Login gagal, password salah!');window.location.replace('form_login_admin.php');</script>";
        }
    } else {
        echo "<script>alert('Login gagal, akun tidak ditemukan !');window.location.replace('form_login_admin.php')</script>";
    }
}
