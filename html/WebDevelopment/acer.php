<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Laptop Review- Get All the Latest Information,Reviews about Laptops</title>

	
	  <meta name="keywords" content="Laptop, Acer, Asus,Price, Lenovo, Features, Ram ,Hard disk">
	  
	  <meta name="description" content="Get unbiased laptop reviews from the experts at Laptop Mag. Find the best 2017 laptops in our laptop buying guide and configurator.">
	  <meta name="author" content="Laptop Designers">



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" >
	<script src="js/jquery-3.2.1.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">LaptopReviews</a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="modal" id="opencart" data-target="">Cart</a>
	      </li>
	    
	      
	     <li class="nav-item">
	     	<a href="acer.php" class="nav-link">Acer</a>
	     </li>
	    
	    </ul>
	  <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	  		<div class="input-group">
	  			<span class="input-group-addon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
				<input class="form-control mr-sm-2" type="text"  name="Username" placeholder="Username">
			</div>
			<div class="input-group">
	  			<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
				<input class="form-control mr-sm-2" type="password" name="Password" placeholder="Password">
			</div>
	      
	      <input type="submit" name="login" class="btn btn-outline-success" value="Submit">
	      <button class="btn btn-outline-success " id="signup" type="button">Signup</button>
		<?php
		error_reporting(E_ALL); ini_set('display_errors', 'On'); 
		require 'db_connect.php';


		$errmsg="";
		$upass="";

		$uname="";
		if(isset($_POST["login"])){
				if(empty($_POST["Username"])||empty($_POST["Password"])){
					$errmsg="Username or Password cannot be empty";
				echo $errmsg;
					
				}
				
			else{
				$uname=$_POST["Username"];
				$upass=$_POST["Password"];
				$checkquery="select Username,Password from userdetails where  Username='$uname' AND Password='$upass';";
				$loginresult=mysqli_query($connection,$checkquery);
				$numrow=mysqli_num_rows($loginresult);
				
				if( $numrow==1){
					session_start();
					$_SESSION["userid"] =$uname;
					
					header("Location: 1.php");
						
				}else{
					echo "Login Failed";
				}
			}		
			

		}
		
		?>


	    </form>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
				<!-- Modal -->
				<div class="modal fade " id="cart">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				                <h3 class="modal-title">Cart</h3>
				            </div>
				            <div class="modal-body">
				                <table class="table">
				                  <thead>
				                    <tr>
				                      <th>#</th>
				                      <th>Model</th>
				                      <th>Price</th>
				                      <th>Quantity</th>
				                    </tr>
				                  </thead>
				                  <tbody>
				                    
				                  </tbody>
				                </table>
				            </div>
								<h2>Total:</h2>
				            <div class="modal-footer">
				                    
				                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				                    <button type="button" class="btn btn-primary">Proceed to Pay</button>
				                  </div>
				            </div>
				        </div>
				    </div>
				</div>

			<h1>Welcome to Laptop Reviews.com</h1>	

			<div class="container pt-3">
				<div class="row">
					

					<div class="card-deck">
						<div class="card col-md-4">
							<img class="card-image-top  img-responsive " src="images/acer1.jpg" width="100%"  alt="Laptop1">

							<div class="card-block">
								<h3  class="card-title"></h3>
								
								 <button  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#product1">Full Specs</button>
							</div>
						</div>




						<div class="card col-md-4">
							<img class="card-image-top img-responsive" src="images/acer2.jpg" width="100%"  alt="Laptop">

							<div class="card-block">
								<h3  class="card-title"></h3>
								
								<button  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#product2">Full Specs</button>
							</div>
						</div>
						<div class="card col-md-4">
							<img class="card-image-top img-responsive" src="images/acer3.jpg" width="100%"  alt="Laptop3">
							<div class="card-block">
								<h3  class="card-title"></h3>
								
								<button  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#product3">Full Specs</button>
							</div>
						</div>
					</div>
				

				</div>
				
				




				<!-- Modal -->
				<div class="modal fade product_view" id="product1">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				                <h3 class="modal-title">s</h3>
				            </div>
				            <div class="modal-body">
				                <div class="row">
				                   <div class="col-md-6 product_view">
				                   		<img class="img-responsive w-100" src="images/acer1.jpg" alt="saassa">
				                   		
				                   		<!-- end col -->

				                   		

				                   		<div class="btn">
				                   			<button type="button" class="btn btn-secondary m-1" data-dismiss="modal">Close
				                   			</button>
				                            <button type="button" id="1" class="btn btn-primary m-1" onclick="addtoCart(this)"> Add To Cart
				                            </button>
				                           
				                        </div>
				                   </div>
				                    <div class="col-md-6 product_content">
				                        <h4>Product Id: <span>51526</span></h4>
				                        
				                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
				                        <div class="row">
				                          
				                            
				                            
				                        </div>
				                        
				                        
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>

				<div class="modal fade product_view" id="product2">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				                <h3 class="modal-title">s</h3>
				            </div>
				            <div class="modal-body">
				                <div class="row">
				                   <div class="col-md-6 product_view">
				                   		<img class="img-responsive w-100" src="images/acer1.jpg" alt="saassa">
				                   		
				                   		<!-- end col -->

				                   		

				                   		<div class="btn">
				                   			<button type="button" class="btn btn-secondary m-1" data-dismiss="modal">Close
				                   			</button>
				                            <button type="button" id="2" class="btn btn-primary m-1" onclick="addtoCart(this)"> Add To Cart
				                            </button>
				                           
				                        </div>
				                   </div>
				                    <div class="col-md-6 product_content">
				                        <h4>Product Id: <span>51526</span></h4>
				                        
				                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
				                        <div class="row">
				                          
				                            
				                            
				                        </div>
				                        
				                        
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>

				<div class="modal fade product_view" id="product3">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				                <h3 class="modal-title">s</h3>
				            </div>
				            <div class="modal-body">
				                <div class="row">
				                   <div class="col-md-6 product_view">
				                   		<img class="img-responsive w-100" src="images/acer1.jpg" alt="saassa">
				                   		
				                   		<!-- end col -->

				                   		

				                   		<div class="btn">
				                   			<button type="button" class="btn btn-secondary m-1" data-dismiss="modal">Close
				                   			</button>
				                            <button type="button" id="3" class="btn btn-primary m-1" onclick="addtoCart(this)"> Add To Cart
				                            </button>
				                           
				                        </div>
				                   </div>
				                    <div class="col-md-6 product_content">
				                        <h4>Product Id: <span>51526</span></h4>
				                        
				                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
				                        <div class="row">
				                          
				                            
				                            
				                        </div>
				                        
				                        
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<script >
		$(window).on("load",function(){
		      
		    getData();
		    $("#opencart").click(function(){
		    	if(true){

		    		$.get("checkSession.php",function(data){
		    			if(data=="login"){
		    				window.open("signup.html","_self");
		    			}else{
		    				$(this).attr("data-target","#cart");
		    			}
		    		});
		    			
		    	}
		    });
		});
		var id=0;
		
		
	
		 function getData() {
		 	$.get("laptops.php",function(data){
		 			var laptop=data;
		 			 var l=JSON.parse(laptop);

		 				LoadLaptopDetails(l);
		 				displaymodal(l);		
		 							

		 	});
		 	
		 
		 }


		 function displaymodal(l){
		 	var product=$(".product_view");
		 	var title=product.find(".modal-title");
		 	console.log(title);
		 	for(var i=0;i<l.length;i++){
		 			title[i].innerHTML=l[i].model;
		 	}
		 }

		 function LoadLaptopDetails(l){
		 	var item=$(".card.col-md-4").length;
		 	var data=$(".card.col-md-4");
		 	console.log(item);
		 	var t=data.find(".card-title")
		 	var p=$(".product_content p");
		 	for(var j=0;j<t.length;j++){
		 		t[j].innerHTML=l[j].model;
		 		p[j].innerHTML=l[j].description;
		 		
		 		
		 	}
		 }
		
		 function addtoCart(pid){
		 	
		 	var id=$(pid).attr("id");
		 	$.post("cartlaptops.php",{
		 		id:id
		 	},function(data){
		 		updateCart(data);
		 	});

		 }
		 var total=0;
		 //cart();
		 var cart;
		 function updateCart(data){
		 	cart=data;
		 	var data=JSON.parse(data);

		 	var id =data[0].id;
		 	var price =data[0].price;
		var p=parseInt(price);
		 	var model =data[0].model;
		// 	console.log(total);
			total+=p;
			$("#cart modal-body").text(total);
		 	row="<tr><td>"+id+"</td><td>"+model+"</td><td>"+price+"</td><td>1</td></tr>";
		 	$("#cart table tbody").append(row);
		 	console.log(row);
		 }
			
		
	</script>
</body>
</html>