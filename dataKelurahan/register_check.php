<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['name']);
	$email = validate($_POST['email']);
	$password = validate($_POST['pass']);

	if (empty($username && $email && $password)) {
		header("Location: register.php?error=Field is empty");
	    exit();
	}else {
        $sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: index.php?success=Your account has been created successfully");
	        exit();
        }else  {
            header("Location: register.php?error=unknown error occurred");
	        exit();
       }
    }
	}else{
	header("Location: index.php");
	exit();
}