<?php

/**
 * @author pakisab
 * @copyright 2015
 */

$tbl='employee_info';
$employee_id=$_POST['employee_id'];

$sql="DELETE FROM $tbl WHERE employee_id='$employee_id'";

$qry=mysqli_query($CON, $sql);

mysqli_close($CON);
header('Location:' . $BASE_URL . 'index.php?page=employees');

?>