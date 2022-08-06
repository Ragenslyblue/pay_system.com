<?php

include('config.php');

include('php_files/header.php');

if(isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page='login';
}
include("php_files/" . $page . ".php");

include('php_files/footer.php');


?>