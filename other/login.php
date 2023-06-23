<?php
session_start();
$_SESSION['login_status']=false;
    $server="localhost";
    $username="root";
    $password="";
    $db="ecommerce";
    
    $con=mysqli_connect($server, $username,$password,$db);
    if (!$con) {
        die("connection to this data failed due to" .mysqli_connect_error());
    }
     

    $username =$_POST['username'];
    $password =$_POST['password'];
   
    

    $sql="INSERT INTO ecommerce1( username,password) VALUES( '$username','$password') ";

    $result=mysqli_query($con,$sql);
    if($username=='acme' && $passpass=='intern')
{
  echo "<h2> welcome home </h2>";
  header("location:home.php");
  $_SESSION['login_status']=true;
}
if($result){
header("location:costomer.php");
$_SESSION['login_status']=true;
}
else{
echo "registration failed";
echo mysqli_error($con) ;
}

?>
