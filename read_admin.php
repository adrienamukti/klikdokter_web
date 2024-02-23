<?php
session_start();

include "connection.php"; // call connection
$query = "SELECT * FROM  admn  WHERE userid = " . $_SESSION['userid']; // make a sql query
$admn = mysqli_query($db_connection, $query); // run query & result quert is array

// extract data from query result
$data = mysqli_fetch_assoc($admn);
?>
<!DOCTYPE html>
<html>

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
                    <h2><?= $_SESSION['username']; ?></h2>
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
    <div class="main-content1">
        <h3>Admin List</h3>
        <p style="text-align: left;"><a href="add_admin.php">Add New Admin</a></p>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Usertype</th>
                <th>Fullname</th>
                <th>Photo</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
            include "connection.php"; // call connection
            $query = "SELECT * FROM admn"; // make a sql query
            $admn = mysqli_query($db_connection, $query); // run query & result quert is array

            $i = 1; // initial counter for numbering
            foreach ($admn as $data) : //loop to extract data from database / loop data array
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['usertype']; ?></td>
                    <td><?= $data['fullname']; ?></td>
                    <td align="center">
                        <img src="uploads/user/<?= $data['photo']; ?>" width="50" height="50"><br>
                    </td>
                    <td><a href="edit_admin.php?id=<?= $data['userid'] ?>">Edit Admin</a></td>
                    <td><a href="delete_admin.php?id=<?= $data['userid'] ?>" onclick="return confirm('Are you sure?')">Delete Admin</a></td>
                    <td><a href="reset_password.php?id=<?= $data['userid']; ?> &type=<?= $data['username']; ?>" onclick="return confirm('Are you sure?')">Reset Password</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="script.js"></script>
</body>

</html>