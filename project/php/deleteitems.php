<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE ITEMS</title>
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
        #btn{
            font-size:10px;
            background-color:#f0f0f0;
            padding:10px 24px;
            border-radius: 12px;
            transition-duration: 0.4s;
            display:block;
            margin:auto;
            text-decoration: none;
        }
        #btn:hover {
        background-color:#6ddcfd;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        color: black;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Type</th>
        <th>Serial Number</th>
        <th>Availability</th>
        <th>Expiry Date</th>
    </tr>
    <?php 
    session_start();
    $value = $_SESSION['varname'];
     $con=mysqli_connect('localhost','root','1234');
     mysqli_select_db($con,'inventory management system');
     $sql="SELECT row_number() over(order by SNo)as ID,Product_name,Quantity,Price,Type,serialno,expdate,availability FROM product_table WHERE Type='{$value}'";
     $records=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($records))
     {
         echo "<tr>";
         echo "<td>".$row['ID']."</td>";
         echo "<td>".$row['Product_name']."</td>";
         echo "<td>".$row['Quantity']."</td>";
         echo "<td>".$row['Price']."</td>";
         echo "<td>".$row['Type']."</td>";
         echo "<td>".$row['serialno']."</td>";
         echo "<td>".$row['availability']."</td>";
         echo "<td>".$row['expdate']."</td>";
         echo "<td><a href=delete.php?id=".$row['serialno'].">Delete</a></td>";
        
     }
     ?>
</table>
<br><br>
<a href="../../../project/index.html" style="text-decoration:none;">  
    <button id="btn">Go Back</button>  
  </a>
</body>
</html>