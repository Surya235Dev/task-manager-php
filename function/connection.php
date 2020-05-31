<?php

// $connection = mysqli_connect('localhost','root','surya123','newapp');
$connection = mysqli_connect('sg2plcpnl0167','surya','surya123','newapp');
     
if(!$connection){
    die("Error ".mysqli_error($connection));
}


?>