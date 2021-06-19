<?php
$Product_name = $_POST["Product_name"];
$Quantity = $_POST["Quantity"];
$Price = $_POST["Price"];
$Type= $_POST["Type"];
$serialno= $_POST["serialno"];
$avail= $_POST["availability"];
$expdate= $_POST["expdate"];
$user = 'root';
$password = '1234'; 
$database = 'inventory management system'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
if ($mysqli->connect_error){
	die("Connection failed: ". $mysqli->connect_error);
}

$sql = "update product_table set Product_name='$Product_name', Quantity='$Quantity', Price='$Price', Type='$Type',serialno='$serialno',availability='$avail',expdate='$expdate' where serialno='$serialno' ";

if ($mysqli->query($sql) === TRUE) {
	echo "Records updated: ".$Product_name."-".$Quantity."-".$Price."-".$Type."-".$serialno."-".$avail."-".$expdate;
    echo
    "<html>
    <body>
    <button id='myBtn'>Go back</button>
  <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = '../../project/index.html';
    });
  </script>
  </body>
  </html>"
;} else {
	echo "Error: ".$sql."<br>".$mysqli->error;
}

$mysqli->close();

?>