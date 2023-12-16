<?php
$conn = mysqli_connect("localhost", "root", "", "alphonsus_primary_school");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$pupilsid = $_POST["pupilsid"];
$date = $_POST["date"];
$attendance = $_POST["attendance"];

$query = "INSERT INTO attandance (pupil_ID, attendance_date, attendance_status) VALUES ('$pupilsid', '$date', '$attendance')";
header("Location: attendance.php");
mysqli_query($conn, $query);
die;
} 
?>