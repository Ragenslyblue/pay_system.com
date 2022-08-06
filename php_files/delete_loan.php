<?php

/**
 * @author pakisab
 * @copyright 2015
 */

$tbl='loan';
$loan_id=$_POST['loan_id'];

$sql="DELETE FROM $tbl WHERE loan_id='$loan_id'";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}
mysqli_close($CON);
header('Location:index.php?page=loan');
?>