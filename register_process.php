<?php 

session_start();



$fullNameErr=$usernameErr=$emailErr=$passwordErr=$cpasswordErr=$mobileErr=$addressErr="";
$fullname=$username=$email=$password=$cpassword=$mobile=$address="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('dbconnect.php');

    if(!empty($_POST["fullname"])){
        $fullNameErr = "name cannot be blanked";
        exit();
    }
    else{
        $fullname=test_input($_POST["fullname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
            $fullNameErr = "Only letters and white space allowed.";
            exit();
        }
    }

    if(!empty($_POST["username"])){
        $usernameErr="username cannot be blank";
        exit();

    } else{
        $username = test_input($_POST["username"]);
        if(!preg_match("/^[a-zA-z0-9]*$/",$username)){
            $username="only letters and numbers are allowed.";
            exit();
        }
    }

    if(!empty($_POST["email"])){
        $emailErr="Email is required.";
        exit();
    } else{
        $email= test_input($_POST["email"]);
        if(!filter_var($eemail, FILTER_VALIDATE_EMAIL)){
            $emailErr="Invalid Email format.";
            exit();
        }
    }

    if(!empty($_POST["password"])){
        $passwordErr="password is required.";
        exit();
    }
    else{
        $password=test_input($_POST["password"]);
        if(!preg_match("/^[a-zA-Z0-9!@#$%^&*()]*$/",$password)){
            $passwordErr="Passowrd must containt small, capital letter, number and special character";
            exit();
        }
    }

    if(!empty($_POST["mobile"])){
        $mobileErr="mobile number is required.";
        exit(); 
    } else{
        $mobile=test_input($_POST["mobile"]);
        if(!preg_match("/^[0-9]*$/",$mobile)){
            $mobileErr="Mobile number must be 10 digit.";
            exit();
        }
    }

    if(!empty($_POST["address"])){
        $addressErr="Address cannot be blank.";
        exit();
        
    } else{

        $address=test_input($_POST["address"]);

        if(!preg_match("/^[a-zA-Z ]$/",$address)){
            $addressErr="Only letters and whitespace allowed.";
            exit();
        }
    }

    if(empty($_POST['fullname'])){
        $fullname="";
    } else{
        $fullname=test_input($_POST("fullname"));
    }

    $insert_data= "INSERT INTO jk_registeredUsers(
        fullname,
        -- username,
        -- email,
        -- password,
        -- cpassword,
        -- mobile,
        -- location,
        -- reg_date
    ) VALUES (
        $fullname,
        -- $username,
        -- $email,
        -- $password,
        -- $cpassword,
        -- $mobile,
        -- $location
    )";

    echo $insert_data;
    exit();


    if(mysqli_query($conn,$insert_data)){
        echo "Registration Successful";
        exit();
    }

}

function test_input($data){
    $data= trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}