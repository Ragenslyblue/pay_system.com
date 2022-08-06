<?php

$txtSearch=mysqli_real_escape_string($CON, $_POST['txtSearch']);
$btnAction=mysqli_real_escape_string($CON, $_POST['btnAction']);

$hourdiff=-8;
$site=date('l,  F d,  Y g:i a', time()+($hourdiff * 3600));
$d=date('m/d/Y',time()+($hourdiff * 3600)); 
if($btnAction == "TIME IN") $action="in"; 
//echo "<br>";
else $action = "out";
echo $action;

$hourdiff=-8;
$site=date('l,  F d,  Y g:i a', time()+($hourdiff * 3600));
echo $site;

$sql="INSERT INTO `attendance`(`employee_id`, `date_value`, `status`) 
    VALUES ('$txtSearch', '$d', '$action')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

//}
//if(!$qry){
//    die('Error:' . mysqli_error($qry));
//}
//mysqli_close($CON);
//header('Location:' . $BASE_URL . 'index.php?page=attendance');
?>