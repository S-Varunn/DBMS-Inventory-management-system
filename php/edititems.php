<?php
$serialno=$_POST["serialno"];

$user = 'root';
$password = '1234'; 
$database = 'inventory management system'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);

if($mysqli->connect_error){
	die("Connection failed ".$mysqli->connect_error);
}

$sql = "select * from product_table where serialno='$serialno'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();
$SNo = $row["SNo"];
$Product_name = $row["Product_name"];
$Quantity = $row["Quantity"];
$Price = $row["Price"];
$Type= $row["Type"];
$serialno= $row["serialno"];
$avail= $row["availability"];
$expdate= $row["expdate"];

echo

"<html>
<head>
<style type='text/css'>
body {
	background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2044837-jpeg.jpg') center center no-repeat;
	background-size: cover;
  }
.ads{
	font: 95% Arial, Helvetica, sans-serif;
	max-width: 400px;
	margin: 10px auto;
	padding: 16px;
	background: #f7f7f7;
}
.ads h1{
	background: #83ecfc;
	padding: 20px 0;
	font-size: 140%;
	font-weight: 300;
	text-align: center;
	color: #fff;
	margin: -16px -16px 16px -16px;
}
.ads input[type='text'],
.ads input[type='date'],
.ads input[type='datetime'],
.ads input[type='email'],
.ads input[type='number'],
.ads input[type='search'],
.ads input[type='time'],
.ads input[type='url'],
.ads textarea,
.ads select 
{
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	background: #fff;
	margin-bottom: 4%;
	border: 1px solid #ccc;
	padding: 3%;
	color: #555;
	font: 95% Arial, Helvetica, sans-serif;
}
.ads input[type='text']:focus,
.ads input[type='date']:focus,
.ads input[type='datetime']:focus,
.ads input[type='email']:focus,
.ads input[type='number']:focus,
.ads input[type='search']:focus,
.ads input[type='time']:focus,
.ads input[type='url']:focus,
.ads textarea:focus,
.ads select:focus
{
	box-shadow: 0 0 5px #74dff7;
	padding: 3%;
	border: 1px solid #74dff7;
}

.ads input[type='submit'],
.ads input[type='button']{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 3%;
	background: #83ecfc;
	border-bottom: 2px solid #74dff7;
	border-top-style: none;
	border-right-style: none;
	border-left-style: none;	
	color: #fff;
}
.ads input[type='submit']:hover,
.ads input[type='button']:hover{
	background: #2EBC99;
}
</style>
</head>
<body>
<div class='ads'>
<h1>EDIT ITEMS</h1>
<form action='edititemspost.php' method='post'>
<input type='hidden' name='serialno' value='$serialno'>
Product Name: <input type='text' name='Product_name' value='$Product_name'><br>
Quantity: <input type='text' name='Quantity' value='$Quantity'><br>
Price: <input type='text' name='Price' value='$Price'><br>
Type: <input type='text' name='Type' value='$Type'><br>
Availability: <input type='text' name='availability' value='$avail'><br>
Expiry Date: <input type='text' name='expdate' value='$expdate'><br>
<input type ='submit' value='Edit'>
</form>
</div>
</form>

</body>
</html>";

} else {
	echo "Not Found";
}
$mysqli->close();

?>