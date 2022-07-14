<?php
if (!isset($_SESSION["username"])) {
	$_SESSION["username"] = "Guest";
	$_SESSION["role"] = "Guest";
}
if (isset($_GET["logout"])) {
	$_SESSION["username"] = "Guest";
	$_SESSION["role"] = "Guest";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="My Web Application">
    <meta name="keywords" content="PHP, MySQL, HTML, CSS, JavaScript">
    <meta name="author" content="Khairul Anwar Sedek">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP MySQL Web Application: Sample Project</title> 
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>