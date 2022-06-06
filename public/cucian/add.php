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
 
	<form action="add.php" method="post" name="form1">
		<table width="80%">
			<tr> 
				<td>Kode Cucian</td>
				<td><input type="text" name="kodecucian"></td>
			</tr>
			<tr> 
				<td>Jumlah Potong</td>
				<td><input type="text" name="jumlahpotong"></td>
			</tr>
			<tr> 
				<td>Jenis Cucian</td>
				<td><input type="text" name="jeniscucian"></td>
			</tr>
			<tr> 
				<td>Berat kg</td>
				<td><input type="text" name="berat_kg"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
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
		$kodecucian = $_POST['kodecucian'];
		$jumlahpotong = $_POST['jumlahpotong'];
		$jeniscucian = $_POST['jeniscucian'];
		$berat = $_POST['berat_kg'];
		$harga = $_POST['harga'];
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO cucian(kodecucian,jumlahpotong,jeniscucian,berat_kg,harga) VALUES('$kodecucian','$jumlahpotong','$jeniscucian','$berat','$harga')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../login/homepage.php' >View Users</a>";
	}
	?>
</body>
</html>