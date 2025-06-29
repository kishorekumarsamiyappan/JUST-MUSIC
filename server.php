<?php
$HOSTNAME = 'wp.kongu.edu';
$USERNAME = 'eceb12';
$PASSWORD = 'eceb12';
$DATABASE = 'eceb12';
$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($con) {
    // echo "Connection Established";
} else {
    die("Connection failed: ". mysqli_connect_error());
}
?>
