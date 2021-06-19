<?php
		include 'db_connection.php';
        $conn = mysqli_connect("localhost", "root", "1234", "inventory management system");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        $productname = $_REQUEST['productname'];
        $quantity =  $_REQUEST['quantity'];
        $price=$_REQUEST['price'];
        $type=$_REQUEST['type'];
        $avail=$_REQUEST['avail'];
        $expdate=$_REQUEST['expdate'];
        $serialno=$_REQUEST['serialno'];
        $sql = "INSERT INTO product_table(Product_name,Quantity,Price,Type,serialno,expdate,availability)  VALUES ( 
            '$productname','$quantity','$price','$type','$serialno','$expdate','$avail')";
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully.<h3>"; 
      
                echo nl2br("$productname\n$quantity\n$price\n$type\n$serialno\n$expdate\n$avail");
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
              </html>";
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
