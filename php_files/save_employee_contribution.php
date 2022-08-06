<?php

$employee_id=mysqli_real_escape_string($CON, $_POST['employee_id']);
$contribution_id=mysqli_real_escape_string($CON, $_POST['contribution_id']);
$txtEmployeeContribution=mysqli_real_escape_string($CON, $_POST['txtEmployeeContribution']);
$month=mysqli_real_escape_string($CON, $_POST['month']);
//$txtEmployerContribution=mysqli_real_escape_string($CON, $_POST['txtEmployerContribution']);

if(empty($employee_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($contribution_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($txtEmployeeContribution)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($month)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from employee_contribution WHERE employee_id='$employee_id' AND employee_contribution='$txtEmployeeContribution'") or exit(mysqli_error());
echo var_dump($duplicate);

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){    

$sql="INSERT INTO `employee_contribution`(`employee_id`, `contribution_id`,`employee_contribution`, month) 
    VALUES ('$employee_id', '$contribution_id', '$txtEmployeeContribution', '$month')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}

//if(!$qry){
//    die('Error:' . mysqli_query($qry));
//}
//mysqli_close($CON);
header('Location:index.php?page=employee_contribution');
?>