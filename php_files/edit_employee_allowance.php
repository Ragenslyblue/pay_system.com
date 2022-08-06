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
    $employee_allowance_id=$_POST['txtEmpAllowanceID'];
    $employee_id=$_POST['employee_id'];
    $allowance_id=$_POST['allowance_id'];
    $amount=$_POST['txtAmount'];
    
    $updated=mysqli_query($CON, "Update employee_allowance SET 
        employee_id='$employee_id', allowance_id='$allowance_id', amount='$amount' 
        where employee_allowance_id='$employee_allowance_id'") or die();
    
    if($updated){
        //$msg='Successfully Updated!!';
        header('Location:' . $BASE_URL . 'index.php?page=employee_allowance');
        }    
    
    }
}

if(isset($_POST['back'])){
    header('Location:' . $BASE_URL . 'index.php?page=employee_allowance');
}

ob_end_flush();
?>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $qry=mysqli_query($CON, "Select * from employee_allowance where employee_allowance_id='$id'");
    while($row=mysqli_fetch_array($qry)){
        $employee_allowance_id=$row['employee_allowance_id'];
        $employee_id=$row['employee_id'];
        $allowance_id=$row['allowance_id'];
        //$first_name=$row['first_name'];
        //$last_name=$row['last_name'];
        $amount=$row['amount'];


?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Edit Post</h1></div>
</div>
<form action="" method="post" enctype="multipart/form-data" name="insertform">

<!--<div class="divRow">
<div class="divColumn">Employee Allowance ID:</div>
<div class="divColumn50"><input type="text" name="txtEmpAllowanceID" value="<?php //echo $employee_allowance_id; ?>" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="<?php echo $employee_id; ?>">Select Employee---</option>
<?php
include('config.php');
$sql="SELECT * FROM `employee_info`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['first_name'] . ' ' . $row['last_name'] . '">';
        echo $row['first_name'] . ' ' . $row['last_name'];
        echo '</option>';
    }
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Allowance Type:</div>
<div class="divColumn50"><select id="allowance_id" name="allowance_id">
<option value="<?php echo $allowance_id; ?>">Select Allowance---</option>
<?php
include('../config.php');
$sql="SELECT * FROM `allowances`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['allowance_name'] . '">';
        echo $row['allowance_name'];
        echo '</option>';
    }
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Amount:</div>
<div class="divColumn50"><input type="text" name="txtAmount" value="<?php echo $amount; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="update" value="Update" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="back" value="Back" /></div>
</div>

</form>


<?php } 
} 
?>

</div>

<?php include('footer.php'); ?>