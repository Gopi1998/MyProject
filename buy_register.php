<?php 
	$conn = new mysqli("localhost","root","","myproject");

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}

	$fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$pan = $_POST["pan"];
	$phone = $_POST["phone"];
	$password = $_POST["password"];

	$sql = "INSERT INTO shopperregister VALUES ('$fname','$lname','$address','$email','$pan',$phone,'$password')";

	if ($conn->query($sql) === TRUE)
	{
	    if (isset($_POST['email']) && isset($_POST['password'])) 
		{
	        
	        if (($_POST['email'] == $email) && ($_POST['password'] == $password)) 
	        {    
	            
	            //if (isset($_POST['rememberme'])) {
	                /* Set cookie to last 1 year */
	                setcookie('username', $_POST['email'], time()+60*60*24*365);
	                setcookie('password', $_POST['password'], time()+60*60*24*365);
	            
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
	
    
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
?>