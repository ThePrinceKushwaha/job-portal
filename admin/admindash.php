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
include('header.php');
include('headtitle.php');  


include('footer.php');

?>