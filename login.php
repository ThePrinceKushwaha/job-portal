<?php

include('header.php');

session_start();
if(isset($_SESSION['uid'])){
    header('location:admin/admindash.php');
}


?>
<div id="login__wrapper" class="login__wrapper1232">
    <div class="login__container">
        <div class="login__leftwrapper">
            <div class="__left__container __left__overlay">
                <div class="__left__title">
                Login to your account!
                </div>
                <div class="__left__desc">
                    <ul class="__left__descList">
                        <li>#1 Job Site of Nepal</li>
                        <li>Most Trusted Job Portal in Nepal</li>
                        <li>It's FREE and It will Always Be</li>
                        <li>Your Confidentiality is Assured</li>
                        <li>We Provide Career Opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="register__rightwrapper">
            <div class="__right__container">
                <div class="register__info">
                    <h3>
                        Login to your account.
                    </h3>
                    <div class="__register__desc">
                    Login to your and start posting for the job for free!
                    </div>
                </div>
                <div class="register__form">
                    <form action="login.php" method="POST" autocomplete="off">

                        <div class="form-group">
                            <label for="useremail"><i class="fa-solid fa-envelope"></i> <input type="text" name="useremail"  id="email" placeholder="prince@jobportal.com"></label>
                            <span id="emailerror"><?php // echo $emailErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="userpassword"><i class="fa-solid fa-key"></i> <input type="password" name="userpassword"  id="userpassword" placeholder="Password"></label>
                            <span id="userpassworderror"><?php // echo $passwordErr;  ?></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Login to Account" name="login" id="login" class="btn">
                        </div>
                        <div class="have__account">
                            <span class="__login">Don't have jobPortal account Yet?</span> <a href="register.php" style="color:blue;">Register Now</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php


include 'footer.php';


include('dbconnect.php');

if(isset($_POST['login']))
{
	$useremail = $_POST['useremail'];
	$userpassword = $_POST['userpassword'];
	
	$query = "SELECT * FROM jk_registeredUsers WHERE email='$useremail' && password='$userpassword'";
	$run = mysqli_query($conn,$query);
	$row = mysqli_num_rows($run);
	if ($row<1)
	{
		?><script>
		alert('Invalid Login Credentials!');
		window.open('login.php','_self');
		</script>
		<?php
	}		
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id = $data['ID'];
		echo"id = ".$id ; // to display the ID of respective admin from database.
		$_SESSION['uid']= $id ;
		header('location:admin/admindash.php'); //redirect
	}
}
?>