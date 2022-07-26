<?php

if(isset($_POST['submit']))

{	 
    include_once 'dbconnect.php';
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];

	 $sql = "INSERT INTO jk_registeredUsers (fullname,username,email,password,cpassword,mobile,address)
	 VALUES ('$fullname','$username','$email','$password','$cpassword','$mobile','$address')";
	 if (mysqli_query($conn, $sql)) {
		// echo "New record created successfully !";
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}