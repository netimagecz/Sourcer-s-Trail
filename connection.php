<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cpf_games.sql";
 $conn = new mysqli($servername, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
 
 if($conn)
 {
 	echo "";

 }
 else{
 	echo "connection failed";
 }
 ?>