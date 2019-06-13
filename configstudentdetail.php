<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="libproject";
$dbcon=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(mysqli_error($dbcon));
?>