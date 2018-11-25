<?php

//setcookie('username', '', time()-60*60*24*365, '/account', 'www.example.com');
//setcookie('password', '', time()-60*60*24*365, '/account', 'www.example.com');
	if(!isset($_COOKIE['username']))
	{
    	header('Location:re_login.php');
	}
	echo "COOKIE NAME ".$_COOKIE['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>