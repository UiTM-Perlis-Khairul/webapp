<?php
if (isset ( $_POST ['login'] )) {
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	include 'dbconnect.php';
	
	// SQL query
	$strSQL = "SELECT `role`, 
					`status` 
					FROM `app_user`
					WHERE username = '$username' AND
						password = PASSWORD('$password')";
	
	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query ( $conn, $strSQL );
	$row = mysqli_fetch_array ( $rs, MYSQLI_ASSOC );
	if (mysqli_num_rows ( $rs ) == 1) {
		
		$_SESSION ['username'] = $username;
		$_SESSION ['role'] = $row ['role'];
		/*
		echo '<p>Hello ' . $username . '</p>';
		echo '<p>You are ' . $_SESSION ['role'] . ' user</p>';
		echo '<form method="get" action="index.php?page=home">';
		echo '<input type="submit" value="OK">';
		echo '</form';
		*/
		header("Location: index.php?page=home");
		die();
	} else {
		echo 'incorrect username and/or password. Please login again.';
	}
} else {
	echo '<p>Hello please login</p>';
	$username = '';
	$_SESSION ['username'] = '';
}
?>

<h1>Login</h1>

<form method="POST"	action="index.php?page=login">
	User name: <input name="username" type="text"> <br></br> Password: <input
		name="password" type="password"> <br></br> <input type="submit"
		value="Login" name="login">

</form>

