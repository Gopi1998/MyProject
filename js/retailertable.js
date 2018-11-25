  function getCookie(name)
		  {
		    var re = new RegExp(name + "=([^;]+)");
		    var value = re.exec(document.cookie);
		    return (value != null) ? unescape(value[1]) : null;
		  }
		$(document).ready(function(){			
			var email=getCookie('username');
			var fruits_list="";
			var data1;
			$.post("get_fruit_information.php",
				    {"email":email},
				    function(data,status){
				    	//console.log(data);
				    	data1=data;
				    	fruits_list=JSON.parse(data);
				    	console.log(fruits_list);
				    	//alert(fruits_from_server[2].fname);
				    	drawTable(fruits_list,email);
				    }
		    );
									
			$(document).on("click","#delete",function(){
					var temp=$(this).attr("name");
					console.log(temp.split(":")[0]+" "+temp.split(":")[1]);
					deleteRow(temp.split(":")[0],temp.split(":")[1]);
			});
			$(document).on("click","#update",function(){
					var temp=$(this).attr("name");
					//console.log(temp);
			});
			$(document).on("click","#search_btn",function(){
				var quota = $("#search").val();
				for(var i=0;i<data1.length;i++)
				{
					var obj = data1[i];
					if(quota == obj.fname)
					{
						console.log(obj);
						alert("IMPOSSIBLE");
					}
				}
				
			});

			$("#btn_add").click(function(){
				$("tbody").remove();
				$.post("add_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#fruit_name").val(),
				      "quantity":$("#quantity").val(),
				      "price":$("#price").val()
				    },
				    function(data,status){
				    	console.log(data);

				    	fruits_list=JSON.parse(data);
				    	drawTable(fruits_list,email);
				    }
		    	);
			});
			$(document).on("click","#update",function(){
				var index=$(this).attr("name");
				console.log(index);
				console.log(fruits_list[index].fname);
				$("#update_fruit").text(fruits_list[index].fname);
				$("#update_quantity").val(fruits_list[index].quantity);
				$("#update_price").val(fruits_list[index].price);

			});
			$("#update_btn").click(function(){
				 $("tbody").remove();
				 $.post("update_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#update_fruit").text(),
				      "quantity":$("#update_quantity").val(),
				      "price":$("#update_price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_list=JSON.parse(data);
				    	drawTable(fruits_list,email);
				    }
		    	);
			});
		});
		function drawTable(fruits,email){
			//console.log(fruits.length);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],email,i);
    		}
		}
		function drawRow(fruit,email,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody />");
				$("#tableone").append(tbody);
			    tbody.append(row); 
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
			    row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='Delete_Icon.png' width='50' height='50'></td>"));
		}       
		function deleteRow(email,fruit_name)
		{
			
			$("tbody").remove();
			$.post("delete_fruit_information.php",
				    {"email":email,"fruit_name":fruit_name},
				    function(data,status){				    	
				    	//console.log(data);
				    	fruits_list=JSON.parse(data);
				    	drawTable(fruits_list,email);
				    }
				  );
		}