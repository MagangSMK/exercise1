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
	<link rel="stylesheet" href="../css/style.css">
</head>
 
<body>
	<form name="update_data" method="post" action="edit.php">
		<div class="bg-green-200 py-10 px-10 min-h-screen ">
		
		<!--   tip; mx-auto -- jagab ilusti keskele  -->
		<div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
	  
			<!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
			<div class="flex items-center mb-5">
			  <!--         tip - here neede inline-block , but why? -->
			  <label for="kodepelanggan" class="inline-block w-20 mr-6 text-right 
									   font-bold text-gray-600">Kode Pelanggan</label>
			  <input type="text"  disabled name="kodepelanggan" placeholder="...." 
					 class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
							text-gray-600 placeholder-gray-400
							outline-none"  value=<?php echo $kodepelanggan;?>>
			</div>
	  
			<div class="flex items-center mb-10">
			  <label for="namapelanggan" class="inline-block w-20 mr-6 text-right
										  font-bold text-gray-600">Nama Pelanggan</label>
			  <input type="text"  name="namapelanggan" placeholder="...." 
			  class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
							text-gray-600 placeholder-gray-400
							outline-none" value=<?php echo $namapelanggan;?>> <!-- check other class spec upper section -->
			</div>
	  
			<div class="flex items-center mb-5">
			  <!--         tip - here neede inline-block , but why? -->
			  <label for="alamat" class="inline-block w-20 mr-6 text-right 
									   font-bold text-gray-600">Alamat</label>
			  <input type="text"  name="alamat" placeholder="...." 
					 class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
							text-gray-600 placeholder-gray-400
							outline-none" value=<?php echo $alamat;?>>
			</div>
	  
			<div class="flex items-center mb-5">
			  <!--         tip - here neede inline-block , but why? -->
			  <label for="telepon" class="inline-block w-20 mr-6 text-right 
									   font-bold text-gray-600">Telepon</label>
			  <input type="number"  name="telepon" placeholder="...." 
					 class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
							text-gray-600 placeholder-gray-400
							outline-none"value=<?php echo $telepon;?>>
			</div>	  
			<div class="text-right">
			<input type="hidden" name="kodepelanggan" value=<?php echo $_GET['kodepelanggan'];?>>
			<a
				  href="../../login/homepage.php"
				  type="submit"
				  class="inline-block px-3 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
				  data-mdb-ripple="true"
				  data-mdb-ripple-color="light">
				  Go to homepage
				</a>
				<input name="update" type="submit" class="py-3 px-2 bg-green-400 hover:bg-green-700 text-white font-bold" value="update">
			</div>
		</div>
			  </div>

	</form>
</body>
</html>
