<?php
include_once("../../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show" >
<div class="bg-slate-300 py-25 px-1 min-h-screen ">
  
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="../../login/homepage.php" >
    <img src="../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white">Home Page</span>
  </a>
</div>

<marquee class="bg-white" scrollamount="2"><h6 class="text-black" >List Posting</h6></marquee>
<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    

    
      

        

        

<li class="nav-item">
<a class="nav-link text-white " href="../cucian/cucian.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">dashboard</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Cucian</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="karyawan.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">person</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Karyawan</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="../pelanggan/pelanggan.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">person</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Pelanggan</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="../transaksi/transaksi.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">receipt_long</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Transaksi</span>
</a>
</li>
  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
  </li>

<li class="nav-item">
<a class="nav-link text-white " href="../profile/profile.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">person</i>
    </div>
  
  <span class="nav-link-text ms-1">Profile</span>
</a>
</li>
  </ul>
</div>
<div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../../login/logout.php" type="button">Log Out</a>
    </div>
    
  </div>
  
</aside>
<main class="main-content border-radius-lg ">
<div class="py-3">
<a
            href="add.php"
            type="submit"
            class="inline-block px-2 py-1 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Add New Karyawan 
          </a></div>
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari1">
    <input
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-slate-600 text-white uppercase rounded shadow-md hover:bg-slate-700 hover:shadow-lg focus:bg-slate-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
if(isset($_GET['cari1'])){
      $cari1 = $_GET['cari1'];
      echo "<b>Hasil pencarian : ".$cari1."</b>";
}
 ?>
    <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800">

    <tr>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">kode Karyawan</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Nama Karyawan</th>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Jenis Kelamin</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Alamat</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">kota</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Jabatan</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Update</th> 
    </tr>
        
    <?php
        if(isset($_GET['cari1'])){
            $cari1 = $_GET['cari1'];
            $result1 = mysqli_query($mysqli,"select * from karyawan where kodekaryawan Like '%".$cari1."%'");
        } else{
            $result1 = mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY kodekaryawan ASC");
        }
    while($user_data1 = mysqli_fetch_array($result1)) {         
        echo "<tr class='bg-white border-b'>";
        echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$kodekaryawan = $user_data1['kodekaryawan']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$namakaryawan =$user_data1['namakaryawan']."</td>";
        echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$jeniskelamin = $user_data1['jeniskelamin']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$alamat = $user_data1['alamat']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$kota = $user_data1['kota']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$jabatan = $user_data1['jabatan']."</td>";    
        echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'><a  href=' edit.php?kodekaryawan=$user_data1[kodekaryawan]'>Edit</a> | <a href='delete.php?kodekaryawan=$user_data1[kodekaryawan]'>Delete</a></td></tr>";
    }
    ?>
    </thead>
    </table>
      </div>
    </div>
  </div>
    </div>
</body>
</html>