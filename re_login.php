<?php
    if(isset($_COOKIE['username']))
    {
        header('Location: retailertable.php');
    }
    if(isset($_GET['logout']))
    {
        setcookie('username', '', time()-60*60*24*365);
    } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>RETAILER LOGIN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/re_login.css">
    <script src="js/re_login.js"></script>
</head>
<body>
    <div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form name="myForm" onsubmit="return(isValid())" action="retail_dashboard.php" method="post">
                <h2>RETAILER LOGIN</h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="1">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="2">
                        </div>
                    </div>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="LOGIN"></div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>