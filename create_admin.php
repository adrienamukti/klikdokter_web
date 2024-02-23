<?php

if (isset($_POST['save'])) { // check variable POST from FORM 
    include "connection.php"; //call connection php mysql

    // create default password
    $password = password_hash($_POST['username'], PASSWORD_DEFAULT);

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO admn (username, password, usertype, fullname) 
              VALUES ('$_POST[username]', '$password','$_POST[usertype]', '$_POST[fullname]')";


    // run query
    $create = mysqli_query($db_connection, $query);

    if ($create) {  // check if query TRUE/success
        echo "<script> alert('admin added successfuly !'); </script>"; // success msg (javascript version)
    } else {
        echo "<script> alert('admin added failed !'); </script>";  // success fail (javascript version)
    }
}
?>
<script>
    window.location.replace("index_admin.php");
</script>