<?php


$txtLoanName=mysqli_real_escape_string($CON, $_POST['txtLoanName']);

if(empty($txtLoanName)){
    die("<p class='error'>Please enter the fields...</p>");
}
//header('Location:' . $BASE_URL . 'index.php?page=loan');

$duplicate=mysqli_query($CON, "Select * from loan WHERE loan_name='$txtLoanName'") or exit(mysqli_error());

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO `loan`(`loan_name`) 
    VALUES ('$txtLoanName')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}

//if(mysqli_num_rows($qry)>0){
header('Location:index.php?page=loan');
?>