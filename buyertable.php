<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/buyertable.css">
  	<script type="text/javascript" src="js/buyertable.js"></script>
</head>
<body background="img/Fruit.jpg">
	<div class="container-fluid header">
		<div class="row" style="background-color: grey">
			<div class="col-xs-12 col-sm-10" style="color: white; font-size: 40px">Welcome user</div>
			<div class="col-sm-1" style="text-align: right; ">
	  			<h4 style="color: white;">WALLET : $3500 <i class="fa fa-money" style="font-size: 20px;"></i></h4>
	  		</div>
			<div class="col-xs-12 col-sm-1" style="text-align: right;">
				<h4><a href="bu_login.php?logout='1'" style="color: white">LOGOUT <i class="fa fa-sign-out" style="font-size:24px"></i></a></h4>
			</div>
			
		</div>
	</div>
	<br><br><br><br>

	<div class="container result_container">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6 body" style="text-align: left;">
				<button id="but" style="background-color: #008ae6;" type="button" class="btn btn-default" onclick="sellersInformation()">DashBoard Home</button>
				<div class="result" id="result">
						
				</div>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
</body>
</html>