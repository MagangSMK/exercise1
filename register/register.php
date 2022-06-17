<!DOCTYPE html>
<html  lang="en">
<head>
<link rel="stylesheet" href="../public/css/style.css"	>
</head>
	<div class="form-register">
		<div class="register">

			<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan'] == "gagal"){
						echo "Register gagal! Coba Lagi!";
					}
				}
			?>
			<form method="POST" action="dataregis.php">			
			<div class="bg-green-200 py-10 px-10 min-h-screen ">
		
  <!--   tip; mx-auto -- jagab ilusti keskele  -->
  <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
      <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="username" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Username</label>
        <input type="text"  name="username" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="flex items-center mb-10">
        <label for="sandi" class="inline-block w-20 mr-6 text-right
                                    font-bold text-gray-600">Password</label>
        <input type="password"  name="sandi" placeholder="...." 
        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"> <!-- check other class spec upper section -->
      </div>
      <div class="text-right">
      <a
            href="../index.php"
            type="submit"
            class="inline-block px-3 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Go to Login Page
          </a>
        <input name="Submit" type="submit" class="py-3 px-2 bg-green-400 hover:bg-green-700 text-white font-bold" value="Register">
      

			</div>
	</form>
	</div>
</div>
		</div>
	</div>
</body>
</html>