<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$kodekaryawan = $_GET['kodekaryawan'];
 
// Delete user row from table based on given id
$result1 = mysqli_query($mysqli, "DELETE FROM karyawan WHERE kodekaryawan=$kodekaryawan");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../login/homepage.php");
?>
