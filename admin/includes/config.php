<?php
    $con = mysqli_connect("localhost", "root", "", "videotube");

    if ($con->connect_error ) {
        die("Connection failed: " . $con->connect_error);
    }

?>