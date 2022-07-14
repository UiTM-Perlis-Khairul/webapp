<?php 

$username = '';
$password ='';
$role = '';
$status = '';
if (isset($_GET['username'])) {
	$user = $_GET['username'];
	// Cre ate connection
	include 'dbconnect.php';
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT username, password, role, status 
			FROM app_user
			WHERE username='$user'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$username = $row['username'];
		$password = $row['password'];
		$role = $row['role'];
		$status = $row['status'];		
		
	} else {
		echo "0 results";
	}
	
	mysqli_close($conn);
}

if (isset($_POST['EditUser'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$status = $_POST['status'];

	include 'dbconnect.php';

	// SQL query
	$sql = "UPDATE app_user SET
				password = '$password', 
				role = '$role', 
				status = '$status'
				WHERE
				username = '$username'";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		header("Location: index.php?page=userview");
		die();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}

?>
<form method="post" action="index.php?page=useredit&username=<?php echo $username?>">
Username
<input type="text" name="username" value="<?php echo $username?>" disabled="disabled"></br>
Password
<input type="password" name="password" value="<?php echo $password?>"></br>
Role
<input type="text" name="role" value="<?php echo $role?>"></br>
Status
<input type="text" name="status" value="<?php echo $status?>"></br>
</br>
<input type="hidden" name="username" value="<?php echo $username?>">
<input type="submit" name="EditUser" value=" OK "></br>
</form>
<?php

?>

