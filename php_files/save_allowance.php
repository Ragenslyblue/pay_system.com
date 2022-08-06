<?php

//$txtAllownacesID=mysqli_real_escape_string($CON, $_POST['txtAllownacesID']);
$txtAllowance=mysqli_real_escape_string($CON, $_POST['txtAllowance']);

if(empty($txtAllowance)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from allowances WHERE allowance_name='$txtAllowance'") or exit(mysqli_error());

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO `allowances`(`allowance_name`) 
    VALUES ('$txtAllowance')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}
header('Location:index.php?page=allowance');


?>