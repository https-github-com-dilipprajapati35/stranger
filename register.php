<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="ecommerce";
    $con=mysqli_connect($server, $username,$password,$db);
    if (!$con) {
        die("connection to this data failed due to" .mysqli_connect_error());
    }
    // echo "success connecting to database";
    $username =$_POST['username'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];
    $register_as =$_POST['register_as'];
    

    $sql="INSERT INTO ecommerce1( 'username', 'email', 'mobile', 'password', 'register_as') VALUES( '$username', '$email', '$mobile', '$password', '$register_as') ";

    $result=mysqli_query($con,$sql);
if($result){
header("location:login.html");
}
else{
echo "registration failed";
echo mysqli_error($con) ;
}

?>
