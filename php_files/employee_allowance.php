<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Employee Allowance</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_employee_allowance" method="post" enctype="multipart/form-data">
<!--
<div class="divRow">
<div class="divColumn">Employee Allowance ID:</div>
<div class="divColumn50"><input type="text" name="txtEmployeeAllowanceID" value="<?php //echo $employee_allowance_id; ?>" /></div>
</div>
-->

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="0">Select Employee---</option>
<?php
include('../config.php');
$sql="SELECT employee_info.employee_id,employee_info.last_name, employee_info.first_name, 
        employee_allowance.amount
        FROM `employee_info` INNER JOIN `employee_allowance` 
         ON employee_info.employee_id = employee_allowance.employee_id
         WHERE employee_allowance.employee_id='".$_POST['employee_id']."'";

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
//mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Allowance Type:</div>
<div class="divColumn50"><select id="allowance_id" name="allowance_id">
<option value="0">Select Allowance---</option>
<?php
include('./config.php');
$sql2="SELECT allowances.allowance_id, allowances.allowance_name,  
        employee_allowance.amount
        FROM `allowances` LEFT JOIN `employee_allowance` 
         ON allowances.allowance_id = employee_allowance.allowance_id";
         
$qry2=mysqli_query($CON, $sql2);

if(!$qry2){
    die('Error:' . mysqli_error($qry2));
}else{
    if(mysqli_num_rows($qry2<=0)){
        $sql2="Select * from allowances";
        $qry2=mysqli_query($CON, $sql2);
    }
}
while($row2=mysqli_fetch_array($qry2)){
    echo '<option value="'. $row2['allowance_id'] .'">';
    echo $row2['allowance_name'];
    echo '</option>';
}
mysqli_close($CON);

?>
</select></div>
</div>


<div class="divRow">
<div class="divColumn">Amount:</div>
<div><input type="text" placeholder="Enter Amount" name="txtAmount" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" class="center" name="Submit" value="Add Employee Allowance" /></div>
</div>

</form>

<?php include('view_employee_allowance.php'); ?>

</div>