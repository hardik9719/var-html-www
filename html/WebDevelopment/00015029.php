<html lang= "en">

<head>n
    <meta charset= "UTF-8">
    <title>Document</title>n
    <meta name= "viewport" content= "width=device-width, initial-scale=1">n
    <meta http-equiv= "Content-Type" content= "text/html; charset=utf-8" />n
    <title>Laptop Review- Get All the Latest Information,Reviews about Laptops</title>nnn
    <meta name= "keywords" content= "Laptop, Acer, Asus,Price, Lenovo, Features, Ram ,Hard disk">n n
    <meta name= "description" content= "Get unbiased laptop reviews from the experts at Laptop Mag. Find the best 2017 laptops in our laptop buying guide and configurator.">n
    <meta name= "author" content= "Laptop Designers">nnnn
    <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">n
    <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">n
    <script src= "js/jquery-3.2.1.min.js"></script>n
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>n
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>n</head>n

<body>n
    <nav class= "navbar navbar-toggleable-md navbar-light bg-faded">n <button class= "navbar-toggler navbar-toggler-right" type= "button" data-toggle= "collapse" data-target= "#navbarSupportedContent" aria-controls= "navbarSupportedContent" aria-expanded= "false" aria-label= "Toggle navigation">n    <span class="navbar-toggler-icon"></span>n  </button>n <a class= "navbar-brand" href= "#">LaptopReviews</a>nn
        <div class= "collapse navbar-collapse" id= "navbarSupportedContent">n
            <ul class= "navbar-nav mr-auto">n
                <li class= "nav-item active">n <a class= "nav-link" href= "index.php">Home</a>n </li>n
                <li class= "nav-item">n <a class= "nav-link" href= "#" data-toggle= "modal" id= "opencart" data-target= "">Cart</a>n </li>n n n
                <li class= "nav-item">n <a href= "acer.php" class= "nav-link">Acer</a>n </li>n n </ul>n
            <form class= "form-inline" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">n
                <div class= "input-group">n <span class= "input-group-addon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>n<input class= "form-control mr-sm-2" type= "text" name= "Username" placeholder= "Username">n</div>n
                <div class= "input-group">n <span class= "input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>n<input class= "form-control mr-sm-2" type= "password" name= "Password" placeholder= "Password">n</div>n n <input type= "submit" name= "login" class= "btn btn-outline-success" value= "Submit">n <button class= "btn btn-outline-success " id= "signup" type= "button">Signup</button>n
                <?phpnerror_reporting(E_ALL); ini_set('display_errors', 'On'); nrequire 'db_connect.php';nnn$errmsg="";n$upass="";nn$uname="";nif(isset($_POST["login"])){nif(empty($_POST["Username"])||empty($_POST["Password"])){n$errmsg="Username or Password cannot be empty";necho $errmsg;nn}nnelse{n$uname=$_POST["Username"];n$upass=$_POST["Password"];n$checkquery="select Username,Password from userdetails where  Username='$uname' AND Password='$upass';";n$loginresult=mysqli_query($connection,$checkquery);n$numrow=mysqli_num_rows($loginresult);nnif( $numrow==1){nsession_start();n$_SESSION["userid"] =$uname;nnheader("Location: 1.php");nn}else{necho "Login Failed";n}n}nnn}nn?>nnn </form>n </div>n</nav>n
    <div class= "container">n
        <div class= "row">n
            <!-- Modal -->n
            <div class= "modal fade " id= "cart">n
                <div class= "modal-dialog">n
                    <div class= "modal-content">n
                        <div class= "modal-header">n <a href= "#" data-dismiss= "modal" class= "class pull-right"><span class="glyphicon glyphicon-remove"></span></a>n
                            <h3 class= "modal-title">Cart</h3>n </div>n
                        <div class= "modal-body">n
                            <table class= "table">n
                                <thead>n
                                    <tr>n
                                        <th>#</th>n
                                        <th>Model</th>n
                                        <th>Price</th>n
                                        <th>Quantity</th>n </tr>n </thead>n
                                <tbody>n n </tbody>n </table>n </div>n
                        <h2>Total:</h2>n
                        <div class= "modal-footer">n n <button type= "button" class= "btn btn-secondary" data-dismiss= "modal">Close</button>n <button type= "button" class= "btn btn-primary">Proceed to Pay</button>n </div>n </div>n </div>n </div>n</div>nn
        <h1>Welcome to Laptop Reviews.com</h1>nn
        <div class= "container pt-3">n
            <div class= "row">nnn
                <div class= "card-deck">n
                    <div class= "card col-md-4">n<img class= "card-image-top  img-responsive " src= "images/acer1.jpg" width= "100%" alt= "Laptop1">nn
                        <div class= "card-block">n
                            <h3 class= "card-title"></h3>nn <button type= "button" class= "btn btn-primary" data-toggle= "modal" data-target= "#product1">Full Specs</button>n</div>n</div>nnnnn
                    <div class= "card col-md-4">n<img class= "card-image-top img-responsive" src= "images/acer2.jpg" width= "100%" alt= "Laptop">nn
                        <div class= "card-block">n
                            <h3 class= "card-title"></h3>nn<button type= "button" class= "btn btn-primary" data-toggle= "modal" data-target= "#product2">Full Specs</button>n</div>n</div>n
                    <div class= "card col-md-4">n<img class= "card-image-top img-responsive" src= "images/acer3.jpg" width= "100%" alt= "Laptop3">n
                        <div class= "card-block">n
                            <h3 class= "card-title"></h3>nn<button type= "button" class= "btn btn-primary" data-toggle= "modal" data-target= "#product3">Full Specs</button>n</div>n</div>n</div>nnn</div>nnnnnnn
            <!-- Modal -->n
            <div class= "modal fade product_view" id= "product1">n
                <div class= "modal-dialog">n
                    <div class= "modal-content">n
                        <div class= "modal-header">n <a href= "#" data-dismiss= "modal" class= "class pull-right"><span class="glyphicon glyphicon-remove"></span></a>n
                            <h3 class= "modal-title">s</h3>n </div>n
                        <div class= "modal-body">n
                            <div class= "row">n
                                <div class= "col-md-6 product_view">n <img class= "img-responsive w-100" src= "images/acer1.jpg" alt= "saassa">n n
                                    <!-- end col -->nn nn
                                    <div class= "btn">n <button type= "button" class= "btn btn-secondary m-1" data-dismiss= "modal">Closen                   </button>n <button type= "button" id= "1" class= "btn btn-primary m-1" onclick= "addtoCart(this)"> Add To Cartn                            </button>n n </div>n </div>n
                                <div class= "col-md-6 product_content">n
                                    <h4>Product Id: <span>51526</span></h4>n n
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>n
                                    <h3 class= "cost"><span class= "glyphicon glyphicon-usd"></span> 75.00 <small class= "pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>n
                                    <div class= "row">n n n n </div>n n n </div>n </div>n </div>n </div>n </div>n</div>nn
            <div class= "modal fade product_view" id= "product2">n
                <div class= "modal-dialog">n
                    <div class= "modal-content">n
                        <div class= "modal-header">n <a href= "#" data-dismiss= "modal" class= "class pull-right"><span class="glyphicon glyphicon-remove"></span></a>n
                            <h3 class= "modal-title">s</h3>n </div>n
                        <div class= "modal-body">n
                            <div class= "row">n
                                <div class= "col-md-6 product_view">n <img class= "img-responsive w-100" src= "images/acer1.jpg" alt= "saassa">n n
                                    <!-- end col -->nn nn
                                    <div class= "btn">n <button type= "button" class= "btn btn-secondary m-1" data-dismiss= "modal">Closen                   </button>n <button type= "button" id= "2" class= "btn btn-primary m-1" onclick= "addtoCart(this)"> Add To Cartn                            </button>n n </div>n </div>n
                                <div class= "col-md-6 product_content">n
                                    <h4>Product Id: <span>51526</span></h4>n n
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>n
                                    <h3 class= "cost"><span class= "glyphicon glyphicon-usd"></span> 75.00 <small class= "pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>n
                                    <div class= "row">n n n n </div>n n n </div>n </div>n </div>n </div>n </div>n</div>nn
            <div class= "modal fade product_view" id= "product3">n
                <div class= "modal-dialog">n
                    <div class= "modal-content">n
                        <div class= "modal-header">n <a href= "#" data-dismiss= "modal" class= "class pull-right"><span class="glyphicon glyphicon-remove"></span></a>n
                            <h3 class= "modal-title">s</h3>n </div>n
                        <div class= "modal-body">n
                            <div class= "row">n
                                <div class= "col-md-6 product_view">n <img class= "img-responsive w-100" src= "images/acer1.jpg" alt= "saassa">n n
                                    <!-- end col -->nn nn
                                    <div class= "btn">n <button type= "button" class= "btn btn-secondary m-1" data-dismiss= "modal">Closen                   </button>n <button type= "button" id= "3" class= "btn btn-primary m-1" onclick= "addtoCart(this)"> Add To Cartn                            </button>n n </div>n </div>n
                                <div class= "col-md-6 product_content">n
                                    <h4>Product Id: <span>51526</span></h4>n n
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>n
                                    <h3 class= "cost"><span class= "glyphicon glyphicon-usd"></span> 75.00 <small class= "pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>n
                                    <div class= "row">n n n n </div>n n n </div>n </div>n </div>n </div>n </div>n</div>n</div>n</div>n</div>n

	<script>
	    $(window).on("load", function() {
	        getData();
	        $("#opencart").click(function() {
	            if (true) {
	                $.get("checkSession.php", function(data) {
	                    if (data == "login") {
	                        window.open("signup.html", "_self");
	                    } else {
	                        $(this).attr("data-target", "#cart");
	                    }
	                });
	            }
	        });
	    });
	    var id = 0;

	    function getData() {
	        $.get("laptops.php", function(data) {
	            var laptop = data;
	            var l = JSON.parse(laptop);
	            LoadLaptopDetails(l);
	            displaymodal(l);
	        });
	    }

	    function displaymodal(l) {
	        var product = $(".product_view");
	        var title = product.find(".modal-title");
	        console.log(title);
	        for (var i = 0; i < l.length; i++) {
	            title[i].innerHTML = l[i].model;
	        }
	    }

	    function LoadLaptopDetails(l) {
	        var item = $(".card.col-md-4").length;
	        var data = $(".card.col-md-4");
	        console.log(item);
	        var t = data.find(".card-title") var p = $(".product_content p");
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
    cart();
    var cart;

    function updateCart(data) {
        cart = data;
        var data = JSON.parse(data);
        var id = data[0].id;
        var price = data[0].price;
        var p = parseInt(price);
        var model = data[0].model;
        console.log(total);
        total += p;
        $("#cart modal-body").text(total);
        row = "<tr><td>" + id + "</td><td>" + model + "</td><td>" + price + "</td><td>1</td></tr>";
        $("#cart table tbody").append(row);
        console.log(row);
    }
	</script></body></html>