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



<div class="main_wrapper">
	<div class="admin_container">
		<div class="right__container">
			<div class="logo">
				<a href="/admindash.php"><img src="../assets/images/job-khojam-light.png" alt="jobkhojam_logo"></a>
			</div>
			<div class="admindashtitle">
				
				<h2>Welcome</h2>
			</div>
			<div class="admin__featuresList">
				<ul>
					<li><a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
					<li><a href=""></a></li>
					<li><a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
					<li><a href=""></a></li>
				</ul>
			</div>
		</div>
		<div class="left__container">

		</div>
	</div>
</div>