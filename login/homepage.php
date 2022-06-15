<?php
include_once("../config/config.php");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="../public/css/style.css"	>
    
</head> 
 
<body>
<div class="bg-slate-300 py-25 px-1 min-h-screen ">
<a
            href="../public/cucian/add.php"
            type="submit"
            class="inline-block px-4 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Tambah Cucian
          </a>
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input
            name="cari"
            href="../public/cucian/add.php"
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-slate-600 text-white uppercase rounded shadow-md hover:bg-slate-700 hover:shadow-lg focus:bg-slate-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      echo "<b>Hasil pencarian : ".$cari."</b>";
}
 ?>
 <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800"">

    <tr>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">kode Cucian</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jumlah Potong</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jenis Cucian</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Berat Kg</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Harga</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th> 
    </tr>
    </thead>
<tbody>
    
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $result = mysqli_query($mysqli,"select * from cucian where kodecucian Like '%".$cari."%'");
    }  else{
        $result = mysqli_query($mysqli, "SELECT * FROM cucian ORDER BY kodecucian asc");
    }
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr class='bg-white border-b' >";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900' >".$kodecucian = $user_data['kodecucian']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$jumlahpotong =$user_data['jumlahpotong']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$jeniscucian = $user_data['jeniscucian']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$berat = $user_data['berat_kg']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$harga = $user_data['harga']."</td>"; 
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'><a  href=' ../public/cucian/edit.php?kodecucian=$user_data[kodecucian]'>Edit</a> | <a href='../public/cucian/delete.php?kodecucian=$user_data[kodecucian]'>Delete</a></td></tr>";        
    }
    ?>
</tbody>
    </table>
      </div>
    </div>
  </div>
 </div>

    <br>
    <br>

    <a
            href="../public/karyawan/add.php"
            type="submit"
            class="inline-block px-4 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Add New Karyawan 
          </a>
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari1">
    <input
            name="cari1"
            href="../public/karyawan/add.php"
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
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">kode Karyawan</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nama Karyawan</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jenis Kelamin</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Alamat</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">kota</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jabatan</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th> 
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
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$kodekaryawan = $user_data1['kodekaryawan']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$namakaryawan =$user_data1['namakaryawan']."</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$jeniskelamin = $user_data1['jeniskelamin']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$alamat = $user_data1['alamat']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$kota = $user_data1['kota']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$jabatan = $user_data1['jabatan']."</td>";    
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'><a  href=' ../public/karyawan/edit.php?kodekaryawan=$user_data1[kodekaryawan]'>Edit</a> | <a href='../public/karyawan/delete.php?kodekaryawan=$user_data1[kodekaryawan]'>Delete</a></td></tr>";
    }
    ?>
    </thead>
    </table>
      </div>
    </div>
  </div>
    </div>
    <br>
    <br>

    <a
            href="../public/Pelanggan/add.php"
            type="submit"
            class="inline-block px-4 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Add New Pelanggan 
          </a>
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari3">
    <input
            name="cari3"
            href="../public/pelanggan/add.php"
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-slate-600 text-white uppercase rounded shadow-md hover:bg-slate-700 hover:shadow-lg focus:bg-slate-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
if(isset($_GET['cari3'])){
      $cari3 = $_GET['cari3'];
      echo "<b>Hasil pencarian : ".$cari3."</b>";
}
 ?>
  <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800">
    <tr>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">kode Pelanggan</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nama Pelanggan</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Alamat</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Telepon</th>  
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th> 
    </tr>
    </thead>
    <tbody>
    <?php
        if(isset($_GET['cari3'])){
            $cari3 = $_GET['cari3'];
            $result2 = mysqli_query($mysqli,"select * from pelanggan where kodepelanggan Like '%".$cari3."%'");
        } else{
            $result2 = mysqli_query($mysqli, "SELECT * FROM pelanggan ORDER BY kodepelanggan ASC");
        }
    while($user_data2 = mysqli_fetch_array($result2)) {         
        echo "<tr class='bg-white border-b'>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$kodepelanggan = $user_data2['kodepelanggan']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$namapelanggan =$user_data2['namapelanggan']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$alamat = $user_data2['alamat']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$telepon = $user_data2['telepon']."</td>";    
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'><a  href='../public/pelanggan/edit.php?kodepelanggan=$user_data2[kodepelanggan]'>Edit</a> | <a href='../public/pelanggan/delete.php?kodepelanggan=$user_data2[kodepelanggan]'>Delete</a></td></tr>";
    }
    ?>
    </tbody>
    </table>
      </div>
    </div>
  </div>
  </div>

    <br>
    <br> 
 
    <a
            href="../public/transaksi/add.php"
            type="submit"
            class="inline-block px-4 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Add New Transaksi 
          </a>
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari2">
    <input
            name="cari2"
            href="../public/transaksi/add.php"
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-slate-600 text-white uppercase rounded shadow-md hover:bg-slate-700 hover:shadow-lg focus:bg-slate-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
if(isset($_GET['cari2'])){
      $cari2 = $_GET['cari2'];
      echo "<b>Hasil pencarian : ".$cari2."</b>";
}
 ?>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800">

    <tr>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">kode Transaksi</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Kode karyawan</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Kode Pelanggan</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Kode Cucian</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">tanggal Masuk</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Tanggal Keluar</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jumlah</th>
    </tr>
    </thead>
    <tbody>
    <?php  
    if(isset($_GET['cari2'])){
        $cari2 = $_GET['cari2'];
        $result3 = mysqli_query($mysqli,"select * from transaksi where kodetransaksi Like '%".$cari2."%'");
    } else{
        $result3 = mysqli_query($mysqli, "SELECT * FROM transaksi ORDER BY kodetransaksi ASC");
    }
    while($user_data3 = mysqli_fetch_array($result3)) {         
        echo "<tr class='bg-white border-b' >";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$kodetransaksi = $user_data3['kodetransaksi']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$kodekaryawan =$user_data3['kodekaryawan']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$kodepelanggan = $user_data3['kodepelanggan']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$kodecucian = $user_data3['kodecucian']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$tanggalmasuk = $user_data3['tanggalmasuk']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$tanggalkeluar = $user_data3['tanggalkeluar']."</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$jumlah1 = $user_data3['jumlah']."</td>"; 
        
        
    } 
    ?>
    </tbody>
    </table>
      </div>
    </div>
  </div>
</div>
<a
            href="../login/logout.php"
            type="submit"
            class="inline-block px-3 py-2 bg-red-600 text-white uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Log Out
          </a>
</div>
</body>
</html>
</html>