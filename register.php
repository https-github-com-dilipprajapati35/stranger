<?php
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server, $username,$password);
    if (!$con) {
        die("connection to this data failed due to" .mysqli_connect_error());
    }
    // echo "success connecting to database";
    $username =$_POST['username'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];
    $register_as =$_POST['register_as'];
    

    $sql="INSERT INTO`ecommerce1`( `user name`, `emai`, `mobile`, `password`, `register as`, `date`) VALUES( '$username', '$email', '$mobile', '$password', '$register_as', current_timestamp()); 
    ";
    echo "$sql";


?>