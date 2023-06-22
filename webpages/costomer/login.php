<?php
if(!isset($_post['uemail']) || !isset($_post['upassword']));
{
    echo "bad request";
    die;
}
$uemail=$_post['uemail'];
$password=$_post['upassword'];
if($email=='acme' && $password=='intern')
{
  echo "<h2> welcome home </h2>";
  header("location:costomer.html");
}
else{
    echo "<h2> Invalid </h2>";
}

?>