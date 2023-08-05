<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'AAP');
    define('DB_PASS', '123456');
    define('DB_NAME', '');

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($con->connect_error) {
        die('Connection Failed' . $con->connect_error);
    }
;

?>