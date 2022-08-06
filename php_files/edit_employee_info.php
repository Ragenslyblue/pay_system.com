<!--<link rel="stylesheet" type="text/css" href="../css/style.css" />-->
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel='shortcut icon' type='image/x-icon' href='../css/icons/furniture_icon.ico'/>

<?php
include('../config.php');
include('./header.php'); ?>

<?php

/**
 * @author pakisab
 * @copyright 2016
 */

ob_start();
 
if(isset($_GET['id'])){
    $id=$_GET['id'];

if(isset($_POST['update'])){
    $employee_id=$_POST['txtEmpID'];
    $first_name=$_POST['txtFirstName'];
    $last_name=$_POST['txtLastName'];
    $age=$_POST['txtAge'];
    $btnGender=$_POST['radbtnSex'];
    $address=$_POST['txtAddress'];
    $birthdate=$_POST['txtBirthdate'];
    $email=$_POST['txtEmail'];
    $image=$_FILES['fileImage']['name'];
    $contact_num=$_POST['txtContactNumber'];
    $remarks=$_POST['txtRemarks'];
    
        
    $updated=mysqli_query($CON, "Update employee_info SET 
        first_name='$first_name', last_name='$last_name', age='$age', gender='$btnGender',
        address='$address', birthdate='$birthdate', email='$email', contact_num='$contact_num',
        remarks='$remarks' where employee_id='$employee_id'") or die();
        
    if($updated){
        header('Location:' . $BASE_URL . 'index.php?page=employee_info');
        }
    }
}

if(isset($_POST['back'])){
    header('Location:' . $BASE_URL . 'index.php?page=employee_info');
}

ob_end_flush();
?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $qry=mysqli_query($CON, "Select * from employee_info where employee_id='$id'");
    while($row=mysqli_fetch_array($qry)){
        $employee_id=$row['employee_id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $age=$row['age'];
        $gender=$row['gender'];
        $address=$row['address'];
        $birthdate=$row['birthdate'];
        $email=$row['email'];
        $image=$row['image'];
        $contact_num=$row['contact_num'];
        $remarks=$row['remarks'];
?>
<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Edit Post</h1></div>
</div>

<form action="" method="post" enctype="multipart/form-data" name="insertform">

<div class="divRow">
<div class="divColumn">Employee ID:</div>
<div class="divColumn50"><label><?php echo $employee_id; ?></label></div>
</div>

<br /><br />

<div class="divRow">
<div class="divColumn">First Name:</div>
<div class="divColumn50"><input type="text" name="txtFirstName" value="<?php echo $first_name; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Last Name:</div>
<div class="divColumn50"><input type="text" name="txtLastName" value="<?php echo $last_name; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Age:</div>
<div class="divColumn50"><input type="text" name="txtAge" value="<?php echo $age; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Gender:</div>
<div class="divColumn50"><input type="radio" name="radbtnSex" value="<?php echo $gender; ?>" />Male</div>
<div class="divColumn"><input type="radio" name="radbtnSex" value="<?php echo $gender; ?>" />Female</div>
</div>

<div class="divRow">
<div class="divColumn">Address:</div>
<div class="divColumn50"><input type="text" name="txtAddress" value="<?php echo $address; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Birthdate:</div>
<div class="divColumn50"><input type="text" name="txtBirthdate" value="<?php echo $birthdate; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Email:</div>
<div class="divColumn50"><input type="text" name="txtEmail" value="<?php echo $email; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Image:</div>
<div class="divColumn50"><input type="file" name="fileImage" value="<?php echo $image; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Contact Number:</div>
<div class="divColumn50"><input type="text" name="txtContactNumber" value="<?php echo $contact_num; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Remarks:</div>
<div class="divColumn50"><textarea name="txtRemarks" rows="10" cols="50"><?php echo $remarks; ?></textarea></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="update" value="Update" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="back" value="Back" /></div>
</div>


</form>
</div>

<?php } } ?>

<?php include('footer.php'); ?>