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
 
	<form action="add.php" method="post" name="form2">
		<table width="80%">
			<tr> 
				<td>Kode Karyawan</td>
				<td><input type="text" name="kodekaryawan"></td>
			</tr>
			<tr> 
				<td>Nama Karyawan</td>
				<td><input type="text" name="namakaryawan"></td>
			</tr>
			<tr> 
				<td>Jenis Kelamain</td>
				<td><input type="text" name="jeniskelamin"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td>kota</td>
				<td><input type="text" name="kota"></td>
			</tr>
			<tr> 
				<td>Jabatan</td>
				<td><input type="text" name="jabatan"></td>
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
		$kodekaryawan = $_POST['kodekaryawan'];
		$namakaryawan = $_POST['namakaryawan'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$jabatan = $_POST['jabatan'];
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result1 = mysqli_query($mysqli, "INSERT INTO karyawan(kodekaryawan,namakaryawan,jeniskelamin,alamat,kota,jabatan) VALUES('$kodekaryawan','$namakaryawan','$jeniskelamin','$alamat','$kota','$jabatan')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../login/homepage.php' >View Users</a>";
	}
	?>
</body>
</html>