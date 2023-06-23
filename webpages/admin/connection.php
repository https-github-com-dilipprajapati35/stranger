connection.php
<?php

$conn=new mysqli("localhost","root","","acme23_apr");

if($conn->connect_error)
{
    echo "Connection Failed!, Aborting Execution";
    die;
}

?>
