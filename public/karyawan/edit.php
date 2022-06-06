<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kodekaryawan = $_POST['kodekaryawan'];
	$namakaryawan = $_POST['namakaryawan'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$jabatan = $_POST['jabatan'];
	// update user data
	$result1 = mysqli_query($mysqli, "UPDATE karyawan SET namakaryawan='$namakaryawan',jeniskelamin='$jeniskelamin',alamat='$alamat',kota='$kota',jabatan='$jabatan' WHERE kodekaryawan=$kodekaryawan");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kodekaryawan = $_GET['kodekaryawan'];
 
// Fetech user data based on id
$result1 = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE kodekaryawan=$kodekaryawan");
 
while($user_data1 = mysqli_fetch_array($result1))
{
	$kodekaryawan = $user_data1['kodekaryawan'];
	$namakaryawan = $user_data1['namakaryawan'];
	$jeniskelamin = $user_data1['jeniskelamin'];
	$alamat = $user_data1['alamat'];
	$kota = $user_data1['kota'];
	$jabatan = $user_data1['jabatan'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="../../homepage.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Kode Karyawan</td>
				<td><input type="text" name="kodekaryawan" disabled value=<?php echo $kodekaryawan;?>></td>
			</tr>
			<tr> 
				<td>Nama karyawan</td>
				<td><input type="text" name="namakaryawan" value=<?php echo $namakaryawan;?>></td>
			</tr>
			<tr> 
				<td>Jenis kelamin</td>
				<td><input type="text" name="jeniskelamin" value=<?php echo $jeniskelamin;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>Kota</td>
				<td><input type="text" name="kota" value=<?php echo $kota;?>></td>
			</tr>
			<tr> 
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" value=<?php echo $jabatan;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="kodekaryawan" value=<?php echo $_GET['kodekaryawan'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
