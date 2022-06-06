<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kodecucian = $_POST['kodecucian'];
		$jumlahpotong = $_POST['jumlahpotong'];
		$jeniscucian = $_POST['jeniscucian'];
		$berat = $_POST['berat_kg'];
		$harga = $_POST['harga'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE cucian SET kodecucian='$kodecucian',jumlahpotong='$jumlahpotong',jeniscucian='$jeniscucian',berat_kg='$berat',harga='$harga' WHERE kodecucian=$kodecucian");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kodecucian = $_GET['kodecucian'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cucian WHERE kodecucian=$kodecucian");
 
while($user_data = mysqli_fetch_array($result))
{
        $kodecucian = $user_data['kodecucian'];
		$jumlahpotong =$user_data['jumlahpotong'];
		$jeniscucian = $user_data['jeniscucian'];
		$berat = $user_data['berat_kg'];
		$harga = $user_data['harga'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="../../login/homepage.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Kode Cucian</td>
				<td><input type="text" name="kodecucian" disabled value=<?php echo $kodecucian;?>></td>
			</tr>
			<tr> 
				<td>Jumlah potong</td>
				<td><input type="text" name="jumlahpotong" value=<?php echo $jumlahpotong;?>></td>
			</tr>
			<tr> 
				<td>Jenis Cucian</td>
				<td><input type="text" name="jeniscucian" value=<?php echo $jeniscucian;?>></td>
			</tr>
			<tr> 
				<td>Berat kg</td>
				<td><input type="text" name="berat_kg" value=<?php echo $berat;?>></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga" value=<?php echo $harga;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="kodecucian" value=<?php echo $_GET['kodecucian'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
