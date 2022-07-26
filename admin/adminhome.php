<?php

if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location:../login.php');
}

include('header.php');
include('headtitle.php');  
?>