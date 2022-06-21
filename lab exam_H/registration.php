<?php
	$name = $REQUEST['name'];
	$id = $REQUEST['id'];
	$password = $REQUEST['password'];
	$Cpassword = $REQUEST['Cpassword'];
	$type = $REQUEST['type'];

if($name == null || $id == null || password ==null || type== null){
	
	echo "invalid";
}
else{
$user =$name."|".$id."|".$password."|".$type."|";
$file=fopen('user.txt',a);




}



?>