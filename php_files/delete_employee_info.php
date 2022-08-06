<?php

/**
 * @author pakisab
 * @copyright 2016
 */
ob_start();
include('../config.php');

if(isset($_GET['id'])!=""){
    $delete=$_GET['id'];
    $qry=mysqli_query($CON, "Delete from employee_info where employee_id='$delete'");
    
    if($qry){
        header('Location:'.$BASE_URL.'index.php?page=employee_info');
    }else{
        mysqli_error();
    }
}
ob_end_flush();
?>