<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$kodepelanggan = $_GET['kodepelanggan'];
 
// Delete user row from table based on given id
$result2 = mysqli_query($mysqli, "DELETE FROM pelanggan WHERE kodepelanggan=$kodepelanggan");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../login/homepage.php");
?>
