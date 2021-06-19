<?php
session_start();
$value = $_SESSION['varname'];
$user = 'root';
$password = '1234'; 
$database = 'inventory management system'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
$sql = "SELECT row_number() over(order by SNo)as ID,Product_name,Quantity,Price,Type,serialno,expdate,availability FROM product_table WHERE Type='{$value}'";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>View Items</title>
    <style>
        body{
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2044837-jpeg.jpg");
            background-size:cover;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 2px;
            border-radius: 5px;
        }
  
        h1 {
            text-align: center;
            color: #0095ff;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color:#6ddcfd;
            border: 2px;
            border-radius: 5px;
        }
  
        th,
        td {
            border: 2px;
            border-radius: 5px;
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
  
        td {border: 2px;
            border-radius: 5px;
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>PRODUCTS</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Serial Number</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Expiry Date</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['serialno'];?></td>
                <td><?php echo $rows['Product_name'];?></td>
                <td><?php echo $rows['Quantity'];?></td>
                <td><?php echo $rows['Price'];?></td>
                <td><?php echo $rows['availability'];?></td>
                <td><?php echo $rows['expdate'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>