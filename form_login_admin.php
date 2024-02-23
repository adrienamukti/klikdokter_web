<!DOCTYPE html>
<html>

<head>
    <title>Pet Clinic Adri</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body id="bglogin">
    <a href="index_admin.php"><img src="images/klikdokter-white.svg" class="logoadm" /></a>
    <div class="frmlgn">
        <div id="titlfrm">
            <h3>Login Admin</h3>
        </div>
        <form method="post" action="login_admin.php">
            <table id="tbllgn">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="pass" required/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>&nbsp; <input type="checkbox" onclick="show()"><span style="font-size: 15px;">Show Password</span></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;
                        <input type="submit" name="login" value="LOGIN" />
                        <input type="reset" name="reset" value="RESET" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>