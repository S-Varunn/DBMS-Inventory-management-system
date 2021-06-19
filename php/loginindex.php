<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../project/css/login.css"/>
    <title>Document</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <h2 class="active"> Sign In </h2>
          <?php
          if(isset($_GET['error'])) {?>
          <p class="error"><?php echo $_GET['error'];?></p>
          <?php }?>
          <div class="fadeIn first">
          </div>
          <form method=post action="login.php">
            <input type="text" id="login" class="fadeIn second" name="uname" placeholder="username">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" name="save" class="fadeIn fourth" value="Log In">
          </form>
          </div>
      
        </div>
      </div>
</body>
</html>