<!--SEARCH FUNCTION -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/retailertable.css">
	<script type="text/javascript" src="js/jquery1.js"></script>
	<script type="text/javascript" src="js/retailertable.js"></script>
</head>
<body background="img/Fruit.jpg">
	<div class="container-fluid" style="background-color: black;">
	  	<div class="row">
	  		<div class="col-sm-10" style="color: white;">
	  			<h2>Welcome, User</h2>
	  		</div>
	  		<div class="col-sm-1" style="text-align: right; ">
	  			<h4 style="color: white;">WALLET : $3500 <i class="fa fa-money" style="font-size: 20px;"></i></h4>
	  		</div>
	  		<div class="col-sm-1" style="text-align: right;">
	  			<h4 style="color: white;"><a href="re_login.php?logout='1'">LOGOUT <i class="fa fa-sign-out" style="font-size: 20px;"></i></a></h4>
	  		</div>
	  	</div>
	</div>
	
<!--start Modal add information-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #99ffbb;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;">ADD FRUIT</h4>
        </div>
        <div class="modal-body">
           <form style="color: #000099">
					<div class="form-group">
  						<label> Fruit-Name:</label>
  						<input type="text" class="form-control" id="fruit_name">
					</div>
					<div class="form-group">
  						<label>Quantity:</label>
  						<input type="text" class="form-control" id="quantity">
					</div>
					<div class="form-group">
  						<label>Price per unit:</label>
  						<input type="text" class="form-control" id="price">
					</div>
					<button type="button" id="btn_add" class="btn btn-default" data-dismiss="modal">Add</button>
			</form>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal add information-->
<!--start Modal update-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #99ffbb;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="update_fruit" style="text-align: center;"></h4>
        </div>
        <div class="modal-body">
           <form style="color: #000099">
           		<div class="form-group">
						<label> Fruit-Name:</label>
						<input type="text" class="form-control" id="update_fruit">
				</div>
           		<div class="form-group">
           			<label>Quantity</label>
           			<input type="number" id="update_quantity" class="form-control">           			
           		</div>
           		<div class="form-group">
           			<label>Price</label>
           			<input type="number" id="update_price" class="form-control">           			
           		</div>
           		<button id="update_btn" type="button" class="btn btn-default" data-dismiss="modal">Update</button>
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal update-->

	<div class="container fruit_information">
		<div class="row">
			<div class="col-xs-12 col-sm-2"></div>
			<div class="col-xs-12 col-sm-8" style="text-align: center;">
				<button id="btn1" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Add</button>

				<table class="table table-striped" id="tableone">
					<h4><caption style="text-align: center;">LIST OF FRUITS & DETAILS</caption></h4>
					<thead style="background-color: #ffff1a; font-size: 18px; text-align: center;">
						<tr>
							<th>Fruit</th>
							<th>Quantity</th>
							<th>Price/Unit</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>					
				</table>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
	<!-- <div class="container add_fruit_information">
		<div class="row">
			<div class="col-xs-12 col-sm-4"></div>		
			<div class="col-xs-12 col-sm-4">
				
			</div>		
			<div class="col-xs-12 col-sm-4"></div>		
		</div>
	</div> -->
</body>
</html>