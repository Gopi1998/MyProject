function getCookie(name)
		  {
		    var re = new RegExp(name + "=([^;]+)");
		    var value = re.exec(document.cookie);
		    return (value != null) ? unescape(value[1]) : null;
		  }
  		var buyer_email=getCookie('username');
		var sellers_from_server="";
		var unorderedlist="";
		var fruittable="";
		var thead="";
		var colrow="";
		var sellers_fruits_from_server="";
  		$(document).ready(function(){
  			
			sellersInformation();
		    $(document).on("click","#shop",function(){
		    	console.log($(this).attr("name"));
		    	 $("ul").remove();
		    	 $.post("get_fruit_information.php",
				    {"email":sellers_from_server[$(this).attr("name")].semail},
				    function(data,status){
				    	console.log(data);
				    	sellers_fruits_from_server=JSON.parse(data);
				    	drawTable(sellers_fruits_from_server);
				    }
		    	);

		    });
  		});
  		function sellersInformation()
  		{
  			$("table").remove();
  			$("ul").remove();
  			$.post("get_sellers_information.php",
				    {"email":""},
				    function(data,status){
				    	console.log(data);
				    	sellers_from_server=JSON.parse(data);
				    	drawList(sellers_from_server);
				    }
		    );
  		}
  		function drawList(sellers)
  		{
  			unorderedlist = $("<ul class='list-group'/>");
  			$("#result").append(unorderedlist);
  			for(var i=0;i<sellers.length;i++)
  			{
  				drawListItem(sellers[i],i);
  			}
  		}
  		function drawListItem(seller,index)
  		{
  			unorderedlist.append($("<li class='list-group-item'><span>"+seller.sname+"</span><span>"+seller.semail+"</span><span>"+seller.shopname+"</span><button class='btn btn-default' type='button' id='shop' name='"+index+"'>shop</button></li>"));
  		}
  		function drawTable(fruits){
			//console.log(fruits.length)
			fruittable= $("<table class='table table-striped'/>");
			thead=$("<thead/>");
			colrow=$("<tr>");
			thead.append(colrow);
			colrow.append("<td>FruitName</td>");
			colrow.append("<td>Quantity</td>");
			colrow.append("<td>Price</td>");
			fruittable.append(thead);
			$("#result").append(fruittable);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],i);
    		}
		}
		function drawRow(fruit,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				fruittable.append(tbody);
			    tbody.append(row); 
			    //row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    //row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
		}