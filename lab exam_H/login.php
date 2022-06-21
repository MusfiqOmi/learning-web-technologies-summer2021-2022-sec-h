<?php

	$ierror="";
	$perror="";

	if(isset($_REQUEST['submit'])){

		$uid 		= $_REQUEST['uname'];
		$password 	= $_REQUEST['password'];

		if($uid == ""){
			$ierror = "null id";
		}else{
			$ierror = $uid;
		}

		if($password == ""){
			$perror = "null password";
		}else{
			$perror = $password;
		}
	}
?>