<?php 
	echo '{"user":{';
	$user=$_GET['user'];
	$password=$_GET['password'];
	$status=$_GET['status'];

	echo $user.$password.$status;

	echo '}}';

 ?>