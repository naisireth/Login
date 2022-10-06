<?php 
// session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['quantity']) && isset($_POST['farmacia'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$quantity = validate($_POST['quantity']);
	$farmacia = validate($_POST['farmacia']);

	if (empty($name)) {
		header("Location: home.php?error=User Name is required");
	    exit();
	}else if(empty($quantity)){
        header("Location: home.php?error=Password is required");
	    exit();
	}else if(empty($farmacia)){
        header("Location: home.php?error=Name is required");
	    exit();
	}else{

		$insert = "INSERT INTO producto (name, quantity, farmacia) VALUES ('".$name."', '".$quantity."', '".$farmacia."')";

        mysqli_query($conn, $insert);

		header("Location: home.php?success=true");
		exit();
	}
	
}else{
	header("Location: index.php");
	exit();
}