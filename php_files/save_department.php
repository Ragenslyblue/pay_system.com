<?php

//$txtDepartmentID=mysqli_real_escape_string($CON, $_POST['txtDepartmentID']);
$txtDepartmentName=mysqli_real_escape_string($CON, $_POST['txtDepartmentName']);
//$department_id=$_POST['department_id'];
if(empty($txtDepartmentName)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from department WHERE department_name='$txtDepartmentName'") or exit(mysqli_error());

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO `department`(`department_name`) 
    VALUES ('$txtDepartmentName')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}
header('Location:index.php?page=department');

?>