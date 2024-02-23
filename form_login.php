<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="images/klikdokter-logo.png">
    <title>Signin</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bdlgn">
    <img src="" alt="">
    <div class="nvsgn">
        <nav>
            <div class="logosgn">
                <a href="index.php"><img src="images/klikdokter-white.svg" /></a>
            </div>
        </nav>
    </div>
    <div class="formlgn">
        <h2 style="text-align: center; padding-bottom:30px;">Login </h2>
        <p style="font-size: small;">Cukup masukan email dan nikmati semua fitur KlikDokter</p>
        <form method="post" action="login.php">
            <label>Email</label><br>
            <input id="ip1" type="email" name="email" required><br>
            <label>Password</label><br>
            <input id="ip2" type="password" name="password" required>
            &nbsp;<input type="checkbox" onclick="show()"><span style="font-size: 15px;">Show Password</span></td>
            <br><br>
            <input id="btn-login" type="submit" name="login" value="LOGIN">
            <input id="btn-reset" type="reset" name="reset" value="RESET">
        </form>
        <p style="font-size: medium;">Belum punya akun? <a href="form_register.php">Daftar sekarang</a></p>
    </div>
    <script src="script.js"></script>
</body>

</html>