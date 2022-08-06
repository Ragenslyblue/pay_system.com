<?php

global $BASE_URL;
global $CON;
$BASE_URL="http://localhost/pay_system.com/";

$host='localhost';
$user='root';
$pass='';
$database='database_payroll';

//connect to mysql_server
$CON=mysqli_connect($host, $user, $pass, $database);

//check connection
if(!$CON){
    echo 'Failed to connect to mysql' . mysqli_connect_error();
}


?>