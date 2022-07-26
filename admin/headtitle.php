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

<div class="admindashtitle">
	<a href="admindash.php" style="float:left;margin-left:30px;font-size:20px; color:#fff;">Back to Dashboard</a>
	<a href="../logout.php" style="float:right;margin-right:30px;font-size:20px; color:#fff;">Logout</a>
	<h1 align="center">Welcome to Admin Dashboard</h1>
</div>



<div class="main_wrapper">
	<div class="admin_container">
		<div class="right__container">
			welcome
		</div>
		<div class="left__container">

		</div>
	</div>
</div>