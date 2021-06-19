<?php
$value=$_GET['type'];
session_start();
$_SESSION['varname'] = $value;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../project/css/navstyle.css"/>
    <title>NAVIGATION</title>
</head>
<body>
    <nav class="active" id="nav">
      <ul>
          <li><a href='viewitems.php'>View Items</a></li> 
          <li><a href="../../project/insertitems.html">Insert Items</a></li>
          <li><a href="get.php">Edit Items</a></li>
          <li><a href="deleteitems.php">Delete Items</a></li>
      </ul> 
      <button class="icon" id="toggle">
          <div class="line line1"></div>
          <div class="line line2"></div>
      </button>
    </nav>
    <script src="../../project/js/navjs.js"></script>
</body>
</html>