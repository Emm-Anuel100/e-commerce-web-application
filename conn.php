<?php

    # Mysqli connection to server
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoplex';
   
#connection to database server
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME );

#checking connection
if ($conn->connect_error) {
   # code...
   die("CONNECTION ERROR: " .$conn->connect_error);
}
?>