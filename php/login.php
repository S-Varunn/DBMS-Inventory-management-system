<?php
include "db_connection.php";
session_start();
if(isset($_POST['uname']) && isset($_POST['password'])){
 function validate($data){
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   return $data;
 }
$uname=validate($_POST['uname']);
$pass=validate($_POST['password']);
if(empty($uname)){
  header("Location:loginindex.php?error=User Name is required");
  exit();
}else if(empty($pass)){
  header("Location:loginindex.php?error=Password is required");
  exit();
}else{
  $sql="SELECT * FROM signin WHERE userid='$uname' AND password='$pass'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) === 1){
        $row=mysqli_fetch_assoc($result);
        if($row['userid']===$uname && $row['password']===$pass){
          $_SESSION['userid']=$row['userid'];
          $_SESSION['username']=$row['username'];
          $_SESSION['userno']=$row['userno'];
          header("Location:../../project/index.html");
          exit();
        }
  }else{
    header("Location:loginindex.php?error = Incorrect UserName");
    exit();
  }
}
}
else{
  header("Location:loginindex.php");
  exit();
}

?>

