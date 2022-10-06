<?php 
// session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: register-view.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: register-view.php?error=Password is required");
	    exit();
	}else if(empty($name)){
        header("Location: register-view.php?error=Name is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname'";
		
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) === 1) {
			header("Location: register-view.php?error=Username already in use");
		    exit();
		}

		$insert = "INSERT INTO users (user_name, password, name) VALUES ('".$uname."', '".$pass."', '".$name."')";

		if (mysqli_query($conn, $insert)) {
			header("Location: index.php?error=User created successfully");
		    exit();
		} else {
			header("Location: register-view.php?error=Server exploded");
		    exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}