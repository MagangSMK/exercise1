<!DOCTYPE html>
<html  lang="en">
<head>
	
</head>
	<div class="form-register">
		<div class="register">
			<h2	text-align="center">Register</h2>
			<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan'] == "gagal"){
						echo "Register gagal! Coba Lagi!";
					}
				}
			?>
			<form method="POST" action="dataregis.php">
				<table>
                    <tr>
                    <td>Username </td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="sandi" required></td>
                    </tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Daftar" class="tombol"></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="../index.php" >Back to Login</a></td>
					</tr>
				</table>			
			</form>
		</div>
	</div>
</body>
</html>