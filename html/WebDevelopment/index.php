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
			
	<div class="cara">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <img class="d-block img-fluid fill" src="images/laptop.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid  fill" src="images/Laptop.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block img-fluid fill" src="images/laptopp.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
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
	
</body>
</html>