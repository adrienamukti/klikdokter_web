<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/klikdokter-logo.png">
  <title>Register</title>
  <style>
    .bdreg {
      margin: 0%;
      background-image: url("images/bg-sign.jpg");
      position: fixed;
    }

    .nvreg {
      position: relative;
    }

    .nvreg nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      position: relative;
      bottom: 18px;
      right: 70px;
      background-color: rgb(6, 133, 97);
      width: 2000px;
    }

    .logoreg img {
      width: 170px;
      height: auto;
      position: relative;
      left: 120px;
    }


    .formreg {
      background-color: #fcfcfc;
      padding: 20px;
      width: 100%;
      max-width: 500px;
      margin: 0 auto;
      position: relative;
      right: 700px;
      border-radius: 28px;

    }

    .formreg #ip1,
    #ip2 {
      border: none;
      border-bottom: 2px solid #111213;
    }

    #btn-reg,
    #btn-reset {
      display: inline-block;
      padding: 1rem;
      border: none;
      border-radius: 4px;
    }

    #btn-reg {
      background-color: #00a376;
      color: #fafafa;
    }

    #btn-reset {
      background-color: #d61406;
      color: #f1f1f1;
    }

    .ttl {
      padding-left: 100px;
      background-color: #e8eff0;
      max-width: 150%;
    }
  </style>
</head>

<body class="bdreg">
  <img src="" alt="">
  <div class="nvreg">
    <nav>
      <div class="logoreg">
        <a href="index.php"><img src="images/klikdokter-white.svg" /></a>
      </div>
    </nav>
  </div>
  <div class="formreg">
    <h3 style="text-align: center;">Daftar Akun</h3>
    <p>Isi form dibawah ini untuk mendaftar akun</p>
    <form method="post" action="register.php">
      <label>Username</label><br>
      <input id="ip1" type="text" name="username" required><br>
      <label>Email</label><br>
      <input id="ip1" type="email" name="email" required><br>
      <label>Fullname</label><br>
      <input id="ip1" type="text" name="fullname" required><br>
      <label>Password</label><br>
      <input id="ip2" type="password" name="password" required>
      &nbsp;<input type="checkbox" onclick="show()"><span style="font-size: 15px;">Show Password</span>
      <br>
      <label>Confirm Password</label><br>
      <input id="ip2" type="password" name="confirmpassword" required>
      <br><br>
      <input id="btn-reg" type="submit" name="register" value="DAFTAR">
      <input id="btn-reset" type="reset" name="reset" value="RESET">
    </form>
    <p>Sudah punya akun? <a href="form_login.php">Login sekarang</a></p>
  </div>
  <script src="script.js"></script>
</body>

</html>