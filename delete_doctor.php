<?php

    if(isset($_GET['id'])) { // check variable GET from URL
        include "connection.php"; //call connection php mysql
    
        // sql query DELETE FROM WHERE
        $query = "DELETE FROM doctor WHERE docid = '$_GET[id]';";

        // run query
        $delete = mysqli_query($db_connection, $query);
    
        if($delete) {  // check if query TRUE/success
            echo "<script> alert('doctor delete successfuly !'); </script>"; // success msg (javascript version)
        } else {
            echo "<script> alert('doctor delete failed !'); </script>";  // success fail (javascript version)
        }
    }   
?>
<script>window.location.replace("read_doctor.php");</script>