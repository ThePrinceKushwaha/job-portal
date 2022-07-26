<?php
if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location:../login.php');
}
?>
<html>
<head>
<title>jobKhojam: Admin Dashboard</title>
<link href="css/admin-style.css" rel="stylesheet" type="text/css"> 
</head>
<body>
