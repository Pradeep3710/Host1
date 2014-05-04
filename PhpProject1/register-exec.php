<?php
	//Start the session
	session_start();
        //Include database connection details
	require_once('connect_db.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$usn = clean($_POST['usn']);
	$name =clean($_POST['name']);
	$sem = clean($_POST['sem']);
        $email=clean($_POST['email']);
        $dept= clean($_POST['dept']);
        $year= clean($_POST['year']);
	$password = clean($_POST['password']);
	$cpassword =clean($_POST['cpassword']);
	
	//Input Validations
	if($usn == '') {
		$errmsg_arr[] = 'USN is missing';
		$errflag = true;
	}
	if($name == '') {
		$errmsg_arr[] = 'name is missing';
		$errflag = true;
	}
	if($sem == '') {
		$errmsg_arr[] = 'Sem is missing';
		$errflag = true;
	}
        if($year == '') {
		$errmsg_arr[] = 'Year cant be blank';
		$errflag = true;
	}if($dept == '') {
		$errmsg_arr[] = 'deptartment is missing';
		$errflag = true;
	}if($email == '') {
		$errmsg_arr[] = 'email is missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($usn != '') {
		$qry = "SELECT * FROM student WHERE USN='$usn'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'USN is already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed 1");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		header("location: register-form.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO student(USN,name,sem,email,dept,year,password,comment) VALUES('$usn','$name',$sem,'$email','$dept',$year,'$password','NULL')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: register-success.php");
		exit();
	}else {
		die("Query failed 2");
	}
?>