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
    $employee_loan_id=$_POST['txtEmpLoanID'];
    $employee_id=$_POST['employee_id'];
    $loan_id=$_POST['loan_id'];
    $loan_amount=$_POST['txtLoanAmount'];
    //$employer_contribution=$_POST['txtEmprContribution'];
    
    $updated=mysqli_query($CON, "Update employee_loan SET 
        employee_id='$employee_id', loan_id='$loan_id', loan_amount='$loan_amount' 
        where employee_loan_id='$employee_loan_id'") or die();

    if($updated){
        //$msg='Successfully Updated!!';
        header('Location:' . $BASE_URL . 'index.php?page=employee_loan');
        }
    }
}

if(isset($_POST['back'])){
    header('Location:' . $BASE_URL . 'index.php?page=employee_loan');
}
ob_end_flush();
?>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $qry=mysqli_query($CON, "Select * from employee_loan where employee_loan_id='$id'");
    while($row=mysqli_fetch_array($qry)){
        $employee_loan_id=$row['employee_loan_id'];
        $employee_id=$row['employee_id'];
        $loan_id=$row['loan_id'];
        //$first_name=$row['first_name'];
        //$last_name=$row['last_name'];
        $loan_amount=$row['loan_amount'];
        //$employer_contribution=$row['employer_contribution'];



?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Edit Post</h1></div>
</div>
<form action="" method="post" enctype="multipart/form-data" name="insertform">

<!--<div class="divRow">
<div class="divColumn">Employee Loan ID:</div>
<div class="divColumn50"><input type="text" name="txtEmpLoanID" value="<?php //echo $employee_loan_id; ?>" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="<?php echo $employee_id; ?>">Select Employee---</option>
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
<div class="divColumn">Loan:</div>
<div class="divColumn50"><select id="loan_id" name="loan_id">
<option value="<?php echo $loan_id; ?>">Select Loan---</option>
<?php
$sql="SELECT * FROM `loan`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_query($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['loan_name'] . '">';
        echo $row['loan_name'];
        echo '</option>';
    }
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Loan Amount:</div>
<div class="divColumn50"><input type="text" name="txtLoanAmount" value="<?php echo $loan_amount; ?>" /></div>
</div>

<!--<div class="divRow">
<div class="divColumn">Employer Contribution:</div>
<div class="divColumn50"><input type="text" name="txtEmprContribution" value="<?php //echo $employer_contribution; ?>" /></div>
</div>-->


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