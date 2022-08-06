<?php

/**
 * @author pakisab
 * @copyright 2015
 */

$tbl='department';
$dept_id=$_POST['department_id'];

$sql="DELETE FROM $tbl where department_id='$dept_id'";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_query($qry));
}
mysqli_close($CON);
header('Location:' . $BASE_URL . 'index.php?page=department');

?>