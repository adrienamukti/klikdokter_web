<?php
session_start(); 
if (isset($_POST['register'])) { 
  include "connection.php"; 

  $query = "SELECT * FROM user WHERE email='$_POST[email]'";
  $result = mysqli_query($db_connection, $query);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Daftar gagal, email sudah ada!');window.location.replace('register.php')</script>";
    exit();
  }

  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $query = "INSERT INTO user (username, email, password) VALUES ('$_POST[username]', '$_POST[email]', '$password')";
  mysqli_query($db_connection, $query);

  echo "<script>alert('Daftar berhasil!');window.location.replace('form_login.php')</script>";
}
