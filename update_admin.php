<?php

    if(isset($_POST['save'])) { // check variable POST from FORM 
        include "connection_220035.php"; //call connection php mysql
    
        // sql query UPDATE SET WHERE
        $query = "UPDATE doctor SET 
                  no_praktek = '$_POST[no_praktek]',
                  doctor_nama = '$_POST[doctor_nama]',
                  spesialis = '$_POST[spesialis]',
                  doctor_pendidikan = '$_POST[doctor_pendidikan]'
                  WHERE docid = '$_POST[docid]';";

        // run query
        $update = mysqli_query($db_connection, $query);
    
        if($update) {  // check if query TRUE/success
            echo "<script> alert('doctor update successfuly !'); </script>"; // success msg (javascript version)
        } else {
            echo "<script> alert('doctor update failed !'); </script>";  // success fail (javascript version)
        }
    }   
?>
<script>window.location.replace("read_doctor.php");</script>