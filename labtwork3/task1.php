<?php

$mail=$Request['mail'];
if($mail!=null){
	if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
	echo"success";
	}
	else{
	echo "invalid";
}
?>


