<?php

include('header.php');

session_start();



$fullNameErr=$usernameErr=$emailErr=$passwordErr=$cpasswordErr=$mobileErr=$addressErr="";
$fullname=$username=$email=$password=$cpassword=$mobile=$address="";

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     include('dbconnect.php');

//     if(!empty($_POST["fullname"])){
//         $fullNameErr = "name cannot be blanked";
//         exit();
//     }
//     else{
//         $fullname=test_input($_POST["fullname"]);
//         if(!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
//             $fullNameErr = "Only letters and white space allowed.";
//             exit();
//         }
//     }

//     if(!empty($_POST["username"])){
//         $usernameErr="username cannot be blank";
//         exit();

//     } else{
//         $username = test_input($_POST["username"]);
//         if(!preg_match("/^[a-zA-z0-9]*$/",$username)){
//             $username="only letters and numbers are allowed.";
//             exit();
//         }
//     }

//     if(!empty($_POST["email"])){
//         $emailErr="Email is required.";
//         exit();
//     } else{
//         $email= test_input($_POST["email"]);
//         if(!filter_var($eemail, FILTER_VALIDATE_EMAIL)){
//             $emailErr="Invalid Email format.";
//             exit();
//         }
//     }

//     if(!empty($_POST["password"])){
//         $passwordErr="password is required.";
//         exit();
//     }
//     else{
//         $password=test_input($_POST["password"]);
//         if(!preg_match("/^[a-zA-Z0-9!@#$%^&*()]*$/",$password)){
//             $passwordErr="Passowrd must containt small, capital letter, number and special character";
//             exit();
//         }
//     }

//     if(!empty($_POST["mobile"])){
//         $mobileErr="mobile number is required.";
//         exit(); 
//     } else{
//         $mobile=test_input($_POST["mobile"]);
//         if(!preg_match("/^[0-9]*$/",$mobile)){
//             $mobileErr="Mobile number must be 10 digit.";
//             exit();
//         }
//     }

//     if(!empty($_POST["address"])){
//         $addressErr="Address cannot be blank.";
//         exit();
        
//     } else{

//         $address=test_input($_POST["address"]);

//         if(!preg_match("/^[a-zA-Z ]$/",$address)){
//             $addressErr="Only letters and whitespace allowed.";
//             exit();
//         }
//     }

//     $insert_data= "INSERT INTO `jk_registeredUsers`(
//         `fullname`,
//         `username`,
//         `email`,
//         `password`,
//         `cpassword`,
//         `mobile`,
//         `location`,
//         `reg_date`
//     ) VALUES (
//         $fullname,
//         $username,
//         $email,
//         $password,
//         $cpassword,
//         $mobile,
//         $location
//     )";

//     echo $insert_data;
//     exit();


//     if(mysqli_query($conn,$insert_data)){
//         echo "Registration Successful";
//         exit();
//     }

// }

// function test_input($data){
//     $data= trim($data);
//     $data=stripslashes($data);
//     $data=htmlspecialchars($data);
//     return $data;
// } 





if(isset($_POST['submit'])){
    $post_data = file_get_contents('php://input');
    echo "<div> POST BODY <br>".$post_data."</div>";  
}
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
                    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="POST" autocomplete="off">
                        <div class="form-group">
                            <label for="fullname"><i class="fa-solid fa-user"></i> <input type="text" name="fullname"  id="fullname" placeholder="Enter Full Name"></label>
                            <span id="fullnameerror"><?php echo $fullNameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="username"><i class="fa-solid fa-user"></i> <input type="text" name="username"  id="username" placeholder="username"></label>
                            <span id="usernameerror"><?php echo $usernameErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fa-solid fa-envelope"></i> <input type="text" name="email"  id="email" placeholder="prince@jobportal.com"></label>
                            <span id="emailerror"><?php echo $emailErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fa-solid fa-key"></i> <input type="password" name="password"  id="password" placeholder="Password"></label>
                            <span id="passworderror"><?php echo $passwordErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword"><i class="fa-solid fa-key"></i> <input type="password" name="cpassword"  id="cpassword" placeholder="confirm password"></label>
                            <span id="cpassworderror"></span>
                        </div>
                        <div class="form-group">
                            <label for="mobile"><i class="fa-solid fa-mobile"></i>  <input type="text" name="mobile"  id="mobile" placeholder="+977-9845798672"></label>
                            <span id="mobileerror"><?php echo $mobileErr;  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="address"><i class="fa-solid fa-location-dot"></i> <input type="text" name="address"  id="address" placeholder="New-Baneshwor, Kathmandu"></label>
                            <span id="addresserror"><?php echo $addressErr;  ?></span>
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