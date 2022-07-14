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
<style>
<title>PHP MySQL Web Application: Sample Project</title> 
.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
 padding: 0;
}
   
.nav ul a {
 text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>