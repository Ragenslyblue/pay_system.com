<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');

$txtUserName=$_POST['txtUserName'];
$txtPassword=$_POST['txtPassword'];

$qry=mysqli_num_rows(mysqli_query($CON, "Select * from sign_up Where username='$txtUserName'"));

if($qry==1){
    //$error='<br>Your username you have chosen have been already exists...</br>';
    echo '<br>Your username you have chosen have been already exists...</br>';
    //echo $error;
}else{
    mysqli_query($CON, "INSERT INTO sign_up(username, password)Values('$txtUserName', '$txtPassword')");
    echo '<p>Congratulations you have successfully register!!!</p>';
}

//header('Location:' . $BASE_URL . 'index.php?page=login');
if(isset($_POST['btnClick'])){
    header('Location:' . $BASE_URL . 'index.php?page=login');
}
?>
<!--<div class="divRow">
<div class="divColumn"><a href="<?php //echo $BASE_URL;?>index.php?page=login">Click</a> to login...</div>
</div>-->
<form action="" method="post" enctype="multipart/form-data">
<div class="divRow">
<div class="divColumn"><input type="submit" name="btnClick" value="Click to login" /></div>
</div>
</form>