<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<button onclick="getJson()">Get Info</button>
	<script>
		var xhttp = new XMLHttpRequest();
		   xhttp.onreadystatechange = function() {
		       if (this.readyState == 4 && this.status == 200) {
		       var response=this.responseText;
		       var z=JSON.parse(response); 
			      console.log(z[1].name);
			      console.log(z[1].age);
		      
		       }
		   };
		   xhttp.open("GET", "data.json", true);
		   xhttp.send(); 
		function getJson(){
			/*var xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if(xhttp.readyState==4&& xhttp.status==200){
					var detail=JSON.parse(this.responseText);
					console.log(detail);
				}
			};
			xhttp.open("GET","data.json",true);
			xhttp.send();*/

			

		}
	</script>
</body>

</html>