<nav class="nav">
<ul>
  <li>User: <?php echo $_SESSION['username']?></li>
  <li>Role: <?php echo $_SESSION['role']?></li>
  <li><a href="home.php">Home</a></li>
  <?php 
  	if ($_SESSION["username"] == 'Guest') {
 	 	echo '<li><a href="index.php?page=login">Login</a></li>';
	} else {
		echo '<li><a href="index.php?page=home&logout">Logout</a></li>';
	}
  ?>
  <?php 
  if ($_SESSION['role'] == 'admin') {
  	echo '<li><a href="index.php?page=userview">Manage Users</a></li>';
  }
  if ($_SESSION['role'] == 'normal') {
  	echo '<li><a href="index.php?page=userprofile">My Profile</a></li>';
    // uncomment the following one line to open the new user items page
  	//echo '<li><a href="index.php?page=useritems">My Items</a></li>';
  }
  ?>
  <li><a href="index.php">About</a></li>
</ul>
</nav>