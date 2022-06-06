<?php 
include '../config/config.php';

$username = $_POST['username'];
$sandi = $_POST['sandi'];

$result4 = mysqli_query($mysqli, "select * from log_in where username='$username' and sandi='$sandi'");
$cek = mysqli_num_rows($result4);

if($cek <=0){
    echo "akun anda tidak terdaftar";
}else{
    header("location:homepage.php");
}

?>