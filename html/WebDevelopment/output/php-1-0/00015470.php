<?php\n$servername = \"localhost\";\n$username = \"root\";\n$password = \"root\";\n$dbname = \"mydb\";\n$uid= $_POST['username'];\n$password=$_POST['password'];\n\n// Create connection\n$conn = new mysqli($servername, $username, $password, $dbname);\t\n\n// Check connection\nif ($conn->