<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Employee Loan</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_employee_loan" method="post" enctype="multipart/form-data">

<!--<div class="divRow">
<div class="divColumn">Employee Loan ID:</div>
<div class="divColumn50"><input type="text" name="txtEmployeeID" value="<?php //echo $employee_contribution_id; ?>" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="0">Select Employee---</option>
<?php
$sql="SELECT employee_info.employee_id,employee_info.last_name, employee_info.first_name, 
        employee_loan.loan_amount
        FROM `employee_info` LEFT JOIN `employee_loan` 
         ON employee_info.employee_id = employee_loan.employee_id";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    if(mysqli_num_rows($qry)<=0){
        $sql="SELECT * FROM employee_info";
        $qry=mysqli_query($CON, $sql);
        }
    }
    while($row=mysqli_fetch_array($qry)){
            echo '<option value="' . $row['employee_id'] . '">';
            echo $row['first_name'] . ' ' . $row['last_name'];
            echo '</option>';
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Loan:</div>
<div class="divColumn50"><select id="loan_id" name="loan_id">
<option value="0">Select Loan---</option>
<?php
include('./config.php');
/*$sql2="SELECT loan.loan_id, loan_name,  
        employee_loan.loan_amount
        FROM `loan` LEFT JOIN `employee_loan` 
         ON loan.loan_id = employee_loan.loan_id";
         
$qry2=mysqli_query($CON, $sql2);

if(!$qry2){
    die('Error:' . mysqli_error($qry2));
}else{
    if(mysqli_num_rows($qry2<=0)){*/
        $sql2="Select * from loan";
        $qry2=mysqli_query($CON, $sql2);
    //}
//}
while($row2=mysqli_fetch_array($qry2)){
    echo '<option value="'. $row2['loan_id'] .'">';
    echo $row2['loan_name'];
    echo '</option>';
}
mysqli_close($CON);
?>
</select></div>
</div>



<div class="divRow">
<div class="divColumn">Loan Amount:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Loan Amount" name="txtLoanAmount" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" class="center" name="btnAdd" value="Add Employee Loan"
onclick="return confirm('Are you sure you wish to Add this record?');" /></div>
</div>

</form>

<?php include('view_employee_loan.php'); ?>

</div>