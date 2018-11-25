<?php
	$conn = new mysqli("localhost","root","","myproject");

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM shopperregister WHERE email = '$email' and password = '$pass'";
	$res = $conn->query($sql);
	if($res->num_rows > 0)
	{
		if (isset($_POST['email']) && isset($_POST['password'])) 
        {
            
            if (($_POST['email'] == $email) && ($_POST['password'] == $pass)) 
            {    
                
                //if (isset($_POST['rememberme'])) {
                    /* Set cookie to last 1 year */
                    setcookie('username', $_POST['email'], time()+60*60*24*365);
                    setcookie('password', md5($_POST['password']), time()+60*60*24*365);
                
                //} 
                    //else {
                    /* Cookie expires when browser closes */
                    /*setcookie('username', $_POST['username'], false, '/account', 'www.example.com');
                    setcookie('password', md5($_POST['password']), false, '/account', 'www.example.com');
                }*/
                //echo "COOKIE NAME".$_COOKIE['username'];

                header('Location: buyertable.php');
                
            } 
            else 
            {
                echo 'Username/Password Invalid';
            }
            
        } 
	}
	
	else
	{
		echo "FAILED";
	}
	$conn -> close();
?>