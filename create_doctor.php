<?php

if (isset($_POST['save'])) { // check variable POST from FORM 
    include "connection.php"; //call connection php mysql

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO doctor (no_praktek, doctor_nama, spesialis, doctor_pendidikan) 
              VALUES ('$_POST[no_praktek]', '$_POST[doctor_nama]', '$_POST[spesialis]', '$_POST[doctor_pendidikan]')";


    // run query
    $create = mysqli_query($db_connection, $query);

    if ($create) {  // check if query TRUE/success
        echo "<script> alert('doctor added successfuly !'); </script>"; // success msg (javascript version)
    } else {
        echo "<script> alert('doctor added failed !'); </script>";  // success fail (javascript version)
    }
}
?>
<script>
    window.location.replace("read_doctor.php");
</script>