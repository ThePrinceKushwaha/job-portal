<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location:../login.php');
}
?>
<?php
include('adminhome.php');
// include('../header.php');

?>