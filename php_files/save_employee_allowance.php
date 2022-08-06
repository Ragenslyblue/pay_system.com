<?php

$employee_id=mysqli_real_escape_string($CON, $_POST['employee_id']);
$allowance_id=mysqli_real_escape_string($CON, $_POST['allowance_id']);
$amount=mysqli_real_escape_string($CON, $_POST['txtAmount']);

if(empty($employee_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($allowance_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($amount)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from employee_allowance WHERE employee_id='$employee_id' OR allowance_id='$allowance_id' AND amount='$amount'") or exit(mysqli_error());
echo var_dump($duplicate);

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO `employee_allowance`(`employee_id`, `allowance_id`,`amount`) 
    VALUES ('$employee_id', '$allowance_id','$amount')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}
//if(!$qry){
//    die('Error:' . mysqli_error($qry));
//}
//mysqli_close($CON);
header('Location:index.php?page=employee_allowance');
?>