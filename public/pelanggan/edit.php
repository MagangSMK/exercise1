<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	    $kodepelanggan = $_POST['kodepelanggan'];
		$namapelanggan = $_POST['namapelanggan'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
	// update user data
	$result2 = mysqli_query($mysqli, "UPDATE pelanggan SET namapelanggan='$namapelanggan',alamat='$alamat',telepon='$telepon' WHERE kodepelanggan=$kodepelanggan");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kodepelanggan = $_GET['kodepelanggan'];
 
// Fetech user data based on id
$result2 = mysqli_query($mysqli, "SELECT * FROM pelanggan WHERE kodepelanggan=$kodepelanggan");
 
while($user_data2 = mysqli_fetch_array($result2))
{
        $kodepelanggan = $user_data2['kodepelanggan'];
		$namapelanggan =$user_data2['namapelanggan'];
		$alamat = $user_data2['alamat'];
		$telepon = $user_data2['telepon'];
}
?>
<html>
<head>	
	<title>Edit data pelanggan</title>
</head>
 
<body>
	<a href="../../homepage.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Kode pelanggan</td>
				<td><input type="text" name="kodepelanggan" disabled value=<?php echo $kodepelanggan;?>></td>
			</tr>
			<tr> 
				<td>Nama Pelanggan</td>
				<td><input type="text" name="namapelanggan" value=<?php echo $namapelanggan;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>Telepon</td>
				<td><input type="text" name="telepon" value=<?php echo $telepon;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="kodepelanggan" value=<?php echo $_GET['kodepelanggan'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
