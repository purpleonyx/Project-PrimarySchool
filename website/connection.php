<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "alphonsus_primary_school";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect to the server!");
}
?>