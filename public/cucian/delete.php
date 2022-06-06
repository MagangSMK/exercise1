<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$kodecucian = $_GET['kodecucian'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM cucian WHERE kodecucian=$kodecucian");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../login/homepage.php");
?>
