<?php
session_start();
if (!isset($_SESSION['login'])) {
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Klikdokter Edit</title>
    <style>
        body {
            background-color: #f5f5dc;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
        }

        body h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        form {
            background-color: #99BC85;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            text-align: left;
            color: #4CAF50;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="reset"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        input[type="reset"]:hover {
            background-color: red;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .logoadm {
            width: 150px;
            height: auto;
            margin-left: 20px;
            margin-bottom: 10px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?php
    //call connection php mysql
    include "connection.php";

    // make query SELECT FROM WHERE
    $query = "SELECT * FROM admn WHERE userid='$_GET[id]'";

    // run query
    $admn = mysqli_query($db_connection, $query);

    // extract data from query result
    $data = mysqli_fetch_assoc($admn);
    ?>
    <a href="index_admin.php"><img src="images/Logo_KlikDokter.png" class="logoadm" /></a>
    <form method="post" action="update_doctor.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?= $data['username'] ?>" required></td>
            </tr>
            <tr>
                <td>Usertype</td>
                <td><input type="text" name="usertype" value="<?= $data['usertype'] ?>" required></td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="usertype" value="<?= $data['fullname'] ?>" required></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><img src="uploads/admin/<?= $data['photo']; ?>" width="150" height="150"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="file" name="new_photo" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
        <input type="hidden" name="user" value="<?= $data['userid'] ?>">
        <input type="hidden" name="photo" value="<?= $data['photo'] ?>">
    </form>
    <p><a href="read_admin.php">CANCEL</a></p>
    <script src="script.js"></script>
</body>

</html>