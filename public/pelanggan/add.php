<?php
include_once("../../config/config.php");
?>
<html>
<head>
    
	<title>Add data</title>
</head>
 
<body>
	<a href="../../login/homepage.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form3s">
		<table width="80%">
			<tr> 
				<td>Kode Pelanggan</td>
				<td><input type="text" name="kodepelanggan"></td>
			</tr>
			<tr> 
				<td>Nama Pelangan</td>
				<td><input type="text" name="namapelanggan"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td>Telepon</td>
				<td><input type="number" name="telepon"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$kodepelanggan = $_POST['kodepelanggan'];
		$namapelanggan = $_POST['namapelanggan'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result2 = mysqli_query($mysqli, "INSERT INTO pelanggan(kodepelanggan,namapelanggan,alamat,telepon) VALUES('$kodepelanggan','$namapelanggan','$alamat','$telepon')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../login/homepage.php' >View Users</a>";
	}
	?>
</body>
</html>