<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#Email,#Number{
			display: none;
		}
	</style>
</head>
<body>
</body>
<?php
session_start();

?>
	<h2>Select the the value your want to Update </h2>
	<form action="UpdateInfo.php" method="POST">
		
				<select name="val" id="field" onchange="getDropdownValue(this)">
		  <option value="email">Email</option>
		  <option value="number">Number</option>
		  
		</select>
		<div id="Email">

			<h2>Email:</h2><input type="email" name="email">
		</div>
		<div id="Number">
			<h2>Number</h2><input type="number" name="number">
		</div>
 <input type="submit"  name="submit" value="Submit">
	</form>
	<script type="text/javascript">
		 var selectedValue="";
		function getDropdownValue(field) {
			// body...
			  selectedValue = field.value;
			switch (selectedValue) {
				case 'email':
				
					document.getElementById("Email").style.display="initial";
					document.getElementById("Number").style.display="none";
				
					break;
				case 'number':
				document.getElementById("Number").style.display="initial";
				document.getElementById("Email").style.display="none";
					break;
				
				default:
					
					break;
					
			}
		}


	</script>
</body>
</html>