<?php
include_once("../../config/config.php");
?>
<html>
<head>
    
	<title>Add transaksi</title>
</head>
 
<body>
	<a href="../../login/homepage.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form4">
		<table width="80%">
			<tr> 
				<td>Kode Transaksi</td>
				<td><input type="text" name="kodetransaksi"></td>
			</tr>
			<tr> 
				<td>Kode Karyawan</td>
				<td><input type="text" name="kodekaryawan"></td>
			</tr>
			<tr> 
				<td>Kode Pelanggan</td>
				<td><input type="text" name="kodepelanggan"></td>
			</tr>
			<tr> 
				<td>kode Cucian</td>
				<td><input type="text" name="kodecucian"></td>
			</tr>
			<tr> 
				<td>Tanggal Masuk</td>
				<td><input type="date" name="tanggalmasuk"></td>
			</tr>
			<tr> 
				<td>Tanggal keluar</td>
				<td><input type="date" name="tanggalkeluar"></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
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
		$kodetransaksi = $_POST['kodetransaksi'];
		$kodekaryawan = $_POST['kodekaryawan'];
		$kodepelanggan = $_POST['kodepelanggan'];
		$kodecucian = $_POST['kodecucian'];
		$tanggalmasuk = $_POST['tanggalmasuk'];
		$tanggalkeluar = $_POST['tanggalkeluar'];
		$jumlah1 = $_POST['jumlah'];
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result3 = mysqli_query($mysqli, "INSERT INTO transaksi(kodetransaksi,kodekaryawan,kodepelanggan,kodecucian,tanggalmasuk,tanggalkeluar,jumlah) VALUES('$kodetransaksi','$kodekaryawan','$kodepelanggan','$kodecucian','$tanggalmasuk','$tanggalkeluar','$jumlah1')");
		
		// Show message when user added
		echo "transaksi added successfully. <a href='../../login/homepage.php' >View Users</a>";
	}
	?>
</body>
</html>