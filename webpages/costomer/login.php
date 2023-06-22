<?php

session_start();

$_SESSION['login_status']=false;

if(!isset($_post['uname']) || !isset($_post['upass']));
{
    echo "bad request";
    die;
}
$uname=$_post['uname'];
$upass=$_post['upass'];
if($uname=='acme' && $upass=='intern')
{
  echo "<h2> welcome home </h2>";
  header("location:home.php");
  $_SESSION['login_status']=true;
}
else{
    echo "<h2> Invalid </h2>";
}

?>