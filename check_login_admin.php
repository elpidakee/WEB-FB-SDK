<?php

	ob_start(); //This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer.

	require 'syndesiMeVasi.inc.php';

	$adminame=$_POST['adminame'];
	$password=$_POST['password'];

	// To protect MySQL injection
	$adminame = stripslashes($adminame); // Un-quotes a quoted string
	$password = stripslashes($password);
	$adminame = mysqli_real_escape_string($conn, $adminame);  //the mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
	$password = mysqli_real_escape_string($conn, $password);
	
	$encrypted_password=md5($password); //md5 for password encryption and security
	$sql="SELECT * FROM admin WHERE username='$adminame' and password='$password'";
	$result=$conn->query($sql);

	$row_cnt = $result->num_rows;

	// an to apotelesma tairiazei sto adminame kai to password to row_cnt prepei na nai 1
	if($row_cnt==1){
		// Register $myusername, $mypassword and redirect to file "login_komple.php"
		$_SESSION["adminame"];	
		$_SESSION["password"];
		header("location:admin.php");
	}
	else {
		echo "wrong adminame or password";
	}

	ob_end_flush();//Flush (send) the output buffer and turn off output buffering - 出力用バッファをフラッシュ(送信)し、出力のバッファリングをオフにする
?>