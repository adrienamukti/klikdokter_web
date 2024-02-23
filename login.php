<?php
session_start();
if (isset($_POST['login'])) {
  include "connection.php";

  $query = "SELECT * FROM user WHERE email='$_POST[email]'";

  $login = mysqli_query($db_connection, $query);

  if (mysqli_num_rows($login) > 0) {
    $user = mysqli_fetch_assoc($login);
    if (password_verify($_POST['password'], $user['password'])) {
      $_SESSION['login'] = TRUE;
      $_SESSION['userid'] = $user['userid'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['password'] = $user['password'];
      $_SESSION['email'] = $user['email'];

      echo "<script>alert('Login sukses!');window.location.replace('index_login.php');</script>";
    } else {
      echo "<script>alert('Login gagal, password salah!');window.location.replace('index_nonlogin.php');</script>";
    }
  } else {
    echo "<script>alert('Login gagal, user tidak ditemukan !');window.location.replace('form_login.php')</script>";
  }
}
