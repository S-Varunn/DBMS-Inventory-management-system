<?php
$con=mysqli_connect('localhost','root','1234');
     mysqli_select_db($con,'inventory management system');
     $sql="DELETE FROM product_table WHERE serialno='$_GET[id]'";
     if(mysqli_query($con,$sql))
        header("refresh:1;url=deleteitems.php");
     else 
        echo "Not Deleted";
?>