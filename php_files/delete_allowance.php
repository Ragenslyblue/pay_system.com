<?php

$tbl='allowances';
$allowance_id=$_POST['allowance_id'];

$sql="DELETE FROM $tbl WHERE allowance_id='$allowance_id'";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}
mysqli_close($CON);
header('Location:' . $BASE_URL . 'index.php?page=allowance');
?>