<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');
session_start();
if(!isset($_SESSION['login_user'])  ) {
    
    $_SESSION['login_user'] = "GUEST";
}else{
$user_check=$_SESSION['login_user'];

$sql=mysqli_query($CON, "Select username from sign_up Where username='$user_check'");

$row=mysqli_fetch_array($sql);

$loggin_session=$row['username'];

if(!isset($loggin_session)){
    header('Location:' . $BASE_URL . 'index.php?page=login');
    }
}
?>