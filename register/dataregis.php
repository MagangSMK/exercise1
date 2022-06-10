<?php
// Panggil koneksi
include '../config/config.php';

// mengambil data/memasukan data
$username = $_POST['username'];
$sandi = $_POST['sandi'];


// Insert Data
$result4 = mysqli_query($mysqli, "INSERT into log_in VALUES('$username','$sandi')");

$data = mysqli_query($mysqli,"SELECT * from log_in where username='$username' and sandi='$sandi'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	header("location:../index.php?pesan=berhasil_register");
}else{
	header("location:register.php?pesan=gagal");
}

?>