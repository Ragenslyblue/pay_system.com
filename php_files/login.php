<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');

session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $txtUserName=addslashes($_POST['txtUserName']);
    $txtPassword=addslashes($_POST['txtPassword']);    
//}
$sql="Select sign_up_id From sign_up Where username='$txtUserName' and password='$txtPassword'";
$qry=mysqli_query($CON, $sql);
$row=mysqli_fetch_array($qry);
//$active=$row['username'];
$result=mysqli_num_rows($qry);

if($result==1){
    //session_register();
    $_SESSION['login_user']=$txtUserName;
    header('Location:index.php?page=home');
}else{
    $error='<br><p class="error">***Your username and password is Invalid try to register now!!!***</p></br>';
    echo $error;
    }
}

if(isset($_POST['btnSubmit'])){
    header('Location:index.php?page=sign_up');
}
?>
<div class="divTable" id="divTable">
<div class="divRow">
<div class="divColumn50"></div>
</div>

<fieldset id="fieldset1" style="width: 50%"><legend><h1>Login</h1></legend>

<form action="" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Username:</div>
<div class="divColumn50"><input type="text" name="txtUserName" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn">Password:</div>
<div class="divColumn50"><input type="password" name="txtPassword" value="" maxlength="10" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="login" name="submit" value="Login" /></div>
</div>

<div class="divColumn">
<div class="divColumn50"><input type="submit" id="register" name="btnSubmit" value="Register" /></div>
</div>

</form>

</fieldset>



<?php //include('lock.php'); ?>

</div>