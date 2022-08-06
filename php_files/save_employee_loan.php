<?php

/**
 * @author pakisab
 * @copyright 2015
 */

$loan_id=mysqli_real_escape_string($CON, $_POST['loan_id']);
$employee_id=mysqli_real_escape_string($CON, $_POST['employee_id']);
$txtLoanAmount=mysqli_real_escape_string($CON, $_POST['txtLoanAmount']);

if(empty($loan_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($employee_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($txtLoanAmount)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from employee_loan WHERE employee_id='$employee_id'") or exit(mysqli_error());
echo var_dump($duplicate);

$num_rows=mysqli_num_rows($duplicate);

if($num_rows<=0){

$sql="INSERT INTO `employee_loan`(`loan_id`, `employee_id`, `loan_amount`) 
    VALUES ('$loan_id', '$employee_id','$txtLoanAmount')";
    
$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}
header('Location:index.php?page=employee_loan');
?>