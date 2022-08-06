<?php

/**
 * @author pakisab
 * @copyright 2016
 */

$txtOvertime=mysqli_real_escape_string($CON, $_POST['txtOvertime']);
//$txtDateReceived=mysqli_real_escape_string($CON, $_POST['txtDateReceived']);

$sql="INSERT INTO `payroll_received`(`overtime`) 
    VALUES ('$txtOvertime')";
$qry=mysqli_query($CON, $sql) or die(mysqli_close());

//echo '<h1>Save!!!</h1>';

header('Location:index.php?page=time_recorder');

?>