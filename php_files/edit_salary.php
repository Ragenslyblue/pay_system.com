<link rel="stylesheet" type="text/css" href="../css/style.css" />
<?php

/**
 * @author pakisab
 * @copyright 2016
 */
include('../config.php');
include('header.php');


?>

<?php

ob_start();
//include('../config.php');
 
if(isset($_GET['id'])){
    $id=$_GET['id'];
//}
if(isset($_POST['update'])){
    $salary_id=$_POST['txtSalaryID'];
    $employee_id=$_POST['employee_id'];
    $department_id=$_POST['department_id'];
    $daily_rate=$_POST['txtDailyRate'];
    $txtPosition=$_POST['txtPosition'];


$updated=mysqli_query($CON, "Update salary SET 
        employee_id='$employee_id', department_id='$department_id',daily_rate='$daily_rate', position='$txtPosition' 
        where salary_id='$salary_id'") or die();
    
if($updated){
        //$msg='Successfully Updated!!';
        header('Location:' . $BASE_URL . 'index.php?page=salary');
        }
    }
}

if(isset($_POST['back'])){
    header('Location:' . $BASE_URL . 'index.php?page=salary');
}

ob_end_flush();

?>

<?php  

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $qry=mysqli_query($CON, "Select * from salary where salary_id='$id'");
    while($row=mysqli_fetch_array($qry)){
        $salary_id=$row['salary_id'];
        $employee_id=$row['employee_id'];
        $department_id=$row['department_id'];
        $daily_rate=$row['daily_rate'];
        $position=$row['position'];
        

?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Edit Post</h1></div>
</div>
<form action="" method="post" enctype="multipart/form-data" name="insertform">

<!--<div class="divRow">
<div class="divColumn">Salary ID:</div>
<div class="divColumn50"><input type="text" name="txtSalaryID" value="<?php //echo $salary_id; ?>" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Employee: </div>
<div class="divColumn50">
<?php
$sql="SELECT * FROM `employee_info` where employee_id = ". $employee_id;
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        
        ?>
    <input id="employee_id" name="employee_id" hidden="yes" value="<?php echo $employee_id; ?>"/>
    <h3><?php echo $row['first_name'].' '. $row['last_name']; ?></h3>            

<?php 
    }
}
mysqli_close($CON);
?>


</div>
</div>

<div class="divRow">
<div class="divColumn">Department:</div>
<div class="divColumn50"><select id="department_id" name="department_id">
<option value="0">Select Department---</option>
<?php
include('../config.php');
$sql="Select * from department";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_query($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['department_name'] . '">';
        echo $row['department_name'];
        echo '</option>';
    }
}
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Daily Rate:</div>
<div class="divColumn50"><input type="text" name="txtDailyRate" value="<?php echo $daily_rate; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Position:</div>
<div class="divColumn50"><input type="text" name="txtPosition" value="<?php echo $position; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="update" value="Update" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="back" value="Back" /></div>
</div>


</form>

<?php } } ?>

</div>

<?php include('footer.php'); ?>