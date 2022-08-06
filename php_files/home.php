<?php

/**
 * @author pakisab
 * @copyright 2015
 */

include('lock.php');

if(isset($_POST['btnLogout'])){
    header('Location:php_files/login.php');
}
?>

<body>
<h1>Welcome <?php echo $loggin_session; ?>!!!</h1>

<!--<form action="" method="post" enctype="multipart/form-data">
<div class="divRow">
<div class="divColumn"><input type="submit" name="btnLogout" value="Log-out" id="btnLogout" /></div>
</div>
</form>-->

<!--
<img src="./css/container_image/giphy.gif" width="350" height="197" />
<img src="./css/container_image/200.gif" width="300" height="200" />
<img src="./css/container_image/200 (1).gif" width="320" height="200" />
<img src="./css/container_image/200_s.gif" width="284" height="200" />
<img src="./css/container_image/giphy (1).gif" width="347" height="200" />
<img src="./css/container_image/giphy (2).gif" width="350" height="197" />
<img src="./css/container_image/giphy (3).gif" width="500" height="281" />
<img src="./css/container_image/giphy (4).gif" width="1065" height="240" />
-->

</body>

<!--<form action="" method="post" enctype="multipart/form-data">
<div class="divRow">
<div class="divColumn"><input type="submit" name="btnLogout" value="Log-out" id="btnLogout" /></div>
</div>
</form>-->

<?php //include('log_out.php'); ?>