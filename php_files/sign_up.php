<?php
include('./config.php');
if(isset($_POST['btnBack'])){
    header('Location:' . $BASE_URL . 'index.php?page=login');
}
?>
<div class="divTable">
<div class="divRow">
<div class="divColumn50"><title>Sign Up</title></div>
</div>

<fieldset id="fieldset2" style="width: 50%"><legend><h1>Registration Form</h1></legend>
<!--<table border="0">-->

<form method="post" action="<?php echo $BASE_URL;?>index.php?page=register">

<!--
<div class="divRow">
<div class="divColumn">Name:</div>
<div class="divColumn50"><input type="text" name="txtName" value="" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Username:</div>
<div class="divColumn50"><input type="text" name="txtUserName" value="" /></div>
</div>

<!--
<div class="divRow">
<div class="divColumn">Username:</div>
<div class="divColumn50"><input type="text" name="txtUserName" value="" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Password:</div>
<div class="divColumn50"><input type="password" name="txtPassword" value="" maxlength="10" /></div>
</div>

<!--
<div class="divRow">
<div class="divColumn">Confirm Password:</div>
<div class="divColumn50"><input type="text" name="txtConfirmPassword" value="" /></div>
</div>
-->

<div class="divRow">
<div class="divColumn"><input type="checkbox" name="chkKeepLoggingIn" id="chkKeepLoggingIn" value="chkKeepLoggingIn" /></div>
<div class="divColumn50">Keep Me Logging In...</div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="register_sign_up" name="submit" value="Register" /></div>
</div>

</form>

<form action="" method="post" enctype="multipart/form-data">

<div class="divColumn">
<div class="divColumn50"><input type="submit" id="register2" name="btnBack" value="Back" id="btnBack" /></div>
</div>

</form>

</fieldset>

</div>