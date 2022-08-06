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

if(isset($_GET['id'])){
    $id=$_GET['id'];
//}
if(isset($_POST['update'])){
    $employee_contribution_id=$_POST['txtEmpContributionID'];
    $employee_id=$_POST['employee_id'];
    $contribution_id=$_POST['contribution_id'];
    $employee_contribution=$_POST['txtEmpContribution'];
    $employer_contribution=$_POST['txtEmprContribution'];
    
    $updated=mysqli_query($CON, "Update employee_contribution SET 
        employee_id='$employee_id', contribution_id='$contribution_id', employee_contribution='$employee_contribution', employer_contribution='$employer_contribution' 
        where employee_contribution_id='$employee_contribution_id'") or die();

    if($updated){
        //$msg='Successfully Updated!!';
        header('Location:' . $BASE_URL . 'index.php?page=employee_contribution');
        }
    }
}

if(isset($_POST['back'])){
    header('Location:' . $BASE_URL . 'index.php?page=employee_contribution');
}

ob_end_flush();
?>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $qry=mysqli_query($CON, "Select * from employee_contribution where employee_contribution_id='$id'");
    while($row=mysqli_fetch_array($qry)){
        $employee_contribution_id=$row['employee_contribution_id'];
        $employee_id=$row['employee_id'];
        $contribution_id=$row['contribution_id'];
        //$allowance_id=$row['allowance_id'];
        //$first_name=$row['first_name'];
        //$last_name=$row['last_name'];
        $employee_contribution=$row['employee_contribution'];
        $employer_contribution=$row['employer_contribution'];


?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Edit Post</h1></div>
</div>
<form action="" method="post" enctype="multipart/form-data" name="insertform">

<div class="divRow">
<div class="divColumn">Employee Contribution ID:</div>
<div class="divColumn50"><input type="text" name="txtEmpContributionID" value="<?php echo $employee_contribution_id; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="<?php echo $employee_id;?>">Select Employee---</option>
<?php
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
//mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Contribution</div>
<div class="divColumn50"><select id="contribution_id"  name="contribution_id">
<option value="<?php echo $contribution_id; ?>">Select Contribution---</option>
<?php
include('config.php');
$sql="SELECT * FROM `contribution`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['contribution_name'] . '">';
        echo $row['contribution_name'];
        echo '</option>';
    }
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Employee Contribution:</div>
<div class="divColumn50"><input type="text" name="txtEmpContribution" value="<?php echo $employee_contribution; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Employer Contribution:</div>
<div class="divColumn50"><input type="text" name="txtEmprContribution" value="<?php echo $employer_contribution; ?>" /></div>
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