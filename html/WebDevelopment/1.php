<!DOCTYPE html>
<html lang="en">
<head>
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
	<style>
		.card{
			padding: 1%;

		}
		.btn{
			text-align: center;
		}
		.footer{
			width: 100%;
			padding: 3%;
			
		}
		.footer a{
			color: white;
		}
	.carousel-inner,.carousel,.item,.container,.fill {
	  height:100%;
	  width:100%;
	  background-position:center center;
	}
	</style>
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
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="modal" id="opencart" data-target="">Cart</a>
	      </li>
	     
	      
	     <li class="nav-item">
	     	<a href="acer.php" class="nav-link">Acer</a>
	     </li>

	     <li class="nav-item">
	     	<h5>Welcome<?php
	     		error_reporting(E_ALL); ini_set('display_errors', 'On'); 

				session_start();
				if(empty($_SESSION["userid"])){
				header("Location:index.php");

			}else{
	
				echo $_SESSION["userid"];
	     		
			}
			?>  <input type="button" name="login" id="logout" class="btn btn-outline-success" value="Logout"></h5>

	     </li>
	    
	    </ul>

	  </div>
	</nav>

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
		                       	<h3 class="cost">Product: </h3>
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
		                        <h3 class="cost">Price: </h3>
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
		                        <h3 class="cost">Price: </h3>
		                        <div class="row">
		                          
		                            
		                            
		                        </div>
		                        
		                        
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class= "row">
		    <!-- Modal -->
		    <div class= "modal fade " id= "cart">
		        <div class= "modal-dialog">
		            <div class= "modal-content">
		                <div class= "modal-header"> <a href= "#" data-dismiss= "modal" class= "class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		                    <h3 class= "modal-title">Cart</h3></div>
		                <div class= "modal-body">
		                    <table class= "table">
		                        <thead>
		                            <tr>
		                                <th>#</th>
		                                <th>Model</th>
		                                <th>Price</th>
		                                <th>Quatity</th> </tr> </thead>
		                        <tbody> 
		                         </tbody> 
		                     </table> 
		                    </div>
		                <h2 id="t">Total:</h2>
		                <div class= "modal-footer">  <button type= "button" class= "btn btn-secondary" data-dismiss= "modal">Close</button> <button type= "button" class= "btn btn-primary">Proceed to Pay</button> </div> </div> </div> </div>
				
		
		</div>
	</div>

	




		

	<div class="footer" style="background-color:#3F729B;color: white;">
		<div >
			<div class="row">
			        <div class="col-md-8">
			            <div class="well well-sm">
			                <form>
			                <div class="row">
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label for="name">
			                                Name</label>
			                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
			                        </div>
			                        <div class="form-group">
			                            <label for="email">
			                                Email Address</label>
			                            <div class="input-group">
			                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
			                                </span>
			                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
			                        </div>
			                        <div class="form-group">
			                            <label for="subject">
			                                Subject</label>
			                            <select id="subject" name="subject" class="form-control" required="required">
			                                <option value="na" selected="">Choose One:</option>
			                                <option value="service">General Customer Service</option>
			                                <option value="suggestions">Suggestions</option>
			                                <option value="product">Laptop Support</option>
			                            </select>
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label for="name">
			                                Message</label>
			                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
			                                placeholder="Message"></textarea>
			                        </div>
			                    </div>
			                    <div class="col-md-12">
			                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
			                            Send Message</button>
			                    </div>
			                </div>
			                </form>
			            </div>
			        </div>
			        <div class="col-md-4">
			            <form>
			            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
			            <address>
			                <strong>LaptopRZ, Inc.</strong><br>
			                795 Folsom Ave, Suite 600<br>
			                San Francisco, CA 94107<br>
			                <abbr title="Phone">
			                    P:</abbr>
			                (123) 456-7890
			            </address>
			            <address>
			                <strong>Full Name</strong><br>
			                <a href="https://www.laptopmag.com/t/laptops">https://www.laptopmag.com/t/laptops</a>
			            </address>
			            </form>
			        </div>
			    </div>
		</div>
	</div>
	

	
		<script>
			$("#signup").click(function(){
				window.open("signup.html","_self");
			});
		</script>

			<script>
			    $(window).on("load", function() {
			        getData();
			        $("#opencart").click(function() {
			            if (true) {
			            	 $(this).attr("data-target", "#cart");
			               /* $.get("checkSession.php", function(data) {
			                	
			                    if (data == "login") {
			                        //window.open("signup.html", "_self");
			                        console.log(data);
			                    } else {
			                        $(this).attr("data-target", "#cart");
			                    }
			                });*/
			            }
			        });
			    });
			    var id = 0;

			    $("#logout").click(function(){
			    	$.get("Logout.php",function(data){
			    		window.open("index.php","_self");
			    	});
			    });

			    function getData() {
			        $.get("laptops.php", function(data) {
			            var laptop = data;
			            var l = JSON.parse(laptop);
			            LoadLaptopDetails(l);
			            displaymodal(l);
			        });
			    }

			    function displaymodal(l) {
			      
			        var title = $(".product_view .modal-title");
			        var cost= $(".product_content .cost");
			        console.log("cooost"+cost);

			        console.log(title);
			        for (var i = 0; i < l.length; i++) {
			            title[i].innerHTML = l[i].model;
			            cost[i].innerHTML=l[i].price
			        }
			    }

			    function LoadLaptopDetails(l) {
			        var item = $(".card.col-md-4").length;
			        
			        console.log(item);
			        var t = $(".card-title");
			        var p = $(".product_content p");
			        for (var j = 0; j < t.length; j++) {
			            t[j].innerHTML = l[j].model;
			            p[j].innerHTML = l[j].description;
			        }
			    }

			    function addtoCart(pid) {
			        var id = $(pid).attr("id");
			        $.post("cartlaptops.php", {
			            id: id
			        }, function(data) {
			            updateCart(data);
			        });
			    }
			       var total = 0;
		    

		    function updateCart(data) {
		        cart = data;
		        var data = JSON.parse(data);
		        var id = data[0].id;
		        var price = data[0].price;
		        var p = parseInt(price);
		        var model = data[0].model;
		        console.log(total);
		        total += p;
		        $(".modal-content h2").text("Total:"+total);
		        row = "<tr><td>" + id + "</td><td>" + model + "</td><td>" + price + "</td><td>1</td></tr>";
		        $("#cart table tbody").append(row);
		        console.log(row);
		    }
			</script>
	
</body>
</html>