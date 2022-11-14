<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$cardnum = validate($_POST['cardnum']);
	$ccv = validate($_POST['ccv']);

	$user_data = [$name, $email, $cardnum, $ccv];

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}
	else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}
	else if (empty($cardnum)) {
		header("Location: ../index.php?error=Card numba is required&$user_data");
	}
	else if (empty($ccv)) {
		header("Location: ../index.php?error=CCV is required&$user_data");
	}
	else {

       $sql = "INSERT INTO users(name, email, cardnum, ccv) 
               VALUES('$name', '$email', '$cardnum', '$ccv')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}