<?php session_start();
require_once 'pagehead.php';
?>
<body>

<div class="flex-container">
<header>
  <h1>User Management System</h1>
</header>

<?php include "pagenav.php"?>

<article class="article">
  <?php 

  if (isset($_GET['page'])) {
  	if ($_GET['page'] == 'home') {
  		header ('location:home.php');
  	} elseif ($_GET['page'] == 'login') {
  		include 'login.php';
  	} elseif ($_GET['page'] == 'userview') {
  		if ($_SESSION['role'] == 'admin') {
  			include 'user_view.php';
  		} else {
  			$_SESSION['error'] = 1;
  			include 'error.php';
  		}
  	} elseif ($_GET['page'] == 'useradd') {
  		include 'user_add.php';	
  	} elseif ($_GET['page'] == 'useredit') {
  		include 'user_edit.php';	
  	} elseif ($_GET['page'] == 'userdelete') {
  		include 'user_delete.php';
	} elseif ($_GET['page'] == 'userprofile') {
		include 'user_profile.php';	
	// uncomment the next two lines to add new item in the menu
	//} elseif ($_GET['page'] == 'useritems') {
	//	include 'user_items.php';	
   	} elseif ($_GET['page'] == 'error') {
  		include 'error.php';
   	} else {
  		include 'home.php';
  	}
  } 
  ?>
</article>

<?php include "pagefoot.php"?>

