<?php
include('connect.php');
session_start();
if(!empty($_SESSION['uname'])){
?>
    <p>Welcome!<?php
        $username=$_SESSION['uname']; 
        echo"";
        echo "<h3 style='margin-top:-3px;margin-bottom:-7px;text-transform:lowercase;'>".$username."</h3>"; ?>
    <br/>
        Details here;
    </p>
    <p>
        <a href="logout.php">LOG OUT</a>
    </p>
<?php }else{?>
    <h1>You are not allowed to access this page ! Go to <a href="index.php">Login Page</a> </h1>
<?php }?>