<?php
define('DB_SERVER','localhost');
define('DB_USER','courseuser');
define('DB_PASS','coursepass');
define('DB_NAME','onlinecourse');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>