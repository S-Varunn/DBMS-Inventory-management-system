<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "inventory management system";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "inventory management system";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
 if(!$conn){
     echo "Connection failed";
 } 
?>