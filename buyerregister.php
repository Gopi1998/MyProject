<?php

//setcookie('username', '', time()-60*60*24*365, '/account', 'www.example.com');
//setcookie('password', '', time()-60*60*24*365, '/account', 'www.example.com');
	if(!isset($_COOKIE['username']))
	{
    	header('Location:bu_signup.php');
	}
	echo "COOKIE NAME ".$_COOKIE['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="bu_signup.php?logout='1'">LOGOUT</a>
</body>
</html>