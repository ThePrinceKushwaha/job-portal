<?php

include('header.php');

session_start();


?>
<div id="register__wrapper" class="register__wrapper1232">
    <div class="register__container">
        <div class="register__leftwrapper">
            <div class="__left__container __left__overlay">
                <div class="__left__title">
                Register for a better opportunity!
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
                        Create your account.
                    </h3>
                    <div class="__register__desc">
                    Register with basic information, Complete your profile and start applying and posting for the job for free!
                    </div>
                </div>
                <div class="register__form">
                    <form action="process.php" method="POST" autocomplete="off">
                        <div class="form-group">
                            <label for="fullname"><i class="fa-solid fa-user"></i> <input type="text" name="fullname"  id="fullname" placeholder="Enter Full Name"></label>
                            <span id="fullnameerror"><?php //echo $fullNameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="username"><i class="fa-solid fa-user"></i> <input type="text" name="username"  id="username" placeholder="username"></label>
                            <span id="usernameerror"><?php // echo $usernameErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fa-solid fa-envelope"></i> <input type="text" name="email"  id="email" placeholder="prince@jobportal.com"></label>
                            <span id="emailerror"><?php // echo $emailErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fa-solid fa-key"></i> <input type="password" name="password"  id="password" placeholder="Password"></label>
                            <span id="passworderror"><?php // echo $passwordErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword"><i class="fa-solid fa-key"></i> <input type="password" name="cpassword"  id="cpassword" placeholder="confirm password"></label>
                            <span id="cpassworderror"></span>
                        </div>
                        <div class="form-group">
                            <label for="mobile"><i class="fa-solid fa-mobile"></i>  <input type="text" name="mobile"  id="mobile" placeholder="+977-9845798672"></label>
                            <span id="mobileerror"><?php // echo $mobileErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="address"><i class="fa-solid fa-location-dot"></i> <input type="text" name="address"  id="address" placeholder="New-Baneshwor, Kathmandu"></label>
                            <span id="addresserror"><?php // echo $addressErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="agreeterms"><input type="checkbox" name="agreeterms"  id="agreeterms" style="width:15px;"> I agreed to the <a href="terms.php"style="color:blue;">terms & conditions</a> governing the use of Jobportal.</label>
                            <span id="agreeerror"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Create Account" name="submit" id="submit" class="btn">
                        </div>
                        <div class="have__account">
                            <span class="__login">Already have jobPortal account?</span> <a href="login.php" style="color:blue;">Login</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>