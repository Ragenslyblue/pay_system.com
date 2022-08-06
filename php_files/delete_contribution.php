<?php

/**
 * @author pakisab
 * @copyright 2015
 */

$tbl='contribution';
$contribution_id=$_POST['contribution_id'];

$sql="DELETE from $tbl where contribution_id='$contribution_id'";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}
mysqli_close($CON);
header('Location:' . $BASE_URL . 'index.php?page=contribution');

?>