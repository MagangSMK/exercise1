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
        <label for="kodekaryawan" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Kode Karyawan</label>
        <input type="text"  disabled name="kodekaryawan" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"  value=<?php echo $kodekaryawan;?>>
      </div>

      <div class="flex items-center mb-10">
        <label for="namakaryawan" class="inline-block w-20 mr-6 text-right
                                    font-bold text-gray-600">Nama karyawan</label>
        <input type="text"  name="namakaryawan" placeholder="...." 
        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $namakaryawan;?>> <!-- check other class spec upper section -->
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="jeniskelamin" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Jenis kelamin</label>
        <input type="text"  name="jeniskelamin" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $jeniskelamin;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="alamat" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Alamat</label>
        <input type="text"  name="alamat" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"value=<?php echo $alamat;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="kota" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Kota</label>
        <input type="text"  name="kota" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $kota;?>>
      </div>

	  <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="jabatan" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Jabatan</label>
        <input type="text"  name="jabatan" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $jabatan;?>>
      </div>

      <div class="text-right">
	  <input type="hidden" name="kodekaryawan" value=<?php echo $_GET['kodekaryawan'];?>>
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
	</form>
</body>
</html>
