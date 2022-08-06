<?php
//include('../config.php');

//$txtContributionID=mysqli_real_escape_string($CON, $_POST['txtContributionID']);
$txtContributionName=mysqli_real_escape_string($CON, $_POST['txtContributionName']);

if(empty($txtContributionName)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from contribution WHERE contribution_name='$txtContributionName'") or exit(mysqli_error());

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO `contribution`(`contribution_name`) 
    VALUES ('$txtContributionName')";
    
$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}

//if(!$qry){
//    die('Error:' . mysqli_error($qry));
//}
//mysqli_close($CON);
header('Location:index.php?page=contribution');
?>