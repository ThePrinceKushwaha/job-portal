<?php
$server_name="localhost";
$server_username="root";
$server_password="";


$conn = mysqli_connect($server_name, $server_username, $server_password);


if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


// create database
$create_db = "CREATE DATABASE if not exists jobKhojam"; 

if(!mysqli_query($conn,$create_db)){
    echo "Error creating database: " .mysqli_error($conn);
}

$db_name= 'jobkhojam';

$conn = mysqli_connect($server_name, $server_username,$server_password,$db_name);


$create_tbl = "CREATE TABLE if not exists `jk_registeredUsers` (
    `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
    `fullname` varchar(255) NOT NULL,  
    `username` varchar(255) NOT NULL,  
    `email` varchar(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `cpassword` varchar(255) DEFAULT NULL,
    `mobile` varchar(10) DEFAULT NULL,
    `address` varchar(255) NOT NULL,
    `agreed` varchar(10) NOT NULL,
    `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `gender` tinyint(1) NOT NULL,
    `user_image` varchar(255) NOT NULL,
     `comment` text,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ";


if(!mysqli_query($conn, $create_tbl)){
    echo "Error creating table: " . mysqli_error($create_tbl);
}




?>