<?php
include_once("../config/config.php");
?>
<html>
<head>
    
	<title>Add data</title>
</head>
 
<body>
	<a href="../index.php">Go to login page</a>
	<br/><br/>
 
	<form action="register.php" method="post" name="form5">
		<table width="80%">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="sandi"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$username = $_POST['username'];
		$sandi = $_POST['sandi'];
		// include database connection file
		include_once("../config/config.php");
				
		// Insert user data into table
		$result4 = mysqli_query($mysqli, "INSERT INTO log_in(username,sandi) VALUES('$username','$sandi')");
		
		// Show message when user added
		echo "data added successfully. <a href='../index.php' >back to login page</a>";
	}
	?>
</body>
</html>