<?php
session_start();
session_destroy();
echo "<script>alert('Logout success !');window.location.replace('index_nonlogin.php');</script>";
?>